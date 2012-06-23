jQuery(function($) { 
	
	var active = '#'+jQuery.url.attr("anchor");
	var activeCookie = jQuery.url.attr("anchor");
	
	// Reads cookie to see if Category box is expanded or collapsed
	$('.toggleMainCategory').each(function() {
		if($.cookie($(this).prev('.mainCategory').attr('id')) == 'collapsed' || $.cookie($(this).prev('.mainCategory').attr('id')) == null) {
			$(this).hide();
			$(this).prev('.mainCategory').children('.maxMin').removeClass('active');
		};
		
		if($.cookie($(this).prev('.mainCategory').attr('id')) == 'expanded') {
			$(this).prev('.mainCategory').children('.maxMin').addClass('active');
		};
	});
	
	// Sets cookies based on expanded or contracted Category window
	if ($(active).children('.maxMin').hasClass('active')) {
		$.scrollTo(active, 500, {offset: {top:-20} });
	} 
	else {
		$(active).children('.maxMin').addClass('active');
		$.cookie(activeCookie, 'expanded', { path: '/', expires: 1 });
		$(active).next('.toggleMainCategory').slideToggle(500, function () {
			$.scrollTo(active, 500, {offset: {top:-20} });
		});
	}	
	
	// Slides down box upon click of MaxMin button
	$('.maxMin').click(function(){
		if ($(this).hasClass('active')) {
			$.cookie($(this).parent().attr('id'), 'collapsed', { path: '/', expires: 1 });
		 	$(this).removeClass('active');
			$(this).parent().next('.toggleMainCategory').slideToggle(500);
		} else  {
			var whereTo = this;
			$(this).addClass('active');
			$.cookie($(this).parent().attr('id'), 'expanded', { path: '/', expires: 1 });
			$(this).parent().next('.toggleMainCategory').slideToggle(500, function () {
				$.scrollTo(whereTo, 500, {offset: {top:-2000} }); // was top:-20 but I changed because it was jumping around on click
			});
		}
		return false;
	});
	
	// Expands and retracts Resume, About, and Contact menus at top of page
	$('.menu a').click(function(){
		if ($(this).hasClass('active') ) {
			$.cookie($(this).parent().attr('id'), 'collapsed', { path: '/', expires: 1 });
		 	$(this).removeClass('active');
			$(this).parent().next('.toggleMainCategory').slideToggle(500);
			//$.scrollTo( this.hash, 500, {offset: {top:-20} });
		} 
		else  {
			var whereTo = this.hash;
			$(this.hash).children('.maxMin').addClass('active');
			$.cookie($(this.hash).attr('id'), 'expanded', { path: '/', expires: 1 });
			$(this.hash).next('.toggleMainCategory').slideToggle(500, function () {
				$.scrollTo(whereTo, 500, {offset: {top:-40} });
			});
		}
		return false;
	});
	
});