
$(function() {
	$("#boton_agregar").click(function() {
		$("#modal_agregar").modal("show");
	});
});

function mostrarEncuestas() {
    $.post("A_ENC/mosEnc.php", {}, function(data, status) {
        $("#tabla_encuestas").html(data);
    });
}

$(function() {
    mostrarEncuestas(); 
});

function agregarEncuesta() {
    var id_usuario  = $("#hidden_id_usuario").val();
    var titulo      = $("#titulo").val();
    var descripcion = $("#descripcion").val();
    var fecha_final = $("#fecha_final").val();
    $.post("A_ENC/agrEnc.php",
        {
            titulo      : titulo,
            descripcion : descripcion,
            fecha_final : fecha_final,
            id_usuario  : id_usuario
        },
        function (data, status) {
            $("#modal_agregar").modal("hide");
            mostrarEncuestas();
            $("#titulo").val("");
            $("#descripcion").val("");
            $("#fecha_final").val("");
        }
    ) ;
}

function eliminarEncuesta(id_encuesta) {
    var conf = confirm("¿ESTAS SEGURO DE ELIMINAR LA ENCUESTA?");
    if (conf == true) {
        $.post("A_ENC/eliEnc.php", {id_encuesta: id_encuesta}, function (data, status) {
            mostrarEncuestas();
        });
    }
}

function publicarEncuesta(id_encuesta) {
    var conf = confirm("¿ESTAS SEGURO DE PUBLICAR LA ENCUESTA?");
    if (conf == true) {
        $.post("A_ENC/SubEnc.php", {id_encuesta: id_encuesta}, function (data, status) {
            mostrarEncuestas();
        });
    }
}

function finalizarEncuesta(id_encuesta) {
    var conf = confirm("¿ESTAS SEGURO DE FINALIZAR LA ENCUESTA?");
    if (conf == true) {
        $.post("A_ENC/finEnc.php", {id_encuesta: id_encuesta}, function (data, status) {
            mostrarEncuestas();
        });
    }
}

function obtenerDetallesEncuesta(id_encuesta) {
    $("#hidden_id_encuesta").val(id_encuesta);

    $.post("A_ENC/mosDetEnc.php", {id_encuesta: id_encuesta}, function (data, status) {
        var encuesta = JSON.parse(data);
        $("#modificar_titulo").val(encuesta.titulo);
        $("#modificar_descripcion").val(encuesta.descripcion);
        $("#modificar_fecha_final").val(encuesta.fecha_final);
    });
    $("#modal_modificar").modal("show");
}

function modificarDetallesEncuesta() {
    var titulo      = $("#modificar_titulo").val();
    var id_encuesta = $("#hidden_id_encuesta").val();
    var descripcion = $("#modificar_descripcion").val();
    var fecha_final = $("#modificar_fecha_final").val();

    $.post("A_ENC/modDetEnc.php",
        {
            id_encuesta : id_encuesta,
            titulo      : titulo,
            descripcion : descripcion,
            fecha_final : fecha_final
        },
        function (data, status) {
            $("#modal_modificar").modal("hide");
            mostrarEncuestas();
        }
    ) ;
}