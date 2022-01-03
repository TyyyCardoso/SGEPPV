<!doctype html>
<?php
session_start();
include '../db/connect.php';
$conn = OpenCon();

$num = $_SESSION['naluno'];

$sql = "SELECT * FROM alunos_tbl WHERE NAluno = $num";
$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
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
    <!--<img src="../src/logo.png"> </img> -->
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
    }

    $horarioStmt = "SELECT C.Nome, A.Hora, A.Dia, A.Salas_tbl_Nsala as Sala FROM horarios_tbl A INNER JOIN horarios_tbl_has_turmas_tbl B ON A.ID = B.Horarios_tbl_ID INNER JOIN disciplinas_tbl C ON A.Disciplinas_tbl_ID = C.ID WHERE B.Turmas_tbl_NTurma = 'D4'";
    //$horarioStmt = "SELECT A.Hora as Sala FROM horarios_tbl A";
    $result = $conn->query($horarioStmt);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

    ?>
</div>

<div class="tg-wrap">
  <table class="tg">
<thead>
  <tr>
    <th class="tg-38jg">Horas</th>
    <th class="tg-38jg">Segunda</th>
    <th class="tg-38jg">S</th>
    <th class="tg-38jg">Terça</th>
    <th class="tg-38jg">S</th>
    <th class="tg-38jg">Quarta</th>
    <th class="tg-38jg">S</th>
    <th class="tg-38jg">Quinta</th>
    <th class="tg-38jg">S</th>
    <th class="tg-38jg">Sexta</th>
    <th class="tg-38jg">S</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-nrix">08:00</td>
    <td class="tg-nrix"> <!-- 8 HORAS DE SEGUNDA-FEIRA -->
    <?php
      if($row["Hora"]=="08:00" && $row["Dia"]=="1"){
          echo $row["Nome"];
      }
    ?>
    </td>
    <td class="tg-nrix"> <!-- SALA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="1"){
            echo $row["Sala"];
          }
      ?>
    </td>
    <td class="tg-nrix"> <!-- 8 HORAS DE TERCA-FEIRA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="2"){
            echo $row["Nome"];
        }
       ?>
     </td>
    <td class="tg-nrix">  <!-- SALA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="2"){
          echo $row["Sala"];
        }
      ?>
    </td>
    <td class="tg-nrix"> <!-- 8 HORAS DE QUARTA-FEIRA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="3"){
            echo $row["Nome"];
        }
       ?>
    </td>
    <td class="tg-nrix"> <!-- SALA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="3"){
          echo $row["Sala"];
        }
      ?>
    </td>
    <td class="tg-nrix"> <!-- 8 HORAS DE QUINTA-FEIRA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="4"){
            echo $row["Nome"];
        }
       ?>
    </td>
    <td class="tg-nrix">  <!-- SALA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="4"){
          echo $row["Sala"];
        }
      ?>
    </td>
    <td class="tg-nrix">  <!-- 8 HORAS DE SEXTA-FEIRA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="5"){
            echo $row["Nome"];
        }
       ?>
    </td>
    <td class="tg-nrix">  <!-- SALA -->
      <?php
        if($row["Hora"]=="08:00" && $row["Dia"]=="5"){
            echo $row["Sala"];
        }
       ?>
    </td>
  </tr>

<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 09:00 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<tr>
  <td class="tg-nrix">09:00</td>
  <td class="tg-nrix"> <!-- 9 HORAS DE SEGUNDA-FEIRA -->
    <?php
      /*if($row["Hora"]=="09:00" && $row["Dia"]=="1"){
          echo "$row["Nome"];
      }*/
     ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="1"){
          echo $row["Sala"];
        }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 9 HORAS DE TERCA-FEIRA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="2"){
          echo $row["Nome"];
      }
     ?>
   </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="2"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 9 HORAS DE QUARTA-FEIRA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="3"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="3"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 9 HORAS DE QUINTA-FEIRA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="4"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="4"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix">  <!-- 9 HORAS DE SEXTA-FEIRA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="5"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="09:00" && $row["Dia"]=="5"){
          echo $row["Sala"];
      }
     ?>
  </td>
</tr>
<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 10:00 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<tr>
  <td class="tg-nrix">10:00</td>
  <td class="tg-nrix"> <!-- 10 HORAS DE SEGUNDA-FEIRA -->
  <?php
    if($row["Hora"]=="10:00" && $row["Dia"]=="1"){
        echo $row["Nome"];
    }
  ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="1"){
          echo $row["Sala"];
        }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 10 HORAS DE TERCA-FEIRA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="2"){
          echo $row["Nome"];
      }
     ?>
   </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="2"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 10 HORAS DE QUARTA-FEIRA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="3"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="3"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 10 HORAS DE QUINTA-FEIRA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="4"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="4"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix">  <!-- 10 HORAS DE SEXTA-FEIRA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="5"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="10:00" && $row["Dia"]=="5"){
          echo $row["Sala"];
      }
     ?>
  </td>
</tr>
<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 11:00 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<tr>
  <td class="tg-nrix">11:00</td>
  <td class="tg-nrix"> <!-- 11 HORAS DE SEGUNDA-FEIRA -->
  <?php
    if($row["Hora"]=="11:00" && $row["Dia"]=="1"){
        echo $row["Nome"];
    }
  ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="1"){
          echo $row["Sala"];
        }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 11 HORAS DE TERCA-FEIRA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="2"){
          echo $row["Nome"];
      }
     ?>
   </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="2"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 11 HORAS DE QUARTA-FEIRA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="3"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="3"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 11 HORAS DE QUINTA-FEIRA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="4"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="4"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix">  <!-- 11 HORAS DE SEXTA-FEIRA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="5"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="11:00" && $row["Dia"]=="5"){
          echo $row["Sala"];
      }
     ?>
  </td>
</tr>
<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 12:00 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<tr>
  <td class="tg-nrix">12:00</td>
  <td class="tg-nrix"> <!-- 12 HORAS DE SEGUNDA-FEIRA -->
  <?php
    if($row["Hora"]=="12:00" && $row["Dia"]=="1"){
        echo $row["Nome"];
    }
  ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="1"){
          echo $row["Sala"];
        }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 12 HORAS DE TERCA-FEIRA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="2"){
          echo $row["Nome"];
      }
     ?>
   </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="2"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 12 HORAS DE QUARTA-FEIRA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="3"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="3"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 12 HORAS DE QUINTA-FEIRA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="4"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="4"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix">  <!-- 12 HORAS DE SEXTA-FEIRA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="5"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="12:00" && $row["Dia"]=="5"){
          echo $row["Sala"];
      }
     ?>
  </td>
</tr>
<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ 13:00 \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<tr>
  <td class="tg-nrix">13:00</td>
  <td class="tg-nrix"> <!-- 13 HORAS DE SEGUNDA-FEIRA -->
  <?php
    if($row["Hora"]=="13:00" && $row["Dia"]=="1"){
        echo $row["Nome"];
    }
  ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="1"){
          echo $row["Sala"];
        }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 13 HORAS DE TERCA-FEIRA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="2"){
          echo $row["Nome"];
      }
     ?>
   </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="2"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 13 HORAS DE QUARTA-FEIRA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="3"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix"> <!-- SALA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="3"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix"> <!-- 13 HORAS DE QUINTA-FEIRA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="4"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="4"){
        echo $row["Sala"];
      }
    ?>
  </td>
  <td class="tg-nrix">  <!-- 13 HORAS DE SEXTA-FEIRA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="5"){
          echo $row["Nome"];
      }
     ?>
  </td>
  <td class="tg-nrix">  <!-- SALA -->
    <?php
      if($row["Hora"]=="13:00" && $row["Dia"]=="5"){
          echo $row["Sala"];
      }
     ?>
  </td>
</tr>


</tbody>
</table></div>
<?php
}
}else{
echo "nada";
}
?>
</body>
</html>
