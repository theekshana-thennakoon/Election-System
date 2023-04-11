<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sri Lanka Election</title>

    <!-- font awesome cdn link  -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
-->
    <!-- custom css file link  -->
	
	<link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .header-1 img{width:30%;}
    .inputBox select , .inputBox input{
	  padding:1rem;font-size: 1.7rem;background:#f7f7f7;text-transform: none;
	  margin:1rem 0;border:.1rem solid rgba(0,0,0,.3);width: 49%;
    }
    @media (max-width: 739px) {
        .contact{
            display: flex;min-height: 80%;align-items: center;justify-content: center;
        }
	    .header-1 img{width:80%;}
	    .inputBox .selectplant{width:100%}
    } 
    </style>
</head>
<body>
<script src="sweetalert.min.js"></script>

<!-- header section starts  -->

<header>

    <div class="header-1">

        <center><a href="#" class="logo" style = 'color:#fe2121;'>
        <img src = 'logo.png'></a>

    </div>

    

</header>
<!-- Pickup section starts  -->

<section class="contact">
	<form action='register' method = 'post'>

        <div class='inputBox'>

            <input type = 'text' name = 'nic' placeholder='Nic Number ජා.හැ.අංකය ' maxlength="13" required>
			<input type = 'text' name = 'fnamewithint' placeholder='Full Name සම්පූර්ණ නම' required>
        </div>
		
		<div class='inputBox'>
            <select name = 'genderslct' class = 'selectplant'>
				<option value = '#'>Select Gender</option>
                <option value = 'Male'>Male</option>
				<option value = 'Female'>Female</option>
            </select>
            <select name = 'districtslct' class = 'selectplant'>
				<option value = '#'>Select District</option>
				<option value = 'Ampara'>Ampara</option>
				<option value = 'Badulla'>Badulla</option>
				<option value = 'Batticaloa'>Batticaloa</option>
				<option value = 'Colombo'>Colombo</option>
				<option value = 'Galle'>Galle</option>
				<option value = 'Gampaha'>Gampaha</option>
				<option value = 'Hambantota'>Hambantota</option>
				<option value = 'Jaffna'>Jaffna</option>
				<option value = 'Kalutara'>Kalutara</option>
				<option value = 'Kandy'>Kandy</option>
				<option value = 'Kegalla'>Kegalla</option>
				<option value = 'Kilinochchi'>Kilinochchi</option>
				<option value = 'Kurunegala'>Kurunegala</option>
				<option value = 'Mannar'>Mannar</option>
				<option value = 'Matale'>Matale</option>
				<option value = 'Matara'>Matara</option>
				<option value = 'Moneragala'>Moneragala</option>
				<option value = 'Mullaitivu'>Mullaitivu</option>
				<option value = 'Nuwara Eliya'>Nuwara Eliya</option>
                <option value = 'Polonnaruwa'>Polonnaruwa</option>
                <option value = 'Puttalam'>Puttalam</option>
                <option value = 'Ratnapura'>Ratnapura</option>
                <option value = 'Trincomalee'>Trincomalee</option>
                <option value = 'Vavuniya'>Vavuniya</option>
            </select>
            <textarea name = 'address' placeholder='Adress ලිපිනය' required></textarea>
        </div>

        <div class='inputBox'>
            <input type = 'number' name = 'mobile' placeholder='Contact Number දුරකථන අංකය' required>
            <input type='submit' name = 'gtotp' value='SENT OTP' class='btn' style = 'background:#fe2121;'>
        </div>
    </form>
	
</section>

<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="script.js"></script>
<?php
if(isset($_SESSION['alreadyRegisterd'])){
    echo "<script>
        swal({
        title: 'Error',
            text: 'You have already Registerd',
            icon: 'error',
        });
    </script>";
}

if(isset($_SESSION['checkContact'])){
    echo "<script>
        swal({
        title: 'Error',
            text: 'Please Check Your Contact Number',
            icon: 'error',
        });
    </script>";
}

if(isset($_SESSION['sussessReg'])){
    $txt = 'Successfully Submited the Form.\nwe will contact you after checking.';
    echo "<script>
        swal({
        title: 'Successfully',
            text: '$txt',
            icon: 'success',
        });
    </script>";
}
session_destroy();
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>