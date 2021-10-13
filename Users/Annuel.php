<?php
require("traitementData.php");
?>
<?php require("header.php")?>

   <?php require("Menu.php")?>

                <!-- Begin Page Content -->
                <div class="container">
                <table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>year</th>
            <th>Paiement Prévu</th>
            <th>paiement courant</th>
            <th>Details</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $base="reports";
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,$base);
     $Requ="SELECT * FROM annuel";
        $query=mysqli_query($connection,$Requ);
        $resultat=mysqli_fetch_All($query);
   function data($resultat){
        for($i=0;$i<count($resultat);$i++){
            $year=$resultat[$i][0];
            $id=$resultat[$i][0];
            $pp=$resultat[$i][20]+$resultat[$i][23]+$resultat[$i][26]+$resultat[$i][29]+$resultat[$i][32]+$resultat[$i][35]+$resultat[$i][56]+$resultat[$i][59]+$resultat[$i][62]+$resultat[$i][65]+$resultat[$i][68]+$resultat[$i][71];
            $pc=$resultat[$i][2]+$resultat[$i][5]+$resultat[$i][8]+$resultat[$i][11]+$resultat[$i][14]+$resultat[$i][17]+$resultat[$i][38]+$resultat[$i][41]+$resultat[$i][44]+$resultat[$i][47]+$resultat[$i][50]+$resultat[$i][53];
           echo "
           <tr>
                                                       <td>année $year</td>
                                                       <td>$pp</td>
                                                       <td>$pc</td>
                                                       <td><a href='DetailA.php?idD=$id' class='btn btn-warning'>Details</a></td>
                                                       <td><a href='suppA.php?idS=$id' class='btn btn-danger'>Supprimer</a></td>
           </tr>";                                      
        }
    }  
    ?>
    <?php
    data($resultat);
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