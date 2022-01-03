<?php
session_start();
include 'db/connect.php';
$conn = OpenCon();

if ( isset( $_POST['submit'] ) ) {

  $uname = $_POST["uname"];
  $pass = $_POST["psw"];

  $_SESSION['naluno'] = $uname;

  $sql = "SELECT * FROM alunos_tbl WHERE NAluno='$uname' AND password='$pass'";
  $result = mysqli_query($conn, $sql);

 if (!$row = mysqli_fetch_assoc($result)) {
   echo "Your username or password is incorrect!";
 } else {
   header("Location: aluno/paginaaluno.php");
   exit();
 }


}


CloseCon($conn);
?>
