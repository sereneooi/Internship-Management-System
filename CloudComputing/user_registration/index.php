<?php include 'header.php';?>
<br>
<br>
<br>
<br>
<?php

if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
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

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO registered_users (user_name, first_name, last_name, password, email, gender) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . ($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>
<html>
<head>
<title>PHP User Registration Form</title>
<style>
        body {
            width: 100%;
            font-family: calibri;
			background-image: url('http://serene-bucket.s3-website-us-east-1.amazonaws.com/images/blur2.jpg');
			background-repeat: no-repeat;
			background-size: cover;
        }

        .container {
            width: 30%;
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
            padding: 15px 0px;
        }

        .demoInputBox {
            padding: 10px 30px;
            border: #a9a9a9 1px solid;
            border-radius: 4px;
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
    <div class="container">
        <form name="frmRegistration" method="post" action="">
            <table border="0" class="demo-table" style='background-color: white;'>
                <?php if (!empty($success_message)) { ?>
                    <tr>
                        <td colspan="2" class="success-message"><?php if (isset($success_message)) echo $success_message; ?></td>
                    </tr>
                <?php } ?>
                <?php if (!empty($error_message)) { ?>
                    <tr>
                        <td colspan="2" class="error-message"><?php if (isset($error_message)) echo $error_message; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" class="demoInputBox" name="userName"
                            value="<?php if (isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" class="demoInputBox" name="firstName"
                            value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" class="demoInputBox" name="lastName"
                            value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="demoInputBox" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail"
                            value="<?php if (isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="Male"
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == "Male") { ?>checked<?php } ?>> Male
                        <input type="radio" name="gender" value="Female"
                            <?php if (isset($_POST['gender']) && $_POST['gender'] == "Female") { ?>checked<?php } ?>>
                        Female
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit"
                            name="register-user" value="Register" class="btnRegister"></td>
                </tr>
            </table>
        </form>
    </div>
</body></html>