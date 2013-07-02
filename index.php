<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" href="bootstrap/js/jquery.js"></script>
<script type="text/javascript" href="bootstrap/js/botstrap.min.js"></script>
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
				<form class="form-horizontal" action="login.php" method="post">
				  <div class="control-group">
				    <label class="control-label" for="ldap_id">LDAP_ID</label>
				    <div class="controls">
				      <input type="text" class="input-xlarge" id="ldap_id" name="ldap_id" placeholder="ldapid">
				    </div>
				  </div>
				  <div class="control-group">
				    <label class="control-label" for="inputPassword">Password</label>
				    <div class="controls">
				      <input type="password" class="input-xlarge" id="inputPassword" name="password" placeholder="Password">
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <button type="submit" class="btn">Authenticate</button>
				    </div>
				    <div style="text-align:center">
				    	<h3 style="color:red" > Invalid Login </h3>
				    </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>