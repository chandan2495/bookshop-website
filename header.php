<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
             
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php" id="title"><b>BOOK SHELF</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <?php
                        if(isset($_SESSION['user'])){
                            ?>
                        <a href="logout.php">Logout</a>
                        <?php 

                    } 
                        else{
                            ?>
                            <a href="" data-toggle="modal" data-target="#myModal">Login</a>
                            <?php
                        }?>
                    </li>
                    <li>
                        <?php 
                    if(isset($_SESSION['user'])){
                   echo "<li>";
                        echo "<a href='cart.php'>View Cart</a>";
                    echo "</li>";
                }
                    ?>
                    </li>
                    <?php 
                    if(isset($_SESSION['user'])){
                   echo "<li>";
                        echo "<a href='yourorder.php'>Your Orders</a>";
                    echo "</li>";
                }
                    ?>
                <li>
                <form class="navbar-form navbar-left" role="search" name="form1" action="search.php" method="post">
 <div class="input-group">
  <input type="text" class="form-control" name="search">
 <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></button>
      </span>
</form>
</li>
            <!-- /.navbar-collapse -->
            <li>
            <h4 style="color:white">Welcome, 
                <?php
                if(isset($_SESSION['user']))
                    echo $_SESSION['user'];
                else
                    echo "GUEST!";
            ?>
        </h4>
    </li>
    </ul>
        </div>
        <!-- /.container -->
    </nav>