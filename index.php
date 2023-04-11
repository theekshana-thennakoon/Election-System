<?php
session_start();
if(date('Y-m-d') != "2022-01-20"){
	header("Location:registration");
}
?>
<?php
//include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="icon" href="https://th.bing.com/th/id/R.c70638d537870aec2fdae3699a22c1df?rik=N76Nn3vS2F3PeQ&riu=http%3a%2f%2fwww.lanmds.com%2fwp-content%2fuploads%2f2016%2f03%2fPress-Release-image-1.jpg&ehk=Vq46veuwxCiHGJYg%2fg3qHHgR%2f%2b%2fDyENwzMaKaydjS0o%3d&risl=&pid=ImgRaw&r=0">
-->
	<title>Sri Lanka Election</title>

    <!-- font awesome cdn link  -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
-->
    <!-- custom css file link  -->
	
	<link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
	.home {margin-top:-70px}
	.header-1 img{width:30%;}
	.inputBox select , .inputBox input{
	  padding:1rem;
	  font-size: 1.7rem;
	  background:#f7f7f7;
	  text-transform: none;
	  margin:1rem 0;
	  border:.1rem solid rgba(0,0,0,.3);
	  width: 49%;
  }
  @media (max-width: 739px) {
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
        <img src = 'logo.png'></a></center>
    </div>

    

</header>

<br><br>
<!-- Pickup section starts  -->

<section class="contact">
	<center>
		<h1>BMI Calculator</h1>
	</center>
	<form action='x.php' method = 'post'>

        <!--<div class='inputBox'>
			<input type='text' name = 'EPF' placeholder='EPF Number'>
            <input type='text' name = 'name' placeholder='Name' required>
            
        </div>

		<br>
		-->
        <div class='inputBox'>
		<?php
			if(isset($_SESSION['height'])){
				$hh = $_SESSION['height'];
				$ww = $_SESSION['weight'];
				echo "<input type = 'text' name = 'height' value = '{$hh}' required>";
				echo "<input type = 'text' name = 'weight' value = '{$ww}' required>";
			}
			else{
				echo "<input type = 'text' name = 'height' placeholder='Height' required>";
				echo "<input type = 'text' name = 'weight' placeholder='Weight' required>";
			}
		?>
        </div>
		
		
		
		<div class='inputBox'>
		<?php
			if(isset($_SESSION['gender'])){
				$gg = $_SESSION['gender'];
				if ($gg == "Male"){$ggs = 'Male';$ggw = 'Female';}
				else{$ggs = 'Female';$ggw = 'Male';}
				echo "<select name = 'gender' class = 'selectplant'>
							<option value = '{$ggs}'>{$ggs}</option>
							<option value = '{$ggw}'>{$ggw}</option>
						</select>";
			}
			else{
				echo "<select name = 'gender' class = 'selectplant'>
						<option value = 'Female'>Female</option>
						<option value = 'Male'>Male</option>
					</select>";
			}
			?>
            
            <input type='submit' name = 'submibmi' value='Search BMI' class='btn' style = 'background:#fe2121;'>
        </div>
    </form>
	
</section>

<section class="contact">
	<form>

       <div class='inputBox' class = 'none'>
			<?php
				if (isset($_SESSION['bmi'])){
					$bb = $_SESSION['bmi'];
					$cc = $_SESSION['color'];
					$de = $_SESSION['wmust'];
					echo "<input type='text' value = '{$bb}' style = 'text-align:center;background:{$cc};color:#fff;' readonly>";
					echo "<input type='text' value = '{$de}' style = 'text-align:center;' readonly>";
				}
				else{
					echo "<input type='text' placeholder = 'Result' readonly>";
					echo "<input type='text' placeholder='Weight must be' readonly>";
				}
			?>
			
            
        </div>
		
		<br>
		
    </form>
	
</section>

<!-- Pickup section ends -->
<br><br>
<!-- custom js file link  -->
<script src="script.js"></script>
    
</body>
</html>