$(function() {
	$("#boton_agregar").click(function() {
		$("#modal_agregar").modal("show");
	});
});

function mostrarEncuestas() {
    $.post("A_ENC/mostEnc.php", {}, function(data, status) {
        $("#tabla_encuestas").html(data);
    });
}

$(function() {
    mostrarEncuestas(); 
});