<?php
 if(isset($_GET['idS'])){
    $base="reports";
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,$base);
    $ID=$_GET['idS'];
    $requet="DELETE FROM cumulate WHERE mois='$ID'";
    $req="DELETE FROM rapports WHERE mois='$ID'";
    $requ="DELETE FROM monthly WHERE mois='$ID'";
    $q=mysqli_query($connection,$requet);
    $qu=mysqli_query($connection,$req);
    $que=mysqli_query($connection,$requ);
    header("Location: http://localhost/Gestion-rapports/Users/Monthly.php");
}
?>