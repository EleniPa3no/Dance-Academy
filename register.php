
<?php 
	session_start();
// ben te mundur lidhjen e  databazes
	$db = mysqli_connect("localhost", "root", "", "academy");

	if (isset($_POST['register_btn'])) {

		$username = $_POST['username'];
		$email = $_POST['email'];
		
		
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		if ($password == $password2) {
			// krijoj userin
			$password = md5($password); //ketu behet hashimi i passswordit
			$sql = "INSERT INTO `user`(`name`, `password`, `email`) VALUES ('$username','$password','$email')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "Welcome";
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;

			header("location: 1-Portfolio.html"); //redirect to home page
		}else{
			$_SESSION['message'] = "Wrong passwords";
		}
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dance Academy</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<style>
    body{

 background-color: pink;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
  
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 510px;
}


.cancelbtn,.signupbtn {
    float: left;
    width: 600px;
}

/* Add padding to container elements */
.container {
   
    width:550px;
    margin-left: 390px;
}


	



.container {
    padding: 25px;

}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
	
	body{

		background-image:url(https://i.pinimg.com/736x/c6/6e/5a/c66e5a5bcee8a1fc214ca395b765dcba--dance-tattoos-tatoo-dance.jpg);
		background-repeat:no-repeat;
		background-size: cover;

    }
	
	
	</style>

</head>
<body >
	<h1   style="text-align:center;color:black;">  Welcome to our Academy</h1>    			

<h2 style="text-align:center;">Register</h2>

<form method="post" action="register.php">
  <div class="container"> <br>
    <label style="color:green"><b>Username</b></label>
    <input type="text" placeholder="enter name" name="username" id="username"required>
    <label style="color:green;"><b>Email</b></label>
    <input type="text" placeholder="email" name="email" id="email"required>
 
    <label style="color:green;"><b>Password</b></label>
    <input type="password" placeholder="enter Password" name="password2" id="password"required>
	<label style="color:green;"><b>Retype Password</b></label>
    <input type="password" placeholder="validate Password" name="password" id="password"required>
   
    <input type="checkbox" checked="checked" style="color:#AD7B7B;"> Remember me
    <p>Log in <a href="login.php">here</a>.</p>

    <div class="clearfix">
   
      <button type="submit" name="register_btn">Register</button>
      <p id="msg"></p>
    </div>
  </div>
</form>
	<div class="row" style="background-color:#8E2727;height:70px;">
                    <div class="col-md-12">
                        <div class="footer-copyright">&2017 Design by Eleni P.</div>
                    </div>
                </div>
            </div>
	
	</body>
</html>