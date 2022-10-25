<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	 
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/loginValidation.js"></script>

</head>
<body>

<?php
require 'database/dbConnection.php';
session_start();
try{
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlQuery = "SELECT * FROM users WHERE user_email = '".$email."' AND user_password = '".$password."' ";

    $exec = mysqli_query($conn,$sqlQuery);

    $row = mysqli_fetch_array($exec);
    if(!$row)
    {
      throw new Exception('Login Unsuccessful, invalid credentials');
    }
    
    
    
    if($row['user_email'] == $email && $row['user_password'] == $password && $row['user_type'] == "User"){

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_password'] = $row['user_password'];
        $_SESSION['username'] = $row['user_name'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_phone'] = $row['user_phone'];
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['hasTicket'] = $row['hasTicket'];
        $_SESSION['profile_picture'] = $row['profile_picture'];
        
       
        echo "Hello, " . $row['user_name'];
        header("Location: index.php");

        
    }
    else if($row['user_email'] == $email && $row['user_password'] == $password && $row['user_type'] == "Admin"){
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_password'] = $row['user_password'];
      $_SESSION['username'] = $row['user_name'];
      $_SESSION['user_email'] = $row['user_email'];
      $_SESSION['user_phone'] = $row['user_phone'];
      $_SESSION['user_type'] = $row['user_type'];
      
      echo "Hello Admin, " . $row['user_name'];
      header("Location: admin-panel.php");
    }
    else{
      throw new Exception('Login unsuccessful, invalid credentials');
       
    }
}
$errorMsg = "";
}
catch(Exception $e){
$errorMsg = $e->getMessage();
}
   

?>



<section class="contact" id="contact">
<br>
    <div class="row">
        <form id='login-form' action="" method="post">
        	<center><h1 class="heading"> <span>Log</span> in </h1></center>
            <div class="inputBox">
                <input name = 'email' id = 'e-mail' onkeyup = 'emailValidation(); enableSubmit();'type="email" placeholder="Email" required><br>
                <p id = 'email-err'></p>
            </div>
            <br>
            <div class="inputBox">
                <input name = 'password' id = 'p-word' onkeyup = 'passwordValidation(); enableSubmit();' type="password" placeholder="Password"><br>
                <p id = 'pw-err'></p><br>
                <?php echo $errorMsg;?>
            </div>
            <center><input name = 'submit' type="submit" id = 'submit-btn'value="Login" class="btn" disabled></center> 
            <center><a href="Signup.php" class="btn">SignUp</a></center>
        </form>
    </div>
    <br>
    <br>
    <br>
</section>

</html>




