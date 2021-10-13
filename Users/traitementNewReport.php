<?php
//traitement des nouveau rapports
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
if(isset($_POST['Enregistrer'])){
if(
!empty($_POST['Agence'])&&!empty($_POST['Responsable'])&&!empty($_POST['DateD'])&&!empty($_POST['DateF'])&&!empty($_POST['case1'])&&
!empty($_POST['case2'])&&!empty($_POST['case3'])&&!empty($_POST['case4'])&&!empty($_POST['case5'])&&!empty($_POST['case6'])&&
!empty($_POST['case7'])&&!empty($_POST['case8'])&&!empty($_POST['case9'])&&!empty($_POST['case10'])&&!empty($_POST['case11'])&&
!empty($_POST['case12'])&&!empty($_POST['case13'])&&!empty($_POST['case14'])&&!empty($_POST['case15'])&&!empty($_POST['case16'])&&
!empty($_POST['case17'])&&!empty($_POST['case18'])&&!empty($_POST['case19'])&&!empty($_POST['case20'])&&!empty($_POST['case21'])&&
!empty($_POST['case22'])&&!empty($_POST['case23'])&&!empty($_POST['case24'])&&!empty($_POST['case25'])&&!empty($_POST['case26']))
{
    $Agence=$_POST['Agence'];
    $Responsable=$_POST['Responsable'];
    $DateD=$_POST['DateD'];
    $DateF=$_POST['DateF'];
    $dated = new DateTime($DateD);
    $datef = new DateTime($DateD);
     $DateD=$dated->format('Y-m-d');
     $DateF=$datef->format('Y-m-d');
    $case1=$_POST['case1'];
    $case2=$_POST['case2'];
    $case4=$_POST['case4'];
    $case5=$_POST['case5'];
    $case7=$_POST['case7'];
    $case8=$_POST['case8'];
    $case10=$_POST['case10'];
    $case11=$_POST['case11'];
    $case13=$_POST['case13'];
    $case15=$_POST['case15'];
    $case17=$_POST['case17'];
    $case19=$_POST['case19'];
    $case21=$_POST['case21'];
    $case23=$_POST['case23'];
    $case25=$_POST['case25'];
        $case3="";
        foreach($_POST['case3'] as $value){
            $case3.=" ".$value;
        }
        $case6="";
        foreach($_POST['case6'] as $value){
            $case6.=" ".$value;
        }
        $case9="";
        foreach($_POST['case9'] as $value){
            $case9.=" ".$value;
        }
        $case12="";
        foreach($_POST['case12'] as $value){
            $case12.=" ".$value;
        }
        $case14="";
        foreach($_POST['case14'] as $value){
            $case14.=" ".$value;
        }
        $case16="";
        foreach($_POST['case16'] as $value){
            $case16.=" ".$value;
        }
        $case18="";
        foreach($_POST['case18'] as $value){
            $case18.=" ".$value;
        }
        $case20="";
        foreach($_POST['case20'] as $value){
            $case20.=" ".$value;
        }
        $case22="";
        foreach($_POST['case22'] as $value){
            $case22.=" ".$value;
        }
        $case24="";
        foreach($_POST['case24'] as $value){
            $case24.=" ".$value;
        }
        $case26="";
        foreach($_POST['case26'] as $value){
            $case26.=" ".$value;
        }
        $request="INSERT INTO rapports (Agence,Responsable,Date_debut,Date_fin,case1,case2,case3,case4,case5,case6,case7,case8,case9,case10,
        case11,case12,case13,case14,case15,case16,case17,case18,case19,case20,case21,case22,case23,case24,case25,case26) 
        VALUES ('$Agence','$Responsable','$DateD','$DateF','$case1','$case2','$case3','$case4','$case5','$case6','$case7','$case8','$case9',
        '$case10','$case11','$case12','$case13','$case14','$case15','$case16','$case17','$case18','$case19','$case20','$case21','$case22',
        '$case23','$case24','$case25','$case26')";
         $query=mysqli_query($connection,$request);
         $alert='
         <div class="container">
         <div class="alert alert-success " role="alert">
         Date saved successfully!
         </div>
         </div>
         ';         
        }
    else{
        $alert='
        <div class="container">
        <div class="alert alert-success " role="alert">
        Veuillez remplir tous les champs!
        </div>
        </div>
        ';  

    }
    }

?>