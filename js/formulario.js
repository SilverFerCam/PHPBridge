document.getElementById("country").addEventListener("click",function(){
    var valor = document.getElementById("country").value;
    if(valor=="other"){
        document.getElementById("nodoOther").style.display = "inline-block";
    }else{
        document.getElementById("nodoOther").style.display = "none";
    }
})