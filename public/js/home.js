var resultado = document.getElementById("cambia-contenido");
var codigo= document.getElementById("codigo").value;
String(codigo);

     function Pedido(){ 
        var xmlhttp;
         /*Peticiones para cualquier navegador*/
        if(window.XMLHttpRequest){    
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }        
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                resultado.innerHTML = xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET","inicio/pedido/"+codigo, true);
        xmlhttp.send();
     }

    function Venta(){ 
        var xmlhttp;
         /*Peticiones para cualquier navegador*/
        if(window.XMLHttpRequest){    
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }        
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                resultado.innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "inicio/venta/"+codigo, true);
        xmlhttp.send();           
    }

     function Mostrador(){ 
        var xmlhttp;
         /*Peticiones para cualquier navegador*/
        if(window.XMLHttpRequest){    
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }        
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                resultado.innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "inicio/mostrador/"+codigo, true);
        xmlhttp.send();          
     } 