<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>HelloChef</title>
</head>
<body>
    
    <section class = "navbar">
        <div class="container">
            <div class="nav">
                <div class="mainbar">
                    <div class="logo">
                        <img src="Images/logo.png" class= "image_responsive">
                    </div>
                    <div class="bar">
                        <ul>
                            <li><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                            <li><a href="menu.php"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a></li>
                            <li><a href="local.php"><i class="fa fa-users" aria-hidden="true"></i>Local</a></li>
                            <li><a href="">Hello, <?php echo $userData['username'];?></a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class = "welcome"> 
                    <h1 class="slide_left">WELCOME <br> hellò chef</h1><br>
                    <p class = "slide_left">Njoo, tusherekee Vyakula murwa vya kitamaduni cha Afrika. <br> Vitoweo tunavyo? Hatuna?</p>
                    <button>Get start</button>
                </div>
            </div>
        </div>
            
        </div>

    </section>
    <section class = "food_search">
        <div class="container">
            <div class="search">
                <img src="Images/pilau.png" class="slide">
                <img src="Images/hamburger-g036165a9a_1280.png" class="slide">
                <input type="text" name="" id="search" placeholder="Search for Food">
                <button>search</button>
                <img src="Images/vegetables-gdcdfed23d_1280.png" class="slide">
            </div>
        </div>

    </section>
    <section class = "categories">
        <div class="container">
            <h2 class="slide">CATEGORIES</h2>
            <div class="box">
                <div class="card">
                    <img src="Images/bf.jpg" alt="">
                    <div class="contain">
                        <h4><b>Kiamsha Kinywa</b></h4> 
                        <p>Kick start your day with a powerful breafast</p> 
                      </div>
                </div>
                
                <div class="card">
                    <img src="Images/lunch.jpg" alt="">
                    <div class="contain">
                        <h4><b>Cha mchwa</b></h4> 
                        <p>Having a bad morning, get the best lunch</p> 
                      </div>
                </div>
                
                <div class="card">
                    <img src="images/sausage.jpg" alt="">
                    <div class="contain">
                        <h4><b>Cha Jio</b></h4> 
                        <p>End your day, with one of the finest dinners</p> 
                      </div>
                </div>

            </div>
        </div>

    </section>
   
    <section class = "explore"> 
        <div class="container">
            <div class = "location">
            <h2 class= "slide_left">LOCATION</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.869023125692!2d36.87160521475391!3d-1.249887099088353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f142c73b3f153%3A0xc2bc30c52c1867c9!2sRaila%20Odinga%20Rd%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1645252072424!5m2!1sen!2ske" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

    </section>
    
    </section>
    <section class = "footer">
        <div class="container">
            <div class="social">
                <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                <li><a href="https://facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
                <li><a href="https://instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
            </div>
            <div class="copyright">
                <p>Copyright The hellòchef's Restaurant</p><br>
                <p>website designed: Carlos Alphonce</p>
            </div>
            
        </div>

    </section>
</body>
</html>