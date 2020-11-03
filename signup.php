<?php

include("../php/config.php");
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];


$insert = $db->query("INSERT INTO `member`(`first_name`, `last_name`, `birthdate`, `gender`, `email`, `password`)
VALUES ('".$fname."','".$lname."','".$date."','".$gender."','".$email."','".$password."')");

$select = $db->query("SELECT * FROM member WHERE first_name = '$fname' AND last_name = '$lname' AND birthdate = '$date' AND gender = '$gender' AND email = '$email' AND password ='$password'");
$count = $select->num_rows;
$rows = $select->fetch_assoc();
$_SESSION['fname'] = $row ['fname'];
$_SESSION['lname'] = $row ['lname'];
$_SESSION['date'] = $row ['date'];
$_SESSION['gender'] = $row ['gender'];
$_SESSION['email'] = $row ['email'];
$_SESSION['password'] = $row ['password'];

header('Location: ../login.php');


?>