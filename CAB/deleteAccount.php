<?php require_once 'database/dbConnection.php';
session_start();

$currentID = $_SESSION['user_id'];

$sql = "DELETE FROM users WHERE id =  '$currentID' ";

$result = $conn->query($sql);

if ($result) {
    $message = "You have deleted your account! We will log you out now.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: logout.php");
} else {
    echo "Delete failed!";
}
