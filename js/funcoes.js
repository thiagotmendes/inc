jQuery(document).ready(function($) {
	$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});

jQuery(function($){
	$(".data").mask("99/99/9999");
  $("#telefone-fix").mask("(999) 9999-9999");
  $("#cel").mask("(999) 99999-9999");
  $("#cpf").mask("999.999.999-99");
  $("#cep").mask("99999-999");
	$("#num").mask("00000");
});
