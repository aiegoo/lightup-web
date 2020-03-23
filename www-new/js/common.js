	$(document).ready(function(){
		
		$('.submenu').hide();
		$('.gnbmenu > li').mouseenter(function(){
			var imgchd = $(this).children()
			$(imgchd).children('img').attr('src', $(imgchd).children('img').attr('src').replace('_off','_on'));
			$(this).children('ul.submenu').show();


		}).mouseleave(function(){
			var imgchd = $(this).children()
			$(imgchd).children('img').attr('src', $(imgchd).children('img').attr('src').replace('_on','_off'));
			$(this).children('ul.submenu').hide();
		});

	
		$('.nav_menu01').hide();
		$('.nav_act01').bind('click',
				function(){
					$('.nav_menu01').toggle();
				});
		$('.nav_menu02').hide();
		$('.nav_act02').bind('click',
				function(){
					$('.nav_menu02').toggle();
				});
	});