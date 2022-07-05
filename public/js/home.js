$(document).ready( function () {

    console.log("DENTRO");

    $("#btn_input").click(function(){
        valor = $("#entrada").val();

        $.ajax({
            type: 'POST',
            url: base_url + '/home/test',
            dataType: 'json',
            data: {
              valor: valor,
            },
            success: function (dato) {
                console.log(dato);
                resultado = JSON.stringify(dato);
                $("#resultado").val(resultado);
                $("#div_result").text(resultado);
            }
        });
    });

});