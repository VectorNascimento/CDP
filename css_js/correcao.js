function confirmar(){
alert("Registrado com sucesso");
};

$(document).ready(function(){
	$('#btn').on('click', function(){
    	$('#formDoacao').toggle();
    });
});


$(document).on('click', '#btn', function() {
        $(this).attr("id","btn2").html("Esconder");
	});	
	$(document).on('click', '#btn2', function() {
	    $(this).attr("id","btn").html("Quero Doar");
	});

$(document).ready(function(){
	$('#btnVol').on('click', function(){
    	$('#formVoluntario').toggle();
    });
});


$(document).on('click', '#btnVol', function() {
        $(this).attr("id","btnVol2").html("Esconder");
	});	
	$(document).on('click', '#btnVol2', function() {
	    $(this).attr("id","btnVol").html("Voluntariar-se");
	});