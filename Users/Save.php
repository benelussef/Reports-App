<?php
$casee1="";
$casee2="";
$casee3="";
$casee4="";
$casee5="";
$casee6="";
$casee7="";
$casee8="";
$casee9="";
$casee10="";
$casee11="";
$casee12="";
$casee13="";
$casee14="";
$casee15="";
$casee16="";
$casee17="";
$casee18="";
$casee19="";
$casee20="";
$casee21="";
$casee22="";
$casee23="";
$casee24="";
$casee25="";
$casee26="";
if(isset($_GET['idM'])){
    $_SESSION['id']=$_GET['idM'];}
    $idM=$_SESSION['id'];
    $base="reports";
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,$base);
    $request="SELECT * FROM cumulate WHERE Id=$idM";
    $Query=mysqli_query($connection,$request);
    $Res=mysqli_fetch_array($Query);
    $semaine=$Res[0];
    $DateD=$Res[1];
    $DateF=$Res[2];
    $case1=$Res[3];
    $case2=$Res[4];
    $case3=$Res[5];
    $case4=$Res[6];
    $case5=$Res[7];
    $case6=$Res[8];
    $case7=$Res[9];
    $case8=$Res[10];
    $case9=$Res[11];
    $case10=$Res[12];
    $case11=$Res[13];
    $case12=$Res[14];
    $case13=$Res[15];
    $case14=$Res[16];
    $case15=$Res[17];
    $case16=$Res[18];
    $case17=$Res[19];
    $case18=$Res[20];
    $case19=$Res[21];
    $case20=$Res[22];
    $case21=$Res[23];
    $case22=$Res[24];
    $case23=$Res[25];
    $case24=$Res[26];
    $case25=$Res[27];
    $case26=$Res[28];


    $casee1=$Res[3];
    $casee2=$Res[4];
    $casee3=$Res[5];
    $casee4=$Res[6];
    $casee5=$Res[7];
    $casee6=$Res[8];
    $casee7=$Res[9];
    $casee8=$Res[10];
    $casee9=$Res[11];
    $casee10=$Res[12];
    $casee11=$Res[13];
    $casee12=$Res[14];
    $casee13=$Res[15];
    $casee14=$Res[16];
    $casee15=$Res[17];
    $casee16=$Res[18];
    $casee17=$Res[19];
    $casee18=$Res[20];
    $casee19=$Res[21];
    $casee20=$Res[22];
    $casee21=$Res[23];
    $casee22=$Res[24];
    $casee23=$Res[25];
    $casee24=$Res[26];
    $casee25=$Res[27];
    $casee26=$Res[28];
?>
<?php require("header.php")?>

  <?php require("Menu.php")?>
                <!-- Begin Page Content -->
                <div class="container">
                <div class="alert alert-success " role="alert">
                 Data Modified Successfully!
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
