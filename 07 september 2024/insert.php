<?php
include_once("dbconfig.php");

//$id = $_GET['name'];
// $mysqli = new mysqli("localhost","root","","arif");
//echo "hello";

// print_r($_POST);
$serializedData = $_POST['mydata'];
parse_str($serializedData, $data);
// print_r($data);


$name = $data['name'];
$gender = $data['gender'];
$dob = $data['dob'];
$email = $data['email'];
$phone = $data['phone'];
$address = $data['address'];



// echo "INSERT INTO students_3 VALUES (NULL,'$name','$gender','$dob','$email','$phone','$address')";

$db->query("INSERT INTO students_3 VALUES (NULL,'$name','$gender','$dob','$email','$phone','$address')");



if ($db->affected_rows) {
    echo "successfully Insert";
}


?>