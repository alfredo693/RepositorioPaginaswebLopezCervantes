window.onload = function () {
    document.getElementById("btnajax").addEventListener("click", pedirHeader);
    document.getElementById("btnreset").addEventListener("click", iniciarHeader);
    
    function pedirHeader() {

        var solicitud = new XMLHttpRequest();

        solicitud.onreadystatechange = function () {
            if (solicitud.readyState == 4 && solicitud.status == 200) {
                document.getElementById("headerdiv").innerHTML = solicitud.responseText;
                
            }};

            solicitud.open("GET", "archivo.txt", true);
            solicitud.send();
        
    }

    function iniciarHeader() {
        document.getElementById("headerdiv").innerHTML = "<h2> este es un header</h2>";
        
    }


    
}