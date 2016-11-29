// Modernizr.load = function(args) {
//     if (!window.yepnope) {
//     } else {
//         yepnope(args);
//     }
// }

$(document).ready(function(){
	//Mobile Mode
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    	$('body').addClass('mobile');
	}

	//Função que faz com o que o menu fique fixo no topo da página
	var stickyNavTop = $('.menu-principal, .menu-mobile').offset().top;

	var stickyMenu = function() {
		var scrollTop = $(window).scrollTop();

		if(scrollTop > stickyNavTop) {
			$('.menu-principal, .menu-mobile').addClass('sticky');
		}else {
			$('.menu-principal, .menu-mobile').removeClass('sticky');
		}
	};

	stickyMenu();

	//Função que faz o menu ancorar com animação 
	var $doc = $('html, body');

	$('.menu-principal .page').click(function() {
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
	        else if (scrollPos <= (windowSize/2)){
	        	$('.menu-principal ul li .page').removeClass("active");
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

	//Lighbox 
	function closeLightbox(){
		$('.lightbox').fadeOut();
		$('main').removeClass('fixed');
	}

	$('.box-projeto .close, .lightbox').click(function(){
		$('.box-projeto').fadeOut();
		closeLightbox()
	});

	$('.btn-projeto').click(function(e){
		e.preventDefault();

		$('.lightbox').fadeIn();
		$('.box-projeto').fadeIn();
		$('main').addClass('fixed');
	});

	//Menu Mobile
	$('.menu-mobile').click(function(){
		$('.menu-principal').slideDown('fast');
		$('header').addClass('mobile');
	});

	$('.close-menu, .mobile .menu-principal a').click(function(){
		$('.menu-principal').slideUp('fast');
		$('header').removeClass('mobile');
	});

	//Ajax de busca por estado
	$('.select-estado').change(function() {
		var id = $('.select-estado option:selected').val();
		var currentLink = window.location.href;
		var info = $('#category-post-content');

		if(id === ''){
			$.ajax({
				type: 'POST',
				url: currentLink,
				dataType : 'html',
				data: {
					'terms' : id 
				},
				beforeSend: function() {
					$('.uil-cube-css').show();
        		},
				success: function(data) {
					$('.uil-cube-css').hide();
					var elemento = $(data).find('#category-post-content').html();
					$('#category-post-content').html(elemento);
				}
			});
		}else{
			$.ajax({
				type: 'POST',
				url: currentLink + '?taxonomy_estado=' + id,
				dataType : 'html',
				data: {
					'terms' : id 
				},
				beforeSend: function() {
					$('.uil-cube-css').show();
        		},
				success: function(data) {
					$('.uil-cube-css').hide();
					var elemento = $(data).find('#category-post-content').html();
					$('#category-post-content').html(elemento);
				}
			});
		}
	});

	//Ajax de busca por função
	$('.select-funcao').change(function() {
		var id = $('.select-funcao option:selected').val();
		var currentLink = window.location.href;
		var info = $('#category-post-content');

		if(id === ''){
			$.ajax({
				type: 'POST',
				url: currentLink,
				dataType : 'html',
				data: {
					'terms' : id 
				},
				beforeSend: function() {
					$('.uil-cube-css').show();
        		},
				success: function(data) {
					$('.uil-cube-css').hide();
					var elemento = $(data).find('#category-post-content').html();
					$('#category-post-content').html(elemento);
				}
			});
		}else{
			$.ajax({
				type: 'POST',
				url: currentLink + '?taxonomy_funcao=' + id,
				dataType : 'html',
				data: {
					'terms' : id 
				},
				beforeSend: function() {
					$('.uil-cube-css').show();
        		},
				success: function(data) {
					$('.uil-cube-css').hide();
					var elemento = $(data).find('#category-post-content').html();
					$('#category-post-content').html(elemento);
				}
			});
		}
	});

	//Ajax de busca geral
	$('#searchsubmit').click(function(e) {
		e.preventDefault();
		var searchValue = $('#s').val();

		$.ajax({
			type: 'POST',
			url: '?taxonomy_estado=&taxonomy_funcao=&s=' + searchValue,
			data: {
				action: '',
				searchString: searchValue
			},
			beforeSend: function() {
				$('.uil-cube-css').show();
        	},
			success: function(data) {
				$('.uil-cube-css').hide();
				$('#category-post-content').html(data);
			}
		});
	});

	//Ajax de ordem dos vídeos
	$('#filter .dateSel').click(function(e){
		e.preventDefault();
		var currentLink = window.location.href;
		var dateType = $(this).attr('id');

		$.ajax({
			url:currentLink,
			type: 'GET',
			data: {
				date: dateType,
			},
			beforeSend: function() {
				$('.uil-cube-css').show();
			},
			success:function(data){
				$('.uil-cube-css').hide();
				var elemento = $(data).find('#category-post-content').html();
				$('#category-post-content').html(elemento);
			}
		});
	});

	$('.box-news').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		infinite: false,
		arrows: true,
		centerMode: false,
		responsive: [
		{
	      breakpoint: 960,
	      settings: {
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 568,
	      settings: {
	        slidesToShow: 1
	      }
	    }
	  ]
	});

	if($('.equipe-listagem').width() <= 768){
		$('.equipe-listagem').slick({
			dots: true,
			responsive: [
		    {
		      breakpoint: 769,
		      settings: {
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 568,
		      settings: {
		        slidesToShow: 1
		      }
		    }
		  ]
		});
	}else {
		$('.equipe-listagem').slick('unslick');
	}
});





