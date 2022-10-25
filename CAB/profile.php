<?php require_once 'database/dbConnection.php';
 ?>
<?php session_start();
        include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<br>
<br>
<br>
<br>

<head>
    <center><h1>My Profile</h1></center>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>  
    function validateform(){  
    var profileusername=document.myProfile.profileusername.value;

    var profileemail=document.myProfile.profileemail.value;  

    var atposition=profileemail.indexOf("@");  
    var dotposition=profileemail.lastIndexOf(".");  

    var profilephone=document.myProfile.profilephone.value;  
    
    if (profileusername==null || profileusername==""){  
        alert("Name can't be blank.");  
    return false;  
    }
    else if(!isNaN(profileusername)){
        alert("Enter a valid name");  
    return false;  
    }
    else if(profileemail==null||profileemail==""){
        alert("E-mail can't be blank.");  
    return false;  
    }
    else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=profileemail.length){  
        alert("Enter a valid E-mail.");  
    return false;  
    }  
    else if(profilephone==null || profilephone==""){  
        alert("PhoneNumber can't be blank.");  
    return false;  
    }  
    else if(isNaN(profilephone)){
        alert("Enter a valid PhoneNumber");  
    return false;  
    }
    }  
</script>  
</head>
<body>
<div class="container">
    <div class="main-body">
    
          
        
    
<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
    <?php
        $currentUSERID = $_SESSION['user_id'];
        $sqlPicture = "SELECT profile_picture FROM users WHERE id = '$currentUSERID'";
        $result = mysqli_query($conn,$sqlPicture);
        $row = mysqli_fetch_array($result);
    
    
    
    ?>
<img src="upload/<?=$row['profile_picture'];?>" alt="Profile Pic" class="rounded-circle" width="150">
<div class="mt-3">
<h4 ><?php echo $_SESSION['username'];?></h4>
<p> Profile Details </p>
<form name="myProfile" enctype = "multipart/form-data" action = "" method = 'POST' novalidate onsubmit="return validateform()">
<input type = "file" name = 'profile_picture' class="btn btn-primary">Upload photo</button>
<br>
<br>
       

</div>
</div>
</div>
</div>
<div class="card mt-3">
          
              
                  
</div>
</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6>Username</h6>
</div>
<div class="col-sm-9 text-secondary">
    
        <?php 
        $currentUserName = $_SESSION['username'];?>
<input type="text" id="fname" name="profileusername" value = "<?php echo $currentUserName;?>"><br>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 >Email</h6>
</div>
<div class="col-sm-9 text-secondary"> 
<?php 
        $currentUserEmail = $_SESSION['user_email'];?>    
<input type="email" id="mail" name="profileemail" value = "<?php echo $currentUserEmail;?>"><br>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 >Phone</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php 
        $currentUserPhone = $_SESSION['user_phone'];?>  
<input type="text" id="pho" name="profilephone" value = "<?php echo $currentUserPhone;?>"><br>
    
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">



   

</div>
</div>


 
<center><input type = 'submit' name = 'save' value = 'Save changes' class="btn btn-info " target="__blank" href=""></input></center><br>
</form>
<form action = 'deleteAccount.php' method = 'POST'>
    <center><input type = 'submit' value = 'Delete Account!' class="btn btn-danger "></center><br>
    <center><a href = 'reset.php'>Reset Your Password Here!</a></center>
</form>
                    
                
     
<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: center;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
</style>
<script type="text/javascript">
</script>
</body>
</html>

<?php

if (isset($_POST['save'])) {

    $newUsername = $_POST['profileusername'];
    $newEmail = $_POST['profileemail'];
    $newPhone = $_POST['profilephone'];
    $currentUserID = $_SESSION['user_id'];
    

    if(isset($_FILES['profile_picture'])){
    $imgName = $_FILES['profile_picture']['name'];
    $imgSize = $_FILES['profile_picture']['size'];
    $tempName = $_FILES['profile_picture']['tmp_name'];
    $imgError = $_FILES['profile_picture']['error'];

    if($imgError === 0){


    $imgEx = pathinfo($imgName, PATHINFO_EXTENSION);
    $imgExtToLower = strtolower($imgEx);
    $allowedExtensions = array('jpg', 'jpeg', 'png');

    if(in_array($imgEx, $allowedExtensions)){
        $newImgName = uniqid($newUsername, true).'.'.$imgExtToLower;
        $imgUploadPath = 'upload/'.$newImgName;
        move_uploaded_file($tempName, $imgUploadPath);
    }
    
    }
    else{
        $newImgName = $_SESSION['profile_picture'];
    }
    
    
}

    $sql = "UPDATE `users` SET `user_name` = '$newUsername', `user_email` = '$newEmail', `user_phone` = '$newPhone', `profile_picture` = '$newImgName' WHERE `id` = '$currentUserID'";

    $result = $conn->query($sql);

    if ($result) {
        $_SESSION['username'] = $newUsername;
        $_SESSION['user_email'] = $newEmail;
        $_SESSION['user_phone'] = $newPhone;
        $_SESSION['profile_picture'] = $newImgName;
        echo "<script>alert('Updated Successfully!');</script>";
        echo "<script>window.location.href = 'profile.php';</script>";
    }
    else{
        echo "Error, changes not saved!";
    }
    
}
else
{
    
}

?>
