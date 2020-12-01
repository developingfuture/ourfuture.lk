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
                            <input type="password" class="form-control" name="new_password" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        <div class="button">
                            <button class="form-control">Reset Password</button>
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
