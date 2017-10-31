
(function($) {

	skel
		.breakpoints({
			desktop: '(min-width: 737px)',
			tablet: '(min-width: 737px) and (max-width: 1200px)',
			mobile: '(max-width: 736px)'
		})
		.viewport({
			breakpoints: {
				tablet: {
					width: 1080
				}
			}
		});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// CSS polyfills (IE<9).
			if (skel.vars.IEVersion < 9)
				$(':last-child').addClass('last-child');

		// Prioritize "important" elements on mobile.
			skel.on('+mobile -mobile', function() {
				$.prioritize(
					'.important\\28 mobile\\29',
					skel.breakpoint('mobile').active
				);
			});

		// Dropdowns.
			$('#nav > ul').dropotron({
				mode: 'fade',
				noOpenerFade: true,
				alignment: 'center',
				detach: false
			});

		// Off-Canvas Navigation.

			// Title Bar.
				$(
					'<div id="titleBar">' +
						'<a href="#navPanel" class="toggle"></a>' +
						'<span class="title">' + $('#logo').html() + '</span>' +
					'</div>'
				)
					.appendTo($body);

			// Navigation Panel.
				$(
					'<div id="navPanel">' +
						'<nav>' +
							$('#nav').navList() +
						'</nav>' +
					'</div>'
				)
					.appendTo($body)
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'navPanel-visible'
					});

			// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
				if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
					$('#titleBar, #navPanel, #page-wrapper')
						.css('transition', 'none');

	});

})(jQuery);
function actualizar(tipo){
		$.ajax({
			url: '/data',
			data: {tipo:tipo},
			type: 'post',
			cache: false,
			async: true,
			dataType: 'html',
			beforeSend: function(jqXHR) {
				jqXHR.overrideMimeType("text/html;charset=UTF-8");
			},
			error: function(jqXHR, textStatus, errorThrown) {
                          //alert("Error\n"+ jqXHR.responseText);
                          alert("Error");
                      },
                      success: function(data) {
                      	console.log(data);
                      	$('#highlights').html(data);
                      	$('#venta').removeClass('link-strong');
                      	$('#renta').removeClass('link-strong');
                      	$("#"+tipo).addClass('link-strong');
                      },complete: function() {

                      }
                  });
	}

	$('.scroll').click(function(e){
        e.preventDefault(); //Don't automatically jump to the link
        id = $(this).attr('href').replace('#', ''); //Extract the id of the element to jump to
        $('html,body').animate({scrollTop: $("#"+id).offset().top-$(this).closest('ul').height()},'slow');
    });


$('#formContact').on('submit', function (e) { 
	var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if($("#contact-name").val().length < 3){
    	$('#contact-name').focus();
    	sweetAlert("Oops...", "Debe ingresar su nombre completo.", "error");
    }else if($("#contact-email").val().length < 6){
    	$('#contact-email').focus();
    	sweetAlert("Oops...", "El correo que ingreso es incorrecto.", "error");
    }else if(!expr.test($("#contact-email").val())){
	    $('#contact-email').focus();
	    sweetAlert("Oops...", "El correo que ingreso es incorrecto.", "error");
    }else if($("#contact-message").val().length < 6){
    	$('#contact-message').focus();
    	sweetAlert("Oops...", "El mensaje que ingreso es muy corto, nos gustaria saber más.", "error");
    }else{
      $.ajax({
          url: "/contact",
          type: "post",
          data: $(this).serialize(),
          dataType: "json",
        }).done(function(msg){
          if(msg['result']){
          	$('#formContact')[0].reset();
            swal({
              title: 'Enviado',
              text: 'Nos pondremos en contacto, lo mas pronto posible.',
              animation: 'slide-from-top',
              type: 'success',
              timer: 2200,
              showConfirmButton: false
              });
          }else{
           	sweetAlert("Oops...", "Ocurrio un problema en el servidor, vuelta a intentar", "error");
          }
        }).fail(function (jqXHR, textStatus) {
           //error
        });
    }
    e.preventDefault(); 
  });