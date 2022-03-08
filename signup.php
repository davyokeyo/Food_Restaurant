<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up - Hello Chef</title>
<link rel="stylesheet" href="style.css" media="all" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

<form action="" method="post">
<img src="Images/logo.png" class= "image_responsive">

<h2>Create an account</h2>

<div class="signup">
<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter username" id="username" name="username" required>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<button type="submit">Sign Up</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container" style="background-color:#f1f1f1">
<a href="index.php"><button type="button" class="Regbtn">Login</button></a>
</div>
</form>
<section class = "footer">
        <div class="container">
            <div class="social">
                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
            </div>
            <div class="copyright">
                <p>Copyright The hellòchef's Restaurant</p><br>
                <p>website designed: Carlos Alphonce</p>
            </div>
            
        </div>

    </section>
</body></html>