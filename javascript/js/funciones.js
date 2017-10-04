function validarFormulario(){
    limpiarSpans();
    if(document.getElementById("idNombre").value == ""){
        //alert("nombre está vacío");
        document.getElementById("idnombrespan").innerHTML = "nombre está vacío";
    }
    else if(document.getElementById("idApellido").value == ""){
        //alert("apellido está vacío");
        
    document.getElementById("idapellidospan").innerHTML = "apellido está vacío";
    }
    
    else if( document.getElementById("idP1").value.length < 7 ){
        //alert("Las clave debe ser mayor a 6 caracteres");
        document.getElementById("idP1span").innerHTML = "Las clave debe ser mayor a 6 caracteres";
    }else if(
        (document.getElementById("idP1").value 
         !=
        document.getElementById("idP2").value)
        ){
        alert("Las claves son diferentes");   
    }else{
        document.getElementById("idForm").submit();
    }
    
    
}

function limpiarSpans(){
    document.getElementById("idP1span").innerHTML = "";
    document.getElementById("idP2span").innerHTML = "";
    document.getElementById("idnombrespan").innerHTML = "";
    document.getElementById("idapellidospan").innerHTML = "";
    document.getElementById("idnombrespan").innerHTML = "";
    
}



$(document).ready(
function (){

}
);
