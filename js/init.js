(function($){
  $(function(){
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
    
          $('#formulario_con').html('<div class="container"><div class="card horizontal"><div class="card-image ima_sent"><img src="img/mensaje_ok.png" style="max-width: 69%;position:relative;left: 54px;" ></div><div class="card-stacked"><div class="card-content"><blockquote><p class="flow-text">El mensaje ha sido enviado, nos comunicaremos muy pronto</p> </blockquote></div></div></div></div>')

        },
        error: function(err) {
          $contactForm.find('.alert--loading').hide();
          $contactForm.append('<div class="card red">Ha ocurrido un error al enviar el mensaje...</div>');
        }
      });
    });
  
  }); // end of document ready
})(jQuery); // end of jQuery name space