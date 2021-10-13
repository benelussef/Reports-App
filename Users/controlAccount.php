<?php 
session_start();

$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
if(isset($_GET['idS'])){
    $ids=$_GET['idS'];
    $Requ="DELETE FROM `coordonnees` WHERE Id='$ids'";
    $query=mysqli_query($connection,$Requ);
    header("Location: http://localhost/Gestion-rapports/Users/cog.php");
    exit();
}
?>
