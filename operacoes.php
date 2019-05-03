<?php
include_once './conexao.php'; //incluindo o arquivo de conexao na listagem.

$acao = (isset($_REQUEST["acao"])) ? $_REQUEST["acao"] : "";
$id = (isset($_REQUEST["id"])) ? $_REQUEST["id"] : "";
$nome = (isset($_REQUEST["nome"])) ? $_REQUEST["nome"] : "";
$cpf = (isset($_REQUEST["cpf"])) ? $_REQUEST["cpf"] : "";
$data = (isset($_REQUEST["data_nascimento"])) ? $_REQUEST["data_nascimento"] : "";

$save_quest = (isset($_REQUEST["save_questao"])) ? $_REQUEST["save_questao"] : "";
$acertos = (isset($_REQUEST["acertos"])) ? $_REQUEST["acertos"] : "";
$erros = (isset($_REQUEST["erros"])) ? $_REQUEST["erros"] : "";
$var_cpf = (isset($_REQUEST["cpf"])) ? $_REQUEST["cpf"] : "";
$primary = (isset($_REQUEST["primary"])) ? $_REQUEST["primary"] : "";

$pag_cadastro = (isset($_REQUEST["pag_cadastro"])) ? $_REQUEST["pag_cadastro"] : "listagem";

if ($acao == "editar") {
    $sql = "SELECT * FROM pessoa WHERE id = " . $id;
    $result = mysqli_query($conexao, $sql);
    if (!$result) {
        echo "Erro ao tentar editar o registro.";
        exit;
    }

    $sql = "UPDATE pessoa SET nome = '".$nome ."', cpf = '". $cpf ."' ,data_nascimento = '". $data ."' ";
    $sql .= " WHERE id = " . $id;
    if (!mysqli_query($conexao, $sql)) {
        echo "Erro ao editar o registro: " . mysqli_error($conexao);
    }
}

if ($acao == "login") {
    $sql = "SELECT * FROM pessoa WHERE cpf = ".$var_cpf;
    $result = mysqli_query($conexao, $sql);

  if ($result == $var_cpf) {
        echo "Erro ao tentar localizar o registro";
        header("Location: ./quest.php?");
  }

  while ($tbl = mysqli_fetch_array($result)) {
    $cpf = $tbl["cpf"];
    $nome = $tbl["nome"];
    $primary = $tbl["id"];

    if($cpf == $var_cpf)
    {
      header("Location: ./quest.php?num=0&valid_cpf=".$var_cpf."&nome=".$nome."&primary=".$primary." ");
      exit;
    }
  }
  header("Location: ./quest.php?cod='1'");
  exit;
}

if ($acao == "novo") {

    $sql = "INSERT INTO pessoa (ativo , nome, cpf, data_nascimento) ";
    $sql .= " VALUES (1 , '".$nome."','".$cpf."','".$data."')";
    if (!mysqli_query($conexao, $sql)) {
        echo "Erro ao inserir o registro: " . mysqli_error($conexao);
    }
}

if ($acao == "questao") {
  $resp;
  $x = $y = 0;

  while($x < 10 ) {
	   if($save_quest[$y] != '>')
	   {
	     $resp[$x] = $save_quest[$y];
	     $y++;
	     $x++;
	   }
	   else
	     $y++;
  }

	echo $sql."<br><br><br><br>";
	
    $sql = "INSERT INTO `questionario` (id_pessoa, quest1, quest2 , quest3 , quest4 , quest5 , quest6 , quest7 , quest8 , quest9 , quest10 , nota ) ";
    $sql .= " VALUES ('".$primary."' , '".$resp[0]."' , '".$resp[1]."' , '".$resp[2]."' , '".$resp[3]."' , '".$resp[4]."' , '".$resp[5]."' , '".$resp[6]."' , '".$resp[7]."' ,";
    $sql .= " '".$resp[8]."' , '".$resp[9]."' , '".$acertos." ')";

    if (!mysqli_query($conexao, $sql)) {
        echo "Erro ao inserir o registro: " . mysqli_error($conexao);
        exit;
    }

    header("Location: ./quest.php?num=13&nome=".$nome."&save_questao=".$save_quest."&nota=".$acertos." "); //redirecina automaticamente para a questionario
    exit;
}



if ($acao == "excluir") {
    $sql = "SELECT * FROM pessoa WHERE id = " . $id;
    $result = mysqli_query($conexao, $sql);
    if (!$result) {
        echo "Erro ao tentar excluir o registro.";
        exit;
    }

    $sql = "UPDATE pessoa SET ativo = '0' ";
    $sql .= " WHERE id = " . $id;
    if (!mysqli_query($conexao, $sql)) {
        echo "Erro ao editar o registro: " . mysqli_error($conexao);
    }
    if (!mysqli_query($conexao, $sql)) {
        echo "Erro ao editar o registro: " . mysqli_error($conexao);
    }
}


  header("Location: ./".$pag_cadastro.".php"); //redirecina automaticamente para a listagem
?>
