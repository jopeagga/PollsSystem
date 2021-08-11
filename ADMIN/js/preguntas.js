$(function() {
	$("#boton_agregar").click(function() {
		$("#modal_agregar").modal("show");
	});
});


var id_encuesta = $("#id_encuesta").val();

function mostrarPreguntas(id_encuesta) {
    $.post("A_PREG/mosPreg.php", {
    	id_encuesta : id_encuesta
    }, function(data, status) {
        $("#tabla_preguntas").html(data);
    });
}

$(function() {
    mostrarPreguntas(id_encuesta); 
});

function agregarPregunta() {
    var id_encuesta 		= $("#id_encuesta").val();
    var titulo      	 	= $("#titulo").val();
    var id_tipo_pregunta 	= $("#id_tipo_pregunta").val();
    $.post("A_PREG/agrPreg.php",
        {
        	id_encuesta 		: id_encuesta,
            titulo      		: titulo,
            id_tipo_pregunta 	: id_tipo_pregunta
        },
        function (data, status) {
            $("#modal_agregar").modal("hide");
            mostrarPreguntas(id_encuesta);
            $("#titulo").val("");
        }
    ) ;
}

function eliminarPregunta(id_pregunta) {
    var conf = confirm("¿ESTAS SEGURO DE ELIMINAR LA PREGUNTA?");
    if (conf == true) {
        $.post("A_PREG/eliPreg.php", {id_pregunta: id_pregunta}, function (data, status) {
            mostrarPreguntas(id_encuesta);
        });
    }
}



function obtenerDetallesPregunta(id_pregunta) {
    $("#hidden_id_pregunta").val(id_pregunta);

    $.post("A_PREG/mosDetPreg.php", {id_pregunta: id_pregunta}, function (data, status) {
        var pregunta = JSON.parse(data);
        $("#modificar_titulo").val(pregunta.titulo);
    });
    $("#modal_modificar").modal("show");
}

function modificarDetallesPregunta() {
    var titulo      = $("#modificar_titulo").val();
    var id_pregunta = $("#hidden_id_pregunta").val();

    $.post("A_PREG/modDetPreg.php",
        {
            id_pregunta : id_pregunta,
            titulo      : titulo
        },
        function (data, status) {
            $("#modal_modificar").modal("hide");
            var id_pregunta = $("#id_pregunta").val();
            mostrarPreguntas(id_encuesta);
        }
    ) ;
}