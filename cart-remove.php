<?php
require("includes//common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $query="DELETE FROM user_items WHERE items_id='$item_id' and users_id='$user_id'";
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    header("location:cart.php");
}
?>
