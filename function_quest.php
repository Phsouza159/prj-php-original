<?php

function salvar_banco($save_quest,$nome,$num,$gabarito,$primary) // 1 tela apos as questoes -- salvar no banco ou voltar
{
  $respotas_vetor;
  $x = $y = 0;

  while($x < ($num - 1) ) // quebrar as questoes juntas em um vetor
	{
		if($save_quest[$y] != '>')// '>' delimitador de inicializacao
		{
	  	$respotas_vetor[$x] = $save_quest[$y];
	  	$y++;
	  	$x++;
		}
		else
	  	$y++;
  }
  $y = 0; // zerar y
  $save_quest = '>';// para zerar a variavel

  for ($x=0; $x < count($respotas_vetor) ; $x++)  // *** conferir resposta com o gabarito
	{
		if($respotas_vetor[$x] == $gabarito[$x])
	  	$y++; // armazena os acertos
		$save_quest .= $respotas_vetor[$x];
  }
  $acertos = $y;
  $erros = (10 - $acertos); // 10 numero de questoes

  echo "<center><div style='border: 1px solid;' class='p-3 mb-2 bg-info text-white'>Deseja Finalizar suas respostas?</div></center>";

  echo "</br></br><div style='border: 1px solid; widht: 50%'>";
  for( $y = 0 ; $y < 10 ; $y++) // mostrar respostas
  {
		echo "<div class='p-3 mb-2 bg-info text-white' style='padding-left: 50px;'>
				<p><b>A questao ".($y + 1).")</b> Foi: ".$respotas_vetor[$y]."</p>
		  	</div>";
  }
  echo "</div>";


  echo "</br><table><tr><td>";
  echo "
	<form action='operacoes.php?' method='get'>
	  <input type='hidden' name='acao' value='questao'>
		<input type='hidden' name='primary' value='".$primary."'>
	  <input type='hidden' name='acertos' value='".$acertos."'>
	  <input type='hidden' name='erros' value='".$erros."'>
	  <input type='hidden' name='nome' value='".$nome."'>
	  <input type='hidden' name='save_questao' value='".$save_quest."'>
	  <center><input type='submit' name='buttom_prox' id = 'enviar' value='Salvar' /></center>
	</form>
  "; //*** form que manda para o banco todas as informações para salvar

  echo "</td><td><form action='quest.php' method='get'>
			<input type='hidden' name='nome' value='".$nome."'>
			<center><input type='submit' name='buttom_prox' id = 'enviar' value='voltar' /></center>
		  </form>
		";// form para voltar

  echo "</td></tr></table>";
}


function questao($num,$save_quest,$nome,$valid_cpf,$cod,$primary) // imprimir cada tela conforme sua questao -- controle das telas $num
{
  switch ($num) {
	case '0': // modal que verifica o cpf
			echo"
			  <script type='text/javascript'>
			  <!-- jquery -->
			  <script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
			  <!-- bootstrap -->
			  <script type='text/javascript' src='js/bootstrap.js'></script>
			  <!-- chamada da função -->
			  <script type='text/javascript'>
			  $(window).load(function() {
				$('#exemplomodal').modal('show');
			  });
			</script>

			";
		  if(!$cod){ // manda para o banco para validar o cpf > retunr do banco $var_cpf caso exista o cpf informado
			echo "
			  <div class='modal fade' id='exemplomodal' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' data-backdrop='   static'>
				<div class='modal-dialog modal-lg' role='document'>
				  <div class='modal-content'>
					 <div class='modal-header'>
							 <h4 class='modal-title' id='gridSystemModalLabel'>Olá informe o seu CPF:</h4>
					  </div>
					  <div class='modal-body'>
						  <form action='quest.php'>
							CPF:<input type='text' name='cpf' value'' required='required'/>
							<input type='submit' class='btn btn-default' value='ENVIAR'>
						  </form>
					  </div>
			  </div>
		  </div>
		</div>
		";
		}
	  break;

	case '1':
		echo"
			<!-- QUESTAO 01 - minifeler-->
			<form action='quest.php' method='get'>
Nome no cadastro:<input type='text' name='nome' value='".$nome."' readonly='true'> </br>
</br>
</br> 1)Considere o seguinte código escrito em PHP:
<div style='border: 1px solid; widht: 50%'>
	<p>
		<center> \$j=50; </br> \$k=\$j; </br> \$s='k é igual a \$j'; </center>
	</p>
</div>
</br>
<p>O conteúdo da variável \$s é:</p>
<p>
	<label>
		<input type='radio' name='questao' value='A' required='required' /> A) k é igual a \$j.</label>
	<br/>
	<label>
		<input type='radio' name='questao' value='B' required='required' /> B) k é igual a 50.</label>
	<br/>
	<label>
		<input type='radio' name='questao' value='C' required='required' /> C) 50 é igual a 50.</label>
	<br/>
	<label>
		<input type='radio' name='questao' value='D' required='required' /> D) 50 é igual a \$j.</label>
	<br/>
	<label>
		<input type='radio' name='questao' value='E' required='required' /> E) False.</label>
	<br/>
	<input type='hidden' name='primary' value='".$primary."'>
	<input type='hidden' name='save_questao' value='".$save_quest."'>
	<input type='hidden' name='num' value='".$num."'>
	<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
	<center>
		<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
	</center>
</form>
		";
	  break;

  case '2':
		echo "
		<!-- QUESTAO 02 - minifeler-->
	<form action='quest.php' method='get'>
	2) Marcos está desenvolvendo uma aplicação web PHP utilizando o WAMPServer. Como está utilizando um banco de dados MySQL, escolheu uma função para enviar uma consulta ou comando SQL (por exemplo, os comandos select, insert ou delete) para o banco de dados ativo. A função correta escolhida foi:
		<p>
			<br/>
			<label>
				<input type='radio' name='questao' value='A' required='required' /> A) mysql_fetch_array.</label>
			<br/>
			<label>
				<input type='radio' name='questao' value='B' required='required' /> B) mysql_query.</label>
			<br/>
			<label>
				<input type='radio' name='questao' value='C' required='required' /> C) mysql_update.</label>
			<br/>
			<label>
				<input type='radio' name='questao' value='D' required='required' /> D) mysql_execute_stmt.</label>
			<br>
			<label>
				<input type='radio' name='questao' value='E' required='required' /> E) mysql_stmt_start.</label>
			<br/>
			<br>
			<input type='hidden' name='primary' value='".$primary."'>
			<input type='hidden' name='nome' value='".$nome."'>
			<input type='hidden' name='save_questao' value='".$save_quest."'>
			<input type='hidden' name='num' value='".$num."'>
			<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
			<center>
				<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
			</center>
	</form>
		";
		break;

  case '3':
		echo "
			<!-- QUESTÃO 3 -->
			<form action='quest.php' method='get'>

			3) Na linguagem PHP é possível utilizar o protocolo SOAP por meio de classes desenvolvidas especificamente para esse protocolo. A classe que fornece acesso cliente aos servidores SOAP é chamada de:

				<br/>
				<br/>
				<p>
					<label>
						<input type='radio' name='questao' value='A' required='required' /> A) mysql_fetch_array.</label>
					<br/>
					<label>
						<input type='radio' name='questao' value='B' required='required' /> B) mysql_query.</label>
					<br/>
					<label>
						<input type='radio' name='questao' value='C' required='required' /> C) mysql_update.</label>
					<br/>
					<label>
						<input type='radio' name='questao' value='D' required='required' /> D) mysql_execute_stmt.</label>
					<br>
					<label>
						<input type='radio' name='questao' value='E' required='required' /> E) mysql_stmt_start.</label>
					<br/>
					<br>
					<input type='hidden' name='primary' value='".$primary."'>
					<input type='hidden' name='nome' value='".$nome."'>
					<input type='hidden' name='save_questao' value='".$save_quest."'>
					<input type='hidden' name='num' value='".$num."'>
					<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
					<center>
						<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
					</center>
			</form>
		";
	   break;

  case '4':
		echo "
			<!-- QUESTÃO 4 -->
	<form action='quest.php' method='get'>

	4) Considere a linguagem de programação PHP, e que você dispõe de duas arrays, uma com a sigla dos estados e outra com o nome dos estados por extenso. Você precisa usar uma função para gerar uma terceira que será composta das siglas dos estados como chave e os nomes por extenso como valores:
	<br>
	<br>Identifique a opção que resolve esse problema:
	<br/>
	<br/>
	<p>
		<label>
			<input type='radio' name='questao' value='A' required='required' /> A) \$siglas=array(“SC”,”PR”,”RS”);
			<br/>\$nome_estados=array(“Santa Catarina”,”Paraná”,”Rio Grande do Sul”);
			<br/>\$resultado=array_slice(\$nome_estados,\$siglas);
			<br/>
		</label>
		<br/>
		<br/>
		<label>
			<input type='radio' name='questao' value='B' required='required' /> B) \$siglas=array(“SC”,”PR”,”RS”);
			<br/>\$nome_estados=array(“Santa Catarina”,”Paraná”,”Rio Grande do Sul”);
			<br/>\$resultado=array_merge(\$siglas,\$nome_estados);
			<br/>
		</label>
		<br/>
		<br/>
		<label>
			<input type='radio' name='questao' value='C' required='required' /> C) \$siglas=array(“SC”,”PR”,”RS”);
			<br/>\$nome_estados=array(“Santa Catarina”,”Paraná”,”Rio Grande do Sul”);
			<br/>\$resultado=array_merge(\$nome_estados,\$siglas);
			<br/>
		</label>
		<br/>
		<br/>
		<label>
			<input type='radio' name='questao' value='D' required='required' /> D) \$siglas=array(“SC”,”PR”,”RS”);
			<br/>\$nome_estados=array(“Santa Catarina”,”Paraná”,”Rio Grande do Sul”);
			<br/>\$resultado=array_combine(\$siglas,\$nome_estados);
			<br/>
		</label>
		<input type='hidden' name='primary' value='".$primary."'>
		<input type='hidden' name='nome' value='".$nome."'>
		<input type='hidden' name='save_questao' value='".$save_quest."'>
		<input type='hidden' name='num' value='".$num."'>
		<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
		<center>
			<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
		</center>
</form>
		";
	   break;

  case '5':
		echo "
			<!-- QUESTÃO 5 -->
			<form action='quest.php' method='get'>
5) Um dos principais aperfeiçoamentos do modelo orientado a objeto do PHP na versão 5 é o tratamento de todos os objetos como referências ao invés de valores. Porém, como criar uma cópia de um objeto se todos os objetos são tratados como referências?
<br>Identifique a alternativa que responde a pergunta acima:<br/><br/>
<p>
<label>
	<input type='radio' name='questao' value='A' required='required' /> A) objetoDestino -> clone objetoInicial;.</label>
<br/>
<label>
	<input type='radio' name='questao' value='B' required='required' /> B) objetoDestino=clone objetoInicial;</label>
<br/>
<label>
	<input type='radio' name='questao' value='C' required='required' /> C) objetoDestino=\$this->ObjetoInicial;</label>
<br/>
<label>
	<input type='radio' name='questao' value='D' required='required' /> D) objetoDestino >=clone objetoInicial;</label>
<br>
<br>
<input type='hidden' name='primary' value='".$primary."'>
<input type='hidden' name='nome' value='".$nome."'>
<input type='hidden' name='save_questao' value='".$save_quest."'>
<input type='hidden' name='num' value='".$num."'>
<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
<center>
	<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
</center>
</form>

		";
		break;

  case '6':
		echo "
			<!-- QUESTÃO 6 -->
			<form action='quest.php' method='get'>
				6) Considere a linguagem de programação PHP e seus operadores. A execução da sentença:<br/><br/>
				<p>
					<label>
						<input type='radio' name='questao' value='A' required='required' /> A) (A !=B) retorna falso (false), considerando as variáveis A e B inicializadas com os valores 3 e 6, respectivamente.</label>
					<br/>
					<label>
						<input type='radio' name='questao' value='B' required='required' /> B) (A %=B) atribui o valor 3 (três) para a variável A, considerando as variáveis A e B inicializadas com os valores 10 e 3, respectivamente.\$resultado=array_merge(\$siglas,\$nome_estados);</label>
					<br/>
					<label>
						<input type='radio' name='questao' value='C' required='required' /> C) (A .=B) concatena o conteúdo das variáveis A e B e armazena o conteúdo em A. \$resultado=array_merge(\$nome_estados,\$siglas);</label>
					<br/>
					<label>
						<input type='radio' name='questao' value='D' required='required' /> D) !(A==B) retorna falso (false), considerando as variáveis A e B inicializadas com os valores 3 e 6, respectivamente.</label>
					<br>
					<input type='radio' name='questao' value='E' required='required' /> E) (A===B) compara somente os tipos das variáveis A e B
					<br>
					<br>
					<input type='hidden' name='primary' value='".$primary."'>
					<input type='hidden' name='nome' value='".$nome."'>
					<input type='hidden' name='save_questao' value='".$save_quest."'>
					<input type='hidden' name='num' value='".$num."'>
					<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
					<center>
						<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
					</center>
			</form>
		";
		break;

  case '7':
		echo "
		<!-- QUESTÃO 7 -->
		<form action='quest.php' method='get'> 7) Analise os exemplos de criação de array em PHP.
			<br>
			<br>I. \$idade=array('Paulo'=>32, 'Pedro'=>30, 'Ana'=>34);
			<br>II. \$familia=array('Jorge'=>array('Angela','Iracema', 'Bia'),'Pedro'=>array('Ana'));
			<br>III. \$nome[0]='Paulo'; \$nome[1]='Pedro'; \$nome[2]='Ana';
			<br>IV. \$idade['Paulo']='32'; \$idade['Pedro']='30'; \$idade['Ana']='34';<br/>
			<br>Representam exemplos corretos de criação de array os itens:<br/><br/>
			<br>
			<p>
				<label>
					<input type='radio' name='questao' value='A' required='required' /> A) I, II, III e IV.</label>
				<br/>
				<label>
					<input type='radio' name='questao' value='B' required='required' /> B) III e IV, apenas.</label>
				<br/>
				<label>
					<input type='radio' name='questao' value='C' required='required' /> C) I e II, apenas.</label>
				<br/>
				<label>
					<input type='radio' name='questao' value='D' required='required' /> D) I, III e IV, apenas.</label>
				<br>
				<br>
				<input type='hidden' name='primary' value='".$primary."'>
				<input type='hidden' name='nome' value='".$nome."'>
				<input type='hidden' name='save_questao' value='".$save_quest."'>
				<input type='hidden' name='num' value='".$num."'>
				<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
				<center>
					<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
				</center>
			</form>
		";
		break;

  case '8':
		echo "
<!-- QUESTAO 08 -->
<form action='quest.php' method='get'>
8) Assinale a opção que corresponde à sintaxe CORRETA de um programa desenvolvido na linguagem PHP:<br/><br/>
<br>
<p>
	<label>
		<input type='radio' name='questao' value='A' required='required' /> A) &lt;?php
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;p&gt;Olá Mundo&lt;p&gt;' ;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;? &gt; </label>
	<br/>
	<label>
		<input type='radio' name='questao' value='B' required='required' /> B) &lt;begin php
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;p&gt;Olá Mundo&lt;p&gt;' ;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end&gt; </label>
	<br/>
	<label>
		<input type='radio' name='questao' value='C' required='required' /> C) &lt;?php
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;p&gt;Olá Mundo&lt;p&gt;' ;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/php&gt; </label>
	<br/>
	<label>
		<input type='radio' name='questao' value='D' required='required' /> D) &lt;?php{
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;p&gt;Olá Mundo&lt;p&gt;' ;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&gt; </label>
	<br>
	<br>
	<input type='hidden' name='primary' value='".$primary."'>
	<input type='hidden' name='nome' value='".$nome."'>
	<input type='hidden' name='save_questao' value='".$save_quest."'>
	<input type='hidden' name='num' value='".$num."'>
	<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
	<center>
		<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
	</center>
</form>
";
		break;

  case '9':
		echo "
		<!-- QUESTAO 09 -->
		<form action='quest.php' method='get'> 9) Na linguagem PHP, são delimitadores de script os itens abaixo, EXCETO:<br/><br/>
			<br>
			<p>
				<label>
					<input type='radio' name='questao' value='A' required='required' /> A) &lt;?php
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comandos;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;? &gt;; </label>
				<br/>
				<label>
					<input type='radio' name='questao' value='B' required='required' /> B) &lt;php
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comandos;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/php&gt;; </label>
				<br/>
				<label>
					<input type='radio' name='questao' value='C' required='required' /> C) &lt;script language=“php”&gt;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comandos;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/script&gt; </label>
				<br/>
				<label>
					<input type='radio' name='questao' value='D' /> D) &lt;%
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comandos;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%&gt;; </label>
				<br>
				<label>
					<input type='radio' name='questao' value='E' required='required' /> E) &lt;?
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comandos;
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&gt;. </label>
				<br>
				<br>
				<input type='hidden' name='primary' value='".$primary."'>
				<input type='hidden' name='nome' value='".$nome."'>
				<input type='hidden' name='save_questao' value='".$save_quest."'>
				<input type='hidden' name='num' value='".$num."'>
				<input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
				<center>
					<input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
				</center>
		</form>
		";
		break;

  case '10':
		echo "
		<!-- QUESTÃO 10 -->
<form action='quest.php' method='get'>
				10) Identifique com V as afirmativas verdadeiras e com F, as falsas.<br/>
				<br>
				( ) Na versão 5, PHP é uma linguagem orientada para objetos.<br/>
			( ) PHP é uma linguagem interpretada.<br/>
			( ) É possível fazer uso de conexão a servidores LDAP, através da Linguagem PHP.<br/>
			<br>
			A alternativa que contém a sequência correta, de cima para baixo, é a:
			<br>


				<p>
				<label>
				<input type='radio' name='questao' value='A' required='required' /> A) V V V
		</label>
				<br />
				<label>
				<input type='radio' name='questao' value='B' required='required' /> B) V V F
		</label>
				<br />
				<label>
				<input type='radio' name='questao' value='C' required='required' /> C) V F F
		</label>
				<br />
				<label>
				<input type='radio' name='questao' value='D' required='required' /> D) V F V
		</label>
				<br>
				<label>
				<input type='radio' name='questao' value='E' required='required' /> E) F F F
		</label><br><br>
		<input type='hidden' name='primary' value='".$primary."'>
		<input type='hidden' name='nome' value='".$nome."'>
		<input type='hidden' name='save_questao' value='".$save_quest."'>
	   <input type='hidden' name='num' value='".$num."'>
	   <input type='hidden' name='valid_cpf' value='".$valid_cpf."'>
	   <center>
		   <input type='submit' name='buttom_prox' id='enviar' value='Próxima' />
	   </center>
	   </form>

		";
		break;

	  default:
	  break;
  }
}

function verifiq_quest($save_quest,$num,$gabarito,$nome,$nota)// mostra as questoes certas e as erradas
{
  $respotas_vetor;
  $x = $y = 0;

  while($x < 10 ) {
	if($save_quest[$y] != '>')
	{
	  $respotas_vetor[$x] = $save_quest[$y];
	  $y++;
	  $x++;
	}
	else
	  $y++;
  }
  echo "<h1>Olá <font color='green'>".$nome."</font> sua nota foi <b>".$nota."/10</b>, com as respostas de cada questão:</h1>";
  
  echo "<center><h2><br/>Com ".$nota." acertos e ".(10 - $nota)." erros.</h2></center>";
  
  for ($x = 0; $x < 10 ; $x++) { // - 2 pelas telas de controle , 1 para salvar no banco e outra das respostas
	echo "<div style='border: 1px solid;padding-left:50px;' class='";
			if($gabarito[$x] == $respotas_vetor[$x]) // verde para acerto
			  echo "p-3 mb-2 bg-success text-white'></br><b>Questao ".($x + 1).")</b> A sua resposta foi: <b>".$respotas_vetor[$x]."</b></br></div>";
			else // vermelho para erro
			  echo "p-3 mb-2 bg-danger text-white'></br><b>Questao ".($x + 1).")</b> A sua resposta foi: ".$respotas_vetor[$x].".</br> A resposta correta é: <b>".$gabarito[$x]."</b></br></div>";
  }

  echo "</br><a href='quest.php'>Voltar a tela do questionario<a/>";
  echo "<a href='ranking.php' style='float: right'>Ranking notas<a/>";
  
  
  echo "</br></br></br>";
}

function cpf_registro() // caso nao exista o cpf informado no banco -- chama a funcao de cadastro
{
  echo "
	<div class='modal fade' id='exemplomodal' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' data-backdrop='static'>
	  <div class='modal-dialog modal-lg' role='document'>
		<div class='modal-content'>
		   <div class='modal-header'>
				   <h4 class='modal-title' id='gridSystemModalLabel'>CPF nao cadastrado:</h4>
			</div>
			<div class='modal-body'>
				<form action='quest.php'>
				  tentar novamente:</br>
				  CPF:<input type='text' name='cpf' value'' required='required'/>
				  <input type='submit' class=' btn-default' value='ENVIAR'>
				</form>

				</hr></br><h5>Para cadastra novo CPF:</h5><div style='border: 1px solid'>

				";
				cadastro("quest");//funcao de cadastro da pg do cadastro
				echo "</br></div>
			</div>
	</div>
</div>
</div>
";
}
?>
