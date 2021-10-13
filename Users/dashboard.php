<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if($_SESSION['auth']['Agence'] != "Admin"){
    header("Location: http://localhost/Gestion-rapports/Users/reports.php");
    exit();
} 
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
$Req="SELECT * FROM rapports";
$q=mysqli_query($connection,$Req);
$resu=mysqli_fetch_All($q);
$PP=0;
$PT=0;
$PC=0;
$Visites=0;
for($i=0;$i<count($resu);$i++){
    $PP=$PP+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39]+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];
    $PC=$PC+$resu[$i][6]+ $resu[$i][9]+ $resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21]+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];
    $PT=$PP+$PC;
    $Visites=$Visites+$resu[$i][77];}
if(isset($_POST['Enregistrer'])){
if(isset($_POST['Agence'])){
$Ag=$_POST['Agence'];
$Request="SELECT * FROM rapports where Agence='$Ag'";
$query=mysqli_query($connection,$Request);
$res=mysqli_fetch_All($query);
$Wtsp=0;
$Resaux=0;
$Jan=0;
$Feb=0;
$Mar=0; 
$Apr=0; 
$May=0; 
$Jun=0; 
$Jul=0;
$Aug=0;
$Sep=0; 
$Oct=0;
$Nov=0;
$Dec=0;
if(!empty($res)){
for($i=0;$i<count($res);$i++){
$Wtsp=$Wtsp+$res[$i][83];
$Resaux=$Resaux+$res[$i][81];
if(isset($_POST['info'])){
$case=$_POST['info'];
    $date = date_create($res[$i][3]);
    $mois=$date->format('m')."\n";
if($case=='Premiers paiement'){
    if($mois==1){
        $Jan=$Jan+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==5){
        $May=$May+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];

    }
} 
if($case=='Premiers paiement prévu'){
    if($mois==1){
        $Jan=$Jan+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==5){
        $May=$May+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][24]+$resu[$i][27]+$resu[$i][30]+$resu[$i][33]+$resu[$i][36]+$resu[$i][39];

    }}
if($case=='Deuxième paiement'){
    if($mois==1){
        $Jan=$Jan+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==5){
        $May=$May+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][42]+$resu[$i][45]+$resu[$i][48]+$resu[$i][51]+$resu[$i][54]+$resu[$i][57];

    }
} 
if($case=='Deuxième paiement prévu'){
    if($mois==1){
        $Jan=$Jan+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==5){
        $May=$May+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][60]+$resu[$i][63]+$resu[$i][66]+$resu[$i][69]+$resu[$i][72]+$resu[$i][75];

    }
}
if($case=='Engagements distribués à l\'agence'){
    $k=89;
    if($mois==1){
        $Jan=$Jan+$resu[$i][$k];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][$k];
    
    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][$k];
    
    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][$k];
    
    }
    if($mois==5){
        $May=$May+$resu[$i][$k];
    
    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][$k];
    
    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][$k];
    
    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][$k];
    
    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][$k];
    
    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][$k];
    
    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][$k];
    
    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][$k];
    
    }
}
if($case=='Engagements distribués par e-mail'){
    $k=79;
    if($mois==1){
        $Jan=$Jan+$resu[$i][$k];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][$k];
    
    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][$k];
    
    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][$k];
    
    }
    if($mois==5){
        $May=$May+$resu[$i][$k];
    
    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][$k];
    
    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][$k];
    
    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][$k];
    
    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][$k];
    
    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][$k];
    
    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][$k];
    
    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][$k];
    
    }
}
if($case=='Total Nouveaux leads'){
    $k=85;
    if($mois==1){
        $Jan=$Jan+$resu[$i][$k];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][$k];
    
    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][$k];
    
    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][$k];
    
    }
    if($mois==5){
        $May=$May+$resu[$i][$k];
    
    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][$k];
    
    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][$k];
    
    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][$k];
    
    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][$k];
    
    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][$k];
    
    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][$k];
    
    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][$k];
    
    }
}
if($case=='Leads convertis en applications'){
    $k=87;
    if($mois==1){
        $Jan=$Jan+$resu[$i][$k];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][$k];
    
    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][$k];
    
    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][$k];
    
    }
    if($mois==5){
        $May=$May+$resu[$i][$k];
    
    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][$k];
    
    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][$k];
    
    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][$k];
    
    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][$k];
    
    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][$k];
    
    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][$k];
    
    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][$k];
    
    }
}
if($case=='Visites à l\'agence'){
    $k=77;
    if($mois==1){
        $Jan=$Jan+$resu[$i][$k];
    }
    if($mois==2){
        $Feb=$Feb+$resu[$i][$k];
    
    }
    if($mois==3){
        $Mar=$Mar+$resu[$i][$k];
    
    }
    if($mois==4){
        $Apr=$Apr+$resu[$i][$k];
    
    }
    if($mois==5){
        $May=$May+$resu[$i][$k];
    
    }
    if($mois==6){
        $Jun=$Jun+$resu[$i][$k];
    
    }
    if($mois==7){
        $Jul=$Jul+$resu[$i][$k];
    
    }
    if($mois==8){
        $Aug=$Aug+$resu[$i][$k];
    
    }
    if($mois==9){
        $Sep=$Sep+$resu[$i][$k];
    
    }
    if($mois==10){
        $Oct=$Oct+$resu[$i][$k];
    
    }
    if($mois==11){
        $Nov=$Nov+$resu[$i][$k];
    
    }
    if($mois==12){
        $Dec=$Dec+$resu[$i][$k];
    
    }
}
}}}}
}
else{
        $Ag='EPS1';
        $Request="SELECT * FROM rapports where Agence='$Ag'";
        $query=mysqli_query($connection,$Request);
        $res=mysqli_fetch_All($query);
        $Wtsp=0;
        $Resaux=0;
        $Jan=0;
        $Feb=0;
        $Mar=0; 
        $Apr=0; 
        $May=0; 
        $Jun=0; 
        $Jul=0;
        $Aug=0;
        $Sep=0; 
        $Oct=0;
        $Nov=0;
        $Dec=0;
        if(!empty($res)){
        for($i=0;$i<count($res);$i++){
           $Wtsp=$Wtsp+$res[$i][83];
           $Resaux=$Resaux+$res[$i][81];
            $date = date_create($res[$i][3]);
            $mois=$date->format('m')."\n";
            if($mois==1){
                $Jan=$Jan+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
            }
            if($mois==2){
                $Feb=$Feb+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
        
            }
            if($mois==3){
                $Mar=$Mar+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
        
            }
            if($mois==4){
                $Apr=$Apr+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
        
            }
            if($mois==5){
                $May=$May+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
        
            }
            if($mois==6){
                $Jun=$Jun+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
        
            }
            if($mois==7){
                $Jul=$Jul+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
    
            
            if($mois==8)
                $Aug=$Aug+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
         
            
            if($mois==9)
                $Sep=$Sep+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
         
            
            if($mois==10)
                $Oct=$Oct+$res[$i][6]+$res[$i][9]+$res[$i][12]+$res[$i][15]+$res[$i][18]+$res[$i][21];
         
            }
            if($mois==11){
                $Nov=$Nov+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];
        
            }
            if($mois==12){
                $Dec=$Dec+$resu[$i][6]+$resu[$i][9]+$resu[$i][12]+$resu[$i][15]+$resu[$i][18]+$resu[$i][21];
        
            }
}}}
/************** cumule ************/
$Reque="SELECT * FROM rapports";
$quer=mysqli_query($connection,$Reque);
$re=mysqli_fetch_All($quer);
if(isset($_POST['Enrg'])){
$Wts=0;
$Resau=0;
$Janc=0;
$Febc=0;
$Marc=0; 
$Aprc=0; 
$Mayc=0; 
$Junc=0; 
$Julc=0;
$Augc=0;
$Sepc=0; 
$Octc=0;
$Novc=0;
$Decc=0;
$cas=$_POST['Cumule'];
if($cas=='Premiers paiement'){
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==8){
            $Aucg=$Augc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    
        }

    }}
if($cas=='Premiers paiement prévu'){
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==8){
            $Aucg=$Augc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
    
        }

    }}
if($cas=='Deuxième paiement'){
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==3){
            $Marc=$Marc+$$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==8){
            $Aucg=$Augc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][42]+$re[$i][45]+$re[$i][48]+$re[$i][51]+$re[$i][54]+$re[$i][57];
    
        }

    }} 
if($cas=='Deuxième paiement prévu'){
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==8){
            $Aucg=$Augc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][60]+$re[$i][63]+$re[$i][66]+$re[$i][69]+$re[$i][72]+$re[$i][75];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][24]+$re[$i][27]+$re[$i][30]+$re[$i][33]+$re[$i][36]+$re[$i][39];
        }
    }
}
if($cas=='Engagements distribués au groupe'){
    $p=89;
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][$p];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][$p];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][$p];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][$p];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][$p];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][$p];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][$p];
    
        }
        if($mois==8){
            $Augc=$Augc+$re[$i][$p];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][$p];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][$p];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][$p];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][$p];
    
        }
    }
}
if($cas=='Engagements distribués par e-mail'){
    $p=79;
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][$p];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][$p];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][$p];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][$p];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][$p];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][$p];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][$p];
    
        }
        if($mois==8){
            $Augc=$Augc+$re[$i][$p];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][$p];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][$p];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][$p];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][$p];
    
        }
    }
}
if($cas=='Total Nouveaux leads'){
    $p=85;
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][$p];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][$p];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][$p];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][$p];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][$p];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][$p];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][$p];
    
        }
        if($mois==8){
            $Augc=$Augc+$re[$i][$p];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][$p];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][$p];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][$p];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][$p];
    
        }
    }
}
if($cas=='Leads convertis en applications'){
    $p=87;
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][$p];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][$p];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][$p];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][$p];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][$p];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][$p];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][$p];
    
        }
        if($mois==8){
            $Augc=$Augc+$re[$i][$p];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][$p];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][$p];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][$p];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][$p];
    
        }
    }
}
if($cas=='Visites'){
    $p=77;
    for($i=0;$i<count($re);$i++){
        $date = date_create($re[$i][3]);
        $mois=$date->format('m')."\n";
        if($mois==1){
            $Janc=$Janc+$re[$i][$p];
        }
        if($mois==2){
            $Febc=$Febc+$re[$i][$p];
    
        }
        if($mois==3){
            $Marc=$Marc+$re[$i][$p];
    
        }
        if($mois==4){
            $Aprc=$Aprc+$re[$i][$p];
    
        }
        if($mois==5){
            $Mayc=$Mayc+$re[$i][$p];
    
        }
        if($mois==6){
            $Junc=$Junc+$re[$i][$p];
    
        }
        if($mois==7){
            $Julc=$Julc+$re[$i][$p];
    
        }
        if($mois==8){
            $Augc=$Augc+$re[$i][$p];
    
        }
        if($mois==9){
            $Sepc=$Sepc+$re[$i][$p];
    
        }
        if($mois==10){
            $Octc=$Octc+$re[$i][$p];
    
        }
        if($mois==11){
            $Novc=$Novc+$re[$i][$p];
    
        }
        if($mois==12){
            $Decc=$Decc+$re[$i][$p];
    
        }
    }
}


for($i=0;$i<count($re);$i++){
    $Wts=$Wts+$re[$i][83];
    $Resau=$Resau+$re[$i][81];
}
}
else{
$Wts=0;
$Resau=0;
$Janc=0;
$Febc=0;
$Marc=0; 
$Aprc=0; 
$Mayc=0; 
$Junc=0; 
$Julc=0;
$Augc=0;
$Sepc=0; 
$Octc=0;
$Novc=0;
$Decc=0;
for($i=0;$i<count($re);$i++){
    $Wts=$Wts+$re[$i][83];
    $Resau=$Resau+$re[$i][81];
    $date = date_create($re[$i][3]);
    $mois=$date->format('m')."\n";
    if($mois==1){
        $Janc=$Janc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];
    }
    if($mois==2){
        $Febc=$Febc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==3){
        $Marc=$Marc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==4){
        $Aprc=$Aprc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==5){
        $Mayc=$Mayc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==6){
        $Junc=$Junc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==7){
        $Julc=$Julc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==8){
        $Aucg=$Augc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==9){
        $Sepc=$Sepc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==10){
        $Octc=$Octc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==11){
        $Novc=$Novc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
    if($mois==12){
        $Decc=$Decc+$re[$i][6]+$re[$i][9]+$re[$i][12]+$re[$i][15]+$re[$i][18]+$re[$i][21];   
    }
}}
?>
<?php require("header.php")?>
    <!-- Page Wrapper -->
   <?php require("Menu.php")?>

                <!-- Begin Page Content -->
                <div class="container-fluid">              
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Paiement Total</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $PT." MAD";?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Paiement Prevu</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $PP." MAD";?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Paiement Courant</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $PC." MAD";?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Visites</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $Visites;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Content Row -->
                     <form method="POST" action="dashboard.php">
                                <div class="row">
                                  <div class="col-3">
                                  <select  class="form-control" name="Cumule"> 
                                      <option Selected>Premiers paiement</option>
                                      <option >Premiers paiement prévu</option>
                                      <option >Deuxième paiement</option>
                                      <option >Deuxième paiement prévu</option>
                                      <option >Engagements distribués au groupe</option>
                                      <option >Engagements distribués par e-mail</option>
                                      <option >Total Nouveaux leads</option>
                                      <option >Leads convertis en applications</option>
                                      <option >Visites</option>
                                  </select>
                                   </div>
                                   <div class="col-lg-3">
                                  <button type="submit" class="btn btn-info" name="Enrg">Afficher</button>
                                   </div>
                              </div>
                              </form>
                              <hr>
                     <div class="row">
<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Cumule</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myArea"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Pie Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Cumule Des Etudiants contacter</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-pie pt-4 pb-2">
                <canvas id="myPie"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Whatsapp
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-info"></i> Réseaux Sociaux
                </span>
            </div>
        </div>
    </div>
</div>
</div>
                    <form method="POST" action="dashboard.php">
                                <div class="row">
                                    <div class="col-lg-3">
                                <select  class="form-control" name="Agence"> 
                                      <?php 
                                      $Req="SELECT Agence FROM coordonnees WHERE Id != 1";
                                      $quer=mysqli_query($connection,$Req);
                                      $re=mysqli_fetch_all($quer);
                                      ?>
                                      <?php foreach($re as $agence): ?>
                                        <option><?= $agence[0] ?></option>
                                      <?php endforeach; ?>
                                  </select>
                                  </div>
                                  <div class="col-lg-3">
                                  <select  class="form-control" name="info"> 
                                      <option Selected >Premiers paiement</option>
                                      <option >Premiers paiement prévu</option>
                                      <option >Deuxième paiement</option>
                                      <option >Deuxième paiement prévu</option>
                                      <option >Engagements distribués à l'agence</option>
                                      <option >Engagements distribués par e-mail</option>
                                      <option >Total Nouveaux leads</option>
                                      <option >Leads convertis en applications</option>
                                      <option >Visites à l'agence</option>
                                  </select>
                                   </div>
                                   <div class="col-lg-3">
                                  <button type="submit" class="btn btn-info" name="Enregistrer">Afficher</button>
                                   </div>
                              </div>
                              </form>
                              <hr>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                         
                                  <h6 class="m-0 font-weight-bold text-primary">Statistiques Par Mois</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                       
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Etudiants contacter</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Whatsapp
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Réseaux Sociaux
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    <?php require("footer.php") ?>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [
        <?php
        echo'"Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"';
        ?>],
    datasets: [{
      label: "",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [  <?php
        echo"$Jan,$Feb,$Mar,$Apr,$May,$Jun,$Jul,$Aug,$Sep,$Oct,$Nov,$Dec";
        ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return ' ' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

    </script>
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Whatsapp", " Réseaux Sociaux"],
    datasets: [{
      data: [<?php
         echo "$Wtsp,$Resaux";?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
    </script>

</body>

</html>
<style>
 
    .row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -.75rem;
    margin-left: 0em;
}
</style>
<script>
    /********************/

        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ct = document.getElementById("myArea");
var myLine = new Chart(ct, {
  type: 'line',
  data: {
    labels: [
        <?php
        echo'"Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"';
        ?>],
    datasets: [{
      label: "",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [  <?php
        echo"$Janc,$Febc,$Marc,$Aprc,$Mayc,$Junc,$Julc,$Augc,$Sepc,$Octc,$Novc,$Decc";
        ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return ' ' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});

    </script>
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var c = document.getElementById("myPie");
var myPieChart = new Chart(c, {
  type: 'doughnut',
  data: {
    labels: ["Whatsapp", " Réseaux Sociaux"],
    datasets: [{
      data: [<?php
         echo "$Wts,$Resau";?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
    </script>
