<?php 

$id = $_GET['id'];
$mysqli = new mysqli("localhost","root","","jQuery");

$sql =$mysqli->query ("SELECT * FROM abc WHERE id = '$id'");
$result = $sql->fetch_assoc();
echo $result['id'] . " => " . $result['name'] . " : " . $result['popularity'];

// $ct = array(
//     1=>"city of mosque",
//     2=>"popular for rosmalai"
// );
// echo $ct[$id];
?>