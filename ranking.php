<!DOCTYPE html>
<?php
  include_once './banner_all.php';
  include_once './conexao.php';
  include_once './gabarito.php';
  //$gabarito = array("A","B","C","D","E","A","B","C","A","E");

  $sql = "select p.id as 'id', p.ativo as 'ativo', p.nome as 'nome', ";
  $sql .= "q.quest1 as 'q1', q.quest2 as 'q2', q.quest3 as 'q3', q.quest4 as 'q4', q.quest5 as 'q5', ";
  $sql .= "q.quest6 as 'q6', q.quest7 as 'q7', q.quest8 as 'q8', q.quest9 as 'q9', q.quest10 as 'q10', q.nota ";
  $sql .= "from pessoa p ";
  $sql .= "inner join questionario q on q.id_pessoa = p.id ";
  $sql .= "order by q.nota desc";
  //echo $sql."</br>";
  $result = mysqli_query($conexao, $sql);
  if (!$result) {
      echo "Erro ao tentar pesquisar o registro.";
      exit;
  }
;

 ?>
<html lang=pt dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Notas</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cssProjeto.css">
	<?php banner_head(); ?>
  </head>
  <body>
    <?php banner_body(); ?>
    <br/>
    <div id="interface" style="padding-left: 10% ; padding-right:10%">
      <div id="intro-whatis" class="section" >

        <br/>
        <h1>Respostas banco:</h1>

        <?php
         $x = 1;
          echo "</br><table class='table'>
            <thead class='thead-dark'>
              <tr>
                <th>Posição</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Quest. 1</th>
                <th>Quest. 2</th>
                <th>Quest. 3</th>
                <th>Quest. 4</th>
                <th>Quest. 5</th>
                <th>Quest. 6</th>
                <th>Quest. 7</th>
                <th>Quest. 8</th>
                <th>Quest. 9</th>
                <th>Quest. 10</th>
                <th>Nota</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#</td>
                <td colspan='2'><b>Gabarito</b></td>
          ";
          for ($i=0; $i < 10; $i++) {
            echo "<td><font color='green'><b>".$gabarito[$i]."</b></font></td>";
          }
          echo "<td>#</td></tr>";
          while($tbl = mysqli_fetch_array($result))
          {
            $ativo = $tbl["ativo"];
            if($ativo)
            {
              $id = $tbl["id"];
              $nome = $tbl["nome"];
              $nota = $tbl["nota"];
              $quest = array( $tbl["q1"] , $tbl["q2"] , $tbl["q3"] , $tbl["q4"] , $tbl["q5"] , $tbl["q6"] ,
                $tbl["q7"] , $tbl["q8"] , $tbl["q9"] , $tbl["q10"]);

              echo "<tr>
                  <th>".$x++."</th>
                  <td>".$id."</td>
                  <td>".$nome."</td>";

                  for ($i=0; $i < 10; $i++) {
                    echo "<td>";
                    if($gabarito[$i] == $quest[$i])
                        echo "<font color='green'><b>".$quest[$i]."</b></font>" ;
                    else
                        echo "<font color='red'><b>".$quest[$i]."</b></font>" ;
                    echo "</td>";
                  }

                  echo "<td>".$nota."</td></tr>";
            }
          }
          echo "</tbody></table>";
        ?>
        <hr>

          <a href="quest.php">Voltar ao questionario</a>
          <a href="index.php" style="float: right">Inicio</a>

      </div>
    </div>
  </body>
</html>
