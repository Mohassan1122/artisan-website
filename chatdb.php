<?php
session_start();
include_once 'db_connect.php';
$email = $_SESSION['email'];

$query2 = "SELECT * FROM register WHERE email = '$email'";
$result = mysqli_query($connection, $query2);
if (mysqli_num_rows($result) == 1) {

	$row = mysqli_fetch_array($result);
}
$name = $row['fulName'];

if(isset($_POST['chat']))
$chat = $_POST['chat'];
{
	$result = mysqli_query($conn , "INSERT INTO `message_tb`(`chat_name`,`chat_email`, `chat_value`) VALUES ('$name', '$email', '$_POST[chat]')");
	}
