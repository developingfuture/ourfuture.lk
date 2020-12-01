<?php 

$con = mysqli_connect("localhost","root","","ujps"); ?>

<?php

if(isset($_POST['submit'])){
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $query="select * from user where email='$email'";
  $run=mysqli_query($con,$query);
 

  if(mysqli_num_rows($run)==1){
    $row = mysqli_fetch_array($run);
    $db_email=$row['email'];
    $db_id = $row['id'];
    $token = uniqid(md5(time()));//random token
    $query = "insert into password_reset(email,token) values ('$email','$token')";
    if(mysqli_query($con,$query)){
      $to = $db_email;
      $subject = "Password reset link";
      $message="Click <a href='https://website.com/reset.php?token=$token'>here to reset Your Password.";
      $headers = 'From: <lakshanisandareka96@gmail.com>'. "\r\n";
      mail($to,$subject,$message,$headers);
      $msg= "<div class='alert alert-success'>Password reset link has been sent to the email.</div>";
    }
  }else{
   $msg= "<div class='alert alert-danger'>User not found</div>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
  
    <div class="row">
    <div class="col">

    <div class="text-center"><h2>Froget Password</h2></div>
    
    <form action="forgetpassword.php" method="post" style="padding:20px 50px;">
  <div class="form-group">
    <label><b>Enter Your Email address</b></label>
    <input type="email" class="form-control" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <?php echo $msg; ?>
  <button name="submit" class="btn btn-primary">Get Code</button>
</form>
</div><!--row-->
    </div><!--col-->

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

