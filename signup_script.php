<?php
require("includes//common.php");
$name=trim($_POST["name"]);
$name=mysqli_real_escape_string($con,$name);
$email=trim($_POST["email"]);
$email=mysqli_real_escape_string($con,$email);
$password=trim($_POST["password"]);
$password=mysqli_real_escape_string($con,$password);
$contact=trim($_POST["contact"]);
$contact=mysqli_real_escape_string($con,$contact);
$city=trim($_POST["city"]);
$city=mysqli_real_escape_string($con,$city);
$address=trim($_POST["address"]);
$address=mysqli_real_escape_string($con,$address);
$query="SELECT id FROM users where email='" . $email . "'";
$result=mysqli_query($con,$query) or die($mysqli_error($con));
$num=mysqli_num_rows($result);
if($num>0)
{
    $error = $$_GET['error'];
  $error = "<span class='red'>Email id already exists</span>";
  header('location: signup.php?error=' . $error);
}

else
{
   $query=" INSERT INTO users(name,email,password,number,city,address) VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
  mysqli_query($con,$query) or die(mysqli_error($con));
  $user_id=mysqli_insert_id($con);
  $_SESSION['email']=$email;
  $_SESSION['id']=$user_id;
  header("location:products.php");

  }
?>