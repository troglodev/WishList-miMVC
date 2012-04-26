var mensaje= ""
var html1='<span style="float:right;margin-right:10px;border-radius: 0.7em;background:salmon">'+
'<img src="views/estatico/img/delete.png" />&nbsp;'
var html2= '</span>'
function estaVacio(q){
    var cadena=q.toString()
    cadena=cadena.replace(" ", "")
    if (cadena==""){
        mensaje="Rellene todos los campos."
        return true
    }
    return false
}

function contieneEspacios(q){
    for (i=0;i<q.toString().length;i++){
        if (q.toString().charAt(i)==" "){
            mensaje="No pueden existir espacios."
            return true;
        }
    }
    return false
}

function esUnNumero(q){
    if (!isNaN(q)){
        mensaje="El nombre no puede ser un numero."
        return true 
    }
    return false
}

function demasiadoCorta(q){
    if (q.length<6){
        mensaje='La contraseña debe contener al menos 6 caracteres.'
        return true
    }
    return false
}

function validaUsuarioRegistro(q){
    if (estaVacio(q) || contieneEspacios(q) || esUnNumero(q)){
        return false
    }
    return true
}

function validaPasswordRegistro(q){
    if (estaVacio(q) || contieneEspacios(q) || demasiadoCorta(q)){
        return false
    }
    return true
}

function passwordsIguales(q1,q2){
    if (q1==q2){
        return true
    }
    mensaje='Las contraseñas no coinciden'
    return false
}

function validarRegistro(F) {
    if ( validaUsuarioRegistro(F.user.value) && 
        validaPasswordRegistro(F.userpassword.value) &&
        passwordsIguales(F.userpassword2.value,F.userpassword.value)) { 
        return true
    } else {
        document.getElementById("falloRegistro").innerHTML=html1 + mensaje +html2
        return false
    }
}

function validarAcceso(F){
    if ( estaVacio(F.user.value) || 
        estaVacio(F.userpassword.value)) {

        document.getElementById("falloAcceso").innerHTML=html1+mensaje+html2
        return false
    } else {
        return true
    }
}

function cambiaForma(B){
    //id= F.getElementByID("deseoID").text
    alert(B.name)
    num=B.name+""
    document.getElementById(num).innerHTML="dfdghbgdfhg"
}

function confirmarEliminar(){
    if (confirm("¿Seguro?")){
        return true
    }else
        return false;
}

function validarDeseo(F){
    fecha=F.fecha.value
    descripcion=F.descripcion.value
    //alert(fecha+'-'+descripcion)
    mensaje=''

    if (estaVacio(fecha) || estaVacio(descripcion)){
        document.getElementById("falloDeseo").innerHTML=html1+'Rellene todos los campos'+html2
        return false
    }
    if (!fechaCorrecta(fecha)){
        document.getElementById("falloDeseo").innerHTML=html1+'Fecha inválida'+html2
        return false
    } else {
        return true
    }
}

function fechaCorrecta(fecha){
    var Fecha= new String(fecha) 
    //var RealFecha= new Date() 

    var year= new String(Fecha.substring(Fecha.lastIndexOf("-")+1,Fecha.length))
    var mes= new String(Fecha.substring(Fecha.indexOf("-")+1,Fecha.lastIndexOf("-")))
    var dia= new String(Fecha.substring(0,Fecha.indexOf("-")))

    //alert(dia+'-'+mes+'-'+year)
    if (isNaN(year) || year.length<4 || parseFloat(year)<1900){
        return false
    }

    if (isNaN(mes) || parseFloat(mes)<1 || parseFloat(mes)>12){
        return false
    }

    if (isNaN(dia) || parseInt(dia, 10)<1 || parseInt(dia, 10)>31){
        return false
    }
    if (mes==4 || mes==6 || mes==9 || mes==11 || mes==2) {
        if (mes==2 && dia > 28 || dia>30) {
            return false
        }

    }
    return true
}