<?php include 'inc/head.php';
            
?>
<div class="container">
<form class="form-horizontal" method="POST" action="home.php">
<div class = "row" style="margin-top: 25px;">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
    <label for="username" class="col-md-2 control-label">Username</label>
    <div class="col-md-10">
      <input type="text" class="form-control" id="username"  name="username"placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-md-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
<div class="clearfix"></div>
  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-md-10">
      <button type="submit" class="btn btn-success">Sign in</button>
     <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
<p><a href="signup.php" style="text-decoration:none">New user? Signup</a></p>
		</div></div>
	<div class="col-md-2"></div>
	</div>
  </form>
</div>
<?php include 'inc/foot.php' ;?>