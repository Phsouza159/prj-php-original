<?php
  
	function banner_body()
	{
		echo"
		<div id='navigation' style='background-color:#1E90FF;'>
		<nav class='navbar navbar-custom' role='navigation'>
			<div class='container'>
			<div class='row'>
				<div class='col-md-2'>
					<div class='site-logo'>
						<img src='img/php_logo.png' style='height:70px'>
					</div>
				</div>

				<div class='col-md-10'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#menu'>
							<i class='fa fa-bars'></i>
						</button>
					</div>

				<div class='collapse navbar-collapse' id='menu'>
                 <ul class='nav navbar-nav navbar-right'>
                   <li><a href='index.php'>Home</a></li>
                   <li><a href='pagina1.php'>Video</a></li>
                   <li><a href='formulario.php'>Formulario</a></li> 
                   <li><a href='listagem.php'>Listagem</a></li>
                   <li><a href='quest.php'>Questionario</a></li>
                 </ul>
				</div>

              </div>
             </div>
           </div>
         </nav>
       </div>
		";
	}  
	 
	function banner_head()
	{
		echo "
			<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
			<link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
			<link href='css/nivo-lightbox.css' rel='stylesheet' />
			<link href='css/nivo-lightbox-theme/default/default.css' rel='stylesheet' type='text/css' />
			<link href='css/owl.carousel.css' rel='stylesheet' media='screen' />
			<link href='css/owl.theme.css' rel='stylesheet' media='screen' />
			<link href='css/flexslider.css' rel='stylesheet' />
			<link href='css/animate.css' rel='stylesheet' />
			<link href='css/style.css' rel='stylesheet'>
			<link href='color/default.css' rel='stylesheet'>
			
			<script src='js/jquery.min.js'></script>
			<script src='js/bootstrap.min.js'></script>
			<script src='js/jquery.sticky.js'></script>
			<script src='js/custom.js'></script>
		";
	}
	
  function banner()
  {
	/*
	echo "
		<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
		<link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
		<link href='css/nivo-lightbox.css' rel='stylesheet' />
		<link href='css/nivo-lightbox-theme/default/default.css' rel='stylesheet' type='text/css' />
		<link href='css/owl.carousel.css' rel='stylesheet' media='screen' />
		<link href='css/owl.theme.css' rel='stylesheet' media='screen' />
		<link href='css/flexslider.css' rel='stylesheet' />
		<link href='css/animate.css' rel='stylesheet' />
		<link href='css/style.css' rel='stylesheet'>
		<link href='color/default.css' rel='stylesheet'>

		<div id='navigation' style='background-color:#1E90FF;'>
		<nav class='navbar navbar-custom' role='navigation'>
			<div class='container'>
			<div class='row'>
				<div class='col-md-2'>
					<div class='site-logo'>
						<img src='img/php_logo.png' style='height:70px'>
					</div>
				</div>

				<div class='col-md-10'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#menu'>
							<i class='fa fa-bars'></i>
						</button>
					</div>


				<div class='collapse navbar-collapse' id='menu'>
                 <ul class='nav navbar-nav navbar-right'>
                   <li><a href='index.php'>Home</a></li>
                   <li><a href='pagina1.php'>Video</a></li>
                   <li><a href='formulario.php'>Formulario</a></li> 
                   <li><a href='listagem.php'>Listagem</a></li>
                   <li><a href='quest.php'>Questionario</a></li>
                 </ul>
				</div>

              </div>
             </div>
           </div>
         </nav>
       </div>
     
		<script src='js/jquery.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<script src='js/jquery.sticky.js'></script>
		<script src='js/custom.js'></script>
    ";
	*/
  }
 ?>
