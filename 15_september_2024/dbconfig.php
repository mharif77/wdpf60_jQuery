<?php
define("host","localhost");
define("user","root");
define("pass","");
define("database","wdpf_hospital ");

$db = new mysqli();

@$db->connect(host,user,pass,database);

if($db->connect_errno){
echo $db->connect_error;
exit();
}
echo $db->error;

?>