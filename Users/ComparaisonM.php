<?php
require("traitementData.php");
?>
<?php
   function data(){
    $base="reports";
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,$base);
         $Date= date('Y');
         $an=$Date-1;
         $ann=$Date;
         echo
         "<tr  class='table text-center table-primary'>
         <td  class='table-primary'>Mois</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         <td>$an</td>
         <td>$ann</td>
         </tr>";
  
         $Requ="SELECT * FROM cumulate where annee=$ann";
         $Req="SELECT * FROM cumulate where annee=$an";
         $query=mysqli_query($connection,$Requ);
         $q=mysqli_query($connection,$Req);
         $resultat=mysqli_fetch_All($query);
         $res=mysqli_fetch_All($q);
        for($i=0;$i<12;$i++){
            $m=array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
            $ID="$m[$i] $an";
            $Id="$m[$i] $ann";
            $Re="SELECT * FROM monthly where mois='$ID'";
            $R="SELECT * FROM monthly where mois='$Id'";
            $qu=mysqli_query($connection,$Re);
            $que=mysqli_query($connection,$R);
            $resu=mysqli_fetch_array($qu);
            $resul=mysqli_fetch_array($que);
            if(!empty($resu)){
                $case1=$resu[2]+$resu[5]+$resu[8]+$resu[11]+$resu[14]+$resu[17];
                $case2=$resu[20]+$resu[23]+$resu[26]+$resu[29]+$resu[32]+$resu[35];
                $case3=$resu[38]+$resu[41]+$resu[44]+$resu[47]+$resu[50]+$resu[53];
                $case4=$resu[56]+$resu[59]+$resu[62]+$resu[65]+$resu[68]+$resu[71];
                $case5=$resu[85];
                $case6=$resu[75];
                $case7=$resu[77];
                $case8=$resu[79];
                $case9=$resu[81];
                $case10=$resu[83];
                $case11=$resu[73];
            }
            else{
                $case1="vide";
                $case2="vide";
                $case3="vide";
                $case4="vide";
                $case5="vide";
                $case6="vide";
                $case7="vide";
                $case8="vide";
                $case9="vide";
                $case10="vide";
                $case11="vide";
            }
            if(!empty($resul)){
                $casee1=$resul[2]+ $resul[5]+ $resul[8]+ $resul[11]+$resul[14]+$resul[17];
                $casee2=$resul[20]+$resul[23]+$resul[26]+$resul[29]+$resul[32]+$resul[35];
                $casee3=$resul[38]+$resul[41]+$resul[44]+$resul[47]+$resul[50]+$resul[53];
                $casee4=$resul[56]+$resul[59]+$resul[62]+$resul[65]+$resul[68]+$resul[71];
                $casee5=$resul[85];
                $casee6=$resul[75];
                $casee7=$resul[77];
                $casee8=$resul[79];
                $casee9=$resul[81];
                $casee10=$resul[83];
                $casee11=$resul[73];
            }
            else{
                $casee1="vide";
                $casee2="vide";
                $casee3="vide";
                $casee4="vide";
                $casee5="vide";
                $casee6="vide";
                $casee7="vide";
                $casee8="vide";
                $casee9="vide";
                $casee10="vide";
                $casee11="vide";
            }
           echo "
           <tr  class='table text-center'>
           <td class='table-primary'>$m[$i]</td>
           <td>$case1</td>
           <td>$casee1</td>
           <td>$case2</td>
           <td>$casee2</td>
           <td>$case3</td>
           <td>$casee3</td>
           <td>$case4</td>
           <td>$casee4</td>
           <td>$case5</td>
           <td>$casee5</td>
           <td>$case6</td>
           <td>$casee6</td>
           <td>$case7</td>
           <td>$casee7</td>
           <td>$case8</td>
           <td>$casee8</td>
           <td>$case9</td>
           <td>$casee9</td>
           <td>$case10</td>
           <td>$casee10</td>
           <td>$case11</td>
           <td>$casee11</td>
       </tr>";                                      
        }}
    ?>
<?php require("header.php")?>

   <?php require("Menu.php")?>

                <!-- Begin Page Content -->
                <div class="container" id="container">
                <div class="table-responsive">
                    <div class="row">
                    <div class=" col-md-4">
                <input type="text" class="table-filter form-control" data-table="livres" placeholder="Search"></p>
                    </div>
                    </div>
                <table class="table table-bordered table-hover livres"  id="example">
                                            <thead>
                                                <tr  class="table text-center">
                                                    <th rowspan="2"></th>
                                                    <th colspan="2">Premier paiement</th>
                                                    <th colspan="2">Premiers paiement prévu</th>
                                                    <th colspan="2">Deuxième paiement</th>
                                                    <th colspan="2">Deuxième paiement prévu </th>
                                                    <th colspan="2">Engagements distribués à l'agence</th>
                                                    <th colspan="2">Engagements distribués par e-mail</th>
                                                    <th colspan="2">Etudiants contacter sur RS</th>
                                                    <th colspan="2">Etudiants contacter sur whatsapp</th>
                                                    <th colspan="2">Total Nouveaux leads</th>
                                                    <th colspan="2">Leads convertis en applications</th>
                                                    <th colspan="2">Visites à l'agence</th>
                                                </tr>
                                            </thead>
                                                <?php
                                                data();
                                                ?>
                                     
        </tbody>
        </table>
                        
            </div>
            </div>
            </div>

            <!-- End of Main Content -->

    <?php require("footer.php") ?>

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

</body>

</html>
<script>
(function() {
  'use strict';

  var TableFilter = (function() {
    var Arr = Array.prototype;
    var input;

    function onInputEvent(e) {
      input = e.target;
      var table1 = document.getElementsByClassName(input.getAttribute('data-table'));
      Arr.forEach.call(table1, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, filter);
        });
      });
    }

    function filter(row) {
      var text = row.textContent.toLowerCase();
      var val = input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = onInputEvent;
        });
      }
    };

  })();

 TableFilter.init();
})();
</script>
