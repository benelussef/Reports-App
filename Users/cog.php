<?php require("header.php")?>
<?php require("Menu.php")?>
<?php
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
$Requ="SELECT * FROM coordonnees";
$query=mysqli_query($connection,$Requ);
$res=mysqli_fetch_All($query);
?>
<div class="container">
<form method="POST" action="cog.php">

    <hr>
    <h6>Modify Accounts</h6>
    <hr>
    <?php
    foreach ($res as $array):
     $id=$array[0];
     $Agence=$array[1];
     $mail=$array[2];
     $pass=$array[3];
     $respo=$array[4];         
    ?>
             <div class='row'>
             <div class='col-2'>
                  <input type='text' class='form-control' name='Agence' value=<?= $Agence ?> placeholder='agence' required disabled>
             </div>
             <div class='col-2'>
             <input type='text' class='form-control' name='respo' value=<?= $respo?>  responsable required disabled>
             </div>
             <div class='col-3'>
                  <input type='text' class='form-control' name='mail' value=<?=$mail?> placeholder='mail' required disabled>
             </div>
             <div class='col-3'>
             <input type='text' class='form-control' name='password' placeholder='password'  value=<?=$pass?> required  disabled>
             </div>
             <div class='col-1'>
                  <?php if($id!=1):?>
             <td><a href='controlAccount.php?idS=<?=$id?>' class='btn btn-danger p-1'>Delete</a></td>
                  <?php endif?>
             </div>
             <div class='col-1'>
             <td><a href='ModifyAccount.php?idM=<?=$id?>' class='btn btn-success p-1'>Modify</a></td>
             </div>
             </div>
<?php endforeach ?>
            <hr>
            <h6>Add An Account</h6>
            <hr>
            <div class='row'>
             <div class='col-3'>
                  <input type='text' class='form-control' name='idA'   placeholder='agence' required>
             </div>
             <div class='col-3'>
             <input type='text' class='form-control' name='respoA'   placeholder='responsable' required>
             </div>
             <div class='col-3'>
                  <input type='text' class='form-control' name='mailA'  placeholder='mail' required>
             </div>
             <div class='col-3'>
             <input type='text' class='form-control' name='passwordA' placeholder='password' required >
             </div>
             </div>
             <button type="submit" name='ADD' class='btn btn-info m-2'>Add</button>          
             <?php if(isset($Erreur)){echo" <h6>$Erreur</h6>";} ?>
        </form>
</div>
<?php require("footer.php")?>
<?php
if(isset($_POST['ADD'])){
if(isset($_POST['idA'])&&isset($_POST['respoA'])&&isset($_POST['mailA'])&&isset($_POST['passwordA']))
{
    $idA=$_POST['idA'];
    $RespoA=$_POST['respoA'];
    $mailA=$_POST['mailA'];
    $passwordA=$_POST['passwordA'];
    $Req="INSERT INTO coordonnees(Agence,mail,passwod,responsable) VALUES ('$idA','$mailA','$passwordA','$RespoA')";
    $query=mysqli_query($connection,$Req);

}}
else{
    $Erreur="Veuillez remplir tous les champs !";
}

?>