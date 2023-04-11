<!DOCTYPE html>
<?php
session_start();
include('database.php');
if(!isset($_SESSION['AddStatusAdmin'])){
    header("Location:login");
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Election System</title>
	<style>
		*{margin:0;padding:0;}
		.leftbar{float:left;width:18%;height:100vh;background:#eee;text-align:center;
		}
		.rightbar{float:right;width:82%;height:100vh;background:#fff;text-align:center;
		}
		.leftbar input{width:90%;height:8vh;margin:5% 0;cursor:pointer;color:#fe2121;
			background:#eee;border:1px solid #fe2121;}
		.leftbar img{width:90%;margin:5% 0;cursor:pointer;color:#fe2121;
		}
		@media (max-width: 750px) {
        body{display:none;}
    } 
	</style>
</head>
<body>
	<div class="leftbar">
		<img src = 'badge.png'>
		<br><br><br>
		<form action="#" method = 'post'>
			<input type="submit" name = 'na' value="Non Action">
			<input type="submit" name = 'approved' value="Approved Voters">
			<input type="submit" name = 'rejected' value="Rejected Voters">
			<input type="submit" value="District Wise Voters">
		</form>
	</div>
	<div class="rightbar">
	<?php            
        if (isset($_POST['na'])){
            echo "<iframe src='checkmember' style = 'border:none;width:100%;height:89.43vh'></iframe>";
        }
        else if (isset($_POST['approved'])){
            echo "<iframe src='approved.php' style = 'border:none;width:100%;height:89.43vh'></iframe>";
        }
		else if (isset($_POST['rejected'])){
            echo "<iframe src='rejected.php' style = 'border:none;width:100%;height:89.43vh'></iframe>";
        }
        else{
            echo "<iframe src='checkmember' style = 'border:none;width:100%;height:89.43vh'></iframe>";
        }
    ?>
	</div>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>