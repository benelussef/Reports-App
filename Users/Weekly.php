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
            <th>Semaine</th>
            <th>Date Du Rapport</th>
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
        $Requ="SELECT * FROM cumulate";
        $query=mysqli_query($connection,$Requ);
        $resultat=mysqli_fetch_All($query);
   function data($resultat){
        for($i=0;$i<count($resultat);$i++){
            $semaine=$resultat[$i][0];
            $id=$resultat[$i][0];
            $Date=$resultat[$i][1];
            $pp=$resultat[$i][22]+$resultat[$i][25]+$resultat[$i][28]+$resultat[$i][31]+$resultat[$i][34]+$resultat[$i][37]+$resultat[$i][58]+$resultat[$i][61]+$resultat[$i][64]+$resultat[$i][67]+$resultat[$i][70]+$resultat[$i][73];
            $pc=$resultat[$i][4]+$resultat[$i][7]+$resultat[$i][10]+$resultat[$i][13]+$resultat[$i][16]+$resultat[$i][19]+$resultat[$i][40]+$resultat[$i][43]+$resultat[$i][46]+$resultat[$i][49]+$resultat[$i][52]+$resultat[$i][55];
           echo "
           <tr>
                                                       <td>Semaine $semaine</td>
                                                       <td>$Date</td>
                                                       <td>$pp</td>
                                                       <td>$pc</td>
                                                       <td><a href='DetailsW.php?idD=$id' class='btn btn-warning'>Details</a></td>
                                                       <td><a href='supp.php?idS=$id' class='btn btn-danger'>Supprimer</a></td>
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