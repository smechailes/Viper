<?php include 'inc/head.php'; include 'inc/dbconnect.php'; ?>
<div class="container">
<div class="form-group row" style="margin-top:25px;">
  <label for="firstname" class="col-md-2 col-form-label">First Name</label>
  <div class="col-md-10">
    <input class="form-control" type="text" value="Ansuman" name="firstname" id="firstname">
  </div>
</div>
<div class="form-group row">
  <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
  <div class="col-md-10">
    <input class="form-control" type="text" value="Pokharel" name="lastname" id="lastname">
  </div>
</div>
<div class="form-group row">
  <label for="username" class="col-md-2 col-form-label">Username</label>
  <div class="col-md-10">
    <input class="form-control" type="text" value="Username" name="username" id="lastname">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
  <div class="col-md-10">
    <input class="form-control" type="email" value="xyz@example.com" name="email" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="password" class="col-md-2 col-form-label">Password</label>
  <div class="col-md-10">
    <input class="form-control" type="password" value="Ansuman" name="password" id="password">
  </div>
</div>
<div class="form-group row">
  <label for="conf_password" class="col-md-2 col-form-label">Confirm Password</label>
  <div class="col-md-10">
    <input class="form-control" type="password" value="Ansuman" name="confirm_password" id="password">
  </div>
</div>

<div class="form-group row">
  <label for="gender" class="col-md-2 col-form-label">Gender</label>
  <div class="col-md-10">
     <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="gender" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Select gender
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li>Male</li>
    <li>Female</li>
    <li>Other</li>
  </ul>
</div></div></div>

<div class="form-group">
    <div class="col-sm-offset-2 col-md-10">
 	<label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
    		<input type="checkbox" class=" custom-control-input">
    		<span class="custom-control-indicator"></span>
    		<span class="custom-control-description">Remember my 			preference
		</span>
 	</label>
   </div>
</div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-md-10">
      <button type="submit" class="btn btn-success">Sign in</button>
     <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
</form>

<?php include 'inc/foot.php';?>