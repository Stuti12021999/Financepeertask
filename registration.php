<?php 
	include('config.php');
        $con=OpenCon();
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['mail'];
	$dob = $_POST['dob'];
	$gnd = $_POST['gnd'];
	$addr = $_POST['addr'];
	$phno = $_POST['phno'];
	$pwd = $_POST['pwd'];
	$repwd = $_POST['repwd'];
	$fname = $fname . ' ' . $lname;
	$qry1  =  mysqli_query($con,"SELECT * FROM client WHERE Email = '$email'");
	$qry2  =  mysqli_num_rows($qry1);
	if($qry2 == 0 and $pwd == $repwd) {
		$qry = mysqli_query($con,"INSERT INTO client (Name, Email, Dob, Gender, Address, Phoneno, Password,Dp) VALUES ('$fname', '$email','$dob','$gnd','$addr','$phno','$pwd','')")or die(mysqli_error($con));
		?>
		<script>
			alert ("Registered Successfullly");
			window.location.href = "Signin.php";
		</script>
		<?php
	} else {
		?>
		<script>
			alert ("Email already Registered");
			window.location.href = "Register.php";
		</script>
		<?php
	}
?>
