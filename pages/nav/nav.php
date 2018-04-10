	

<div class="fixed-action-btn horizontal click-to-toggle">
	<a class="btn-floating btn-large orange accent-4 pulse">
		<i class="material-icons">menu</i>
	</a>
	<ul id="nav">
		<li><a class="btn-floating teal darken-2" id="index"><i class="material-icons">domain</i></a></li>
		<li><a class="btn-floating teal darken-2" id="investigadores"><i class="material-icons">contact_mail</i></a></li>
		<li><a class="btn-floating teal darken-2" id="proyectos"><i class="material-icons">insert_chart</i></a></li>
		<li><a class="btn-floating teal darken-2" id="nosotros"><i class="material-icons">work</i></a></li>
	</ul>
</div>


<script>
	$(document).ready(function(){
	    $('.tooltipped').tooltip();

	    /* cambiar el color del boton cuando se pasa de sección */
	    $("ul#nav li a").click(function() {
	      // remove classes from all
	      $("a").removeClass("orange");
	      // add class to the one we clicked
	      $(this).addClass("orange");
	   });



	});


        

</script>