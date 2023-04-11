<?php
session_start();
?>
<?php
include('database.php');
?>
<?php
if(isset($_POST['loginAdmin'])){
    $username = $_POST['usernameAdmin'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM adminlogin where username = '{$username}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $pasword = $row['pwd'];
            $id = $row['id'];
        }
        $verifypwd = password_verify($pwd, $pasword);
		if($verifypwd){
            $_SESSION['AddStatusAdmin'] = $id;
            header("Location:selectmembers");
        }
        else{
            $_SESSION['wrongpwd'] = 100;
			echo "<script>window.history.back()</script>";
        }
    }
    else{
        $_SESSION['wrongemail'] = 100;
		echo "<script>window.history.back()</script>";
    }
    
}

if(isset($_POST['approve'])){
    echo $aorrmid = $_POST['aorrmid'];
    $sqli = "update register set status ='evorppa' where id = $aorrmid";
	if($conn->query($sqli) === TRUE){
		header("Location:checkmember");
	}
}

if(isset($_POST['reject'])){
    $aorrmid = $_POST['aorrmid'];
    $sqli = "update register set status ='tceger' where id = $aorrmid";
	if($conn->query($sqli) === TRUE){
		header("Location:checkmember");
	}
}

?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>