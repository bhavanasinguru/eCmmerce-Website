<?php
require("includes//common.php");
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id=$_SESSION['id'];
$item_ids_string=$_GET['itemsid'];
//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_items SET status='Confirmed' WHERE users_id='$user_id' AND items_id IN ('$item_ids_string')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Lifestyle store</title>
</head>
<body>
    <?php
    require 'includes/header.php';
    ?>
    <div class="container" style="margin-top:100px">
    <center>
    <div class="jumbotron">
    <h3> Your order is confirmed. Thank you for shopping with us.</h3>
    <p><a href="products.php">Click here</a> to purchase another item</p>
    </div>
    <center>
    </div>
</body>
<?php
require 'includes/footer.php';
?>
</html>