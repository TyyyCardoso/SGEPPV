<!doctype html>
<?php
session_start();
include '../db/connect.php';
$conn = OpenCon();

$num = $_SESSION['naluno'];

$sql = "SELECT * FROM alunos_tbl WHERE NAluno = $num";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $turma = $row["Turmas_tblNTurma"];
  ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGEPPV</title>
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="icon" href="../src/favicon.png" type="image/ico">
</head>
<body>

<div class="topnav">
  <div class="image">
    <img src="../src/logo.png"> </img>
  </div>
  <div class="title">
    <p> Sistema de Gestão Escola Profissional da Praia da Vitória </p>
  </div>
  <div class="info-aluno">
    <div class="nome-aluno-div">
      <p id="nome-aluno"> <?php echo $row["Nome"]?> </p>
    </div>
    <div class="num-aluno-div">
      <p id="num-aluno"> <?php echo $row["NAluno"]?> </p>
    </div>
    <div class="turma-aluno-div">
      <p id="turma-aluno"> <?php echo $row["Turmas_tblNTurma"]?> </p>
    </div>
  </div>
  <?php
      }
    echo "0 results";
    }
   ?>
</div>

<div class="tg-wrap">
<?php
  $sql = "SELECT * FROM alunos_tbl where Turmas_tblNTurma LIKE '$turma'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  echo '<table class="tg"><tr><th class="tg-48d8">Número de Aluno</th><th class="tg-48d8">Nome</th><th class="tg-48d8">Idade</th></tr>';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr><td class="tg-7zax">'.$row["NAluno"].'</td><td class="tg-7zax">'.$row["Nome"].'</td><td class="tg-7zax">'.$row["Idade"].'</td></tr>';
  }
  echo "</table>";
  } else {
  echo "0 results";
}
?>
</div>
</body>
</html>
