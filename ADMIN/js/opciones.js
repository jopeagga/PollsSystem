$(function() {
	$("#boton_agregar").click(function() {
		$("#modal_agregar").modal("show");
	});
});

var id_pregunta = $("#id_pregunta").val();

function mostrarOpciones(id_pregunta) {
    
    $.post("A_OP/mostOpc.php", {
    	id_pregunta : id_pregunta
    }, function(data, status) {
        $("#tabla_opciones").html(data);
    });
}

$(function() {
    mostrarOpciones(id_pregunta); 
});

function agregarOpcion() {
    var id_pregunta         = $("#id_pregunta").val();
    var valor              = $("#valor").val();

    $.post("A_OP/agrOpc.php",
        {
            id_pregunta         : id_pregunta,
            valor              : valor
        },
        function (data, status) {
            
            $("#modal_agregar").modal("hide");
            mostrarOpciones(id_pregunta);
            $("#valor").val("");
        }
    ) ;
}

function eliminarOpcion(id_opcion) {
    var conf = confirm("¿ESTAS SEGURO DE ELIMINAR LA OPCIÓN?");
    if (conf == true) {
        $.post("A_OP/eliOpc.php", {id_opcion: id_opcion}, function (data, status) {
            mostrarOpciones(id_pregunta);
        });
    }
}


function obtenerDetallesOpcion(id_opcion) {
    $("#hidden_id_opcion").val(id_opcion);

    $.post("A_OP/mostDetOpc.php", {id_opcion: id_opcion}, function (data, status) {
        var opcion = JSON.parse(data);
        $("#modificar_valor").val(opcion.valor);
    });
    $("#modal_modificar").modal("show");
}

function modificarDetallesOpcion() {
    var valor      = $("#modificar_valor").val();
    var id_opcion = $("#hidden_id_opcion").val();

    $.post("A_OP/modDetOpc.php",
        {
            id_opcion : id_opcion,
            valor      : valor
        },
        function (data, status) {
            $("#modal_modificar").modal("hide");
            var id_pregunta = $("#id_pregunta").val();
            mostrarOpciones(id_pregunta);
        }
    ) ;
}