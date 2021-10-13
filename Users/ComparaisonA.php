<?php
require("traitementData.php");
?>
<?php
   function data(){
    $base="reports";
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,$base);
         $Requ="SELECT * FROM annuel";
         $query=mysqli_query($connection,$Requ);
         $resu=mysqli_fetch_All($query);
        for($i=0;$i<count($resu);$i++){
            if(!empty($resu)){
                $years=$resu[$i][0];
                $case1=$resu[$i][2]+ $resu[$i][5]+ $resu[$i][8]+ $resu[$i][11]+$resu[$i][14]+$resu[$i][17];
                $case2=$resu[$i][20]+$resu[$i][23]+$resu[$i][26]+$resu[$i][29]+$resu[$i][32]+$resu[$i][35];
                $case3=$resu[$i][38]+$resu[$i][41]+$resu[$i][44]+$resu[$i][47]+$resu[$i][50]+$resu[$i][53];
                $case4=$resu[$i][56]+$resu[$i][59]+$resu[$i][62]+$resu[$i][65]+$resu[$i][68]+$resu[$i][71];
                $case5=$resu[$i][85];
                $case6=$resu[$i][75];
                $case7=$resu[$i][77];
                $case8=$resu[$i][79];
                $case9=$resu[$i][81];
                $case10=$resu[$i][83];
                $case11=$resu[$i][73];
           echo "
           <tr  class='table text-center'>
           <td class='table-primary'>$years</td>
           <td>$case1</td>
           <td>$case2</td>
           <td>$case3</td>
           <td>$case4</td>
           <td>$case5</td>
           <td>$case6</td>
           <td>$case7</td>
           <td>$case8</td>
           <td>$case9</td>
           <td>$case10</td>
           <td>$case11</td>
       </tr>";                                      
        }}}
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
                                                <tr  class="table text-center table-primary">
                                                    <th>Annee</th>
                                                    <th>Premier paiement</th>
                                                    <th>Premiers paiement prévu</th>
                                                    <th>Deuxième paiement</th>
                                                    <th>Deuxième paiement prévu </th>
                                                    <th>Engagements distribués à l'agence</th>
                                                    <th>Engagements distribués par e-mail</th>
                                                    <th>Etudiants contacter sur RS</th>
                                                    <th>Etudiants contacter sur whatsapp</th>
                                                    <th>Total Nouveaux leads</th>
                                                    <th>Leads convertis en applications</th>
                                                    <th>Visites à l'agence</th>
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
