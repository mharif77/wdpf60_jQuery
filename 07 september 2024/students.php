<?php 
include_once("dbconfig.php"); 

$sql = $db->query("SELECT * FROM students_3");

$table = "<hr><table border= '2'><tr><th>id</th><th>name</th></tr>";

while($row = $sql->fetch_assoc()){
    $table .= "<tr><td>" . $row['id'];
    $table .= "</td><td>" . $row['name'];
    "</td></tr>";

}
$table.="</table>";
echo $table;

?>