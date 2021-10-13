<?php
 if(isset($_GET['idS'])){
    $base="reports";
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,$base);
    $ID=$_GET['idS'];
    $i=substr($ID, 0, 2);
    $requet="DELETE FROM cumulate WHERE Id='$ID'";
    $q=mysqli_query($connection,$requet);
    $req="DELETE FROM rapports WHERE semaine=$i";
    $qu=mysqli_query($connection,$req);
    header("Location: http://localhost/Gestion-rapports/Users/Weekly.php");
}
?>