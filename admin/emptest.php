<?php include ('functions.php') ; ?>
<html>
<form method="post" action="validatedemo.php">
<?php echo display_error(); ?>
<input type="hidden" name="id">
<div class="input-group">
<label>Name</label>
<input type="text" name="name" >
</div>

<div class="input-group">
<label>Email</label>
<input type="email" name="email" >
</div>

<div class="input-group">
<label>Job description</label>
<input type="job" name="job" >
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password1">
</div>

<div class="input-group">
<label>Confirm Password</label>
<input type="password" name="password2">
</div>

<div class="input-box button">
            <input type="Submit" name="submit" value="Register Now">
          </div>

</form>
</html>