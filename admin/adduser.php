<?php
require_once ("../rootpath.php");
require_once('app/connect.php');
require_once(ROOT_PATH."/includes/header.php") ;
?>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-3 bg-success " >
                <div class="text-left  p-2 my-4 ">
                
                    <a href="adduser.php" class="text-white">Add User</a>
                </div >
                <div class="text-left  p-2 my-4">
                    <a href="manageuser.php" class="text-white">Manage user</a>
                </div>
                
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="my-4 mx-4">
                    <button type="button" class="btn btn-lg btn-success"><a href="adduser.php" class="text-white">Add User</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="manageuser.php" class="text-white">Manage Users</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Add User</h3>
                    <div class="mx-2">
                    <form action="register.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
         <hr>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signup">Register</button>
        		</div>
      		</div>
    	</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
