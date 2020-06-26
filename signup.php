<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
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

	if(isset($_POST['submit'])){

		$name=mysqli_real_escape_string($con,$_POST['name']);
		$lname=mysqli_real_escape_string($con,$_POST['lname']);
		$degree=mysqli_real_escape_string($con,$_POST['degree']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

		$pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

		$emailquery="select * from sign where email='$email' ";
		$query= mysqli_query($con, $emailquery);
		$emailcount=mysqli_num_rows($query);



		if($emailcount>0){
			echo "mail id already exist";
		}else{
			if($password === $cpassword){

         $insertquery= "insert into  sign (name,lname,degree,email,password,cpassword) values('$name','$lname','$degree','$email','$pass','$cpass')";

         $iquery= mysqli_query($con, $insertquery);

         if ($iquery){
	?>
	<script>
		alert('data inserted sucessful');
</script>
	<?php }
		else{
			?>
			<script>alert('data not submitted');</script>
		<?php
	}


			}else{   //next----------------
				
				?>
				<script> alert ('password not matching');</script>
				<?php
			}
		}

		}
		?>


      
      
 		  
	<div class="form-bg d-flex align-items-center">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="form-container">
                    <div class="form-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <form class="form-horizontal" method="post" action="" >
                        <h3 class="title">Register Now</h3>
                        <
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" name="name" type="text" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" name="lname" type="text" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="text" placeholder="Degree" name="degree" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" placeholder="Confirm Password" name="cpassword" required>
                        </div>
                        <button class="btn" name="submit" type="submit">Submit</button>
                        <button class="btn mt-3" name="" type="submit"><a href="signin.php">Signin</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>