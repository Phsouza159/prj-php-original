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

	<?php banner_body(); ?>

	</br>
	<div  id="interface" style="padding-top:35px;">

	<h1>Excluir dados?</h1>

	<div align="center">
		<form name "form1" action="operacoes.php?acao=excluir" method="post">
				<table style="width:100%;height:125px;">
					<tr>
						<th>
							ID:
						</th>
						<th>
							<input readonly='true' class='form-control' type="text" id="id" name="id" value="<?= $id ?>">
						</th>
						</tr>
						<tr>
							<th>
								NOME:
							</th>
							<th>
								</br><input readonly='true' class='form-control' type="text" id="nome" name="nome" value="<?= $nome ?>"><br/>
						</tr>
						<tr>
							<th>
								CPF:
							</th>
							<th>
								<br/><input readonly='true' class='form-control' type="text" id="cpf" name="cpf" value="<?= $cpf ?>" /><br/>
							</th>
						</tr>
						<tr>
							<th>
								DATA DE NASCIMETNO:
							</th>
							<th>
								<input readonly='true' class='form-control' type="data" id="cpf" name="data" value="<?= $data ?>" /><br/>
							</th>
						</tr>
						<tr>
							<th colspan="2">
								<center>
									</br><button type="submit" class=" btn-danger" value="Excluir" >Excluir</button></br>
								</center>
							</th>
						</tr>
				  </table>
				</form>

			</br>
			<hr>
				<a href="listagem.php"><button type="button" class="btn btn-primary" >Voltar!</button></a>

			</div>
	</div>
</body>
</html>
