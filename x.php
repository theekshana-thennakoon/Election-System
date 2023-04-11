<?php
session_start();
?>
<?php
include('database.php');
if(!isset($_SESSION['stotp'])){
	echo "<script>window.history.back()</script>";
}
?>
<script src="sweetalert.min.js"></script>
<?php

if(isset($_POST['register'])){
	$otpnum = $_POST['otpnum'];
	if ($otpnum == $_SESSION['stotp']){

		$nic = $_SESSION['nic'];
        $fnamewithint = $_SESSION['fnamewithint'];
        $genderslct = $_SESSION['genderslct'];
        $districtslct = $_SESSION['districtslct'];
        $mobile = $_SESSION['mobile'];
        $address = $_SESSION['address'];

		$sqli = "insert into register(nic,fname,gender,address,district,phone) values('$nic','$fnamewithint','$genderslct','$address','$districtslct',$mobile)";
		if($conn->query($sqli) === TRUE){
			$_SESSION['sussessReg'] = 0;
			header("Location:registration");
		}
	}
	else{
		
		//echo "<script>window.history.back()</script>";
	}
}
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>