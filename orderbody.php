<div class="container">

	<?php 
	include('sidebar.php');
	?>
	<div class="col-md-9">
		<h3 margin>Please Fill up following Details</h3>
		<form class="form-horizontal" action='orderindb.php' method='post'>
			    <div class="form-group">

			        <label for="inputname" class="control-label col-xs-2">Shipping Name</label>

			        <div class="col-xs-6">

			            <input type="text" class="form-control" name="inputname" placeholder="Name" required>

			        </div>

			    </div>

			    <div class="form-group">

			        <label for="inputemail" class="control-label col-xs-2">Email</label>

			        <div class="col-xs-6">

			            <input type="email" class="form-control" name="inputemail" placeholder="Email" required>

			        </div>

			    </div>

			    <div class="form-group">

			        <label for="inputmobile" class="control-label col-xs-2">Mobile No.</label>

			        <div class="col-xs-6">

			            <input type="text" class="form-control" name="inputphone" placeholder="Mobile/Phone No." required>

			        </div>

			    </div>
			    <div class="form-group">

			        <label for="inputaddress" class="control-label col-xs-2">Address</label>

			        <div class="col-xs-6">

			            <input type="text" class="form-control" name="inputaddress" placeholder="Address" required>

			        </div>

			    </div>
			    <div class="form-group">

			        <label for="inputcity" class="control-label col-xs-2">City</label>

			        <div class="col-xs-6">

			            <input type="text" class="form-control" name="inputcity" placeholder="City" required>

			        </div>

			    </div>

			     <div class="form-group">

			        <label for="inputstate" class="control-label col-xs-2">State</label>

			        <div class="col-xs-6">

			            <input type="text" class="form-control" name="inputstate" placeholder="State" required>

			        </div>

			    </div>

			     <div class="form-group">

			        <label for="inputzip" class="control-label col-xs-2">Pin Code</label>

			        <div class="col-xs-6">

			            <input type="text" class="form-control" name="inputzip" placeholder="Zip/Pin Code" required>

			        </div>

			    </div>

			    <div class="form-group">

			     
			    

			    <div class="form-group">

			        <div class="col-xs-offset-2 col-xs-6">

			            <button type="submit" class="btn btn-success btn-lg">Place Your Order</button>
						<a href='cart.php' class='btn btn-primary btn-lg pyo'>Review Order</a>
			        </div>

			    </div>


			</form>

		</div>
	</div>