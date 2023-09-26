<?php
        if (isset($_POST['submit']))
            { 
         $dbconn = mysqli_connect('db.cx03wpfilkwh.us-east-1.rds.amazonaws.com', 'main', 'qwer1234', 'db');    
        //include("config.php");
        session_start();
        $username=$_POST['user_name'];
        $password = $_POST["password"];
        $_SESSION['user_name']=$username; 
        $query = mysqli_query( $dbconn, "SELECT * FROM registered_users WHERE user_name='$username' and password='$password'");
         if (mysqli_num_rows($query) != 0)
        {
         echo "<script language='javascript' type='text/javascript'> location.href='fill_details.php' </script>";   
          }
          else
          {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
        }
        }
        ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/login.css">
 <link rel="stylesheet" type="text/css" href="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/jquery.dataTables.css">
  <link rel ="stylesheet" type="text/css" href ="http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/bootstrap.min.css">
<script type="text/javascript" src="js/script1.js"></script>
</head>
<style>
body {
  background-image: url('http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/images/blur2.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<?php include("head.php");?>
<body>
<table style='width:100%;'>
  <tr style='text-align: center;'><td>
  <div class='container' style='margin-left: auto;margin-right:auto;'>
  
  <div class="row" id="pwd-container" style='margin: 0 auto;width:60%;'>

    <div class="col-md-8" style='margin: 0 auto;width:100%;'>
      <section class="login-form" >
        <form method="post" action="#" role="login" style='margin-left: auto;margin-right:auto;border:1px solid black;'>
          <img src="img/icho.jpg" class="img-responsive" alt="" />
          <input type="text" name="user_name" placeholder="Enter Username " required class="form-control input-lg" value="" />
          
          <input type="password"  name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
           <a href="index.php">Home  </a> or
           <a href="user_registration/index.php">Register </a>
          </div>
          
        </form>
      </section>  
    </div>
  </div> 
    
      
</div>
  </td></tr>
</table>

</body>
</html>
