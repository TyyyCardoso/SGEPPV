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

  ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGEPPV</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="icon" href="../src/favicon.png" type="image/ico">
</head>
<body>

<div class="topnav">
  <div class="image">
    <img src="../src/logo.png"> </img>
  </div>
  <div class="title">
    <p> Sistema de Gestão EPPV </p>
  </div>
  <div class="info-aluno">
    <div class="nome-aluno-div">
      <p id="nome-aluno"> <?php echo "Nome: ".$row["Nome"]?> </p>
    </div>
    <div class="num-aluno-div">
      <p id="num-aluno"> <?php echo "Número: ".$row["NAluno"]?> </p>
    </div>
    <div class="turma-aluno-div">
      <p id="turma-aluno"> <?php echo "Turma: ".$row["Turmas_tblNTurma"]?> </p>
    </div>
  </div>
  <?php
      }
    echo "0 results";
    }
   ?>
</div>
<div class="menu">
  <div class="menu-1" onclick="window.location='horario.php'">
      <img src="../src/horario.png"> </img>
      <p> Ver Horário <p>
  </div>
  <!--
  <div class="menu-2" onclick="window.location='verturma.php'">
      <img src="../src/turma.png"> </img>
      <p> Ver Turma <p>
  </div>-->
  <div class="menu-3" onclick="window.location='../index.html';">
      <img src="../src/sair.png"> </img>
      <p> Sair <p>
  </div>
</div>

</body>
</html>
