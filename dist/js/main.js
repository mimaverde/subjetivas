// Modernizr.load = function(args) {
//     if (!window.yepnope) {
//     } else {
//         yepnope(args);
//     }
// }

$(document).ready(function(){
	//Função que faz com o que o menu fique fixo no topo da página
	var stickyNavTop = $('.menu-principal').offset().top;

	var stickyMenu = function() {
		var scrollTop = $(window).scrollTop();

		if(scrollTop > stickyNavTop) {
			$('.menu-principal').addClass('sticky');
		}else {
			$('.menu-principal').removeClass('sticky');
		}
	};

	stickyMenu();

	//Função que faz o menu ancorar com animação 
	var $doc = $('html, body');

	$('.menu-principal a').click(function() {
	    $doc.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top - 37
	    }, 500);
	    return false;
	});

	//Funcão que faz o active do menu aparecer
	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    var windowSize = $(window).height();
	    $('.menu-principal .page').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top - windowSize <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.menu-principal ul li .page').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}

	//Chamar as funções no scroll da página
	$(window).scroll(function(){
		stickyMenu();
		onScroll();
	});
});




