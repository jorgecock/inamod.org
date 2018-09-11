




<style>
	.mobile-fab-tip {
    position: fixed;
    right: 85px;
    padding:0px 0.5rem;
    text-align: right;
    background-color: #323232;
    border-radius: 2px;
    color: #FFF;
    width:auto;
} 
</style>


<div class="fixed-action-btn" style="bottom:24px; right:24px;">
<a class="btn-floating btn-large orange accent-4 pulse"><i class="large material-icons white-text">dehaze</i></a>
    <ul id="nav">
                                       
        <li>
            <a class="btn-floating teal darken-2" id="index"><i class="material-icons">domain</i></a>
            <a class="btn-floating mobile-fab-tip">Inicio</a> <!--tooltip-->
        </li>                           
        <li>
            <a class="btn-floating teal darken-2" id="investigadores"><i class="material-icons">contact_mail</i></a>
            <a class="btn-floating mobile-fab-tip">Investigadores</a> <!--tooltip--> 
        </li>                               
        <li>
            <a class="btn-floating teal darken-2" id="proyectos"><i class="material-icons">insert_chart</i></a>
            <a class="btn-floating mobile-fab-tip modal-trigger">Proyectos</a> <!--tooltip-->
        </li> 
        <li>
            <a class="btn-floating teal darken-2" id="nosotros"><i class="material-icons">work</i></a>
            <a class="btn-floating mobile-fab-tip modal-trigger">Nosotros</a> <!--tooltip-->
        </li>
        <li>
            <a class="btn-floating teal darken-2" id="colombiamoda"><i class="material-icons">add_location</i></a>
            <a class="btn-floating mobile-fab-tip modal-trigger">Colombia Moda 2018</a> <!--tooltip-->
        </li> 
        <li>
            <a class="btn-floating teal darken-2" id="antropometria"><i class="material-icons">directions_walk</i></a>
            <a class="btn-floating mobile-fab-tip">Proyecto Antropometría</a> <!--tooltip-->
        </li> 
         <li>
            <a class="btn-floating teal darken-2" id="foro"><i class="material-icons">message</i></a>
            <a class="btn-floating mobile-fab-tip">Foro</a> <!--tooltip-->
        </li>                                
    </ul>
</div>



<script>
	$(document).ready(function(){
	    $('.tooltipped').tooltip();

	    /* cambiar el color del boton cuando se pasa de sección */
	    $("ul#nav li a").click(function() {          
         // remove classes from all
          $("a").removeClass("pulse");
          // add class to the one we clicked
          $(this).addClass("pulse");


	     
	    });



          $('#foro').click(function(){
            $('#main_content').load('pages/foro/foro.php').slideDown(560);
            $('#content_index').addClass('esconder');
            Materialize.toast('Foro', 3000);        
            
          }); 
      

	});



       

</script>