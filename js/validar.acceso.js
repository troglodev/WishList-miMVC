$(document).ready(function(){
    $("#form-acceso").validate({
        rules:{
            user:{
                required:true,
                alphanumeric:true
            },
            userpassword:{
                required:true,
                alphanumeric:true
            }
        },
        messages:{
            user:{
                required:"Rellene el usuario.",
                alphanumeric:"Solo se permiten letras y números."
            },
            userpassword:{
                required:"Rellene la contraseña.",
                alphanumeric:"Solo se permiten letras y números."
            }
        },
        highlight: function(element, errorClass) {
            $("#ir").fadeIn("fast");
            $("#falloAcceso").fadeIn("fast");
        },
        errorLabelContainer: "#falloAcceso",
        debug:true,
        onsubmit: false
    });
});