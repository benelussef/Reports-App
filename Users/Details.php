<?php

//traitement des rapports sauvgardees
if(isset($_GET['idD'])){
    $idD=$_GET['idD'];
    $Base="reports";
    $con=mysqli_connect("localhost","root","");
    $DB=mysqli_select_db($con,$Base);
    $req="SELECT * FROM rapports WHERE Id=$idD";
    $Que=mysqli_query($con,$req);
    $Resu=mysqli_fetch_array($Que);
    if(!isset($Resu))
    {
        $_SESSION['flash']="Id ".$_GET['idD']." n'existe pas!";
        header("Location: http://localhost/Gestion-rapports/Users/reports.php");
        exit();
    }
    $id=$Resu[0];
    $Agence=$Resu[1];
    $Responsable=$Resu[2];
    $DateD=$Resu[3];
    $DateF=$Resu[4];
    $case1=$Resu[5];
    $case2=$Resu[6];
    $case3=$Resu[7];
    $case4=$Resu[8];
    $case5=$Resu[9];
    $case6=$Resu[10];
    $case7=$Resu[11];
    $case8=$Resu[12];
    $case9=$Resu[13];
    $case10=$Resu[14];
    $case11=$Resu[15];
    $case12=$Resu[16];
    $case13=$Resu[17];
    $case14=$Resu[18];
    $case15=$Resu[19];
    $case16=$Resu[20];
    $case17=$Resu[21];
    $case18=$Resu[22];
    $case19=$Resu[23];
    $case20=$Resu[24];
    $case21=$Resu[25];
    $case22=$Resu[26];
    $case23=$Resu[27];
    $case24=$Resu[28];
    $case25=$Resu[29];
    $case26=$Resu[30];
    $case27=$Resu[31];
    $case28=$Resu[32];
    $case29=$Resu[33];
    $case30=$Resu[34];
    $case31=$Resu[35];
    $case32=$Resu[36];
    $case33=$Resu[37];
    $case34=$Resu[38];
    $case35=$Resu[39];
    $case36=$Resu[40];
    $case37=$Resu[41];
    $case38=$Resu[42];
    $case39=$Resu[43];
    $case40=$Resu[44];
    $case41=$Resu[45];
    $case42=$Resu[46];
    $case43=$Resu[47];
    $case44=$Resu[48];
    $case45=$Resu[49];
    $case46=$Resu[50];
    $case47=$Resu[51];
    $case48=$Resu[52];
    $case49=$Resu[53];
    $case50=$Resu[54];
    $case51=$Resu[55];
    $case52=$Resu[56];
    $case53=$Resu[57];
    $case54=$Resu[58];
    $case55=$Resu[59];
    $case56=$Resu[60];
    $case57=$Resu[61];
    $case58=$Resu[62];
    $case59=$Resu[63];
    $case60=$Resu[64];
    $case61=$Resu[65];
    $case62=$Resu[66];
    $case63=$Resu[67];
    $case64=$Resu[68];
    $case65=$Resu[69];
    $case66=$Resu[70];
    $case67=$Resu[71];
    $case68=$Resu[72];
    $case69=$Resu[73];
    $case70=$Resu[74];
    $case71=$Resu[75];
    $case72=$Resu[76];
    $case73=$Resu[77];
    $case74=$Resu[78];
    $case75=$Resu[79];
    $case76=$Resu[80];
    $case77=$Resu[81];
    $case78=$Resu[82];
    $case79=$Resu[83];
    $case80=$Resu[84];
    $case81=$Resu[85];
    $case82=$Resu[86];
    $case83=$Resu[87];
    $case84=$Resu[88];
    $case85=$Resu[89];
    $case86=$Resu[90];
   $PC=$case2+$case5+$case8+$case11+$case14+$case17+$case38+$case41+$case44+$case47+$case50+$case53;
   $PP=$case20+$case23+$case26+$case29+$case32+$case35+$case56+$case59+$case62+$case65+$case68+$case71;
   $PT=$PC+$PP;
}
?>
<?php require("header.php")?>
    <?php require("Menu.php")?>
              <!-- Nav Item - print -->
           

                <!-- Begin Page Content -->
                <div class="container" id="container">
                <table class="table Head">
       <tr>
           <td class="head"> <img src="img/LOGO.png" width="100px" height="60px" alt=""></td>
           <td class="head">Rapport du <?php echo $DateD ." a ".$DateF;?></td>
           <td class="head">Agence : <?php echo $Agence;?></td>
       </tr>
            </table>
                <table class="table ">
                     <thead>
                         <tr class="table-info border border-primary">
                           <th scope="col">PAIMENTS</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Montant</th>
                           <th scope="col">Destination</th>
                         </tr>
                       </thead>
                       <tr class="border border-primary">
                           <td rowspan="6" class="border border-primary">PREMIERS PAIMENTS CETTE SEMAINE</td>
                           <td scope="col" class="border border-primary"><?php echo $case1;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case2;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case3;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case4;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case5;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case6;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case7;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case8;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case9;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case10;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case11;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case12;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case13;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case14;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case15;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case16;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case17;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case18;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" rowspan="6" class="border border-primary">PREMIERS PAIMENTS PREVUS LA SEMAINE PROCHAINE</td>
                           <td scope="col" class="border border-primary"><?php echo $case19;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case20;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case21;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case22;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case23;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case24;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case25;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case26;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case27;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case28;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case29;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case30;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case31;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case32;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case33;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case34;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case35;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case36;?></td>
                        </tr>
                        <tr>
                           <td scope="col" rowspan="6" class="border border-primary">DEUXIEMES PAIMENTS CETTE SEMAINE	</td>
                           <td scope="col" class="border border-primary"><?php echo $case37;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case38;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case39;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case40;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case41;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case42;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case43;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case44;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case45;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case46;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case47;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case48;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case49;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case50;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case51;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case52;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case53;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case54;?></td>
                        </tr>
                        <tr>
                           <td scope="col" rowspan="6" class="border border-primary">DEUXIEMES PAIMENTS PREVUS LA SEMAINE PROCHAINE</td>
                           <td scope="col" class="border border-primary"><?php echo $case55;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case56;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case57;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case58;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case59;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case60;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case61;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case62;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case63;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case64;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case65;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case66;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case67;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case68;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case69;?></td>
                        </tr>
                        <tr class="border border-primary">
                           <td scope="col" class="border border-primary"><?php echo $case70;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case71;?></td>
                           <td scope="col" class="border border-primary"><?php echo $case72;?></td>
                        </tr>
                </table>
                <table class="table">
                <thead>
                         <tr class="table-info">
                           <th scope="col">STATISTIQUES</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Remaqrue</th>
                         </tr>
                       </thead>
                       <tr>
                           <td scope="col">VISITES A L'AGENCE</td>
                           <td scope="col"><?php echo $case73;?></td>
                           <td scope="col"><?php echo $case74;?></td>
                        </tr>
                        <tr>
                           <td scope="col">ENGAGEMENTS DISTRIBUES A L'AGENCE CETTE SEMAINE</td>
                           <td scope="col"><?php echo $case85;?></td>
                           <td scope="col"><?php echo $case86;?></td>
                        </tr>
                        <tr>
                           <td scope="col">ENGAGEMENTS DISTRIBUES PAR E-MAIL CETTE SEMAINE</td>
                           <td scope="col"><?php echo $case75;?></td>
                           <td scope="col"><?php echo $case76;?></td>
                        </tr>
                        <tr>
                           <td scope="col">ETUDIANTS CONTACTES SUR LES RESAUX SOCIAUX CETTE SEMAINE</td>
                           <td scope="col"><?php echo $case77;?></td>
                           <td scope="col"><?php echo $case78;?></td>
                        </tr>
                        <tr>
                           <td scope="col">ETUDIANTS CONTACTES SUR WHATSAPP CETTE SEMAINE</td>
                           <td scope="col"><?php echo $case79;?></td>
                           <td scope="col"><?php echo $case80;?></td>
                        </tr>
                        <tr>
                           <td scope="col">NOUVEAUX LEADS CETTE SEMAINE</td>
                           <td scope="col"><?php echo $case81;?></td>
                           <td scope="col"><?php echo $case82;?></td>
                        </tr>
                        <tr>
                           <td scope="col">LEADS CONVERTIS EN APPLICATION</td>
                           <td scope="col"><?php echo $case83;?></td>
                           <td scope="col"><?php echo $case84;?></td>
                        </tr>
                </table>
                <table class="table">
                       <thead>
                       <tr class="table-info">
                           <th scope="col">Total des paiements</th>
                           <th scope="col">Total des paiments pr??vus</th>
                           <th scope="col">Total des paiments courants</th>
                        </tr>
                        </thead>
                        <tr class="table-light">
                           <th scope="col"><?php echo $PT." ";?> MAD</th>
                           <th scope="col"><?php echo $PP." ";?> MAD</th>
                           <th scope="col"><?php echo $PC." ";?> MAD</th>
                        </tr>
                </table>
                 </div>    
                </div>
            <!-- End of Main Content -->

           <?php require("footer.php")?>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!--datatable-->
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.0/datatables.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

  <script>
function GeneratePdf(){
    const element=document.getElementById('container');
    console.log('container');
    html2pdf().from(element).save();
   }
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
<script>
    function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>