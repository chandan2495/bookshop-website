<!-- Page Content -->
    <div class="container">

        <?php 
        include("sidebar.php");
        ?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/carousel1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/carousel2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/carousel3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/carousel4.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                

                    <?php

                         require_once("mysql.php");
                         $catid=1;
                         while($catid<=4){
                          echo "<div class='row'>";
                         $query=mysql_query("select * from books where catid=$catid");

                         if($query)
                         {
                            $count=0;
                            while(($res=mysql_fetch_array($query))&&$count<4)
                            {
                                $bookid=$res['bookid'];
                                $bookname=$res['book_name'];
                                $image=$res['image'];
                                $author=$res['author_name'];
                                $price=$res['price'];
                                echo "<div class='col-sm-3 col-lg-3 col-md-3 bookthumbnail'>";
                                echo "<div class='thumbnail'>";
                                echo "<a href='books.php?bookid=$bookid'><img src='$image'></img></a>";
                                echo "<div class='caption'>";
                                echo "<h4><a href='books.php?bookid=$bookid'>$bookname</a></h4>";
                                echo "<h6>$author</h6>";
                                echo "<h4 class='pull-Down'>Rs. $price</h4>";

                                echo "</div>";
                                echo "</div>";
                                echo "</div>";

                                $count=$count+1;
                            }
                            echo "</div>";
                         }
                         else
                            echo "Not found";
                        $catid=$catid+1;
                    }

                        ?>

                </div>
                        
                        
                <?php
                include("logintemplate.php");
                ?>
                        
                   

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
