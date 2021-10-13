<?php 
session_start();
       $semaine=$_SESSION['idw'];
       $DateD=$_SESSION['DateDw'];
       $DateF=$_SESSION['DateFw'];
       $case1=$_SESSION['case1w'];
       $case2=$_SESSION['case2w'];
       $case3=$_SESSION['case3w'];
       $case4=$_SESSION['case4w'];
       $case5=$_SESSION['case5w'];
       $case6=$_SESSION['case6w'];
       $case7=$_SESSION['case7w'];
       $case8=$_SESSION['case8w'];
       $case9=$_SESSION['case9w'];
      $case10=$_SESSION['case10w'];
      $case11=$_SESSION['case11w'];
      $case12=$_SESSION['case12w'];
      $case13=$_SESSION['case13w'];
      $case14=$_SESSION['case14w'];
      $case15=$_SESSION['case15w'];
      $case16=$_SESSION['case16w'];
      $case17=$_SESSION['case17w'];
      $case18=$_SESSION['case18w'];
      $case19=$_SESSION['case19w'];
      $case20=$_SESSION['case20w'];
      $case21=$_SESSION['case21w'];
      $case22=$_SESSION['case22w'];
      $case23=$_SESSION['case23w'];
      $case24=$_SESSION['case24w'];
      $case25=$_SESSION['case25w'];
      $case26=$_SESSION['case26w'];
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
if(isset($_POST['save'])){
            if(isset($_POST['case1'])){
            $case1=$_POST['case1'];}
            if(isset($_POST['case2'])){
                $case2=$_POST['case2'];}
               
                if(isset($_POST['case4'])){
                    $case4=$_POST['case4'];}
                   
                    if(isset($_POST['case5'])){
                        $case5=$_POST['case5'];}
                        
                    if(isset($_POST['case7'])){
                        $case7=$_POST['case7'];}
                          
                        if(isset($_POST['case8'])){
                            $case8=$_POST['case8'];}
                                  
                            if(isset($_POST['case10'])){
                                $case10=$_POST['case10'];}
                                
                                    if(isset($_POST['case11'])){
                                        $case11=$_POST['case11'];}
                                              
                                        if(isset($_POST['case13'])){
                                            $case13=$_POST['case13'];}
                                            

                                            if(isset($_POST['case15'])){
                                                $case15=$_POST['case15'];}
                                                     
                                                if(isset($_POST['case17'])){
                                                    $case17=$_POST['case17'];}
                                                          
                                                    if(isset($_POST['case19'])){
                                                        $case19=$_POST['case19'];}
                                                             
                                                        if(isset($_POST['case21'])){
                                                            $case21=$_POST['case21'];}
                                                                   
                                                            if(isset($_POST['case23'])){
                                                                $case23=$_POST['case23'];}
                                                                     
                                                                if(isset($_POST['case25'])){
                                                                    $case25=$_POST['case25'];}
                                                                            
               if(isset($_POST['case3'])){
                $case3="";
                foreach($_POST['case3'] as $value){
                    $case3.=" ".$value;
                }}
                else{
                    $case3=$_SESSION['case3w'];
                }
                if(isset($_POST['case6'])){
                    $case6="";
                    foreach($_POST['case6'] as $value){
                        $case6.=" ".$value;
                    }}
                    else{
                        $case6=$_SESSION['case6w'];
                    }
                    if(isset($_POST['case9'])){
                        $case9="";
                        foreach($_POST['case9'] as $value){
                            $case9.=" ".$value;
                        }}
                        else{
                            $case9=$_SESSION['case9w'];
                        }
                        if(isset($_POST['case12'])){
                            $case12="";
                            foreach($_POST['case12'] as $value){
                                $case12.=" ".$value;
                            }}
                            else{
                                $case12=$_SESSION['case12w']; 
                            }
                            if(isset($_POST['case14'])){
                                $case14="";
                                foreach($_POST['case14'] as $value){
                                    $case14.=" ".$value;
                                }}
                                else{
                                    $case14=$_SESSION['case14w'];
                                }
                                if(isset($_POST['case16'])){
                                    $case16="";
                                    foreach($_POST['case16'] as $value){
                                        $case16.=" ".$value;
                                    }}
                                    else{
                                        $case16=$_SESSION['case16w'];
                                    }
                                    if(isset($_POST['case18'])){
                                        $case18="";
                                        foreach($_POST['case18'] as $value){
                                            $case18.=" ".$value;
                                        }}
                                        else{
                                            $case18=$_SESSION['case18w'];
                                        }
                                        if(isset($_POST['case20'])){
                                            $case20="";
                                            foreach($_POST['case20'] as $value){
                                                $case20.=" ".$value;
                                            }}
                                            else{
                                                $case20=$_SESSION['case20w'];
                                            }
                                            if(isset($_POST['case22'])){
                                                $case22="";
                                                foreach($_POST['case22'] as $value){
                                                    $case22.=" ".$value;
                                                }}
                                                else{
                                                    $case22=$_SESSION['case22w'];
                                                }
                                                if(isset($_POST['case24'])){
                                                    $case24="";
                                                    foreach($_POST['case24'] as $value){
                                                        $case24.=" ".$value;
                                                    }}
                                                    else{
                                                        $case24=$_SESSION['case24w'];
                                                    }
                                                    if(isset($_POST['case26'])){
                                                        $case26="";
                                                        foreach($_POST['case26'] as $value){
                                                            $case26.=" ".$value;
                                                        }}
                                                        else{
                                                            $case26=$_SESSION['case26w'];
                                                        }
                                                        $ID=$_SESSION['idw'];
                                                        echo$_SESSION['idw'];


                $request="UPDATE cumulate SET 
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
                 case26='$case26'
                WHERE Id=$ID";
                 $query=mysqli_query($connection,$request);
                 $alert='
                 <div class="container">
                 <div class="alert alert-success " role="alert">
                 Date saved successfully!
                 </div>
                 </div>
                 ';

                }
                if(isset($_POST['Annuler'])){
                    unset($_SESSION['idw']);
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
                    header("Location: http://localhost/Gestion-rapports/Users/Weekly.php");
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
                        <form method="POST" action="ModifierW.php">
                        <table class="table Head">
                        <tr>
                              <td class="head"> <img src="img/LOGO.png" width="100px" height="60px" alt=""></td>
                              <td class="head">Rapport du <?php echo $DateD ." a ".$DateF;?></td>
                              <td class="head">Semaine : <?php echo $semaine;?></td>
                        </tr>
                      </table>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                            <p align="center">Premiers paiement cette semaine</p>
                                <div class="row">
                                   <div class="col-4">
                                        <input type="text" required class="form-control" name="case1"  placeholder="Nbr paiements" value="<?php if(isset($case1)){echo $case1;}?>">
                                   </div>
                                   <div class="col-4">
                                        <input type="text" required class="form-control" name="case2" placeholder="Montant total" value="<?php if(isset($case2)){echo $case2;}?>">
                                   </div>
                                   <div class="col-4">
                                   <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case3)){echo $case3;}?>" name="case3[]"> 
                                      <option >CANADA</option>
                                      <option >POLOGNE</option>
                                      <option >FRANCE</option>
                                      <option >ESPAGNE</option>
                                      <option >ANGLETERRE</option>
                                      <option >LA CHINE</option>
                                      <option >AUCUNE</option>
    
                                  </select>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-6">
                            <p align="center">Premiers paiement prévu la semaine prochaine</p>
                            <div class="row">
                                   <div class="col-4">
                                        <input type="text" required class="form-control" name="case4"  placeholder="Nbr paiements" value="<?php if(isset($case4)){echo $case4;}?>">
                                   </div>
                                   <div class="col-4">
                                        <input type="text" required class="form-control" name="case5" placeholder="Montant total" value="<?php if(isset($case5)){echo $case5;}?>">
                                   </div>
                                   <div class="col-4">
                                   <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case6)){echo $case6;}?>" name="case6[]"> 
                                      <option >CANADA</option>
                                      <option >POLOGNE</option>
                                      <option >FRANCE</option>
                                      <option >ESPAGNE</option>
                                      <option >ANGLETERRE</option>
                                      <option >LA CHINE</option>
                                      <option >AUCUNE</option>
    
                                  </select>
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
                                        <input type="text" required class="form-control" name="case7"  placeholder="Nbr paiements" value="<?php if(isset($case7)){echo $case7;}?>">
                                   </div>
                                   <div class="col-4">
                                        <input type="text" required class="form-control" name="case8" placeholder="Montant total" value="<?php if(isset($case8)){echo $case8;}?>">
                                   </div>
                                   <div class="col-4">
                                   <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case9)){echo $case9;}?>" name="case9[]"> 
                                      <option >CANADA</option>
                                      <option >POLOGNE</option>
                                      <option >FRANCE</option>
                                      <option >ESPAGNE</option>
                                      <option >ANGLETERRE</option>
                                      <option >LA CHINE</option>
                                      <option >AUCUNE</option>
    
                                  </select>
                                   </div>
                                   </div>
                            </div>
                            <div class="col-6">
                            <p align="center">Deuxième paiement prévu la semaine prochaine</p>
                            <div class="row">
                                   <div class="col-4">
                                        <input type="text" required class="form-control" name="case10"  placeholder="Nbr paiements" value="<?php if(isset($case10)){echo $case10;}?>">
                                   </div>
                                   <div class="col-4">
                                        <input type="text" required class="form-control" name="case11" placeholder="Montant total" value="<?php if(isset($case11)){echo $case11;}?>">
                                   </div>
                                   <div class="col-4">
                                   <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case12)){echo $case12;}?>" name="case12[]"> 
                                      <option >CANADA</option>
                                      <option >POLOGNE</option>
                                      <option >FRANCE</option>
                                      <option >ESPAGNE</option>
                                      <option >ANGLETERRE</option>
                                      <option >LA CHINE</option>
                                      <option >AUCUNE</option>
    
                                  </select>
                                   </div>
                                   </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                            <p align="center">Engagements distribués à l'agence cette semaine</p>
                              <div class="row">
                                  <div class="col-4">
                                  <input type="text" required class="form-control" name="case13"  placeholder="Nombre" value="<?php if(isset($case13)){echo $case13;}?>">
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case14)){echo $case14;}?>" name="case14[]"> 
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
                                  <input type="text" required class="form-control" name="case15"  placeholder="Nombre" value="<?php if(isset($case15)){echo $case15;}?>">
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case16)){echo $case16;}?>" name="case16[]"> 
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
                                  <input type="text" required  class="form-control" name="case17"  placeholder="Nombre" value="<?php if(isset($case17)){echo $case17;}?>">
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case18)){echo $case18;}?>" name="case18[]"> 
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
                                  <input type="text" required class="form-control" name="case19"  placeholder="Nombre" value="<?php if(isset($case19)){echo $case19;}?>">
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case20)){echo $case20;}?>" name="case20[]"> 
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
                                  <input type="text" required  class="form-control" name="case21"  placeholder="Nombre" value="<?php if(isset($case21)){echo $case21;}?>">
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case22)){echo $case22;}?>" name="case22[]"> 
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
                                  <input type="text" required  class="form-control" name="case23"  placeholder="Nombre" value="<?php if(isset($case23)){echo $case23;}?>">
                                  </div>
                                  <div class="col-8">
                                  <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case24)){echo $case24;}?>" name="case24[]"> 
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
                            <div class="col-2">

                            </div>
                            <div class="col-8">
                            <p align="center">Visites à l'agence</p>
                            <div class="row">
                                  <div class="col-3">
                                  <input type="text"  class="form-control" name="case25"  placeholder="Nombre" value="<?php if(isset($case25)){echo $case25;}?>">
                                  </div>
                                  <div class="col-5">
                                  <select  class="form-control selectpicker" multiple placeholder="<?php if(isset($case26)){echo $case26;}?>" name="case26[]"> 
                                      <option >HOT LEAD</option>
                                      <option >MEDIUM LEAD</option>
                                      <option >COLD LEAD</option>
                                      <option >AUCUN</option>
                                  </select>
                                  </div>
                                  <div class="col-2">
                                  <button type="submit" class="btn btn-success" name="save">Enregistrer</button>
                                  </div>
                                  <div class="col-2">
                                  <button type="submit" class="btn btn-warning" name="Annuler">Annuler</button>
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
