<?php  require 'database/dbConnection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/signUpValidation.js"></script>

</head>
<body>



  

<section class="contact" >
<br>
    <div class="row">
        <form action="" method="post" id="signup-form">
        	<center><h1 class="heading"> <span>Sign</span> Up </h1></center>
            <br>
            <div class="inputBox">
                <input type="text" name = 'username' id='u-name' onkeyup = "userNameValidation(); submitEnable();" placeholder="Username" required>
            <p id ="username-err"></p>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name = 'phone' id = 'phone-num' onkeyup = "phoneNumberValidation(); submitEnable();" placeholder="Phone Number">
                <p id ="phonenum-err"></p>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name = 'email' id = 'e-mail' onkeyup = "emailValidation(); submitEnable();" placeholder="Email">
                <p id ="email-err"></p>
            </div>
            <br>
            <div class="inputBox">
                <input type="password" name = 'password' id = 'p-word' onkeyup = "passwordValidation(); submitEnable();" placeholder="Password">
                <p id ="pw-err"></p>
            </div>
            <br>
            <div class="inputBox">
                <input type="password" name = 'conf-password' id = 'conf-password' onkeyup = "confirmPasswordValidation(); submitEnable();" placeholder="Confirm Password">
                <p id ="conf-err"></p>            
                <br>
            </div>
            <script> submitEnable(); </script>
            <center><input type="submit" id ='submit-btn' name = 'submit' value="Register!" class="btn"  style ="background-color : grey;" disabled ></center> 
            
            <br>
            <center>Would Like to Login?<a href="login.php" >Click Here</a></center>
        </form>
    </div>
</section>

</html>

<?php




if(isset($_POST['submit'])){
   

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $userType = "User";
   // $hasTicket = 0;
   // $defaultPP = "default-pp.jpg";


    $selectEmailFromDB = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '".$email."'");
        if(mysqli_num_rows($selectEmailFromDB)) {
            die('This email already exists!');
        }

    $query = "INSERT INTO users (user_name, user_email, user_password, user_phone, user_type, hasTicket, profile_picture) 
    VALUES 
    ('$username' , '$email', '$password', '$phone' ,'$userType', '$hasTicket', '$defaultPP')";

    $sql = mysqli_query($conn,$query);
        if($sql){
            echo "Successful SignUp";
            header("Location: login.php");
        }
    else
        echo "Registration Unsuccessful";

   


    
}
else{
    echo "Not submitted!";
}

