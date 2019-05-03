<!DOCTYPE html>
<?php
  include_once 'banner_all.php';
  include_once 'cadastro.php';
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title></title>
        <link rel='stylesheet' href='css/cssProjeto.css'>
        <link rel='css/bootstrap.css'>
		
		<?php banner_head(); ?>
    </head>
    <body>
        <?php
			//anexar banner
			//banner();
			banner_body();
		?>
  </br>
    <div id='interface' style='padding-top:25px;'>
      <?php
        cadastro("listagem");
      ?>
    </div>
    </body>
</html>
