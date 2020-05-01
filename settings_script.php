<?php
require("includes//common.php");
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$oldP=$_POST['oldPassword'];
$oldP=mysqli_real_escape_string($con,$oldP);
$newP=$_POST['newPassword'];
$newP=mysqli_real_escape_string($con,$oldP);
$rnewP=$_POST['newPasswordConfirmed'];
$rnewP=mysqli_real_escape_string($con,$oldP);
$pEmail=$_SESSION["email"];
$query="SELECT email,password FROM users WHERE email='$pEmail'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
$org_password=$row['password'];
if($newP!=$rnewP)
{
    header("loaction:settings.php?error=The two password don\'t match");
}
else
{
    if($org_password!=$oldP)
    {
        $query="UPDATE users SET password='$rnewP' WHERE email='pEmail'";
        mysqli_query($con,$query) or die(mysqli_error($con));
        header('location:settings.php?Password updated successfully');
    }
    else
    {
        header("loaction:settings.php?error=Wrong password");
    }
}
?>
