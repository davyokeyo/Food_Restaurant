<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Order</title>
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
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        <!-- fOOD sEARCH Section Starts Here -->
        <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" method = "POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>
                    <?php 
                        
                        //CHeck whether the image is available or not
                        if($image_name=="")
                        {
                            //Image not Availabe
                            echo "<div class='error'>Image not Available.</div>";
                        }
                        else
                        {
                            //Image is Available
                            ?>
                            <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                            <?php
                        }
                    
                    ?>

                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Carlos Ogaye" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +25473xxxxxx" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
            <?php 

//CHeck whether submit button is clicked or not
if(isset($_POST['submit']))
{
    // Get all the details from the form

    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $total = $price * $qty; // total = price x qty 

    $order_date = date("Y-m-d h:i:sa"); //Order DAte

    $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

    $customer_name = $_POST['full-name'];
    $customer_contact = $_POST['contact'];
    $customer_address = $_POST['address'];


    //Save the Order in Databaase
    //Create SQL to save the data
    $sql2 = "INSERT INTO tbl_order SET 
        food = '$food',
        price = $price,
        qty = $qty,
        total = $total,
        order_date = '$order_date',
        status = '$status',
        customer_name = '$customer_name',
        customer_contact = '$customer_contact',
        customer_address = '$customer_address'
    ";

    //echo $sql2; die();

    //Execute the Query
    $res2 = mysqli_query($conn, $sql2);

    //Check whether query executed successfully or not
    if($res2==true)
    {
        //Query Executed and Order Saved
        $_SESSION['order'] = "<div class='success text-center'>Food Ordered Successfully.</div>";
        header('location:'.SITEURL);
    }
    else
    {
        //Failed to Save Order
        $_SESSION['order'] = "<div class='error text-center'>Failed to Order Food.</div>";
        header('location:'.SITEURL);
    }

}

?>
        </div>

    </section>
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
</body>
</html>