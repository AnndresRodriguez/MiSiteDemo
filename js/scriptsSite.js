
$(document).ready(function(){

	var articulo = $(".section__article");


	$("#aside").on('click', 'li', function(e){

		e.preventDefault();

		var id = $(this).attr("id");
		articulo.empty();

		if(id=="inicio"){
			
			articulo.append("<h2 id='info'>¿Quién es?</h2><p id ='contenido'><h3>Andres Joel Carrillo Rodríguez</h3>Nacido el 6 de diciembre de 1995 en la ciudad de Bogotá, vivió sus primeros 6 años en esa ciudad en donde alcanzó a cursar primer y segundo grado, debido a que su padre trabajaba en la ciudad de Cúcuta tuvo que viajar con su madre, en esta ciudad en la que vive actualmente hizo primaria, secundaria y actualmente cursa quinto/sexto semestre de Ingeniería de Sistemas.").animate({left:'0'}, 400).css('property', 'value');;
		}

		if(id=="informacion"){
			
			articulo.append("<h2 id='info'>Información</h2><p id='contenido'>Aquí debería ir información mía, gustos musicales, hobbies, comida favorita, equipo de fútbol que me gusta, bueno y otras cosas más.</p>");
		}

		if(id=="estudios"){
			articulo.append("<h2 id='info'>Estudios</h2><p id='contenido'>1° y 2° grado - Colegio <a href='http://gelsondairg.wixsite.com/colegioperiodistas/introduccion' target='_blank'> Los Periodistas</a> (Site no oficial) Bogotá, Colombia.<br>3° a 5° grado - Colegio <a href='http://www.colsacor.edu.co/home/inicio/index.jsp' target='_blank'> Sagrados Corazaones</a> (Sede Páramo) Cúcuta, Colombia.<br>6° a 11° grado - Colegio <a href='https://gonzaloriveralaguado.edu.co/portal/' target='_blank'> Gonzalo Rivera Laguado</a> Cúcuta, Colombia.<br>5°/6° Semestre Ingeniería de Sistemas (Actualmente) - Universidad <a href='https://ww2.ufps.edu.co/' target='_blank'> Francisco de Paula Santander</a> Cúcuta, Colombia.</p>").animate({left:'0'}, 400);;
		}

		if(id=="musica"){
			
			articulo.append("<h2 id='info'>Esto no lo he programado aún :)</h2><p id='contenido'>Aquí pienso hacer una playlist editable con las canciones que me gustan actualmente.</p>");
		} 
		if(id=="fotos"){
			
			articulo.append("<h2 id='info'>Esto no lo he programado aún :)</h2><p id='contenido'>Aquí pienso hacer una galería editable en la que pueda eliminar y subir fotos lo quiero hacer con ajax, pero primero debo aprender ajax jeje.</p>");
		}

		if(id=="contacto"){
			
			articulo.append("<h2 id='info'>Contacto:</h2><p id='contenido'><address><h3>Redes Sociales</h3>Facebook: Andrés Rodríguez<br>Twitter: <a href='https://twitter.com/_Andrecho_' target='_blank'> @_Andrecho_</a><br>Instagram:<a href='https://www.instagram.com/_andrecho_/' target='_blank'> _andrecho_</a><br>Gmail: andresjoe24@gmail.com<br>Youtube:<a href='https://www.youtube.com/channel/UC2c3rcHuMEj_BVDdzw8SSCA' target=_blank > Andrés Rodríguez</a><br>GitHub: <a href='https://github.com/AnndresRodriguez' target='_blank'> Andrés Rodríguez</a><br><br><h3>Número Celular</h3>3102584187</address></p>");
		}

		if(id=="acercade"){
			
			articulo.append("<h2 id='info'>Acerca de...</h2><p id='contenido'>Esta página fue creada con conocimientos básicos/medios en CSS, HTML, JavaScript, php al igual que la librería JQuery y el framework Bootstrap, Esta página cuenta con diseño responsive, se puede ver desde cualquier dispósitivo móvil. :)<br>La he hecho para practicar conocimientos adquiridos desde inicios de diciembre del 2016 en el momento que decidí entrar en el mundo del diseño web. Quizá no sea la más profesional pero se irá modificando a medida que voy aprendiendo. :)</p>");
		}     
	}
);
});







