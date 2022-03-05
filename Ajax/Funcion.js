//Mostrar Resultado IF
$("#mostrarif").off("click");
$("#mostrarif").on("click", function(e) {
    $('mostrarif').attr("disabled", true);
    var numeroif = $("#numeroif").val();
   
    parametros = {
        'numeroif': numeroif
    };
    $.ajax({
        type: "POST",
        url: "ResultadoIF.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg1").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg1").html(datos);
            $('#mostrarif').attr("disabled", false);
            $('#numeroif').val('')
        }
    });
    event.preventDefault();
});


//Mostrar Resultado ELSEIF
$("#mostrarelseif").off("click");
$("#mostrarelseif").on("click", function(e) {
    $('mostrarelseif').attr("disabled", true);
    var numero1 = $("#numero1").val();
    var numero2 = $("#numero2").val();
   
    parametros = {
        'numero1': numero1,
        'numero2': numero2
    };
    $.ajax({
        type: "POST",
        url: "ResultadoELSEIF.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg2").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg2").html(datos);
            $('#mostrarelseif').attr("disabled", false);
            $('#numero1').val(''),
            $('#numero2').val('')
        }
    });
    event.preventDefault();
});


//Mostrar Resultado ELSEIF
$("#mostrarswicht").off("click");
$("#mostrarswicht").on("click", function(e) {
    $('mostrarswicht').attr("disabled", true);
    var numerodia = $("#numerodia").val();
   
    parametros = {
        'numerodia': numerodia
    };
    $.ajax({
        type: "POST",
        url: "ResultadoSWICHT.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg3").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg3").html(datos);
            $('#mostrarswicht').attr("disabled", false);
            $('#numerodia').val('')
        }
    });
    event.preventDefault();
});
