<html>
    <head>
        <script>
            function mydataload(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                  if(this.readyState == 4 && this.status == 200){
                        document.getElementById("mydiv") .innerHTML = this.responseText;
                  }  
                };
                xhttp.open("GET","akash.txt",true);
                xhttp.send();
                
            }
        </script>
    </head>
    <body>
        <button onclick="mydataload()">click me to load data</button>
        <div id="mydiv"></div>
    </body>
</html>