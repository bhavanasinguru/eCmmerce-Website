
<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $query = "INSERT INTO user_items(items_id, status,users_id) VALUES('$item_id','Added to cart','$user_id')";
    mysqli_query($con, $query) or die(mysqli_error($con));

    header('location: products.php');
    
}
?>