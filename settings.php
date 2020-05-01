<?php
require('includes//common.php');
if(!isset($_SESSION['email']))
{
    header('location:index.php');
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
    <form class="form-horizontal" action="settings_script.php" style="padding-top: 90px;">
    <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="password" class="form-control" name="oldPassword" placeholder="Enter old password" required>
              </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="password" class="form-control" name="newPassword" placeholder="Enter new password" required>
              </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" ></label>
              <div class="col-sm-6">
                <input type="password" class="form-control" name="newPasswordConfirmed" placeholder=" Re-enter new password" required>
              </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-6 col-sm-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </div> 
         
</form>

</body>
<?php
    require 'includes/footer.php';
    ?>
</html>