<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    
     <?php
    include "connection.php";
    if (isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $email_search="select * from sign where email='$email'";
        $query=mysqli_query($con, $email_search);
        $email_count=mysqli_num_rows($query);

        if($email_count){
            $email_pass=mysqli_fetch_assoc($query);
            $db_pass=$email_pass['password'];
            $_SESSION['username'] = $email_pass['username'];
            $pass_decode=password_verify($password,$db_pass);

            if($pass_decode){
                echo "login sucessfull"; ?>
                <script>
                    location.replace('index.php');
                </script>
                <?php
            }else{
                echo "incorrect password";
            }
        }else{
            echo "invalid email";
        }


    }
    ?>















    <div class="form-bg">
    <div class="container text center align-items-center mt-5">
        <div class="row justify-content-center">
            <div class=" col-lg-8">
                <div class="form-container">
                    <form class="form-horizontal" action="" method="post">
                        <h3 class="title">User Login</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="email" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        </div>
                        <button class="btn " name="submit">Login</button>
                        <span class="forgot-pass"><a href="#">Forgot Password?</a></span>
                        <span class="user-signup">Don't Have Account? <a href="signup.php">Signup</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>