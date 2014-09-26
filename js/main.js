$(document).ready(function(e) {
	
	/* Top menu shrinks into a collapsable menu on mobile screens */
    $('#top_menu ul > li:first-child a').click(function(e) {
		if ($(this).hasClass('expanded'))
		{
		   $(this).removeClass('expanded');
		   $('#top_menu ul > li:nth-child(n+2)').fadeOut(300);   	
		}
		else
		{
		   $(this).addClass('expanded');
		   $('#top_menu ul > li').fadeIn(700);
		}
    });
	
	/* If window is resized back to larger screen, make the top menu normal */
	$(window).resize(function(e) {
        if ($('#top_menu ul li:first-child').css('display') == 'none')
		{
		   $('#top_menu ul > li:nth-child(n+2)').fadeIn(300);
		}
    });
});