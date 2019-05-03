<?php
include_once './conexao.php';
include_once "banner_all.php";

$id=(isset($_GET["id"])) ? $_GET["id"] : "";

$sql="SELECT *FROM pessoa WHERE id = ". $id;
$result= mysqli_query($conexao, $sql); //dispara a consulta contra o banco de dados
if(!$result){
	echo"Erro ao carregar tela de edi&ccedil;atilde;o.";
	exit;
}

$tbl = mysqli_fetch_assoc ($result);
$id= $tbl["id"];
$nome = $tbl["nome"];
$cpf = $tbl["cpf"];
$data = $tbl["data_nascimento"];
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
				<link rel="stylesheet" href="css/cssProjeto.css">
				<link rel='css/bootstrap.css'>
				
				<?php banner_head(); ?>
    </head>
    <body>
	<?php
        //banner();
		banner_body();
    ?>

</br>
<div  id="interface" style="padding-top:35px;">

       <h1>Editando dados</h1>

	<div align="center">
		<form name "form1" action="operacoes.php?acao=editar" method="post">
		<table style="width:100%;height:125px;">
				<tr>
					<th>
						ID:
					</th>
					<th>
						<input class='form-control' type="text" id="id" name="id" readonly="true" value="<?= $id ?>"</br>
					</th>
				</tr>
				<tr>
					<th>
						NOME:
					</th>
					<th>
						</br><input class='form-control' type="text" id="nome" name="nome" value="<?= $nome ?>">
					</th>
				</tr>
				<tr>
					<th>
						CPF:
					</th>
					<th>
						<br/><input class='form-control' type="text" id="cpf" name="cpf" value="<?= $cpf ?>" /><br/>
					</th>
				</tr>
				<tr>
					<th>
						DATA DE NASCIMETNO:
					</th>
					<th>
						<input class='form-control' type="date" id="cpf" name="data_nascimento" value="<?= $data ?>" />
					</th>
				</tr>
				<tr>
					<th colspan="2">
						<center>
							</br><button type="submit" class=" btn-default">Gravar</button></br>
						</center>
					</th>
				</tr>
	  	</table>
		</form>
	</div>
</div>
    </body>
</html>
