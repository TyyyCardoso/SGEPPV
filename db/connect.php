<?php
function OpenCon(){
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "SFHi3242v3";
 $db = "sgeppv";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
}

function CloseCon($conn){
 $conn -> close();
}
?>
