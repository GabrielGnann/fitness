
$("#menu_icon").click(ativaMenu);
$("#desativa_menu").click(desativaMenu);

function ativaMenu(evento){
	if(evento){
		evento.stopPropagation();
	}
	
	$("#menu_icon, #menu_icon *").click(function (evento){ evento.stopPropagation(); });

	$(".menu").fadeIn(5);
	
	$(".menu").css("left", "0");
	$(".menu").unbind("click");
		
	$(document).click(desativaMenu);
}

function desativaMenu(evento){
	if(evento){
		evento.stopPropagation();
	}
	
	$(".menu").css("left", "-350px");
	$("#menu_icon").click(ativaMenu);
}

