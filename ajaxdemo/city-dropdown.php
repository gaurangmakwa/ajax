<?php
    require './connection.php';
?>
<html>
    <head>
        <script>
            function getXMLHTTP (){
                var xmlhttp=false;
                try{
                    xmlhttp=new XMLHttpRequest ();
                }
                catch(e){
                    try{
                        xmlhttp=new ActiveXObject ("microsoft.XMLHTTP");
                    }
                    catch(e){
                        try{
                            xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
                        }
                        catch(e1){
                            xmlhttp=false;
                        }
                    }
                }
                return xmlhttp;
            }

            function getsubcat(strURL){
                var req = getXMLHTTP();
                if(req){
                    req.onreadystatechange = function (){
                        if (req.readyState == 4 ) {
                            if (req.status==200){
                                document.getElementById('subdiv').innerHTML=req.responseText;
                            }
                            else{
                                alert ("there was a problem while using XMLHTTP:\n");
                            }
                        }
                    }
                    req.open("GET", strURL,true);
                    req.send(null);
                }
            }
        </script>
    </head>
    <body>
        <h1>state city ajax</h1>
        <form>
         state   <select  name="state" onchange="getsubcat('ajax-get-city.php?state='+this.value)">
        <?php
                $q=mysqli_query($connection,"select * from state");

                        echo "<option>select state</option>";
                        while($data = mysqli_fetch_row($q)){
                         echo "<option value='$data[0]'>$data[1]</option>";
                        }
               
        ?>
        </select>
        <br>
       
        <div id="subdiv">
            city <select> 
                <option>select</option>
                </select>  
        </div>
        
        </form>
    </body>
</htm>