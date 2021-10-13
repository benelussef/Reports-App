<?php
session_start();

//traitement des nouveau rapports
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
if(isset($_POST['Enregistrer'])){
if(
!empty($_POST['DateD'])&&!empty($_POST['DateF'])&&!empty($_POST['case1'])&&
!empty($_POST['case2'])&&!empty($_POST['case4'])&&!empty($_POST['case5'])&&!empty($_POST['case7'])&&!empty($_POST['case8'])&&
!empty($_POST['case10'])&&!empty($_POST['case11'])&&!empty($_POST['case13'])&&!empty($_POST['case14'])&&!empty($_POST['case16'])&&
!empty($_POST['case17'])&&!empty($_POST['case19'])&&!empty($_POST['case20'])&&!empty($_POST['case22'])&&!empty($_POST['case23'])&&
!empty($_POST['case25'])&&!empty($_POST['case26'])&&!empty($_POST['case28'])&&!empty($_POST['case29'])&&!empty($_POST['case31'])&&
!empty($_POST['case32'])&&!empty($_POST['case34'])&&!empty($_POST['case35'])&&!empty($_POST['case37'])&&!empty($_POST['case38'])&&
!empty($_POST['case40'])&&!empty($_POST['case41'])&&!empty($_POST['case43'])&&!empty($_POST['case44'])&&!empty($_POST['case46'])&&
!empty($_POST['case47'])&&!empty($_POST['case49'])&&!empty($_POST['case50'])&&!empty($_POST['case52'])&&!empty($_POST['case53'])&&
!empty($_POST['case55'])&&!empty($_POST['case56'])&&!empty($_POST['case58'])&&!empty($_POST['case59'])&&!empty($_POST['case61'])&&
!empty($_POST['case62'])&&!empty($_POST['case64'])&&!empty($_POST['case65'])&&!empty($_POST['case67'])&&!empty($_POST['case68'])&&
!empty($_POST['case70'])&&!empty($_POST['case71'])&&!empty($_POST['case73'])&&!empty($_POST['case74'])&&!empty($_POST['case75'])&&
!empty($_POST['case76'])&&!empty($_POST['case77'])&&!empty($_POST['case78'])&&!empty($_POST['case79'])&&!empty($_POST['case80'])&&
!empty($_POST['case81'])&&!empty($_POST['case82'])&&!empty($_POST['case83'])&&!empty($_POST['case84'])&&!empty($_POST['case85'])&&
!empty($_POST['case86'])
)
{    
     if(isset($_POST['Agence'])){
          $Agence=$_POST['Agence'];
     }
     else{
    $Agence=$_SESSION['auth']["Agence"];
      }
    if(isset($_POST['Responsable'])){
    $Responsable=$_POST['Responsable'];}
    else{
     $Responsable=$_SESSION['auth']['responsable'];
    }
    $DateD=$_POST['DateD'];
    $DateF=$_POST['DateF'];
    $dated = new DateTime($DateD);
    $datef = new DateTime($DateF);
    $DateD=$dated->format('Y-m-d');
    $DateF=$datef->format('Y-m-d');
    $case1=$_POST['case1'];
    $case2=$_POST['case2'];
    $case3="CANADA";
    $case4=$_POST['case4'];
    $case5=$_POST['case5'];
    $case6="FRANCE";
    $case7=$_POST['case7'];
    $case8=$_POST['case8'];
    $case9="POLOGNE";
    $case10=$_POST['case10'];
    $case11=$_POST['case11'];
    $case12="ESPAGNE";
    $case13=$_POST['case13'];
    $case14=$_POST['case14'];
    $case15="ANGLETERRE";
    $case16=$_POST['case16'];
    $case17=$_POST['case17'];
    $case18="LA CHINE";
    $case19=$_POST['case19'];
    $case20=$_POST['case20'];
    $case21="CANADA";
    $case22=$_POST['case22'];
    $case23=$_POST['case23'];
    $case24="FRANCE";
    $case25=$_POST['case25'];
    $case26=$_POST['case26'];
    $case27="POLOGNE";
    $case28=$_POST['case28'];
    $case29=$_POST['case29'];
    $case30="ESPAGNE";
    $case31=$_POST['case31'];
    $case32=$_POST['case32'];
    $case33="ANGLETERRE";
    $case34=$_POST['case34'];
    $case35=$_POST['case35'];
    $case36="LA CHINE";
    $case37=$_POST['case37'];
    $case38=$_POST['case38'];
    $case39="CANADA";
    $case40=$_POST['case40'];
    $case41=$_POST['case41'];
    $case42="FRANCE";
    $case43=$_POST['case43'];
    $case44=$_POST['case44'];
    $case45="POLOGNE";
    $case46=$_POST['case46'];
    $case47=$_POST['case47'];
    $case48="ESPAGNE";
    $case49=$_POST['case49'];
    $case50=$_POST['case50'];
    $case51="ANGLETERRE";
    $case52=$_POST['case52'];
    $case53=$_POST['case53'];
    $case54="LA CHINE";
    $case55=$_POST['case55'];
    $case56=$_POST['case56'];
    $case57="CANADA";
    $case58=$_POST['case58'];
    $case59=$_POST['case59'];
    $case60="FRANCE";
    $case61=$_POST['case61'];
    $case62=$_POST['case62'];
    $case63="POLOGNE";
    $case64=$_POST['case64'];
    $case65=$_POST['case65'];
    $case66="ESPAGNE";
    $case67=$_POST['case67'];
    $case68=$_POST['case68'];
    $case69="ANGLETERRE";
    $case70=$_POST['case70'];
    $case71=$_POST['case71'];
    $case72="LA CHINE";
    $case73=$_POST['case73'];
    $case74=$_POST['case74'];
    $case75=$_POST['case75'];
    $case76=$_POST['case76'];
    $case77=$_POST['case77'];
    $case78=$_POST['case78'];
    $case79=$_POST['case79'];
    $case80=$_POST['case80'];
    $case81=$_POST['case81'];
    $case82=$_POST['case82'];
    $case83=$_POST['case83'];
    $case84=$_POST['case84'];
    $case85=$_POST['case85'];
    $case86=$_POST['case86'];
        $good_format=strtotime ($DateF);
        $numSemaine=date('W',$good_format);
        $good=strtotime ($DateF);
        $M=date('M',$good);
        $Y=date('Y',$good);
        $Mois=$M." ".$Y;
        $DateAndTime = date('d-m-Y');
        $DateA = new DateTime($DateAndTime);
        $DateActuelle=$DateA->format('Y-m-d');
        $request="INSERT INTO rapports (Agence,Responsable,Date_debut,Date_fin,case1,case2,case3,case4,case5,case6,case7,case8,case9,case10,
         case11,case12,case13,case14,case15,case16,case17,case18,case19,case20,case21,case22,case23,case24,case25,case26,case27,case28, case29, 
         case30,case31,case32,case33,case34,case35,case36,case37,case38,case39,case40,case41,case42,case43,case44,case45,case46,case47,case48, 
         case49,case50,case51,case52,case53,case54,case55,case56,case57,case58,case59,case60,case61,case62,case63,case64,case65,case66,case67, 
         case68,case69,case70,case71,case72,case73,case74,case75,case76,case77,case78,case79,case80,case81,case82,case83,case84,case85,case86,
         semaine,mois,annee,SaveDate) 
        VALUES ('$Agence','$Responsable','$DateD','$DateF','$case1','$case2','$case3','$case4','$case5','$case6','$case7','$case8','$case9','$case10',
        '$case11','$case12','$case13','$case14','$case15','$case16','$case17','$case18','$case19','$case20','$case21','$case22','$case23',
        '$case24','$case25','$case26','$case27','$case28','$case29','$case30','$case31','$case32','$case33','$case34','$case35','$case36',
        '$case37','$case38','$case39','$case40','$case41','$case42','$case43','$case44','$case45','$case46','$case47','$case48','$case49',
        '$case50','$case51','$case52','$case53','$case54','$case55','$case56','$case57','$case58','$case59','$case60','$case61','$case62',
        '$case63','$case64','$case65','$case66','$case67','$case68','$case69','$case70','$case71','$case72','$case73','$case74','$case75',
        '$case76','$case77','$case78','$case79','$case80','$case81','$case82','$case83','$case84','$case85','$case86','$numSemaine','$Mois','$Y','$DateActuelle')";
         $query=mysqli_query($connection,$request);
         echo $query;
         $alert='
         <div class="container">
         <div class="alert alert-success " role="alert">
         Date saved successfully!
         </div>
         </div>
         ';  
         require("traitementData.php");
     }
    else{
        $alert='
        <div class="container">
        <div class="alert alert-danger " role="alert">
        Veuillez remplir tous les champs!
        </div>
        </div>
        ';  

    }}
?>
<?php require("header.php")?><!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!--fin-->
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <?php require("Menu.php")?>

                <!-- Begin Page Content -->
                <div class="container">
                <?php
                if(isset($alert)){
                   echo $alert;
                }
                ?>
                        <form method="POST" action="Newreport.php">
                        <div class="row g-4">
                           <div class="col-3">
                           <?php if($_SESSION['auth']["Agence"] == "Admin"): ?>
                             <input  class="form-control selectpicker" placeholder="Agence" name="Agence"> 
                             <?php endif ?>
                             <?php if($_SESSION['auth']["Agence"] != "Admin"): ?>
                             <input  class="form-control selectpicker" placeholder="Agence" value="<?php if(isset($_SESSION['auth']["Agence"])){echo $_SESSION['auth']["Agence"];}?>" name="Agence" disabled> 
                             <?php endif ?>
                            </div>
                           <div class="col-auto">
                             <?php if($_SESSION['auth']["Agence"] == "Admin"): ?>
                              <input type="text" class="form-control" name="Responsable" placeholder="Responsable" required> 
                            <?php endif ?>
                             <?php if($_SESSION['auth']["Agence"] != "Admin"): ?>
                              <input type="text" class="form-control" name="Responsable" placeholder="Responsable" value="<?php if(isset($_SESSION['auth']["responsable"])){echo $_SESSION['auth']["responsable"];}?>" required disabled> 
                             <?php endif ?>
                           </div>
                           <div class="col-auto">
                           <input id="datepicker" placeholder="Date de debut" name="DateD" required/>
                               <script>
                                   $('#datepicker').datepicker({
                                      uiLibrary: 'bootstrap4'
                                              });
                               </script>
                           </div>
                           <div class="col-auto">
                           <input id="datepicker1" placeholder="Date de fin" name="DateF" required/>
                               <script>
                                   $('#datepicker1').datepicker({
                                      uiLibrary: 'bootstrap4'
                                              });
                               </script>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                            <p align="center">Premiers paiement cette semaine</p>
                                <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case1"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case2" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case3"  value="CANADA" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case4"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case5" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case6"  value="FRANCE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case7"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case8" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case9"  value="POLOGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case10"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case11" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case12"  value="ESPAGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case13"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case14" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case15"  value="ANGLETERRE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case16"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case17" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case18"  value="LA CHINE" required disabled>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-6">
                            <p align="center">Premiers paiement prévu la semaine prochaine</p>
                            <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case19"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case20" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case21"  value="CANADA" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case22"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case23" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case24"  value="FRANCE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case25"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case26" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case27"  value="POLOGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case28"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case29" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case30"  value="ESPAGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case31"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case32" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case33"  value="ANGLETERRE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case34"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case35" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case36"  value="LA CHINE" required disabled>
                                   </div>
                                   </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                            <p align="center">Deuxième paiement cette semaine</p>
                            <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case37"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case38" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case39"  value="CANADA" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case40"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case41" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case42"  value="FRANCE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case43"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case44" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case45"  value="POLOGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case46"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case47" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case48"  value="ESPAGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case49"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case50" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case51"  value="ANGLETERRE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case52"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case53" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case54"  value="LA CHINE" required disabled>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-6">
                            <p align="center">Deuxième paiement prévu la semaine prochaine</p>
                            <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case55"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case56" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case57"  value="CANADA" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case58"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case59" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case60"  value="FRANCE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case61"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case62" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case63"  value="POLOGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case64"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case65" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case66"  value="ESPAGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case67"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case68" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case69"  value="ANGLETERRE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case70"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case71" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case72"  value="LA CHINE" required disabled>
                                   </div>
                                   </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                            <p align="center">Visites à l'agence</p>
                              <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case73"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker"  placeholder="Remarque" name="case74"> 
                                      <option >HOT LEAD</option>
                                      <option >MEDIUM LEAD</option>
                                      <option >COLD LEAD</option>
                                      <option >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Engagements distribués par e-mail cette semaine</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case75"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker"  placeholder="Remarque" name="case76"> 
                                      <option >HOT LEAD</option>
                                      <option >MEDIUM LEAD</option>
                                      <option >COLD LEAD</option>
                                      <option >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Etudiants contacter sur les réseaux sociaux</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case77"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker"  placeholder="Remarque" name="case78"> 
                                      <option >HOT LEAD</option>
                                      <option >MEDIUM LEAD</option>
                                      <option >COLD LEAD</option>
                                      <option >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                            <p align="center">Etudiants contacter sur whatsapp cette semaine</p>
                              <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case79"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker"  placeholder="Remarque" name="case80"> 
                                      <option >HOT LEAD</option>
                                      <option >MEDIUM LEAD</option>
                                      <option >COLD LEAD</option>
                                      <option >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Total Nouveaux leads cette semaine</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case81"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker"  placeholder="Remarque" name="case82"> 
                                      <option >HOT LEAD</option>
                                      <option >MEDIUM LEAD</option>
                                      <option >COLD LEAD</option>
                                      <option >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Leads convertis en applications</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case83"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker"  placeholder="Remarque" name="case84"> 
                                      <option >HOT LEAD</option>
                                      <option >MEDIUM LEAD</option>
                                      <option >COLD LEAD</option>
                                      <option >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-6">
                            <p align="center">Engagements distribués à l'agence cette semaine</p>
                              <div class="row">
                                  <div class="col-3">
                                  <input type="text"  class="form-control" name="case85"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-6">
                                  <input type="text"  class="form-control" name="case86"  placeholder="Remarque" required>
                                  </div>       
                                  <div class="col-3">
                                  <button type="submit" class="btn btn-info" name="Enregistrer">Enregistrer</button>
                                  </div>
                                </div>
                              </div>
                        </form>
                </div>
            </div>
            <!-- End of Main Content -->

            <?php require("footer.php")?>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script type="text/javascript">
$('select').selectpicker();
    </script>

</body>

</html>
