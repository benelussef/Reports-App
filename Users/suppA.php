<?php
 if(isset($_GET['idS'])){
    $base="reports";
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,$base);
    $ID=$_GET['idS'];
    $requet="DELETE FROM cumulate WHERE annee='$ID'";
    $q=mysqli_query($connection,$requet);
    $req="DELETE FROM rapports WHERE annee='$ID'";
    $qu=mysqli_query($connection,$req);
    $requ="DELETE FROM monthly WHERE annee='$ID'";
    $que=mysqli_query($connection,$requ);
    $r="DELETE FROM annuel WHERE years='$ID'";
    $quey=mysqli_query($connection,$r);
    header("Location: http://localhost/Gestion-rapports/Users/Annuel.php");
}
?>