<?php
    require './connection.php';

    if($_POST){
        $cname=$_POST["cname"];
        $sname=$_POST["sname"];

        $query=mysqli_query($connection,"insert into city (cityname,stateid)values('{$cname}','{$sname}')");

        if($query){
            echo "<script>alert('data inserted');</script>";
        }
    }

?>
<html>
    <body>
        <form method="post">

        <h1>city insert</h1>
            <table>
                <tr>
                    <td>cityname</td>
                    <td><input type="text" name="cname"></td>
                </tr>
                <tr>
                    <td>state</td>
                    <td>
                        <?php
                            $q=mysqli_query($connection,"select * from state");

                            echo "<select name='sname'>";
                                while($data = mysqli_fetch_row($q)){
                                    echo "<option value='$data[0]'>$data[1]</option>";
                                }
                            echo "</select>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>