<?php
  include_once "banner_all.php";
?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>index</title>
    <link rel="stylesheet" href="css/cssProjeto.css">
	
	<?php banner_head(); ?>

  </head>
  <body>
   <?php banner_body(); ?>

    </div>
    <br>
    <div id="interface">
    <div id="intro-whatis" class="section">
   <div class="info"><h1 class="title">O que é o PHP?</h1></div>
   <p class="para">
    O <acronym title="PHP: Hypertext Preprocessor">PHP</acronym> (um acrônimo recursivo para <em>PHP: Hypertext
    Preprocessor</em>) é uma linguagem de script open source de uso geral, muito
    utilizada, e especialmente adequada para o desenvolvimento web
    e que pode ser embutida dentro do HTML.
   </p>
   <p class="para">
   <div class="info"><h1 class="title">Criador da linguagem</h1></div>
   <style>
   </style>

   
   <center><figure class="foto-legenda">
<img src="rasmus.jpg"style='height:450px'>
<figcaption>
  <br>
  <br>
  <br>
  <br>
  <p id="nameC">Rasmus Lerdorf</p>
  <p>Rasmus Lerdorf (Qeqertarsuaq, 22 de novembro de 1968) é um programador canadiano-dinamarquês. Ele é o autor da primeira versão da linguagem de programação PHP. Rasmus foi co-autor das versões seguintes do PHP, juntamente com os israelitas fundadores da Zend Technologies, Andi Gutmans e Zeev Suraski. Trabalhou de Setembro de 2002 a novembro de 2009 para a Yahoo!. Em 2012 anunciou no Twitter que iria começar a trabalhar na Etsy.</p>
   </p>
</figure></center>
   <br> 
   <br>
   
   <p class="para">
    <div class="example" id="example-1">
     <div class="info"><p><strong>Exemplo #1 Um exemplo introdutório</strong></p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">
&lt;!DOCTYPE&nbsp;HTML&gt;<br />&lt;html&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Exemplo&lt;/title&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">&lt;?php<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"Hello,&nbsp;World!"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">?&gt;<br /></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br />&lt;/html&gt;</span>
</code></div>
     </div>

    </div>
   </p>
   <p class="para">
    Em vez de muitos comandos para mostrar HTML (como acontece com C ou Perl),
    as páginas PHP contém HTML em código mesclado que faz
    &quot;alguma coisa&quot; (neste caso, mostra &quot;Olá, eu sou um script PHP!&quot;).
    O código PHP é delimitado pelas instruções de processamento
    (tags) de início e fim <code class="code">&lt;?php</code> e <code class="code">?&gt;</code></a>
    que permitem que você entre e saia do &quot;modo PHP&quot;.
   </p>
   <p class="para">
    O que distingue o PHP de algo como o JavaScript no lado do cliente
    é que o código é executado no servidor, gerando o HTML que
    é então enviado para o navegador. O navegador recebe
    os resultados da execução desse script, mas não sabe
    qual era o código fonte. Você pode inclusive configurar seu servidor web
    para processar todos os seus arquivos HTML com o PHP, e então não há como
    os usuários dizerem o que você tem na sua manga.
   </p>
   <p class="para">
    A melhor coisa em usar o PHP é que ele é extremamente simples
    para um iniciante, mas oferece muitos recursos avançados para
    um programador profissional. Não tenha medo de ler a longa
    lista de recursos do PHP. Pode entrar com tudo, o mais rápido que puder, e
    começar a escrever scripts simples em poucas horas.
   </p>
   
  
  
   <div class="info"><h1 class="title">O que o PHP pode fazer?</h1></div>
   <p class="para">
    Qualquer coisa. O PHP é focado principalmente nos scripts do lado do servidor,
    portanto, você pode fazer qualquer coisa que outro programa CGI pode fazer, como
    coletar dados de formulários, gerar páginas com conteúdo dinâmico ou
    enviar e receber cookies. Mas o PHP pode fazer muito mais.
   </p>
   <p class="para">
    Existem três áreas principais onde os scripts PHP são usados:
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Scripts no lado do servidor (server-side). Este é o mais tradicional
       e principal campo de atuação do PHP. Você precisa de três coisas
       para isto funcionar: o interpretador do PHP (CGI ou módulo do
       servidor), um servidor web e um navegador web. Você precisa
       rodar o servidor web conectado a uma instalação do PHP.
       Você pode acessar os resultados de seu programa PHP com um navegador web,
       visualizando a página PHP através do servidor web. Tudo isso pode
       rodar na sua máquina pessoal se você estiver apenas experimentando
       programar com o PHP. Veja a seção das
       instruções de instalação
       para mais informações.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Scripts de linha de comando. Você pode fazer um script PHP
       para executá-lo sem um servidor ou navegador.
       A única coisa necessária é o interpretador PHP.
       Esse tipo de uso é ideal para script executados
       usando o cron (Unix, Linux) ou o Agendador de Tarefas (no
       Windows). Esses scripts podem ser usados também para rotinas
       de processamento de texto simples. Veja a seção
       Utilizando o PHP em linha de comando
       para mais informações.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Escrever aplicações desktop. O PHP provavelmente
       não é a melhor linguagem para criação de aplicações
       desktop com interfaces gráficas, mas se você conhece
       bem o PHP, e gostaria de usar alguns dos
       seus recursos avançados nas suas aplicações do lado do cliente,
       você pode usar o PHP-GTK para escrever programas assim. Você também
       tem a possibilidade de escrever aplicações multi-plataformas desse
       jeito. O PHP-GTK é uma extensão do PHP, não disponibilizada na
       distribuição oficial. Caso esteja interessado
       no PHP-GTK, visite o
       site do projeto
      </span>
     </li>
    </ul>
   </p>
   <p class="para">
    O PHP pode ser utilizado na maioria dos sistemas operacionais, incluindo
    Linux, várias variantes do Unix (como HP-UX, Solaris e OpenBSD),
    Microsoft Windows, Mac OS X, RISC OS e provavelmente outros.
    O PHP também tem suporte à maioria dos servidores web atualmente. Isso
    inclui o Apache, o IIS e muitos outros. E isso inclui qualquer
    servidor web que possa utilizar o binário FastCGI do PHP, como o lighttpd
    e o nginx. O PHP trabalha tanto como módulo quanto como um processador CGI.
   </p>
   <p class="para">
    Com o PHP, portanto, você tem liberdade de escolha de sistema
    operacional e de servidor web. Além disso, você pode escolher entre
    utilizar programação estruturada ou programação orientada a
    objeto (OOP), ou ainda uma mistura das duas.
   </p>
   <p class="para">
    Com PHP você não está limitado a gerar somente HTML. As habilidades
    do PHP incluem geração de imagens, arquivos PDF e até animações Flash
    (utilizando libswf e Ming) criados dinamicamente, on the fly. Você pode
    facilmente criar qualquer texto, como XHTML e outros arquivos XML.
    O PHP pode gerar esses arquivos e salvá-los no sistema de arquivos,
    em vez de mostrá-los em tela, formando um cache no lado
    do servidor para seu conteúdo dinâmico.
   </p>
   <p class="para">
    Uma das características mais fortes e mais significativas do PHP é seu
    suporte a uma ampla variedade de banco de dados.
    Escrever uma página web consultando um banco de dados é incrivelmente simples usando uma das
    extensões específicas de banco de dados (por exemplo, mysql),
    ou usando uma camada de abstração como o PDO ou conectar
    a qualquer banco de dados que suporte o padrão &quot;Open Database Connection&quot; usando
    a extensão ODBC. Outros bancos de dados podem utilizar
    cURL ou sockets,
    como o CouchDB.
   </p>
   <p class="para">
    O PHP também tem suporte para comunicação com outros serviços utilizando protocolos
    como LDAP, IMAP, SNMP, NNTP, POP3, HTTP, COM (no Windows) e
    incontáveis outros. Você também pode abrir sockets de rede e
    interagir diretamente usando qualquer outro protocolo. O PHP também suporta o
    intercâmbio de dados complexos WDDX, utilizado em virtualmente todas as linguagens
    de programação para web. Falando de comunicação, o PHP implementa a
    instanciação de objetos Java e os utiliza transparentemente como
    objetos PHP.
   </p>
   <p class="para">
    O PHP tem recursos úteis para processamento de texto,
    incluindo expressões regulares compatíveis com Perl (PCRE),
    e muitas outras extensões e ferramentas para analisar e acessar documentos XML.
    O PHP padroniza todas as extensões XML a partir da base sólida da libxml2,
    além de estender o conjunto de recursos adicionando suporte a SimpleXML,
    XMLReader e XMLWriter.
   </p>
   <p class="para">
    E existem muitas outras extensões interessantes, que são categorizadas tanto
    alfabeticamente quanto por categoria.
    E existem também as extensões PECL adicionais que podem, ou não, estar documentadas
    dentro do próprio manual do PHP, como a XDebug.
   </p>
   <p class="para">
    Como você pode ver, esta página não é suficiente para descrever todos
    os recursos e benefícios que o PHP pode oferecer. Leia as
    seções sobre a Instalação do
    PHP, e veja a parte da referência das
    funções para detalhes sobre as extensões
    mencionadas aqui.
   </p>
 </div>
  </div>



  </body>
</html>
