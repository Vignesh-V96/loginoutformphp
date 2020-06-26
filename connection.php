<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "signup";

// Create connection
$con =mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($con){
	?>
	<script>
		alert('connection sucessful');
</script>
	<?php }
		else{
			?>
			<script>alert('no connection');</script>
		<?php
	}
	?>
