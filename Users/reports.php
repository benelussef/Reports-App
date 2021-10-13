<?php
//traitement des rapports sauvgardees
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
?>
<?php require("header.php")?>
<?php require("Menu.php")?>

                <!-- Begin Page Content -->
                <div class="container">
 
             <?php
              if(isset($_SESSION['flash']))
             {   echo'<div class="alert alert-danger " >';
                 echo $_SESSION['flash'];
                 echo ' </div>'; 
                unset($_SESSION['flash']);} ?>
        
                <table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Date Du Rapport</th>
            <th>Agence</th>
            <th>Paiement Prévu</th>
            <th>paiement courant</th>
            <th>Details</th>
            <th>Modifier</th>
           <?php if($_SESSION['auth']["Agence"]==='Admin'){
            echo"<th>Supprimer</th>";}?>
        </tr>
    </thead>
    <tbody>
    <?php
    if($_SESSION['auth']["Agence"]==='Admin'){
    $Request="SELECT * FROM rapports";}
    else{
        $EPS=$_SESSION['auth']["Agence"];
        $Request="SELECT * FROM rapports WHERE Agence='$EPS' ";
    }
    $query=mysqli_query($connection,$Request);
    $res=mysqli_fetch_All($query);
    function data($res){
        for($i=0;$i<count($res);$i++){
           $Date="De ".$res[$i][3]." a ".$res[$i][4];
           $Agence=$res[$i][1];
           $PP=$res[$i][24]+$res[$i][27]+$res[$i][30]+$res[$i][33]+$res[$i][36]+$res[$i][39]+$res[$i][60]+$res[$i][63]+$res[$i][66]+$res[$i][69]+$res[$i][72]+$res[$i][75];
           $PC=$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21]+$res[$i][42]+$res[$i][45]+$res[$i][48]+$res[$i][51]+$res[$i][54]+$res[$i][57];
           $id=$res[$i][0];
           $SaveDate=$res[$i][94];
           $good_format=strtotime ($SaveDate);
           $SaveDate=date('m-d-Y',$good_format);
           $DateFinal= date('d-m-Y', strtotime( $SaveDate. ' + 2 days'));
           $DateAndTime = date('d-m-Y');
           $DateA = new DateTime($DateAndTime);
           $DateActuelle=$DateA->format('m-d-Y');
           echo "
           <tr>
                                                       <td>$Date</td>
                                                       <td>$Agence</td>
                                                       <td>$PP</td>
                                                       <td>$PC</th>
                                                       <td><a href='Details.php?idD=$id' class='btn btn-warning'>Details</a></td>
                                                       
           ";
           if($_SESSION['auth']["Agence"]==='Admin'){
            echo "<td><a href='control.php?idM=$id' class='btn btn-success'>Modifier</a></td>";
              }
           if($_SESSION['auth']["Agence"]!='Admin'){
               if($DateActuelle<$DateFinal){
            echo "<td><a href='control.php?idM=$id' class='btn btn-success'>Modifier</a></td>";}
              }
           if($_SESSION['auth']["Agence"]==='Admin'){
            echo "<td><a href='control.php?idS=$id' class='btn btn-danger'>Supprimer</a></td>";
              }
              echo "</tr>";               
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