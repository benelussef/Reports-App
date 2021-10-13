<?php
//traitement des rapports sauvgardees
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
?>
<?php require("header.php")?>
   <?php require("Menu.php")?>
                <div class="container">
                <table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Date Du Rapport</th>
            <th>Agence</th>
            <th>Paiement Prévu</th>
            <th>paiement courant</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $Request="SELECT * FROM rapports";
    $query=mysqli_query($connection,$Request);
    $res=mysqli_fetch_All($query);
    function data($res){
        for($i=0;$i<count($res);$i++){
           $Date="De ".$res[$i][3]." a ".$res[$i][4];
           $Agence=$res[$i][1];
           $PP=$res[$i][9]+$res[$i][15];
           $PC=$res[$i][6]+$res[$i][12];
           $id=$res[$i][0];
           echo "
           <tr>
                                                       <td>$Date</td>
                                                       <td>$Agence</td>
                                                       <td>$PP</td>
                                                       <td>$PC</th>
                                                       <td><a href='Details.php?idD=$id' class='btn btn-warning'>Details</a></td>
                                                      
                                                      
           </tr>";                                      

        }
     

    }

    
    ?>
    <?php
     data($res);
    ?>
        </tbody>
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
</body>

</html>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
</script>