<nav class = "navbar" style='margin-bottom:-50px;'>
	<div class = "container-fluid">
			<img class = "pull-left" src="images/logo.png" width="40%" height="120" alt="logo"  style ="display: block; margin-left: 30%;margin-top: 40px;">
	</div>
</nav>
<br>
<br>
<br>
<br>
<br>
<?php
if(!empty($_POST["insert_button"])) {
  /* Form Required Field Validation */
  foreach($_POST as $key=>$value) {
    if(empty($_POST[$key])) {
    $error_message = "All Fields are required";
    break;
    }
  }
 

  /* Email Validation */
  if(!isset($error_message)) {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid Email Address";
    }
  }

  /* Validation to check if gender is selected */
  if(!isset($error_message)) {
  if(!isset($_POST["gender"])) {
  $error_message = " All Fields are required";
  }
  }

  /* Validation to check if Terms and Conditions are accepted */
  if(!isset($error_message)) {
    if(!isset($_POST["terms"])) {
    $error_message = "Accept Terms and Conditions to Register";
    }
  }

  
  }

?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css" />
    <link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
 <style>
        body {
            width: 100%;
            font-family: calibri;
            background-image: url('images/blur2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 35%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .error-message {
            padding: 7px 10px;
            background: #fff1f2;
            border: #ffd5da 1px solid;
            color: #d6001c;
            border-radius: 4px;
            margin-bottom: 10px;
            text-align: center;
        }

        .success-message {
            padding: 7px 10px;
            background: #cae0c4;
            border: #c3d0b5 1px solid;
            color: #027506;
            border-radius: 4px;
            margin-bottom: 10px;
            text-align: center;
        }

        .demo-table {
            width: 100%;
            border-spacing: initial;
            margin: 2px 0px;
            word-break: break-word;
            table-layout: auto;
            line-height: 1.8em;
            color: #333;
            border-radius: 4px;
            padding: 20px 40px;
            text-align: center;
        }

        .demo-table td {
            height: 60px;
        }

        .demoInputBox {
            padding: 10px 30px;
            border: #a9a9a9 1px solid;
            border-radius: 4px;
            margin-top:3%;
        }

        .btnRegister {
            padding: 10px 30px;
            background-color: #3367b2;
            border: 0;
            color: #FFF;
            cursor: pointer;
            border-radius: 4px;
            margin-left: 10px;
        }
</style>
</head>
<body>
  <form name="frmRegistration" method="post" enctype="multipart/form-data" action="inserty.php">\
    <div class='container'>

    
<table border="0" style='width:100%; margin-left:auto;margin-right:auto;' class="demo-table">
<?php if(!empty($success_message)) { ?> 
<div class="success-message" style='text-align:center;'><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?> 
<div class="error-message" style='text-align:center;'><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>Company Name</td>
<td><input type="text" class="demoInputBox" name="company_name" minlength="3" maxlength="16" value=" <?php if(isset($_POST['company_name'])) echo $_POST['company_name']; ?>" required ></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="first_name"minlength="3" maxlength="16"  value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required ></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="last_name" minlength="3" maxlength="16" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required ></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" class="demoInputBox" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required ></td></tr>
<tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?> required > Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?> required > Female
</td>
</tr>
<tr>
<td>Upload cv:</td>
<td>
   <input type="file" name="file" required  />
</td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="insert_button" value="Apply" class="btnRegister" required ></td>
</tr>
</table>
</div>
    </body>

</html>