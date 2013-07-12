<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" href="bootstrap/js/jquery.js"></script>
<script type="text/javascript" href="bootstrap/js/botstrap.min.js"></script>
<script type="text/javascript" href="jquery-form/jquery.validate.min.js"></script>
<script type="text/javascript" href="jquery-form/additional-methods.js"></script>
</head>
<body>
	<div class="container">
		<div class="page-header" style="text-align:center">
			<h1> Login Here with you LDAP ID</h1>
			<p>
			<small> We don't save your passwords</small>
		</p>
		</div>
		<div class="row">
			<div class="span4 offset2">
				<form class="form-horizontal" id="login" action="login.php" method="post">
				  <div class="control-group">
				    <label class="control-label" for="ldap_id">LDAP_ID</label>
				    <div class="controls">
				      <input type="text" class="input-xlarge" id="ldap_id" name="ldap_id" placeholder="ldapid" required/>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputPassword">Password</label>
				    <div class="controls">
				      <input type="password" class="input-xlarge" id="inputPassword" name="password" placeholder="Password" required/>
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn">Authenticate</button>
				    </div>
				  </div>
				</form>
			</div>
		</div>
		<?php include 'slot.php' ; ?>
		<div class="page-header" style="text-align:center">
			<h3> Online slot cleaning system</h3>
		</div>
		<div class="row" id="slotscript">
			<div class="span4 offset2">
				<form class="form-horizontal" id="slot"  method="post">
				  <div class="control-group">
				    <label class="control-label" for="room No">Room No</label>
				    <div class="controls">
				      <input type="text" class="input-xlarge" id="room_no" name="room_no" placeholder="room no" required/>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="Roll No">Roll No</label>
				    <div class="controls">
				      <input type="text" class="input-xlarge" id="Roll No" name="roll_no" placeholder="roll_no" required/>
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="slot">Slot for cleaning</label>
				    <div class="controls">
				    	<select name="slot[]" multiple class="selectpicker">
						  <option value="9" selected="selected">9:00 to 9:30 (am)</option>
						  <option value="9.5">9:30 to 10:00 (am)</option>
						  <option value="10">10:00 to 10:30 (am)</option>
						  <option value="10.5">10:30 to 11:00 (am)</option>
						  <option value="11"> 11:00 to 11:30 (am)</option>
						  <option value="11.5">11:30 to 12:00 </option>
						  <option value="12">12:00 to 12:30 (pm)</option>
						  <option value="12.5">12:30 to 1:00 (pm)</option>
						  <option value="1">1:00 to 1:30 (pm)</option>
						  <option value="1.5">1:30 to 2:00 (pm)</option>
						  <option value="2"> 2:00 to 2:30 (pm)</option>
						  <option value="2.5"> 2:30 to 3:00 (pm)</option>
						  <option value="3">3:00 to 3:30 (pm) </option>
						  <option value="4">3:30 to 4:00 (pm) </option>
						  <option value="4.5">4:00 to 4:30 (pm)</option>
						</select>
				    	<span class="help-inline" style="width:300px"><p class="text-info">
				        Press ctrl in win and cmd in mac for selecting multiple options</p></span>
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				       <input type="hidden" name="submitted" value="1" />
				      <button type="submit" class="btn">Submit</button>
				    </div>
				  </div>
				</form>
<!-- Srcipt for validating the form (just for LOL) (dont disable js this app will crash :P) -->
<script>
$("#slot").validate();

</script>

			</div>
		</div>

	</div>

</body>
</html>