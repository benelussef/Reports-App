<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 
//require "select.php";

      $Agence= $_SESSION['Agence'];
 $Responsable=$_SESSION['Responsable'];
       $DateD=$_SESSION['DateD'];
       $DateF=$_SESSION['DateF'];
       $case1=$_SESSION['case1'];
       $case2=$_SESSION['case2'];
       $case3=$_SESSION['case3'];
       $case4=$_SESSION['case4'];
       $case5=$_SESSION['case5'];
       $case6=$_SESSION['case6'];
       $case7=$_SESSION['case7'];
       $case8=$_SESSION['case8'];
       $case9=$_SESSION['case9'];
      $case10=$_SESSION['case10'];
      $case11=$_SESSION['case11'];
      $case12=$_SESSION['case12'];
      $case13=$_SESSION['case13'];
      $case14=$_SESSION['case14'];
      $case15=$_SESSION['case15'];
      $case16=$_SESSION['case16'];
      $case17=$_SESSION['case17'];
      $case18=$_SESSION['case18'];
      $case19=$_SESSION['case19'];
      $case20=$_SESSION['case20'];
      $case21=$_SESSION['case21'];
      $case22=$_SESSION['case22'];
      $case23=$_SESSION['case23'];
      $case24=$_SESSION['case24'];
      $case25=$_SESSION['case25'];
      $case26=$_SESSION['case26'];
      $case27=$_SESSION['case27'];
      $case28=$_SESSION['case28'];
      $case29=$_SESSION['case29'];
      $case30=$_SESSION['case30'];
      $case31=$_SESSION['case31'];
      $case32=$_SESSION['case32'];
      $case33=$_SESSION['case33'];
      $case34=$_SESSION['case34'];
      $case35=$_SESSION['case35'];
      $case36=$_SESSION['case36'];
      $case37=$_SESSION['case37'];
      $case38=$_SESSION['case38'];
      $case39=$_SESSION['case39'];
      $case40=$_SESSION['case40'];
      $case41=$_SESSION['case41'];
      $case42=$_SESSION['case42'];
      $case43=$_SESSION['case43'];
      $case44=$_SESSION['case44'];
      $case45=$_SESSION['case45'];
      $case46=$_SESSION['case46'];
      $case47=$_SESSION['case47'];
      $case48=$_SESSION['case48'];
      $case49=$_SESSION['case49'];
      $case50=$_SESSION['case50'];
      $case51=$_SESSION['case51'];
      $case52=$_SESSION['case52'];
      $case53=$_SESSION['case53'];
      $case54=$_SESSION['case54'];
      $case55=$_SESSION['case55'];
      $case56=$_SESSION['case56'];
      $case57=$_SESSION['case57'];
      $case58=$_SESSION['case58'];
      $case59=$_SESSION['case59'];
      $case60=$_SESSION['case60'];
      $case61=$_SESSION['case61'];
      $case62=$_SESSION['case62'];
      $case63=$_SESSION['case63'];
      $case64=$_SESSION['case64'];
      $case65=$_SESSION['case65'];
      $case66=$_SESSION['case66'];
      $case67=$_SESSION['case67'];
      $case68=$_SESSION['case68'];
      $case69=$_SESSION['case69'];
      $case70=$_SESSION['case70'];
      $case71=$_SESSION['case71'];
      $case72=$_SESSION['case72'];
      $case73=$_SESSION['case73'];
      $case74=$_SESSION['case74'];
      $case75=$_SESSION['case75'];
      $case76=$_SESSION['case76'];
      $case77=$_SESSION['case77'];
      $case78=$_SESSION['case78'];
      $case79=$_SESSION['case79'];
      $case80=$_SESSION['case80'];
      $case81=$_SESSION['case81'];
      $case82=$_SESSION['case82'];
      $case83=$_SESSION['case83'];
      $case84=$_SESSION['case84'];
      $case85=$_SESSION['case85'];
      $case86=$_SESSION['case86'];

if(isset($_POST['save'])){
            $base="reports";
            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,$base);
            $Agence=$_POST['Agence'];
            $Responsable=$_POST['Responsable'];
            $DateD=$_POST['DateD'];
            $DateF=$_POST['DateF'];
            $dated = new DateTime($DateD);
            $datef = new DateTime($DateF);
             $DateD=$dated->format('Y-m-d');
             $DateF=$datef->format('Y-m-d');
            if(isset($_POST['case1'])){
            $case1=$_POST['case1'];}
            if(isset($_POST['case2'])){
                $case2=$_POST['case2'];}
            if(isset($_POST['case3'])){
                $case3=$_POST['case3'];}
            if(isset($_POST['case4'])){
                $case4=$_POST['case4'];}
            if(isset($_POST['case5'])){
                $case5=$_POST['case5'];} 
            if(isset($_POST['case6'])){
                $case6=$_POST['case6'];}   
            if(isset($_POST['case7'])){
                $case7=$_POST['case7'];}
            if(isset($_POST['case8'])){
                $case8=$_POST['case8'];}
            if(isset($_POST['case9'])){
                $case9=$_POST['case9'];}
            if(isset($_POST['case10'])){
                $case10=$_POST['case10'];}
            if(isset($_POST['case11'])){
                $case11=$_POST['case11'];}
            if(isset($_POST['case12'])){
                $cas12=$_POST['case12'];}   
            if(isset($_POST['case13'])){
                $case13=$_POST['case13'];}
            if(isset($_POST['case14'])){
                $case14=$_POST['case14'];}
            if(isset($_POST['case15'])){
                $case15=$_POST['case15'];}
            if(isset($_POST['case16'])){
                $case16=$_POST['case16'];}                                      
            if(isset($_POST['case17'])){
                $case17=$_POST['case17'];}
            if(isset($_POST['case18'])){
                $case18=$_POST['case18'];}
            if(isset($_POST['case19'])){
                $case19=$_POST['case19'];}
            if(isset($_POST['case20'])){
                $case20=$_POST['case20'];}
            if(isset($_POST['case21'])){
                $case21=$_POST['case21'];}
            if(isset($_POST['case22'])){
                $case22=$_POST['case22'];}       
            if(isset($_POST['case23'])){
                $case23=$_POST['case23'];} 
            if(isset($_POST['case24'])){
                $case24=$_POST['case24'];}                
            if(isset($_POST['case25'])){
                $case25=$_POST['case25'];}
            if(isset($_POST['case26'])){
                $case26=$_POST['case26'];}
            if(isset($_POST['case27'])){
                $case27=$_POST['case27'];}
            if(isset($_POST['case28'])){
                $case28=$_POST['case28'];}
            if(isset($_POST['case29'])){
                $case29=$_POST['case29'];}
            if(isset($_POST['case30'])){
                $case30=$_POST['case30'];}
            if(isset($_POST['case31'])){
                $case31=$_POST['case31'];}
            if(isset($_POST['case32'])){
                $case32=$_POST['case32'];}
            if(isset($_POST['case33'])){
                $case33=$_POST['case33'];}
            if(isset($_POST['case34'])){
                $case34=$_POST['case34'];}
            if(isset($_POST['case35'])){
                $case35=$_POST['case35'];}
            if(isset($_POST['case36'])){
                $case36=$_POST['case36'];}
            if(isset($_POST['case37'])){
                $case37=$_POST['case37'];}
            if(isset($_POST['case38'])){
                $case38=$_POST['case38'];}
            if(isset($_POST['case39'])){
                $case39=$_POST['case39'];}
            if(isset($_POST['case40'])){
                $case40=$_POST['case40'];}
            if(isset($_POST['case41'])){
                $case41=$_POST['case41'];}
            if(isset($_POST['case42'])){
                $case42=$_POST['case42'];}
            if(isset($_POST['case43'])){
                $case43=$_POST['case43'];}
            if(isset($_POST['case44'])){
                $case44=$_POST['case44'];}
            if(isset($_POST['case45'])){
                $case45=$_POST['case45'];}
            if(isset($_POST['case46'])){
                $case46=$_POST['case46'];}
            if(isset($_POST['case47'])){
                $case47=$_POST['case47'];}
            if(isset($_POST['case48'])){
                $case48=$_POST['case48'];}
            if(isset($_POST['case49'])){
                $case49=$_POST['case49'];}
            if(isset($_POST['case50'])){
                $case50=$_POST['case50'];}
            if(isset($_POST['case51'])){
                $case51=$_POST['case51'];}
            if(isset($_POST['case52'])){
                $case52=$_POST['case52'];}
            if(isset($_POST['case53'])){
                $case53=$_POST['case53'];}
            if(isset($_POST['case54'])){
                $case54=$_POST['case54'];}
            if(isset($_POST['case55'])){
                $case55=$_POST['case55'];}
            if(isset($_POST['case56'])){
                $case56=$_POST['case56'];}
            if(isset($_POST['case57'])){
                $case57=$_POST['case57'];}
            if(isset($_POST['case58'])){
                $case58=$_POST['case58'];}
            if(isset($_POST['case59'])){
                $case59=$_POST['case59'];}
            if(isset($_POST['case60'])){
                $case60=$_POST['case60'];}
            if(isset($_POST['case61'])){
                $case61=$_POST['case61'];}
            if(isset($_POST['case62'])){
                $case62=$_POST['case62'];}
            if(isset($_POST['case63'])){
                $case63=$_POST['case63'];}
            if(isset($_POST['case64'])){
                $case64=$_POST['case64'];}
            if(isset($_POST['case65'])){
                $case65=$_POST['case65'];}
            if(isset($_POST['case66'])){
                $case66=$_POST['case66'];}
            if(isset($_POST['case67'])){
                $case67=$_POST['case67'];}
            if(isset($_POST['case68'])){
                $case68=$_POST['case68'];}
            if(isset($_POST['case69'])){
                $case69=$_POST['case69'];}
            if(isset($_POST['case70'])){
                $case70=$_POST['case70'];}
            if(isset($_POST['case71'])){
                $case71=$_POST['case71'];}
            if(isset($_POST['case72'])){
                $case72=$_POST['case72'];}
            if(isset($_POST['case73'])){
                $case73=$_POST['case73'];}
            if(isset($_POST['case74'])){
                $case74=$_POST['case74'];}
            /*else{
                $case74=$_SESSION['case74'];
               }*/
            if(isset($_POST['case75'])){
                $case75=$_POST['case75'];}
            if(isset($_POST['case76'])){
                $case76=$_POST['case76'];}
            /*else{
                $case76=$_SESSION['case76'];
                }*/
            if(isset($_POST['case77'])){
                $case77=$_POST['case77'];}
            if(isset($_POST['case78'])){
                $case78=$_POST['case78'];}
           /* else{
                $case78=$_SESSION['case78'];
                }*/
            if(isset($_POST['case79'])){
                $case79=$_POST['case79'];}
            if(isset($_POST['case80'])){
                $case80=$_POST['case80'];}
            /*else{
                $case80=$_SESSION['case80'];
                }*/
            if(isset($_POST['case81'])){
                $case81=$_POST['case81'];}
            if(isset($_POST['case82'])){
                $case82=$_POST['case82'];}
            /*else{
                $case82=$_SESSION['case82'];
                }*/
            if(isset($_POST['case83'])){
                $case83=$_POST['case83'];}
            if(isset($_POST['case84'])){
                $case84=$_POST['case84'];}
            /*else{
                $case84=$_SESSION['case84'];
                }*/
            if(isset($_POST['case85'])){
                $case85=$_POST['case85'];}
            if(isset($_POST['case86'])){
                $case86=$_POST['case86'];}
           /* else{
                $case86=$_SESSION['case86'];
             }*/
                   $ID=$_SESSION['id'];
                $request="UPDATE rapports SET 
                Responsable = '$Responsable', 
                Agence = '$Agence',
                Date_debut = '$DateD',
                Date_fin='$DateF',
                 case1='$case1',
                 case2='$case2',
                 case3='$case3',
                 case4='$case4',
                 case5='$case5',
                 case6='$case6',
                 case7='$case7',
                 case8='$case8',
                 case9='$case9',
                 case10='$case10',
                 case11='$case11',
                 case12='$case12',
                 case13='$case13',
                 case14='$case14',
                 case15='$case15',
                 case16='$case16',
                 case17='$case17',
                 case18='$case18',
                 case19='$case19',
                 case20='$case20',
                 case21='$case21',
                 case22='$case22',
                 case23='$case23',
                 case24='$case24',
                 case25='$case25',
                 case26='$case26',
                 case27='$case27',
                 case28='$case28',
                 case29='$case29',
                 case30='$case30',
                 case31='$case31',
                 case32='$case32',
                 case33='$case33',
                 case34='$case34',
                 case35='$case35',
                 case36='$case36',
                 case37='$case37',
                 case38='$case38',
                 case39='$case39',
                 case40='$case40',
                 case41='$case41',
                 case42='$case42',
                 case43='$case43',
                 case44='$case44',
                 case45='$case45',
                 case46='$case46',
                 case47='$case47',
                 case48='$case48',
                 case49='$case49',
                 case50='$case50',
                 case51='$case51',
                 case52='$case52',
                 case53='$case53',
                 case54='$case54',
                 case55='$case55',
                 case56='$case56',
                 case57='$case57',
                 case58='$case58',
                 case59='$case59',
                 case60='$case60',
                 case61='$case61',
                 case62='$case62',
                 case63='$case63',
                 case64='$case64',
                 case65='$case65',
                 case66='$case66',
                 case67='$case67',
                 case68='$case68',
                 case69='$case69',
                 case70='$case70',
                 case71='$case71',
                 case72='$case72',
                 case73='$case73',
                 case74='$case74',
                 case75='$case75',
                 case76='$case76',
                 case77='$case77',
                 case78='$case78',
                 case79='$case79',
                 case80='$case80',
                 case81='$case81',
                 case82='$case82',
                 case83='$case83',
                 case84='$case84',
                 case85='$case85',
                 case86='$case86'
                WHERE Id=$ID";
                 $query=mysqli_query($connection,$request);
                 $alert='
                 <div class="container">
                 <div class="alert alert-success " role="alert">
                 Date saved successfully!
                 </div>
                 </div>
                 ';

                 unset($_SESSION['id']);
                    unset($_SESSION['Agence']);
                    unset($_SESSION['Responsable']);
                    unset($_SESSION['DateD']);
                    unset($_SESSION['DateF']);
                    unset($_SESSION['case1']);
                    unset($_SESSION['case2']);
                    unset($_SESSION['case3']);
                    unset($_SESSION['case4']);
                    unset($_SESSION['case5']);
                    unset($_SESSION['case6']);
                    unset($_SESSION['case7']);
                    unset($_SESSION['case8']);
                    unset($_SESSION['case9']);
                    unset($_SESSION['case10']);
                    unset($_SESSION['case11']);
                    unset($_SESSION['case12']);
                    unset($_SESSION['case13']);
                    unset($_SESSION['case14']);
                    unset($_SESSION['case15']);
                    unset($_SESSION['case16']);
                    unset($_SESSION['case17']);
                    unset($_SESSION['case18']);
                    unset($_SESSION['case19']);
                    unset($_SESSION['case20']);
                    unset($_SESSION['case21']);
                    unset($_SESSION['case22']);
                    unset($_SESSION['case23']);
                    unset($_SESSION['case24']);
                    unset($_SESSION['case25']);
                    unset($_SESSION['case26']);
                    unset($_SESSION['case27']);
                    unset($_SESSION['case28']);
                    unset($_SESSION['case29']);
                    unset($_SESSION['case30']);
                    unset($_SESSION['case31']);
                    unset($_SESSION['case32']);
                    unset($_SESSION['case33']);
                    unset($_SESSION['case34']);
                    unset($_SESSION['case35']);
                    unset($_SESSION['case36']);
                    unset($_SESSION['case37']);
                    unset($_SESSION['case38']);
                    unset($_SESSION['case39']);
                    unset($_SESSION['case40']);
                    unset($_SESSION['case41']);
                    unset($_SESSION['case42']);
                    unset($_SESSION['case43']);
                    unset($_SESSION['case44']);
                    unset($_SESSION['case45']);
                    unset($_SESSION['case46']);
                    unset($_SESSION['case47']);
                    unset($_SESSION['case48']);
                    unset($_SESSION['case49']);
                    unset($_SESSION['case50']);
                    unset($_SESSION['case51']);
                    unset($_SESSION['case52']);
                    unset($_SESSION['case53']);
                    unset($_SESSION['case54']);
                    unset($_SESSION['case55']);
                    unset($_SESSION['case56']);
                    unset($_SESSION['case57']);
                    unset($_SESSION['case58']);
                    unset($_SESSION['case59']);
                    unset($_SESSION['case60']);
                    unset($_SESSION['case61']);
                    unset($_SESSION['case62']);
                    unset($_SESSION['case63']);
                    unset($_SESSION['case64']);
                    unset($_SESSION['case65']);
                    unset($_SESSION['case66']);
                    unset($_SESSION['case67']);
                    unset($_SESSION['case68']);
                    unset($_SESSION['case69']);
                    unset($_SESSION['case70']);
                    unset($_SESSION['case71']);
                    unset($_SESSION['case72']);
                    unset($_SESSION['case73']);
                    unset($_SESSION['case74']);
                    unset($_SESSION['case75']);
                    unset($_SESSION['case76']);
                    unset($_SESSION['case77']);
                    unset($_SESSION['case78']);
                    unset($_SESSION['case79']);
                    unset($_SESSION['case80']);
                    unset($_SESSION['case81']);
                    unset($_SESSION['case82']);
                    unset($_SESSION['case83']);
                    unset($_SESSION['case84']);
                    unset($_SESSION['case85']);
                    unset($_SESSION['case86']);

                 header("Location: http://localhost/Gestion-rapports/Users/reports.php");
                 exit();                                     
                }
                if(isset($_POST['Annuler'])){
                    unset($_SESSION['id']);
                    unset($_SESSION['Agence']);
                    unset($_SESSION['Responsable']);
                    unset($_SESSION['DateD']);
                    unset($_SESSION['DateF']);
                    unset($_SESSION['case1']);
                    unset($_SESSION['case2']);
                    unset($_SESSION['case3']);
                    unset($_SESSION['case4']);
                    unset($_SESSION['case5']);
                    unset($_SESSION['case6']);
                    unset($_SESSION['case7']);
                    unset($_SESSION['case8']);
                    unset($_SESSION['case9']);
                    unset($_SESSION['case10']);
                    unset($_SESSION['case11']);
                    unset($_SESSION['case12']);
                    unset($_SESSION['case13']);
                    unset($_SESSION['case14']);
                    unset($_SESSION['case15']);
                    unset($_SESSION['case16']);
                    unset($_SESSION['case17']);
                    unset($_SESSION['case18']);
                    unset($_SESSION['case19']);
                    unset($_SESSION['case20']);
                    unset($_SESSION['case21']);
                    unset($_SESSION['case22']);
                    unset($_SESSION['case23']);
                    unset($_SESSION['case24']);
                    unset($_SESSION['case25']);
                    unset($_SESSION['case26']);
                    unset($_SESSION['case27']);
                    unset($_SESSION['case28']);
                    unset($_SESSION['case29']);
                    unset($_SESSION['case30']);
                    unset($_SESSION['case31']);
                    unset($_SESSION['case32']);
                    unset($_SESSION['case33']);
                    unset($_SESSION['case34']);
                    unset($_SESSION['case35']);
                    unset($_SESSION['case36']);
                    unset($_SESSION['case37']);
                    unset($_SESSION['case38']);
                    unset($_SESSION['case39']);
                    unset($_SESSION['case40']);
                    unset($_SESSION['case41']);
                    unset($_SESSION['case42']);
                    unset($_SESSION['case43']);
                    unset($_SESSION['case44']);
                    unset($_SESSION['case45']);
                    unset($_SESSION['case46']);
                    unset($_SESSION['case47']);
                    unset($_SESSION['case48']);
                    unset($_SESSION['case49']);
                    unset($_SESSION['case50']);
                    unset($_SESSION['case51']);
                    unset($_SESSION['case52']);
                    unset($_SESSION['case53']);
                    unset($_SESSION['case54']);
                    unset($_SESSION['case55']);
                    unset($_SESSION['case56']);
                    unset($_SESSION['case57']);
                    unset($_SESSION['case58']);
                    unset($_SESSION['case59']);
                    unset($_SESSION['case60']);
                    unset($_SESSION['case61']);
                    unset($_SESSION['case62']);
                    unset($_SESSION['case63']);
                    unset($_SESSION['case64']);
                    unset($_SESSION['case65']);
                    unset($_SESSION['case66']);
                    unset($_SESSION['case67']);
                    unset($_SESSION['case68']);
                    unset($_SESSION['case69']);
                    unset($_SESSION['case70']);
                    unset($_SESSION['case71']);
                    unset($_SESSION['case72']);
                    unset($_SESSION['case73']);
                    unset($_SESSION['case74']);
                    unset($_SESSION['case75']);
                    unset($_SESSION['case76']);
                    unset($_SESSION['case77']);
                    unset($_SESSION['case78']);
                    unset($_SESSION['case79']);
                    unset($_SESSION['case80']);
                    unset($_SESSION['case81']);
                    unset($_SESSION['case82']);
                    unset($_SESSION['case83']);
                    unset($_SESSION['case84']);
                    unset($_SESSION['case85']);
                    unset($_SESSION['case86']);
                    header("Location: http://localhost/Gestion-rapports/Users/reports.php");
                    exit();
                }
?>

<?php require("header.php")?>
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
                   echo $alert;}
                ?>
                        <form method="POST" action="Modifier.php">
                        <div class="row g-4">
                           <div class="col-auto">
                             <input type="text"  class="form-control"  required name="Agence"  placeholder="Agence" value="<?php if(isset($Agence)){echo $Agence;}?>">
                            </div>
                           <div class="col-auto">
                             <input type="text" class="form-control" required name="Responsable" placeholder="Responsable" value="<?php if(isset($Responsable)){echo $Responsable;}?>">
                           </div>
                           <div class="col-auto">
                           <input id="datepicker" placeholder="Date de debut" required name="DateD" value="<?php if(isset($DateD)){echo $DateD;}?>"/>
                               <script>
                                   $('#datepicker').datepicker({
                                      uiLibrary: 'bootstrap4'
                                              });
                               </script>
                           </div>
                           <div class="col-auto">
                           <input id="datepicker1" placeholder="Date de fin" required name="DateF" value="<?php if(isset($DateF)){echo $DateF;}?>"/>
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
                                        <input type="text"  class="form-control" name="case1"  placeholder="Nbr paiements" value="<?php if(isset($case1)){echo $case1;}?>" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case2" placeholder="Montant total" value="<?php if(isset($case2)){echo $case2;}?>" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case3"   value="<?php if(isset($case3)){echo $case3;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case4"  placeholder="Nbr paiements" value="<?php if(isset($case4)){echo $case4;}?>" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case5" placeholder="Montant total" value="<?php if(isset($case5)){echo $case5;}?>" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case6"  value="<?php if(isset($case6)){echo $case6;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case7"  placeholder="Nbr paiements" value="<?php if(isset($case7)){echo $case7;}?>" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case8" placeholder="Montant total" value="<?php if(isset($case8)){echo $case8;}?>"required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case9"  value="<?php if(isset($case9)){echo $case9;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case10"  placeholder="Nbr paiements" value="<?php if(isset($case10)){echo $case10;}?>" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case11" placeholder="Montant total" value="<?php if(isset($case11)){echo $case11;}?>" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case12"   value="<?php if(isset($case12)){echo $case12;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case13"  placeholder="Nbr paiements" value="<?php if(isset($case13)){echo $case13;}?>" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case14" placeholder="Montant total" value="<?php if(isset($case14)){echo $case14;}?>" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case15"  value="<?php if(isset($case15)){echo $case15;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case16" value="<?php if(isset($case16)){echo $case16;}?>"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case17" value="<?php if(isset($case17)){echo $case17;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case18" value="<?php if(isset($case18)){echo $case18;}?>" value="LA CHINE" required disabled>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-6">
                            <p align="center">Premiers paiement prévu la semaine prochaine</p>
                            <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case19" value="<?php if(isset($case19)){echo $case19;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case20" value="<?php if(isset($case20)){echo $case20;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case21" value="<?php if(isset($case21)){echo $case21;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case22" value="<?php if(isset($case22)){echo $case22;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case23" value="<?php if(isset($case23)){echo $case23;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case24"  value="<?php if(isset($case24)){echo $case24;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case25" value="<?php if(isset($case25)){echo $case25;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case26" value="<?php if(isset($case26)){echo $case26;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case27"  value="<?php if(isset($case27)){echo $case27;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case28" value="<?php if(isset($case28)){echo $case28;}?>"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case29" value="<?php if(isset($case28)){echo $case29;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case30"  value="<?php if(isset($case30)){echo $case30;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case31" value="<?php if(isset($case31)){echo $case31;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case32" value="<?php if(isset($case32)){echo $case32;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case33"  value="<?php if(isset($case33)){echo $case33;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case34" value="<?php if(isset($case34)){echo $case34;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case35" value="<?php if(isset($case35)){echo $case35;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case36"  value="<?php if(isset($case36)){echo $case36;}?>" required disabled>
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
                                        <input type="text"  class="form-control" name="case37" value="<?php if(isset($case37)){echo $case37;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case38" value="<?php if(isset($case38)){echo $case38;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case39"  value="<?php if(isset($case39)){echo $case39;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case40" value="<?php if(isset($case40)){echo $case40;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case41" value="<?php if(isset($case41)){echo $case41;}?>" placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case42"  value="<?php if(isset($case42)){echo $case42;}?>" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case43" value="<?php if(isset($case43)){echo $case43;}?>" placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case44"  value="<?php if(isset($case44)){echo $case44;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case45"   value="<?php if(isset($case45)){echo $case45;}?>"  required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case46"  value="<?php if(isset($case46)){echo $case46;}?>"   placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case47"  value="<?php if(isset($case47)){echo $case47;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case48"  value="<?php if(isset($case48)){echo $case48;}?>"  value="ESPAGNE" required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case49"  value="<?php if(isset($case49)){echo $case49;}?>"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case50"  value="<?php if(isset($case50)){echo $case50;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case51"   value="<?php if(isset($case51)){echo $case51;}?>"  required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case52"  value="<?php if(isset($case52)){echo $case52;}?>"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case53"  value="<?php if(isset($case53)){echo $case53;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case54"  value="<?php if(isset($case54)){echo $case54;}?>"  required disabled>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-6">
                            <p align="center">Deuxième paiement prévu la semaine prochaine</p>
                            <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case55"  value="<?php if(isset($case55)){echo $case55;}?>"   placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case56"  value="<?php if(isset($case56)){echo $case56;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case57"   value="<?php if(isset($case57)){echo $case57;}?>"  required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case58"  placeholder="Nbr paiements"  value="<?php if(isset($case58)){echo $case58;}?>"  required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case59" placeholder="Montant total"  value="<?php if(isset($case59)){echo $case59;}?>"  required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case60"  value="<?php if(isset($case60)){echo $case60;}?>"  required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case61"  value="<?php if(isset($case61)){echo $case61;}?>"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case62"  value="<?php if(isset($case62)){echo $case62;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case63"   value="<?php if(isset($case63)){echo $case63;}?>"  required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case64"  value="<?php if(isset($case64)){echo $case64;}?>"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case65"  value="<?php if(isset($case65)){echo $case65;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case66"   value="<?php if(isset($case66)){echo $case66;}?>"  required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case67"  value="<?php if(isset($case67)){echo $case67;}?>"   placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case68"  value="<?php if(isset($case68)){echo $case68;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case69"   value="<?php if(isset($case69)){echo $case69;}?>"  required disabled>
                                   </div>
                                   </div>
                                   <div class="row">
                                   <div class="col-4">
                                        <input type="text"  class="form-control" name="case70"  value="<?php if(isset($case70)){echo $case70;}?>"  placeholder="Nbr paiements" required>
                                   </div>
                                   <div class="col-4">
                                        <input type="text" class="form-control" name="case71"  value="<?php if(isset($case71)){echo $case71;}?>"  placeholder="Montant total" required>
                                   </div>
                                   <div class="col-4">
                                   <input type="text" class="form-control" name="case72"   value="<?php if(isset($case72)){echo $case72;}?>"  required disabled>
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
                                  <input type="text"  class="form-control" name="case73"  value="<?php if(isset($case73)){echo $case73;}?>"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <?php// echo select($case74, ["HOT LEAD", "MEDIUM LEAD", "COLD LEAD", "AUCUN"]) ?>
                                  <select  class="form-control selectpicker"  name="case74"  > 
                                      <option <?php if($case74=='HOT LEAD'){echo "selected";}?> >HOT LEAD</option>
                                      <option <?php if($case74=='MEDIUM LEAD'){echo "selected";}?> >MEDIUM LEAD</option>
                                      <option <?php if($case74=='COLD LEAD'){echo "selected";}?> >COLD LEAD</option>
                                      <option <?php if($case74=='AUCUN'){echo "selected";}?> >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Engagements distribués par e-mail cette semaine</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case75"  placeholder="Nombre"  value="<?php if(isset($case75)){echo $case75;}?>"  required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker"  name="case76"  > 
                                      <option <?php if($case76=='HOT LEAD'){echo "selected";}?> >HOT LEAD</option>
                                      <option <?php if($case76=='MEDIUM LEAD'){echo "selected";}?> >MEDIUM LEAD</option>
                                      <option <?php if($case76=='COLD LEAD'){echo "selected";}?> >COLD LEAD</option>
                                      <option <?php if($case76=='AUCUN'){echo "selected";}?> >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Etudiants contacter sur les réseaux sociaux</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case77"  value="<?php if(isset($case77)){echo $case77;}?>"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select class="form-control selectpicker" name="case78"  > 
                                      <option <?php if($case78=='HOT LEAD'){echo "selected";}?>>HOT LEAD</option>
                                      <option  <?php if($case78=='MEDIUM LEAD'){echo "selected";}?> >MEDIUM LEAD</option>
                                      <option  <?php if($case78=='COLD LEAD'){echo "selected";}?>>COLD LEAD</option>
                                      <option  <?php if($case78=='AUCUN'){echo "selected";}?>>AUCUN</option>
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
                                  <input type="text"  class="form-control" name="case79"  placeholder="Nombre"  value="<?php if(isset($case79)){echo $case79;}?>"  required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" name="case80"  > 
                                      <option <?php if($case80=='HOT LEAD'){echo "selected";}?>>HOT LEAD</option>
                                      <option <?php if($case80=='MEDIUM LEAD'){echo "selected";}?> >MEDIUM LEAD</option>
                                      <option <?php if($case80=='COLD LEAD'){echo "selected";}?>>COLD LEAD</option>
                                      <option <?php if($case80=='AUCUN'){echo "selected";}?> >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Total Nouveaux leads cette semaine</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case81"  value="<?php if(isset($case81)){echo $case81;}?>"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker "  name="case82" placeholder="<?php if(isset($case82)){echo $case82;}?>" > 
                                      <option <?php if($case82=='HOT LEAD'){echo "selected";}?>>HOT LEAD</option>
                                      <option <?php if($case82=='MEDIUM LEAD'){echo "selected";}?>>MEDIUM LEAD</option>
                                      <option <?php if($case82=='COLD LEAD'){echo "selected";}?>>COLD LEAD</option>
                                      <option <?php if($case82=='AUCUN'){echo "selected";}?> >AUCUN</option>
                                  </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-4">
                            <p align="center">Leads convertis en applications</p>
                            <div class="row">
                                  <div class="col-4">
                                  <input type="text"  class="form-control" name="case83"  value="<?php if(isset($case83)){echo $case83;}?>"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" name="case84" placeholder="<?php if(isset($case84)){echo $case84;}?>"  > 
                                      <option <?php if($case84=='HOT LEAD'){echo "selected";}?>>HOT LEAD</option>
                                      <option <?php if($case84=='MEDIUM LEAD'){echo "selected";}?>>MEDIUM LEAD</option>
                                      <option <?php if($case84=='COLD LEAD'){echo "selected";}?> >COLD LEAD</option>
                                      <option <?php if($case84=='AUCUN'){echo "selected";}?>>AUCUN</option>
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
                                  <input type="text"  class="form-control" name="case85"  value="<?php if(isset($case85)){echo $case85;}?>"  placeholder="Nombre" required>
                                  </div>
                                  <div class="col-5">
                                  <input type="text"  class="form-control" name="case86" value="<?php if(isset($case86)){echo $case86;}?>">
                                  </div>       
                                  <div class="col-2">
                                  <button type="submit" class="btn btn-success" name="save">Enregistrer</button>
                                  </div>
                                  <div class="col-2">
                                  <button type="submit" class="btn btn-warning ms-5" name="Annuler">Annuler</button>
                                  </div>
                                </div>
                              </div>
                        </form>                </div>
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
<style>
    
  .head,.Head {
    text-align:center;
    color:#000000;
    padding: .75rem;
    vertical-align: initial;
    border-top: 1px solid #e3e6f0;
}
.table td {
    color:black;
    vertical-align: initial;

}
</style>
