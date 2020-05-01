<?php
require('C:\wamp64\www\PHP\includes\common.php');
require('C:\wamp64\www\PHP\includes\check_if_added.php');
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
require('C:\wamp64\www\PHP\includes\header.php');

?>
  
    <div class="container" style="padding-top: 120px;">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
             <img src="images//2.jpg" alt="Cannon">
                    <center>
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(1)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
             <img src="images//3.jpg" alt="Cannon">
                    <center>
                        <div class="caption">
                            <h3>Nikon DSLR</h3>
                            <p>Price: Rs. 40000.00</p>
                            <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(2)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
             <img src="images//4.jpg" alt="Cannon">
                    <center>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 45000.00</p>
                            <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(3)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
             <img src="images//5.jpg" alt="Cannon">
                    <center>
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(4)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                        </div>
                    </center>
                </div>
            </div>
         </div>     
   </div>
   <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//12.jpg" alt="Watches">
                <center>
                    <div class="caption">
                        <h3>Titan Model#301</h3>
                        <p>Price: Rs.13000.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(5)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//11.jpg" alt="Watches">
                <center>
                    <div class="caption">
                        <h3>Titan Model#201</h3>
                        <p>Price: Rs. 5000.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(6)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//9.jpg" alt="Watches">
                <center>
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price: Rs. 8000.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(7)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//10.jpg" alt="Watches">
                <center>
                    <div class="caption">
                        <h3>Faber Luba#111</h3>
                        <p>Price: Rs. 18000.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(8)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
     </div>     
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//14.jpg" alt="Clothing">
                <center>
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price: Rs. 700.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(9)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//13.jpg" alt="Cannon">
                <center>
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price: Rs. 1000.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(10)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//6.jpg" alt="Cannon">
                <center>
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price: Rs. 1500.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(11)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
         <img src="images//8.jpg" alt="Cannon">
                <center>
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs. 1300.00</p>
                        <?php
                             if(!isset($_SESSION['email'])){ ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now </a> </p>
                               <?php
                               }
                                 else {       
                         //We have created a function to check whether this particular product is added to cart or not. 
                                      if (check_if_added_to_cart(12)) 
                                      { //This is same as if(check_if_added_to_cart != 0)        
                                 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';        
                                      } else {                                     ?>              
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>  
                                          <?php
                                          }                     
                                       }  ?> 
                    </div>
                </center>
            </div>
        </div>
     </div>     
</div>
        
</body>
<?php
require('C:\wamp64\www\PHP\includes\footer.php');
?>
</html>