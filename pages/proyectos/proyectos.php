
<h4 class="center-align header center teal-text text-lighten-2">
	PROYECTOS
</h4>
<img src="https://s3.amazonaws.com/inamod/human_fractal.jpg" class="responsive-img materialboxed scrollspy" id="introduction" data-caption="Human Fractal">


<div class="card teal lighten-1">
	<div class="card-content white-text center-align">
		<div class="container">
			<p>I am a very simple card. I am good at containing small bits of information.
			I am convenient because I require little markup to use effectively. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta at in, nulla odit velit unde mollitia ea eos recusandae nisi numquam, quod porro temporibus qui sed omnis ipsum consectetur.</p>
		</div>
	</div>
	
</div>



<div class="container">



	<div class="row">
		<div class="col s12 m4">

			<div class="card">
				<div class="card-image waves-effect waves-block waves-light" id="chale">
					<img class="activator" src="https://s3.amazonaws.com/tutorialespatronessena/chaleco_button.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Chaleco antibalas<i class="material-icons right">more_vert</i></span>
					
				</div>
				<div class="card-reveal teal lighten-1">
					<span class="card-title white-text center-align"> <b>Chaleco antibalas</b> <i class="material-icons right">close</i></span>
					<div id="chale_body"></div>
				</div>
			</div>

		</div>
		<div class="col s12 m4">
			
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light" id="banda_trans">
					<img class="activator" src="https://s3.amazonaws.com/tutorialespatronessena/trans_button.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Ambiente automatizado<i class="material-icons right">more_vert</i></span>
					
				</div>
				<div class="card-reveal teal lighten-1">
					<span class="card-title white-text center-align"> <b>Ambiente automatizado de formación</b> <i class="material-icons right">close</i></span>
					<div id="banda_trans_body"></div>
				</div>
			</div>		

		</div>
		<div class="col s12 m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light" id="pgp_tra">
					<img class="activator" src="https://s3.amazonaws.com/tutorialespatronessena/pgp.jpg">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">PGP confección<i class="material-icons right">more_vert</i></span>
					
				</div>
				<div class="card-reveal teal lighten-1">
					<span class="card-title white-text center-align"> <b>PGP confección</b> <i class="material-icons right">close</i></span>
					<div id="pgp_body"></div>
				</div>
			</div>	

		</div>
	</div>




</div>







<div class="card teal lighten-1">
	<div class="card-content white-text center-align">
		<div class="container">
			<p>I am a very simple card. I am good at containing small bits of information.
			I am convenient because I require little markup to use effectively. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta at in, nulla odit velit unde mollitia ea eos recusandae nisi numquam, quod porro temporibus qui sed omnis ipsum consectetur.</p>
		</div>
	</div>
	
</div>



<div class="fractal" id="equipo">		


	<ul class="collapsible popout teal lighten-2" data-collapsible="accordion">
		<li>
			<div class="collapsible-header" id="colomoda2017"><i class="material-icons">filter_drama</i>Colombia Moda</div>
			<div class="collapsible-body">
				<span>
					<div class="row">
						<div class="col s12 m6">
							<video class="responsive-video hoverable z-depth-5 bordeado" controls>
								<source src="https://s3.amazonaws.com/tutorialespatronessena/inamod/1.mp4" type="video/mp4"  autostart="false">
								</video>	



							</div>
							<div class="col s12 m6">
								<video class="responsive-video hoverable z-depth-5 bordeado" controls>
									<source src="https://s3.amazonaws.com/tutorialespatronessena/inamod/2.mp4" type="video/mp4"  autostart="false">
									</video>



								</div>
							</div>

							<div class="row">
								<div class="col s12 m6">
									<video class="responsive-video hoverable z-depth-5 bordeado" controls>
										<source src="https://s3.amazonaws.com/tutorialespatronessena/inamod/3.mp4" type="video/mp4"  autostart="false">
										</video>


									</div>
									<div class="col s12 m6">
										<video class="responsive-video hoverable z-depth-5 bordeado" controls>
											<source src="https://s3.amazonaws.com/tutorialespatronessena/inamod/4.mp4" type="video/mp4"  autostart="false">
											</video>

										</div>
									</div>

								</span>
							</div>
						</li>
					</ul>







					












					<script type="text/javascript" src="js/imagesloaded.pkgd.min.js" ></script>
					<script type="text/javascript" src="js/jquery.pinto.js"></script>
					<script type="text/javascript" src="js/main.js"></script>

					<script>

						$('#pgp_tra').click(function(){
							$('#pgp_body').load('pages/proyectos/pgp.php').slideDown(560);
							
						});  		


						$('#chale').click(function(){
							$('#chale_body').load('pages/proyectos/chale.php').slideDown(560);
							
						});  



						$('#banda_trans').click(function(){
							$('#banda_trans_body').load('pages/proyectos/banda_trans.php').slideDown(560);
							
						}); 







						$('.materialboxed').materialbox();
						$('.collapsible').collapsible();

					</script>