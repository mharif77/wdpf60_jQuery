<?php
include_once("dbconfig.php");
$id= $_POST['id'];

$sql = "DELETE FROM students_3 WHERE id = '$id'";
$delete = $db->query($sql);

if($delete){
    echo "deleted";
}
else{
    echo "failed";
}
?>