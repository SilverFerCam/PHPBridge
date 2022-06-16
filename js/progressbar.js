var progreso = 5;
sumatorio = 1;

document.getElementById("enviar").addEventListener("click",function(){ 
    var arrayPP = document.getElementsByName("p"+sumatorio);
    for(i=0;i<arrayPP.length;i++){
        if(arrayPP[i].checked){
            if(progreso!=110){
                var elem = document.getElementById("myBar");     
                elem.style.width = progreso+"%"
                progreso += 5;
                sumatorio++;
            } 
        }
    }           
})