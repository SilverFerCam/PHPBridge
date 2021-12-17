/*Modificaciones dinamicas del Cuestionario*/

//Declaramos una variable para referenciar al numero de la pregunta a mostrar
var visible = 1;
var indice = 1;
//Como por CSS todas las preguntas son invisibles mostramos la primera de ellas
document.getElementById("p"+visible).style.display = "block";

//Declaramos una funcion para mostrar la siguiente pregunta
function mostrarPregunta(indice){
    document.getElementById("p"+indice).style.display = "block"; 
    var menosIndice = indice - 1;
    document.getElementById("p"+menosIndice).style.display = "none";   
}

//Declaramos la funcion para mostrar la anterior pregunta
function anteriorPregunta(indice){
    //Si la pregunta es la primera ocultamos el boton back, de cualquier forma ocultamos la pregunta actual y mostramos la anterior
    if(indice==1){
        document.getElementById("back").style.display = "none";
    }else if(indice<20){
        document.getElementById("back").style.display = "inline-block";
        document.getElementById("siguiente").style.display = "inline-block";
        document.getElementById("update").style.display = "inline-block";
    }
    var preguntaActual = indice+1;    
    document.getElementById("p"+indice).style.display = "block";      
    document.getElementById("p"+preguntaActual).style.display = "none";
}

//Al hacer click en el boton de sigioente se pasa de pregunta sin mas scripts
document.getElementById("siguiente").addEventListener("click",function(){
    if(visible>=1 && visible<20){
        document.getElementById("back").style.display = "inline-block";
        visible++;
        mostrarPregunta(visible);
    }else if(visible==19){
        document.getElementById("siguiente").style.display = "none";
        visible++;
        mostrarPregunta(visible);
    } 
})

//Al hacer click en el boton enviar se ejecuta la funcion mostrarPregunta()
//Si El indice no supera el valor maximo de preguntas, vease 20
//En caso de llegar a 20 se descubre nuevos botones
document.getElementById("enviar").addEventListener("click",function(){      
    if(visible==20){
        document.getElementById("enviar").style.display = "none";
        document.getElementById("pdf").style.display = "inline-block";
        document.getElementById("back").style.display = "inline-block";
        document.getElementById("update").style.display = "inline-block";
    }else if(visible==1){    
        //Si hay una respuesta marcada mostramos la siguiente 
        respuestaActiva = document.getElementsByName("p"+visible);
        for(i=0;i<respuestaActiva.length;i++){
            if(respuestaActiva[i].checked){
                visible++;
                mostrarPregunta(visible);                
            }
        }            
        
    }else if(visible>1){
        if(visible+1!=21){
            //Si hay una respuesta marcada mostramos la siguiente 
            respuestaActiva = document.getElementsByName("p"+visible);
            for(i=0;i<respuestaActiva.length;i++){
                if(respuestaActiva[i].checked==true){             
                    visible++;
                    mostrarPregunta(visible);
                }
            }
        }
    }
});

//Si la pregunta no es la primera hacemos una llamada a la funcion anteriorPregunta() para volver atrás entre preguntas
document.getElementById("back").addEventListener("click",function(){
    if(visible!=1){
        visible--;
        anteriorPregunta(visible);    
    }    
});

//Sistema para ocultar los circulos de los radio buttons del HTML
var radios = document.querySelectorAll("input[type='radio']");
for(k=0;k<radios.length;k++){
    radios[k].style.visibility = "hidden";
}