<!DOCTYPE HTML>
<html>
	<head>
		<title>Centro Médico Argelia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets2/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="static/main.css" />
    	<!-- <link rel="stylesheet" href="assets2/css/main.css" /> -->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets2/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets2/css/ie8.css" /><![endif]-->
		<!-- <link rel="stylesheet" href="style.css"> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> <!--css de 3d-->
		<!--	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		css de blog, para las columnas del sutitulo 3d pero arruina lo demas, por eso comentado esta-->
	</head>
	<body>
		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">HOME</a></li>
							<!-- <li><a href="#one">Articulos</a></li>
							<li><a href="#two">PROYECTOS</a></li> -->
							<li><a href="#threee">PREDICCIÓN</a></li>
							<li><a href="#footer">CONTACTO</a></li>
						</ul>
					</nav>
				</div>
			</section>

			<!-- Wrapper -->
				<div id="wrapper">
				<!-- Intro -->
				<section id="intro" class="wrapper style1 fullscreen fade-up">
					<div class="inner">
						<h1></h1>
						<img src="/static/centromedico.png" alt="" width="1000px"> 
						<p class="text-light">Medicina |  Odontología |  Laboratorio |  Ecografía <!--<a href="http://html5up.net">HTML5 UP</a>--><!--<br />
						and released for free under the <a href="http://html5up.net/license">Creative Commons</a>.</p>-->
						<!-- <ul class="actions">
							<li><a href="/AwesomeProject/public/home" class="button scrolly">Aprende Más</a></li>
						</ul> -->
            <h2 class="text-light">{{ prediction_text }}</h2>
					</div>
				</section>
			
				<section id="threee" class="wrapper style1 fade-up">
         
					
						<!-- <h1 class="text-light">ML API SECUENCIAS LESION ELECTRICA </h1> -->
						
						
				
					<div class="inner">
						
						 <h1 class="tex" style="color: rgb(196, 26, 26);">SISTEMA DE PREDICCIÓN DE PROBLEMAS CARDIACOS POST LESION ELÉCTRICA</h1>
						  
						<p style="color:black">Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
						
						<div class="split style1">
							<section>
								<!-- <form method="post" action="#">	 -->
                  <form action="{{ url_for('predict')}}"method="post">
									<!-- <select name="form-control" size="3">
										<option value="Visa">Visa</option>
										<option value="Mastercard">Mastercard</option>
										<option value="American Express">American Express</option>
										</select> -->
										<div class="12u$">
                      
                    <label class="text-light" for="temp_min">Edad</label>
											<div class="select-wrapper">
												<select name="edad" id="edad" value="{{ request.form['Edad'] }}">  
													<option value="1">0-4</option>
													<option value="2">5-11</option>
													<option value="3">12-17</option>
													<option value="4">18-24</option>
													<option value="5">25-34</option>
                          <option value="6">35-49</option>
                          <option value="7">50-69</option>
                          <option value="8">70-100</option>
												</select>
											</div>
                      <label class="text-light" for="temp_min">Genero</label>
                      <div class="select-wrapper">
												<select name="Genero" id="genero" value="{{ request.form['Sexo'] }}" >
													<option value="0">Femenino</option>
													<option value="1">Masculino</option>
												</select>
											</div>
                       <label class="text-light" for="temp_min">Peso</label>
                      <div class="select-wrapper">
												<select name="Peso" id="peso" value="{{ request.form['Peso'] }}">
													<option value="1">15-29</option>
													<option value="2">30-49</option>
													<option value="3">50-59</option>
													<option value="4">60-69</option>
													<option value="5">70-79</option>
                          <option value="6">80-89</option>
													<option value="7">90-100</option>
												</select>
											</div>
                      <label class="text-light" for="temp_min">Punto de entrada en la piel</label>
                      <div class="select-wrapper">
												<select name="Entrada" id="entrada" value="{{ request.form['Entrada'] }}" >
													<option value="1">Mano</option>
													<option value="2">Pie</option>
													<option value="3">Cabeza</option>
												</select>
											</div>
                        <label class="text-light" for="temp_min">Voltaje</label>
                      <div class="select-wrapper">
												<select name="Voltaje" id="voltaje" value="{{ request.form['Voltaje'] }}" >
													<option value="1">0-4</option>
													<option value="2">5-9</option>
													<option value="3">10-14</option>
													<option value="4">15-29</option>
													<option value="5">30-49</option>
                          <option value="6">50-79</option>
													<option value="7">80-109</option>
													<option value="8">110-199</option>
													<option value="9">200-39</option>
													<option value="10">240-379</option>
                          <option value="11">380-499</option>
													<option value="12">110-199</option>
													<option value="13">500-999</option>
													<option value="14">1000-2000</option>
												</select>
											</div>
                        <label class="text-light" for="temp_min">Tipo de corriente</label>
                      <div class="select-wrapper">
												<select name="TipoCorriente" id="tipoCorriente" value="{{ request.form['TipoCorriente'] }}"  >
													<option value="0">Corriente Alterna (AC)</option>
													<option value="1">Corriente Continua (CC)</option>
													</select>
											</div>
                      
                      <label class="text-light" for="temp_min">Proteccion en el area de entrada</label>
                      <div class="select-wrapper">
												<select name="Proteccion" id="proteccion" value="{{ request.form['Proteccion'] }}" >
													<option value="0">No</option>
													<option value="1">Si</option>
												</select>
											</div>
                        <label class="text-light" for="temp_min">Enfermedad base</label>
                      <div class="select-wrapper">
												<select name="Enfermedad" id="enfermedad" value="{{ request.form['Enfermedad'] }}"  >
													<option value="4">Ninguno</option>
  	                      <option value="0">Asma</option>
                        	<option value="1">Cardiovascular</option>
													<option value="2">Diabetes</option>
													<option value="3">EPOC</option>
													<option value="5">Obesidad</option>
												</select>
											</div>
                      <label class="text-light" for="temp_min">Tiempo de contacto</label>
                      <div class="select-wrapper">
												<select name="Tiempo" id="tiempo" value="{{ request.form['Tiempo'] }}">
													<option value="1">0-2</option>
													<option value="2">3-4</option>
													<option value="3">5-9</option>
													<option value="4">10-19</option>
													<option value="5">20-29</option>
                          <option value="6">30-59</option>
													<option value="7">60-89</option>
													<option value="8">90-119</option>
													<option value="9">120-179</option>
                          <option value="10">180-239</option>
													<option value="11">240-420</option>
												</select>
											</div>
                      <label class="text-light" for="temp_min">Estado de la piel</label>
                      <div class="select-wrapper">
												<select name="Piel" id="piel" value="{{ request.form['Piel'] }}">
													<option value="2">Seca</option>
                          <option value="0">Humeda</option>
													<option value="1">Mojada</option>
													
												</select>
											</div>
                      <label class="text-light" for="temp_min">Tension</label>
                      <div class="select-wrapper">
												<select name="Amperaje" id="amperaje" value="{{ request.form['Amperaje'] }}" >
													<option value="1">0-9</option>
													<option value="2">10-14</option>
													<option value="3">15-24</option>
													<option value="4">25-49</option>
													<option value="5">50-199</option>
                          <option value="6">200-999</option>
                          <option value="7">1000-5000</option>
												</select>
											</div>
							  <!-- <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">CreditScore</label>
							  <input  class="form-control" type="text" style="color:black"  name="CreditScore" placeholder="Temp_min" required="required" value="{{ request.form['CreditScore'] }}"  /> -->
							  <!-- <label style="color:rgb(216, 215, 216)"  class="text" for="temp_min">Geography</label>
							  <input  class="form-control" type="text"style="color:black"  name="Geography" placeholder="Temp_max" required="required" value="{{ request.form['Geography'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">Gender</label>
							  <input class="form-control" type="text" style="color:black" name="Gender" placeholder="Rainfall" required="required" value="{{ request.form['Gender'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">Age</label>
							  <input class="form-control" type="text" style="color:black" name="Age" placeholder="Evaporation" required="required" value="{{ request.form['Age'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">Tenure</label>
							  <input class="form-control" type="text" style="color:black" name="Tenure" placeholder="Sunshine" required="required" value="{{ request.form['Tenure'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">Balance</label>
							  <input class="form-control"  type="text"style="color:black"  name="Balance" placeholder="Withering_time" required="required" value="{{ request.form['Balance'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">NumOfProducts</label>
							  <input class="form-control" type="text" style="color:black" name="NumOfProducts" placeholder="Cumulative_rolling_time" required="required" value="{{ request.form['NumOfProducts'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">HascrCard</label>
							  <input type="text" class="form-control" style="color:black"  name="HasCrCard" placeholder="Fermentation_time" required="required" value="{{ request.form['HasCrCard'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">IsActivedMember</label>
							  <input type="text"class="form-control"  style="color:black" name="IsActiveMember" placeholder="Drying_time" required="required" value="{{ request.form['IsActiveMember'] }}"  />
							  <label style="color:rgb(216, 215, 216)" class="text" for="temp_min">EstimedSalary</label>
							  <input type="text"class="form-control"  style="color:black" name="EstimatedSalary" placeholder="Drying_time" required="required" value="{{ request.form['EstimatedSalary'] }}"  />
							  <label style="color:rgb(216, 215, 216)"  class="text" for="temp_min">Exited</label>
							  <input type="text"class="form-control"  style="color:black" name="Exited" placeholder="Drying_time" required="required" value="{{ request.form['Exited'] }}"  /> -->
								 <br>
							  <button class="btn btn-primary" type="submit" class="btn btn-primary btn-block btn-large">Predict</button>
									<!-- <ul class="actions">
										<li><a href="" class="button submit">Send Message</a></li>
									</ul> -->
									<h2 style="color:black">{{ prediction_text }}</h2>
								</form>
							</section>
							<!-- <section> -->
								<!-- <ul class="contact">
									<li>
										<h3>Dirección</h3>
										<span> Z. Las Delicias Av. Argelia #023<br />
										La Paz - El Alto, <br />
										Bolivia</span>
									</li> -->
									<!-- <li>
										<h3>Email</h3>
										<a href="#">user@untitled.tld</a>
									</li> -->
									<!-- <li>
										<h3>Teléfonos</h3>
										<span>(591) 65691510<br />
											(591) 70558962</span>
										
									</li>
									<li>
										<h3>Social</h3>
										<ul class="icons"> -->
											<!-- <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li> -->
											<!-- <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li> -->
											<!-- <li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
											<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li> -->
										<!-- </ul>
									</li>
								</ul> -->
							<!-- </section> -->
						</div>
					</div>
				</section>

				

			<!-- Footer -->
				<footer id="footer" class="wrapper style1-alt">
				<div class="row"  style="padding: 5%;" >
					<div class="col-md-6">
					<ul class="contact">
						<li>
							<h3>Dirección</h3>
							<span style="color: cornsilk;"> Z. Las Delicias Av. Argelia #023<br />
							La Paz - El Alto, Bolivia</span>
							<br /><br />
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.5212874582166!2d-68.20046128513508!3d-16.550248188585286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915ededb99aac515%3A0xed5c2793b355ab65!2sCentro%20Medico%20%C2%ABARGELIA%C2%BB%20S.R.L.!5e0!3m2!1ses!2sbo!4v1626455198660!5m2!1ses!2sbo" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

						</li>
						<!-- <li>
							<h3>Email</h3>
							<a href="#">user@untitled.tld</a>
						</li> -->
						
						
					
							
					
					</div>
					<div class="col-md-6">
						
						
							<h3>Social</h3>
							<ul class="icons">
								<!-- <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li> -->
								<!-- <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li> -->
								<!-- <br /> -->
								<!-- <li><a href="#" class="fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li> -->
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100032210145034&tabs=timeline&width=440&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="540" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
															</ul>
															<br />
															<h3>Teléfonos</h3>
															<span style="color: cornsilk;">(591) 65691510<br />
																(591) 70558962</span>
															
				</div>

				</div>
				</footer>
			<!-- Scripts -->
			
       

				<!--[if lte IE 8]><script src="assets2/js/ie/respond.min.js"></script><![endif]-->
			<script src="/static/main.js"></script>
			<script src="/static/jquery.min.js"></script> 
				<script src="/static/jquery.scrollex.min.js"></script>
				<script src="/static/jquery.scrolly.min.js"></script>
				<script src="/static/skel.min.js"></script>
				<script src="/static/util.js"></script>
				<!--[if lte IE 8]><script src="assets2/js/ie/respond.min.js"></script><![endif]-->
			<script src="/static/main.js"></script>
	</body>
</html>