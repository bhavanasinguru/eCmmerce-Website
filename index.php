<?php
//require('C:\wamp64\www\PHP\includes\common.php');
if (isset($_SESSION['email'])) 
{   header('location: products.php');
 } 
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
<title>Lifestyle store</title>
<link rel="stylesheet" href=".\CSS\style.css">
</head>
<body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'C:\wamp64\www\PHP\includes\header.php';
        ?>
           <div id="content"> 
    <div id="banner_image">
<div class="container">
    <center>
    <div id="banner_content">
             <a href="products.php" class=" btn btn-danger btn-lg active">Shop Now</a>
    
</center>

</div>
</div>
    </div>
</div>

</body>
        </body>
        </html>