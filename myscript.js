$(function() {
	

	//highlight the current nav
	$("#Maklumat_Peribadi a:contains('Maklumat Peribadi')").parent().addClass('active');
	$("#Maklumat_Akademik a:contains('Maklumat Akademik')").parent().addClass('active');
	$("#Maklumat_Keluarga a:contains('Maklumat Keluarga')").parent().addClass('active');
	$("#photographer_pack a:contains('Photographer\'s Package')").parent().addClass('active');
	$("#joomla a:contains('Joomla Training')").parent().addClass('active');
   $("#contact a:contains('Contact')").parent().addClass('active');
	
	//if($("#photographer_pack a:contains('Photographer\'s Package')").parent().hasClass('active')){
	//$(".dropdown a:contains('Our Programs')").parent().addClass('active');
	//}
	
	//if($("#joomla a:contains('Joomla Training')").parent().hasClass('active')){
	//$(".dropdown a:contains('Our Programs')").parent().addClass('active');
	//}

	//make menus drop automatically
	//$('ul.nav li.dropdown').hover(function() {
		//$('.dropdown-menu', this).fadeIn();
	//}, function() {
		//$('.dropdown-menu', this).fadeOut('fast');
	});//hover
	
//}); //jQuery is loaded