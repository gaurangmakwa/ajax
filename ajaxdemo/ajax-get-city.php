<?php
     require './connection.php';

     if(isset($_GET['state'])){
        $state=$_GET["state"];

        $q=mysqli_query($connection,"select * from city where stateid='{$state}'");

        echo " city <select name='city'>";
            while($cdata=mysqli_fetch_array($q)){
                echo "<option value='$cdata[0]'>$cdata[1]</option>";
            }
        echo "</select>";
     }
?>