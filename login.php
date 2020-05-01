 <?php
require('C:\wamp64\www\PHP\includes\common.php');
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
    <title>My Lifestyle Store</title>
    <link rel="stylesheet" href=".\CSS\style.css" type="text/css">
</head>
<body>
<?php
include 'C:\wamp64\www\PHP\includes\header.php';
?> 
    <div class="container-fluid" style="padding-top: 90px;">
    <div class="panel panel-primary" >
        <div class="panel-heading">
            <!-- <br></br> -->
        </div>
        <div class="panel-body" >
        <p class="text-warning" style="text-align: center;">   Login to make a purchase </p>
        <form class="form-horizontal" action="login_submit.php" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        <div class="panel-footer"style="text-align:center">Don't have an account?<a href="signup.php">Register</a></div>
    </div>
    </div>
</body>

</body>  

<?php
include 'C:\wamp64\www\PHP\includes\footer.php';
?>
</html>