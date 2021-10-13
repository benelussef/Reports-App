<?php
session_start();
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);

if(isset($_GET['idM'])){
    $_SESSION['id']=$_GET['idM'];
    $id=$_GET['idM'];
    $Requ="SELECT * FROM coordonnees WHERE Id='$id'";
    $query=mysqli_query($connection,$Requ);
    $res=mysqli_fetch_array($query);}
?>
<?php require("header.php")?>
<?php require("Menu.php") ?>
<hr><hr>
<div class="container">
<form method="POST" action="ModifyAccount.php">
            <h6>Modify Account</h6>
            <hr>
            <div class='row'>
                 <?php if($res[0][0]!=1): ?>
                    <div class='col-3'>
                  <input type='text' class='form-control' name='Agence' placeholder='Agence' value="<?php if(isset($res)){echo $res[1];}?>" required>
                  </div>
                   <?php endif?>
               
             <?php if($res[0][0]!=1): ?>
                <div class='col-3'>
             <input type='text' class='form-control' name='respo' value="<?php if(isset($res)){echo $res[4];}?>"   placeholder='responsable' required>
             </div>
             <?php endif?> 
             <div class='col-3'>
                  <input type='text' class='form-control' name='mail' value="<?php if(isset($res)){echo $res[2];}?>"  placeholder='mail' required>
             </div>
             <div class='col-3'>
             <input type='text' class='form-control' name='password' value="<?php if(isset($res)){echo $res[3];}?>" placeholder='password' required >
             </div>
             </div>
             <button type="submit" name='Save' class='btn btn-info m-2'>Save</button>          
</form>
<div>
<hr><hr>
<?php
if(isset($_POST['Save'])){
    if(isset($_POST['Agence'])){
        $Agence=$_POST['Agence'];
    }
    else{
        $Agence=$res[1];
    }
    if(isset($_POST['respo'])){
        $respo=$_POST['respo'];
    }
    else{
        $respo=$res[4];
    }
    if(isset($_POST['mail'])){
        $mail=$_POST['mail'];
    }
    else{
        $mail=$res[2];
    }
    if(isset($_POST['password'])){
        $pass=$_POST['password'];
    }
    else{
        $pass=$res[3];
    }
    if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];}
    $Req="UPDATE coordonnees SET Agence='$Agence',mail='$mail',passwod='$pass',responsable='$respo' WHERE Id=$id";
    $query=mysqli_query($connection,$Req);
    echo '<script language="Javascript">
          document.location.replace("http://localhost/Gestion-rapports/Users/cog.php");
           </script>';
    exit();
}
?>