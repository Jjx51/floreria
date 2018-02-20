var resultado = document.getElementById("cambia-contenido"); 
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
        xmlhttp.open("GET", "inicio/pedido/1", true);
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
        xmlhttp.open("GET", "inicio/venta/1", true);
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
        xmlhttp.open("GET", "inicio/mostrador/1", true);
        xmlhttp.send();          
     } 