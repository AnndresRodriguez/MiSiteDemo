<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <title>Andrés Rodríguez</title>
      <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
      <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
      <script src="css/bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet"  href="css/estilos-default.css">
      <link rel="stylesheet" href="css/estilossite.css">
      <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/mediaQueries.css">
      <!-- <link rel="stylesheet" href="css/styles.css"> -->
    </head>

    <body class="flexible">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  	<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="navbar-informacion__item item-who"><a href="#who">¿Quién es?</a></li>
		        <li class="navbar-informacion__item item-estudios"><a href="#estudios">Estudios</a></li>
		        <li class="navbar-informacion__item item-tecnologias"><a href="#tecnologias">Tecnologías</a></li>
		        <li class="navbar-informacion__item item-contacto"><a href="#contacto">Contacto</a></li>

		      </ul>
		    </div>
		 </div>
     </nav>

	<header class="header">
		<div class="flexible header__imagen">

			<div class="flexible  header__imagen-perfil">
			<img src="img/img-perfil-2.jpg" alt="imagenPerfil" class="img-responsive img-circle header__imagen-perfilUser"/>
			</div>
			
		   	<div class="flexible header__descripcion">
		   		
		    <h1 class="header__informacion--nombre">Andrés Rodríguez</h1>
		    <div class="header__informacion--descripcion">Ingeniero de Sistemas en formación (UFPS)</div>
		    <div class="container-glyphicon"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></div> 

		   	</div>
		    
		</div>
	</header>
	
	<section class="seccion-informacion" id="who">
		  <article class="section__article" >
		    	<div class="section--title">¿Quién es?</div>
		    	<h3 class="section__article--name">Andrés Joel Carrillo Rodríguez</h3>
			    <p>Nací el 6 de diciembre en la ciudad Bogotá donde viví mis primeros seis años, actualmente vivo en Cúcuta en donde terminé la primaria, secundaria y actualmente cursando sexto semestre en la Universidad Francisco de Paula Santander.</p>
				<p>Inicié en esto de la programación web desde el 2016 en donde por cuenta propia he aprendido de a poco las diversas tecnologías que se usan y quedé fascinado con ganas de aprender más de este mundo maravilloso.</p>			
		  </article>			
	</section>

	<section class="flexible seccion-tecnologias" id="tecnologias">
		 <div class="section--title">Tecnologías</div>
			
          <div class=" flexible container-tecnologias">


            <div class="flexible skills frontend">
				<div class="flexible container-skills">
					
					<div class="flexible container-skill">
				        <div class="circle-html5 circle--size circle--size-default"></div>
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/html5-30.png" class="img-skill">
				          <div class="imagen--nombre">Html-5</div>
				        </div>
				    </div>

				    <div class="flexible container-skill">
				        <div class="circle-css3 circle--size circle--size-default"></div>
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/css3-30.png" class="img-skill" class="img-css3">
				          <div class="imagen--nombre">CSS3</div>
				        </div>
				    </div>

				</div>

				<div class="flexible container-skills">
				    <div class="flexible container-skill">
				        <div class="circle-js circle--size circle--size-default"> </div>
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/js-30.png" class="img-skill">
				          <div class="imagen--nombre">Javascript</div>
				        </div>
				    </div>
				    <div class="flexible container-skill">
				       <div class="circle-jquery circle--size circle--size-default"></div>
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/jquery-30.png" class="img-skill" class="img-jquery">
				          <div class="imagen--nombre">JQuery</div>
				        </div>
				    </div>
				</div>
			  </div>



		     <div class="flexible skills backend">
					 	
			    <div class="flexible container-skills">
				    <div class="flexible container-skill">
				        <div class="circle-java circle--size circle--size-default"></div>
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/java-30.png" class="img-java">
				          <div class="imagen--nombre">Java</div>
				        </div>
				    </div>

				    <div class="flexible container-skill">
				        <div class="circle-php circle--size circle--size-default"></div> 
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/php-30.png" class="img-php">
				          <div class="imagen--nombre name-php">PHP</div>
				        </div>

				    </div>
			    </div>

			
                 <div class="flexible container-skills">

					<div class="flexible container-skill">
				        <div class="circle-laravel circle--size circle--size-default "></div>
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/laravel-30.png" class="img-laravel"><div class="imagen--nombre">Laravel</div>
				        </div>
				        <h5 class="sub-text">Iniciando...</h5>
				    </div>

				    <div class="flexible container-skill">
				       <div class="circle-mysql circle--size circle--size-default"></div>
				        <div class="flexible container-imagen-nombre">  
				          <img src="img/mysql-30.png" class="img-mysql"><div class="imagen--nombre">My-SQL</div>
				        </div>
				        <h5 class="sub-text">Iniciando...</h5>
				    </div>

                 </div>
			</div>

			 <div class="flexible skills herramientas">

			    <div class="flexible container-skills">

			      <div class="flexible container-skill">
			        <div class="circle-git circle--size circle--size-default"></div>
			        <div class="flexible container-imagen-nombre">  
			         <img src="img/git-30.png" class="img-skill">
			          <div class="imagen--nombre name-git">Git</div>
			        </div>
			      </div>

			       <div class="flexible container-skill">
			        <div class="circle-github circle--size circle--size-default"></div>
			        <div class="flexible container-imagen-nombre">  
			         <img src="img/github-30.png" class="img-skill">
			          <div class="imagen--nombre name-github">GitHub</div>
			        </div>
			      </div>
			    	
			    </div>


			    <div class="flexible container-skills">

			      <div class="flexible container-skill">
			        <div class="circle-bootstrap circle--size circle--size-default"></div>
			        <div class="flexible container-imagen-nombre">  
			         <img src="img/Bootstrap-30.png" class=" img-circle img-skill">
			          <div class="imagen--nombre name-bootstrap">Bootstrap</div>
			        </div>
			      </div>
			    	
			    </div>
			 </div>
     </div>
</section>

	<section class="flexible seccion-estudios" id="estudios">
		<div class="section--title title-estudios">Estudios</div>
		<div class="flexible seccion-estudios__items">
			<div class="flexible seccion-estudios__item" data-aos="fade-up" data-aos-offset="200">	
			<img src="img/colegio-gonzalo.jpeg" class="img-responsive img-circle img-seccion-estudios imagen--colegio">
			<article class="section__article">
					<div class="section__article--title" >Primaria y Secundaria</div>
			        <p class ="section__article--content" data-aos="fade-right" data-aos-offset="60"> 
			    	 Colegio <a href="https://gonzaloriveralaguado.edu.co/portal/" target="_blank" class="links-estudios">Gonzalo Rivera Laguado</a> <br>
			    	Av. 14 #1593, Cúcuta, Norte de Santander
				</p>
		    </article>	
		    </div>
			<div class="flexible seccion-estudios__item" data-aos="fade-up" data-aos-offset="200">	
				<img src="img/universidad.jpeg" class="img-responsive img-circle img-seccion-estudios imagen--universidad">
				<article class="section__article">
			    	<div class="section__article--title" >Educación Superior</div>
				    <p class ="section__article--content" data-aos="fade-left" data-aos-offset="60">
				    	 Universidad <a href="https://ww2.ufps.edu.co/" target="_blank" class="links-estudios">Francisco de Paula Santander</a> <br>
					     Avenida Gran Colombia No. 12E-96
					</p>
			    </article>
			</div>	
		</div>
	</section>

	<footer class="flexible footer" id="contacto">

		<div class="section--title title-redes">Redes Sociales</div>

		<div class=" flexible footer__redes-sociales">
			
			<div class="flexible footer__item" data-toggle="tooltip" data-placement="bottom" title="0 Followers"><i class="fa fa-facebook fa-4x" aria-hidden="true"></i><h5 class="footer__item--link">/Anndresjoel</h5></div>

			<div class="flexible footer__item" data-toggle="tooltip" data-placement="bottom" title="3.6k Followers"><i class="fa fa-twitter fa-4x" aria-hidden="true"></i> <a href="https://www.twitter.com/_Andrecho_/" target="_blank" class="footer__item--link"><h5>/_Andrecho_</h5></a></div>
			
			<div class="flexible footer__item" data-toggle="tooltip" data-placement="bottom" title="65 Followers"><i class="fa fa-instagram fa-4x" aria-hidden="true"></i><a href="https://www.instagram.com/_andrecho_/" target="_blank" class="footer__item--link"><h5>/_andrecho_</h5></a></div>

			<div class="flexible footer__item"  data-toggle="tooltip" data-placement="bottom" title="0 Suscribers"><i class="fa fa-youtube-play fa-4x" aria-hidden="true"></i><a href="https://www.youtube.com/channel/UC2c3rcHuMEj_BVDdzw8SSCA" target="_blank" class="footer__item--link"><h5>Andrés Rodríguez</h5></a></div>

			<div class="flexible footer__item" data-toggle="tooltip" data-placement="bottom" title="0 Followers"><i class="fa fa-github fa-4x" aria-hidden="true"></i><a href="https://github.com/AnndresRodriguez" target="_blank" class="footer__item--link"><h5>AnndresRodriguez</h5></a></div>	

		</div>

		<h6 class="footer--name">Andres Joel Carrillo Rodríguez 2016-2017</h6>

	</footer>

	
		<script src="js/plugins/jquery.waypoints.min.js"></script>
		<script src="js/plugins/circle-progress.min.js"></script>
		<script src="js/plugins/circle-progress.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script src="js/animations-circle.js"></script>
		<script src="js/plugins/prefix.js"></script>
		 <!-- <script src="js/animation.js"></script> -->
    </body>
</html>


