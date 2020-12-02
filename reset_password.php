<?php 

$con = mysqli_connect("localhost","root","","ujps"); ?>


    

    <?php 

    if(isset($_GET['token'])){
        $token = mysqli_real_escape_string($con, $_GET['token']);
         $mail = mysqli_real_escape_string($con, $_GET['email']);
        $query = "select * from password_reset where token='$token'";
        $run = mysqli_query($con,$query);
        if(mysqli_num_rows($run)>0){
            $row = mysqli_fetch_array($run);
            $token = $row['token'];
            $email = $row['email'];
        }
    }

if(isset($_POST['submit'])){
    $password = mysqli_real_escape_string($con, $_POST['new_password']);
    
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirm_password']);
    
    if($password!=$confirmpassword){
        $msg = "<div class='alert alert-danger'>Sorry. Password didn't matched</div>";
    }elseif(strlen($password)<6){
         
        $msg = "<div class='alert alert-danger'>Password must be 6 characters long</div>";
                             
    }
    
    
    else{
        
        $query = "update user set password='$password' where email='$email'";
        mysqli_query($con,$query);
        $query = "delete from password_reset where email='$email'";
        mysqli_query($con,$query);
        $msg = "<div class='alert alert-success'>Password Updated</div>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
    <body>
        <center>
            <div class="col-md-4">            
                <div class="box">
                    <form method="post" enctype="multipart/form-data">
                        <h3>Reset Your Password</h3>
                        <div class="form-group">
                            <input type="text" readonly class="form-control" name="e" value="<?php echo $mail; ?>">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password" placeholder="Enter New Password" required>
                            
                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        
                        <?php if(isset($msg)){echo $msg;} ?>
                        
                        <div class="button">
                            <button type="submit" name="submit" class="form-control">Reset Password</button>
                        </div>
                    </form>              
                </div>            
            </div>
        </center>
    </body>
</html>

<style>
    .box{
        box-shadow: 0 1px 5px rgba(0,0,0,0.8);
        padding: 15px;
        margin-top: 50px;
    }
    .box h3{
        padding-bottom: 50px;
    }
    .box .button button{
        background-color: #144b8e;
        font-weight: bold;
        color: white;
    }
    .box .button button:hover{
        background-color: dodgerblue;
    }
</style>

