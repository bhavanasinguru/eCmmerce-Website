<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
  header('location: products.php');
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
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Lifestyle store</title>
</head>
<body>
    <?php
    require 'includes/header.php';
    ?>
    
    <form class="form-horizontal" action="signup_script.php" method="POST" style="padding-top: 90px;">
        <h2   style="font-weight: bolder;text-align: center;">SIGN UP</h2>
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
            <div class="col-sm-6">
              <input type="name" class="form-control" id="name" name="name" placeholder="Name"  pattern="A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="number" class="form-control" id="contact" name="contact" placeholder="Contact" maxlength="10"  required>
              </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="city" name="city" placeholder="City">
              </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
              </div>
        </div>
         
            <div class="form-group">
              <div class="col-sm-offset-6 col-sm-6">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
    
</form>
</body>
<?php
require 'includes/footer.php';
?>
</html>