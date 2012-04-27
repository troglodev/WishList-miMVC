$(document).ready(function(){
    $("#form-deseo").validate({
        rules:{
            descripcion:{
                required:true
            //alphanumeric:true
            },
            fecha:{
                required:true,
                alphanumeric:true
            }
        },
        messages:{
            descripcion:{
                required:"Rellene la descripción."
            //alphanumeric:"Solo se permiten letras y números."
            },
            fecha:{
                required:"Rellene la fecha.",
                alphanumeric:"Solo se permiten letras y números."
            }
        },
        highlight: function(element, errorClass) {
            $("#ir").fadeIn("fast");
            $("#falloAcceso").fadeIn("fast");
        },
        errorLabelContainer: "#falloAcceso",
        debug:true,
        onsubmit: true
    });
});