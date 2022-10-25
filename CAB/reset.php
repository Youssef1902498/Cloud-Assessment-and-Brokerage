
<html>
<head>
<?php
session_start();
require_once 'database/dbConnection.php';
include 'navbar.php';

?>
	<meta charset="utf-8">
	<title>Reset</title>

	   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/resetpassword.js"></script>

</head>
<body>

<section class="contact" id="contact">
<br>
    <div class="row">
        <form action="" method = 'POST'>
        	<center><h1 class="heading"> <span>Reset</span> Password</h1></center>
            
            <br>
            <div class="inputBox">
                <input type="password" name = 'new-pw'  onkeyup = "validatePassword(); enableSubmit();"    id = 'new-pw' placeholder="New Password">
                <p id = 'new-pw-error'></p>
            </div><br>
            <div class="inputBox">
                <input type="password" name = 'new-conf-pw'  onkeyup = "validateConfirmPassword(); enableSubmit();"   id = 'new-conf-pw' placeholder="Confirm Password">
                <p id = 'conf-pw-error'></p>
            </div>
           
            <center><input type="submit" name = 'resetsubmit' id = 'resetsubmit' disabled value = 'Reset' class="btn"></center>
            <br>
            <br>
            <br>
        </form>
    </div>
    
</section>
<?php include 'footer.php';?>
</html>

<?php
if(isset($_POST['resetsubmit'])){

    $newPw = $_POST['new-pw'];
    $newConfPw = $_POST['new-conf-pw'];
    $loggedUserrID = $_SESSION['user_id'];
    $oldPw = $_SESSION['user_password'];

    if($oldPw == $newPw){
        echo "<script>alert('This is your old password. Please enter a new password');</script>";
    }

    else if($newPw == $newConfPw){
        $resetpwSQL = "UPDATE users SET user_password = '$newPw' WHERE id = '$loggedUserrID' ";
        $result = mysqli_query($conn,$resetpwSQL);

        if($result){
            echo "<script>alert('Password reset successfully, we will log you out now');</script>";
            echo "<script>window.location.href = 'logout.php';</script>";
        }
        else
        {
            echo "Password not reset, database error";
            
        }
    }
    
    

}

?>