<!DOCTYPE html>

<?php
include_once './conexao.php';
include_once "banner_all.php";

$sql = "SELECT * FROM pessoa";
$result = mysqli_query($conexao, $sql); //dispara a consulta contra o banco
//de dados.
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/cssProjeto.css">
        <link rel="stylesheet" href="css/bootstrap.css">
		
		<?php banner_head(); ?>
		
    </head>
    <body>
    
	<?php banner_body(); ?>
    
	<br>
       <div id="interface">
    <div id="intro-whatis" class="section">


        <table class="table">
          <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($tbl = mysqli_fetch_array($result)) {
                $id = $tbl["id"];
                $nome = $tbl["nome"];
                $cpf = $tbl["cpf"];
                $data = $tbl["data_nascimento"];
                $ativo = $tbl["ativo"];

                if($ativo)
                {
                  echo "<tr>
                          <td scope='row'>".$id."</td>
                            <td>".$nome."</td>
                            <td>".$cpf."</td>
                            <td>".$data."</td>
                            <td align='center'><a href='editar-cadastro.php?id=".$id."'>editar</a></td>
                            <td align='center'><a href='excluir-cadastro.php?id=".$id."'>excluir</a></td>
                          </tr>
                ";
               }
            }
            ?>
           </tbody>

        </table>
    </div>
            </div>


    </div>
    </body>
</html>
