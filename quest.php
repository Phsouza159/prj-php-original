<!DOCTYPE html>
<?php

  include_once "banner_all.php";
  include_once './conexao.php';
  include_once './cadastro.php';
  include_once './function_quest.php';
  include_once './gabarito.php';

  //$gabarito = array("A","B","D","D","E","A","B","C","A","E");
  
  $nome 	  = isset($_GET["nome"])	     ? $_GET["nome"] 		: ''; // pega o nome pelo banco
  $VETOR 	  = isset($_GET["questao"])      ? $_GET["questao"] 	: ''; // captura a respota do questionario
  $valid_cpf  = isset($_GET['valid_cpf'])    ? $_GET['valid_cpf'] 	: ''; // apos validado passa o cpf entre as telas pela url (cpf -> o mando que traz // var_cpf -> input que manda entre as telas)
  $nota       = isset($_GET['nota']) 	     ? $_GET['nota'] 		: ''; //pegar nota 
  $primary    = isset($_GET['primary']) 	 ? $_GET['primary'] 	: ''; //id user
  $num        = isset($_GET["num"])          ?($_GET["num"] + 1 )   : 0 ; //controle de tela 
  $save_quest = isset($_GET["save_questao"]) ? $_GET["save_questao"]:'>'; // traz as respostas anteriores
  $var_cpf 	  = isset($_GET['cpf']) 	 	 ? $_GET['cpf'] 	    : ''; //faz login pela chave do cpf -- quando a busca do banco traz o cpf -- faz login automaticamente ()
  $cod        = isset($_GET["cod"])     	 ? $_GET["cod"]         : 0 ; //chama tela modal para buscar o cpf ; se o valor vir cod vir positovo do banco, nao achou nem um cpf -- 2 modal para cadastro de cpf
  
  if($cod) 
	  cpf_registro(); // funcao modal cpf
  
  if( ( isset($_GET["nome"]) ) && ( isset($_GET["save_questao"]) ) )
	 $save_quest .= $VETOR;  // junta a nova resposta as respostas anteriores
 
  if(isset($_GET['cpf']))
	  header("Location: ./operacoes.php?acao=login&cpf=".$var_cpf." "); // manda para o banco para validar o cpf

 
  
  /*
  $cod = 0;
  if(isset($_GET["cod"])) // chama tela modal para buscar o cpf
  {
    $cod = $_GET["cod"]; // se o valor vir cod vir positovo do banco, nao achou nem um cpf -- 2 modal para cadastro de cpf
    if($cod)
      cpf_registro(); // funcao modal cpf
  }

  $nome = '';
  if(isset($_GET["nome"])) // pega o nome pelo banco
    $nome = $_GET["nome"];

  $VETOR = '';
  if(isset($_GET["questao"])) // captura a respota do questionario
    $VETOR = $_GET["questao"];


  $save_quest = '>';
  if(isset($_GET["save_questao"]))
  {
    $save_quest = $_GET["save_questao"]; // traz as respostas anteriores
    $save_quest .= $VETOR;  // junta a nova resposta as anteriores
  }

  $num = 0; 			  // inicia na primeira tela
  if(isset($_GET["num"])) // NUM *** controle de tela -------
  {
    $num = $_GET["num"]; // pega o numero da tela anterior
    $num++;				// soma + 1 para a nova tela
  }

  $var_cpf = '';
  if(isset($_GET['cpf'])) //faz login pela chave do cpf -- quando a busca do banco traz o cpf -- faz login automaticamente ()
  {
    $var_cpf = $_GET['cpf'];
    header("Location: ./operacoes.php?acao=login&cpf=".$var_cpf." "); // manda para o banco para validar o cpf
  }


  $valid_cpf = '';
  if(isset($_GET['valid_cpf'])) // apos validado passa o cpf entre as telas pela url (cpf -> o mando que traz // var_cpf -> input que manda entre as telas)
    $valid_cpf = $_GET['valid_cpf'];

 $nota = '';
 if(isset($_GET['nota'])) // notas
	$nota = $_GET['nota'];

 $primary = '';
 if(isset($_GET['primary']))// id para savar chave no campo questionario no banco
    $primary = $_GET['primary'];
	
	*/
 ?>
<html lang=pt dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questionario</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/modal.css">
	
	<?php banner_head(); ?>

</head>
<body>
	
	<?php banner_body(); ?>
	
    <br>
    <div id="interface" style="padding-left: 10% ; padding-right:10%">
      <div id="intro-whatis" class="section" >
		<?php
			echo "<div style='border-style: solid; border-color: rgba(171, 211, 211, 0.3) ; padding-left: 10% ; padding-right:10%'><br/><br/>";

			if($num == 11) // segunda tela de controle - enviar para o banco ou nao enviar
      			echo salvar_banco($save_quest,$nome,$num,$gabarito,$primary);//	funcao que passa os valores para o banco

    		if($num > 13) // terceira tela de controle - mostrar resultado 
      			echo verifiq_quest($save_quest,$num,$gabarito,$nome,$nota); //	funcao que mostra acertos

    		if($num <= 10)// primeira tela de controle - menor que o total de questoes -- imprimir telas
      			echo questao($num,$save_quest,$nome,$valid_cpf,$cod,$primary); //	exibir cada questao

			echo "<br/></div>";
		?>
      </div>
   </div>
</body>
</html>
