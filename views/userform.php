<?php
//require_once '../include/template.php';
//$content="views/userform.php"
?>
<head>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../plugins/fastclick/fastclick.min.js"></script>
<script src="../dist/js/app.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../plugins/fullcalendar/fullcalendar.min.js"></script>
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<link href="../library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="../library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>
</head>
<div class="col-md-8">
  
<link href="../library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="../library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="../library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="../library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="../library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="../library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>User Registration</b></h3>
  </div>
  <form role="form" action="process.php" method="post">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <span id="sprytf_name">
		<input type="text" name="name" class="form-control input-sm" placeholder="Username">
		<span class="textfieldRequiredMsg">Name is required.</span>
		<span class="textfieldMinCharsMsg">Name must specify at least 6 characters.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
		<span id="sprytf_address">
        <textarea name="address" class="form-control input-sm" placeholder="Address"></textarea>
		<span class="textareaRequiredMsg">Address is required.</span>
		<span class="textareaMinCharsMsg">Address must specify at least 10 characters.</span>	
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
		<span id="sprytf_phone">
        <input type="text" name="phone" class="form-control input-sm"  placeholder="Phone number">
		<span class="textfieldRequiredMsg">Phone number is required.</span>
		</span>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
		<span id="sprytf_email">
        <input type="text" name="email" class="form-control input-sm" placeholder="Enter email">
		<span class="textfieldRequiredMsg">Email ID is required.</span>
		<span class="textfieldInvalidFormatMsg">Please enter a valid email (user@domain.com).</span>
		</span>
      </div>
	<div class="form-group">
        <label for="exampleInputEmail1">User Type</label>
		<span id="sprytf_type">
        <select name="type"  class="form-control input-sm">
			<option value=""> -- select user type --</option>
			<option value="student">Student</option>
			<option value="teacher">Teacher</option>
		</select>
		<span class="selectRequiredMsg">Please select User Type.</span>
		</span>
		
      </div>
      <div class="form-group has-feedback">
      	<label for="exampleInputEmail1">Password</label>
		  	<span id="sprytf_pwd"> 
            <input type="password" name="pwd" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span class="passwordRequiredMsg">Password is required.</span>
			<span class="passwordMinCharsMsg">You must specify at least 6 characters.</span>
			<span class="passwordMaxCharsMsg">You must specify at max 10 characters.</span>
			</span>
          </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<script type="text/javascript">
	console.log("HI from");
var sprytf_name 	= new Spry.Widget.ValidationTextField("sprytf_name", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_address 	= new Spry.Widget.ValidationTextarea("sprytf_address", {minChars:10, isRequired:true, validateOn:["blur", "change"]});
var sprytf_phone 	= new Spry.Widget.ValidationTextField("sprytf_phone", 'none', {validateOn:["blur", "change"]});
var sprytf_mail 	= new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
var sprytf_type 	= new Spry.Widget.ValidationSelect("sprytf_type");
var sprytf_pwd = new Spry.Widget.ValidationPassword("sprytf_pwd", {minChars:4, maxChars: 12, validateOn:["blur", "change"]});
</script>
</div>