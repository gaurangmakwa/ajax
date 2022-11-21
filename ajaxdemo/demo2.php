<html>
    <head>
    <script>
            function mydataload(myurl){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                  if(this.readyState == 4 && this.status == 200){
                        document.getElementById("mydiv") .innerHTML = this.responseText;
                  }  
                };
                xhttp.open("GET",myurl,true);
                xhttp.send();
                
            }
        </script>
    </head>
    <body>
        <input type="text" onchange="mydataload('ajax.php?name='+this.value)">
        <div id="mydiv"></div>
    </body>
</html>