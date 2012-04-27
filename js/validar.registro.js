$(document).ready(function(){
    $("#form-usuario-registro").validate({
        rules:{
            user:{
                required:true,
                alphanumeric:true,
                nowhitespace:true,
                minlength:6
            },
            userpassword:{
                required:true,
                minlength:6
            },
            userpassword2:{
                required:true,
                minlength:6
            },
            email:{
                required:true,
                email:true
            }
        },
        messages:{
            user:{
                required:"Campo obligatorio.",
                alphanumeric:"Solo se permiten letras y números.",
                nowhitespace:"No se permiten espacios en blanco.",
                minlength:"Al menos debe tener 6 caracteres."
            },
            userpassword:{
                required:"Campo obligatorio",
                minlength:"Al menos debe tener 6 caracteres."
            },
            userpassword2:{
                required:"Campo obligatorio",
                minlength:"Al menos debe tener 6 caracteres."
            },
            email:{
                required:"Campo obligatorio.",
                email:"Introduzca una direccion de correo correcta."
            }

        },
        errorLabelContainer: "#falloRegistro",
        debug:true
    });
});