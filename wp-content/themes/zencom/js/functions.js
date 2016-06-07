// FUNCTIONS  ---------------------------------------------------------

// imageBreakpointSwitch()
// sostituisco le immagini di classe 'responsive'

function imageBreakpointSwitch() {
	jQuery("img.responsive").each(function() {
		var imagepath = jQuery(this).attr('src');
		var dummy = imagepath.split("/");
		var filename = dummy.pop();
		dummy = dummy.join("/");
		var filename = filename.split(".");
		var ext = filename.pop();
		switch(true) {
				case (res_x < breakpoints[1]):
						var filename_new = filename.join(".")+'_'+breakpoints[0]+'.'+ext;
					break;
				case (res_x < breakpoints[2]):	
						var filename_new = filename.join(".")+'_'+breakpoints[1]+'.'+ext;
					break;
				case (res_x < breakpoints[3]):	
						var filename_new = filename.join(".")+'_'+breakpoints[2]+'.'+ext;
					break;	
				case (res_x < breakpoints[4]):	
						var filename_new = filename.join(".")+'_'+breakpoints[3]+'.'+ext;
					break;	
				case (res_x < breakpoints[5]):	
						var filename_new = filename.join(".")+'_'+breakpoints[4]+'.'+ext;
					break;	
				default:
					return false;
					break;
		}
		var imagepath_new = dummy+'/'+filename_new;
		jQuery(this).attr('src',imagepath_new);
	});
}

// retinaSwitch()
// sostituisco le immagini di classe 'hires'

function retinaSwitch() {
	var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
	if (pixelRatio > 1) {
        jQuery('img.hires').each(function() {
			var filename = jQuery(this).attr('src');
			var ext = filename.substr(filename.lastIndexOf('.'));
			var filepath = filename.replace(ext,'');
			var retina_filename = filepath+'@2x'+ext;
			jQuery(this).attr('src',retina_filename);
        });
    }
}

// disableParentLink
// disabilito i link alle pagine che hanno figli

function disableParentLink() {
     jQuery('nav.mainmenu .menu > li').has('ul').children().attr('href','javascript:void(0)');
}

// checkMenu()
// gestione del menu mobile / desktop

function checkMenu() {	
	if (jQuery(window).width() < mob_to_desk) { // MOBILE
		//mostro - nascondo il menu 
		jQuery('#togglemenu').click(function(){
			jQuery('nav.header__mainmenu ul.menu').slideToggle();
			if (jQuery('nav.header__mainmenu ul.menu').height() == 1) {
				jQuery(this).html('<i class="fa fa-close"></i>');
			} else {
				jQuery(this).html('<i class="fa fa-bars"></i>');
			}
		});
		
		//mostro le freccette nel menu di primo livello se esiste un secondo livello
		jQuery('nav.header__mainmenu .menu > li').has('ul').append('<div class="arrow lv1"><i class="fa fa-chevron-down"></i></div>');
		jQuery('nav.header__mainmenu .menu > li > div.arrow').on('click',function(){
			jQuery(this).parent().children('ul.submenu').slideToggle(function(){
				if (jQuery(this).css('display') == 'block') {
					 jQuery(this).parent().find('div.arrow.lv1').html('<i class="fa fa-chevron-up"></i>');
				 } else {
					 jQuery(this).parent().find('div.arrow.lv1').html('<i class="fa fa-chevron-down"></i>');
				 }
			}); 
			 
			 
		});
        disableParentLink();
		//mostro le freccette nel menu di secondo livello se esiste un terzo livello
		jQuery('nav.header__mainmenu .submenu > li').has('ul').append('<div class="arrow lv2"><i class="fa fa-chevron-down"></i></div>');
		jQuery('nav.header__mainmenu .submenu > li > div.arrow').on('click',function(){
			jQuery(this).parent().children('ul.submenu > li > .submenu').slideToggle(function(){
				if (jQuery(this).css('display') == 'block') {
					jQuery(this).parent().find('div.arrow.lv2').html('<i class="fa fa-chevron-up"></i>');
				 } else {
					jQuery(this).parent().find('div.arrow.lv2').html('<i class="fa fa-chevron-down"></i>');
				 }
			});
		});
		
	} else { // DESKTOP
		//hover apri / chiudi su tutti i livelli di menu
		jQuery('nav.header__mainmenu .menu li').hoverIntent({
			over: function(){jQuery(this).find('ul').first().fadeIn('fast')},
			out: function(){jQuery(this).find('ul').first().fadeOut('fast')},
			timeout: 100
		});
		//apro l'albero dei menu fino alla pagina corrente
		jQuery('nav.header__mainmenu .submenu li').each(function(index) {
			if (jQuery(this).hasClass('active')) {
				jQuery(this).children('nav.header__mainmenu ul.submenu').show();
				jQuery(this).children('div.arrow').html('<i class="fa fa-chevron-up"></i>');
			}
		});
		//mostro le freccette nel menu di primo livello se esiste un secondo livello
		jQuery('nav.header__mainmenu .menu > li').has('ul').append('<div class="arrow lv1"><i class="fa fa-chevron-down"></i></div>');
        disableParentLink();
		//mostro le freccette nel menu di secondo livello se esiste un terzo livello
		jQuery('nav.header__mainmenu .submenu > li').has('ul').append('<div class="arrow lv2"><i class="fa fa-chevron-right"></i></div>');	
	}
}

// toTop()
// scrolling all'inizio della pagina

function toTop() {
    jQuery('.footer__totop').on('click',function(){
		jQuery('html,body').animate({scrollTop: 0}, 500);
	});
}

// checkTop()
// verifica se sono in cima alla pagina

function checkTop() {
    if (jQuery(window).scrollTop() > 200) return true;
    return false;
}