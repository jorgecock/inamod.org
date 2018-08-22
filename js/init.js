(function($){
  $(function(){

    /* botones para traer información , conjs sin recargar paginas */
      $('#antropometria').click(function(){
        $('#main_content').load('pages/antropometria/antropometria.php').slideDown(560);
        $('#content_index').addClass('esconder');
        Materialize.toast('Proyecto antropometría', 3000);
        
        
      }); 

      $('#colombiamoda').click(function(){
        $('#main_content').load('pages/colombiamoda2018/colombiamoda2018.php').slideDown(560);
        $('#content_index').addClass('esconder');
        Materialize.toast('Colombia Moda 2018', 3000);
        
      }); 


      $('#investigadores').click(function(){
        $('#main_content').load('pages/investigadores/investigadores.php').slideDown(560);
        $('#content_index').addClass('esconder');
        Materialize.toast('Investigadores', 3000);
        
      });  

      $('#index').click(function(){
        $('#content_index').removeClass('esconder');
        $('#main_content').html('');
      
        wistiaEmbed.play(); /* play al vídeo de wistia */
             
        Materialize.toast('Inicio', 3000);
       

      });



      $('#proyectos').click(function(){
        $('#main_content').load('pages/proyectos/proyectos.php').slideDown(560);
        $('#content_index').addClass('esconder');
        Materialize.toast('Proyectos', 3000);
       

      }); 


      $('#nosotros').click(function(){
        $('#main_content').load('pages/nosotros/nosotros.php').slideDown(560);
        $('#content_index').addClass('esconder');
        Materialize.toast('Nosotros', 3000);
        

      }); 


      


  	$('.carousel.carousel-slider').carousel({fullWidth: true});

    $('.carousel').carousel();

    $('.carousel.car_ini').carousel('next', 4);

    $('.slider').slider();

    $('.modal').modal();

    $('.materialboxed').materialbox();

    $(".button-collapse").sideNav();

    $('.scrollspy').scrollSpy(); 

    $(".button-collapse").sideNav();

    $('.scrollspy').scrollSpy('scrollOffset', 800);

    autoplay_member()   
    function autoplay_member() {
        $('.carousel.members').carousel('next');
        setTimeout(autoplay_member, 4500);
    }

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

    var $contactForm = $('#contact-form');
    $contactForm.submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: '//formspree.io/senainamod@gmail.com',
        method: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() {
          $contactForm.append('<div class="progress"><div class="indeterminate"></div></div>');
        },
        success: function(data) {
          $contactForm.find('.alert--loading').hide();
          $contactForm.append('<div class="card green">Mensaje Enviado!</div>');
    
          $('#formulario_con').html('<div class="container"><div class="card horizontal"><div class="card-image ima_sent"><img src="https://s3.amazonaws.com/inamod/mensaje_ok.png" style="max-width: 69%;position:relative;left: 54px;" ></div><div class="card-stacked"><div class="card-content"><blockquote><p class="flow-text">El mensaje ha sido enviado, nos comunicaremos muy pronto</p> </blockquote></div></div></div></div>')

        },
        error: function(err) {
          $contactForm.find('.alert--loading').hide();
          $contactForm.append('<div class="card red">Ha ocurrido un error al enviar el mensaje...</div>');
        }
      });
    });
  
  }); // end of document ready
})(jQuery); // end of jQuery name space









