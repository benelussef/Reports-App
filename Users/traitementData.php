<?php
$base="reports";
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,$base);
 //traitement des rapports sauvgardees

 $R="SELECT * FROM rapports";
 $q=mysqli_query($connection,$R);
 $re=mysqli_fetch_All($q);
 $reqS="DELETE FROM cumulate";
 $queS=mysqli_query($connection,$reqS);
 if(!empty($re)){
 for($i=0;$i<count($re);$i++){
     $t[$i]=$re[$i][91];
 }
     $Week = array_unique ($t);
     $k=0;
     foreach($Week as $v){
        $Weeks[$k]=$v;
        $k++;
     }
 
  //var_dump($Weeks);
     for($i=0;$i<count($Weeks);$i++){
         $req="SELECT * FROM rapports WHERE semaine=$Weeks[$i]";
         $q=mysqli_query($connection,$req);
         $res=mysqli_fetch_All($q);
         //var_dump($resu);
         $DateDe=$res[0][3];
         $DateFi=$res[0][4];
           $c1=0;
           $c2=0;
           $c3=0;
           $c4=0;
           $c5=0;
           $c6=0;
           $c7=0;
           $c8=0;
           $c9=0;
           $c10=0;
           $c11=0;
           $c12=0;
           $c13=0;
           $c14=0;
           $c15=0;
           $c16=0;
           $c17=0;
           $c18=0;
           $c19=0;
           $c20=0;
           $c21=0;
           $c22=0;
           $c23=0;
           $c24=0;
           $c25=0;
           $c26=0;
           $c27=0;
           $c28=0;
           $c29=0;
           $c30=0;
           $c31=0;
           $c32=0;
           $c33=0;
           $c34=0;
           $c35=0;
           $c36=0;
           $c37=0;
           $c38=0;
           $c39=0;
           $c40=0;
           $c41=0;
           $c42=0;
           $c43=0;
           $c44=0;
           $c45=0;
           $c46=0;
           $c47=0;
           $c48=0;
           $c49=0;
           $c50=0;
           $c51=0;
           $c52=0;
           $c53=0;
           $c54=0;
           $c55=0;
           $c56=0;
           $c57=0;
           $c58=0;
           $c59=0;
           $c60=0;
           $c61=0;
           $c62=0;
           $c63=0;
           $c64=0;
           $c65=0;
           $c66=0;
           $c67=0;
           $c68=0;
           $c69=0;
           $c70=0;
           $c71=0;
           $c72=0;
           $c73=0;
           $c74="";
           $c75=0;
           $c76="";
           $c77=0;
           $c78="";
           $c79=0;
           $c80="";
           $c81=0;
           $c82="";
           $c83=0;
           $c84="";
           $c85=0;
           $c86=0;
         for($j=0;$j<count($res);$j++){
         $ids[$j]=$res[$j][0];
         $c1=$c1+$res[$j][5];
         $c2=$c2+$res[$j][6];
         $c3=$res[$j][7];
         $c4=$c4+$res[$j][8];
         $c5=$c5+$res[$j][9];
         $c6=$res[$j][10];
         $c7=$c7+$res[$j][11];
         $c8=$c8+$res[$j][12];
         $c9=$res[$j][13];
         $c10=$c10+$res[$j][14];
         $c11=$c11+$res[$j][15];
         $c12=$res[$j][16];
         $c13=$c13+$res[$j][17];
         $c14=$c14+$res[$j][18];
         $c15=$res[$j][19];
         $c16=$c16+$res[$j][20];
         $c17=$c17+$res[$j][21];
         $c18=$res[$j][22];
         $c19=$c19+$res[$j][23];
         $c20=$c20+$res[$j][24];
         $c21=$res[$j][25];
         $c22=$c22+$res[$j][26];
         $c23=$c23+$res[$j][27];
         $c24=$res[$j][28];
         $c25=$c25+$res[$j][29];
         $c26=$c26+$res[$j][30];
         $c27=$res[$j][31];
         $c28=$c28+$res[$j][32];
         $c29=$c29+$res[$j][33];
         $c30=$res[$j][34];
         $c31=$c31+$res[$j][35];
         $c32=$c32+$res[$j][36];
         $c33=$res[$j][37];
         $c34=$c34+$res[$j][38];
         $c35=$c35+$res[$j][39];
         $c36=$res[$j][40];
         $c37=$c37+$res[$j][41];
         $c38=$c38+$res[$j][42];
         $c39=$res[$j][43];
         $c40=$c40+$res[$j][44];
         $c41=$c41+$res[$j][45];
         $c42=$res[$j][46];
         $c43=$c43+$res[$j][47];
         $c44=$c44+$res[$j][48];
         $c45=$res[$j][49];
         $c46=$c46+$res[$j][50];
         $c47=$c47+$res[$j][51];
         $c48=$res[$j][52];
         $c49=$c49+$res[$j][53];
         $c50=$c50+$res[$j][54];
         $c51=$res[$j][55];
         $c52=$c52+$res[$j][56];
         $c53=$c53+$res[$j][57];
         $c54=$res[$j][58];
         $c55=$c55+$res[$j][59];
         $c56=$c56+$res[$j][60];
         $c57=$res[$j][61];
         $c58=$c58+$res[$j][62];
         $c59=$c59+$res[$j][63];
         $c60=$res[$j][64];
         $c61=$c61+$res[$j][65];
         $c62=$c62+$res[$j][66];
         $c63=$res[$j][67];
         $c64=$c64+$res[$j][68];
         $c65=$c65+$res[$j][69];
         $c66=$res[$j][70];
         $c67=$c67+$res[$j][71];
         $c68=$c68+$res[$j][72];
         $c69=$res[$j][73];
         $c70=$c70+$res[$j][74];
         $c71=$c71+$res[$j][75];
         $c72=$res[$j][76];
         $c73=$c73+$res[$j][77];
         $c74.=" ".$res[$j][78];
         $c75=$c75+$res[$j][79];
         $c76.=" ".$res[$j][80];
         $c77=$c77+$res[$j][81];
         $c78.=" ".$res[$j][82];
         $c79=$c79+$res[$j][83];
         $c80.=" ".$res[$j][84];
         $c81=$c81+$res[$j][85];
         $c82.=" ".$res[$j][86];
         $c83=$c83+$res[$j][87];
         $c84.=" ".$res[$j][88];
         $c85=$c85+$res[$j][89];
         $c86=$res[$j][90];
         }
         /*case 3*/
        // echo $case74;
         $array = preg_split('/ /', $c74);
         $c744 = array_unique ($array);
         $c74="";
         foreach($c744 as $val){
             $c74.=" ".$val;
         }    
         /* fin case74 */
         /*case 6*/
         $array = preg_split('/ /', $c76);
         $c766= array_unique ($array);
         $c76="";
         foreach($c766 as $val){
             $c76.=" ".$val;
         }
         /* fin case6 */
          /*case 9*/
          $array = preg_split('/ /', $c78);
          $c778 = array_unique ($array);
          $c78="";
          foreach($c778 as $val){
              $c78.=" ".$val;
          }
          /* fin case9 */
           /*case 12*/
         $array = preg_split('/ /', $c80);
         $c800 = array_unique ($array);
         $c80="";
         foreach($c800 as $val){
             $c80.=" ".$val;
         }
         /* fin case12 */
          /*case 14*/
          $array = preg_split('/ /', $c82);
          $c822 = array_unique ($array);
          $c82="";
          foreach($c822 as $val){
              $c82.=" ".$val;
          }
          /* fin case14 */
           /*case 16*/
         $array = preg_split('/ /', $c84);
         $c844 = array_unique ($array);
         $c84="";
         foreach($c844 as $val){
             $c84.=" ".$val;
         }
         /* fin case16 */
          /*case 18*/
          $array = preg_split('/ /', $c86);
          $c866 = array_unique ($array);
          $c86="";
          foreach($c866 as $val){
              $c86.=" ".$val;
          }
          
           $good_format=strtotime ($DateFi);
           $M=date('M',$good_format);
           $Y=date('Y',$good_format);
           $Mois=$M." ".$Y;
          $req1="INSERT INTO cumulate (Id,Date_debut,Date_fin,case1,case2,case3, 
         case4,case5,case6,case7,case8,case9,case10,case11,case12,case13,case14,case15,case16,case17,case18,case19,case20, 
         case21,case22,case23,case24,case25,case26,case27,case28, case29, case30,case31,case32,case33,case34,case35,case36,
         case37,case38,case39,case40,case41,case42,case43,case44,case45,case46,case47,case48, case49,case50,case51,case52,
         case53,case54,case55,case56,case57,case58,case59,case60,case61,case62,case63,case64,case65,case66,case67, case68,
         case69,case70,case71,case72,case73,case74,case75,case76,case77,case78,case79,case80,case81,case82,case83,case84,
         case85,case86,mois,annee) 
         VALUES ('$Weeks[$i]-$Y','$DateDe','$DateFi','$c1','$c2','$c3','$c4','$c5','$c6',
         '$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14','$c15','$c16','$c17','$c18','$c19','$c20','$c21','$c22',
         '$c23','$c24','$c25','$c26','$c27','$c28','$c29','$c30','$c31','$c32','$c33','$c34','$c35','$c36',
        '$c37','$c38','$c39','$c40','$c41','$c42','$c43','$c44','$c45','$c46','$c47','$c48','$c49','$c50',
        '$c51','$c52','$c53','$c54','$c55','$c56','$c57','$c58','$c59','$c60','$c61','$c62','$c63','$c64',
        '$c65','$c66','$c67','$c68','$c69','$c70','$c71','$c72','$c73','$c74','$c75','$c76','$c77','$c78',
        '$c79','$c80','$c81','$c82','$c83','$c84','$c85','$c86','$Mois','$Y') 
         ON DUPLICATE KEY UPDATE 
                  Date_debut = '$DateDe',
                  Date_fin='$DateFi',
                  case1='$c1',
                  case2='$c2',
                  case3='$c3',
                  case4='$c4',
                  case5='$c5',
                  case6='$c6',
                  case7='$c7',
                  case8='$c8',
                  case9='$c9',
                  case10='$c10',
                  case11='$c11',
                  case12='$c12',
                  case13='$c13',
                  case14='$c14',
                  case15='$c15',
                  case16='$c16',
                  case17='$c17',
                  case18='$c18',
                  case19='$c19',
                  case20='$c20',
                  case21='$c21',
                  case22='$c22',
                  case23='$c23',
                  case24='$c24',
                  case25='$c25',
                  case26='$c26',
                  case27='$c27',
                  case28='$c28',
                  case29='$c29',
                  case30='$c30',
                  case31='$c31',
                  case32='$c32',
                  case33='$c33',
                  case34='$c34',
                  case35='$c35',
                  case36='$c36',
                  case37='$c37',
                  case38='$c38',
                  case39='$c39',
                  case40='$c40',
                  case41='$c41',
                  case42='$c42',
                  case43='$c43',
                  case44='$c44',
                  case45='$c45',
                  case46='$c46',
                  case47='$c47',
                  case48='$c48',
                  case49='$c49',
                  case50='$c50',
                  case51='$c51',
                  case52='$c52',
                  case53='$c53',
                  case54='$c54',
                  case55='$c55',
                  case56='$c56',
                  case57='$c57',
                  case58='$c58',
                  case59='$c59',
                  case60='$c60',
                  case61='$c61',
                  case62='$c62',
                  case63='$c63',
                  case64='$c64',
                  case65='$c65',
                  case66='$c66',
                  case67='$c67',
                  case68='$c68',
                  case69='$c69',
                  case70='$c70',
                  case71='$c71',
                  case72='$c72',
                  case73='$c73',
                  case74='$c74',
                  case75='$c75',
                  case76='$c76',
                  case77='$c77',
                  case78='$c78',
                  case79='$c79',
                  case80='$c80',
                  case81='$c81',
                  case82='$c82',
                  case83='$c83',
                  case84='$c84',
                  case85='$c85',
                  case86='$c86',
                  mois='$Mois',
                  annee='$Y'
         ";
        
         $que1=mysqli_query($connection,$req1);
     }}
 
     //traitement des rapports sauvgardees par mois
    
     $Request="SELECT * FROM cumulate";
     $quer=mysqli_query($connection,$Request);
     $res=mysqli_fetch_All($quer);
     $reqSm="DELETE FROM monthly";
     $queSm=mysqli_query($connection,$reqSm);
     if(!empty($res)){
         unset($tab);
     for($i=0;$i<count($res);$i++){
         $tab[$i]=$res[$i][89];
     }
         $month = array_unique ($tab);
         $k=0;
         foreach($month as $val){
            $Months[$k]=$val;
            $k++;
         }
         for($i=0;$i<count($Months);$i++){
             $requet="SELECT * FROM cumulate WHERE mois='$Months[$i]'";
             $qu=mysqli_query($connection,$requet);
             $resu=mysqli_fetch_All($qu);       
             $case1=0;
             $case2=0;
             $case3=0;
             $case4=0;
             $case5=0;
             $case6=0;
             $case7=0;
             $case8=0;
             $case9=0;
             $case10=0;
             $case11=0;
             $case12=0;
             $case13=0;
             $case14=0;
             $case15=0;
             $case16=0;
             $case17=0;
             $case18=0;
             $case19=0;
             $case20=0;
             $case21=0;
             $case22=0;
             $case23=0;
             $case24=0;
             $case25=0;
             $case26=0;
             $case27=0;
             $case28=0;
             $case29=0;
             $case30=0;
             $case31=0;
             $case32=0;
             $case33=0;
             $case34=0;
             $case35=0;
             $case36=0;
             $case37=0;
             $case38=0;
             $case39=0;
             $case40=0;
             $case41=0;
             $case42=0;
             $case43=0;
             $case44=0;
             $case45=0;
             $case46=0;
             $case47=0;
             $case48=0;
             $case49=0;
             $case50=0;
             $case51=0;
             $case52=0;
             $case53=0;
             $case54=0;
             $case55=0;
             $case56=0;
             $case57=0;
             $case58=0;
             $case59=0;
             $case60=0;
             $case61=0;
             $case62=0;
             $case63=0;
             $case64=0;
             $case65=0;
             $case66=0;
             $case67=0;
             $case68=0;
             $case69=0;
             $case70=0;
             $case71=0;
             $case72=0;
             $case73=0;
             $case74="";
             $case75=0;
             $case76="";
             $case77=0;
             $case78="";
             $case79=0;
             $case80="";
             $case81=0;
             $case82="";
             $case83=0;
             $case84="";
             $case85=0;
             $case86=0;
             for($j=0;$j<count($resu);$j++){
                $case1=$case1+$resu[$j][3];
                $case2=$case2+$resu[$j][4];
                $case3=$resu[$j][5];
                $case4=$case4+$resu[$j][6];
                $case5=$case5+$resu[$j][7];
                $case6=$resu[$j][8];
                $case7=$case7+$resu[$j][9];
                $case8=$case8+$resu[$j][10];
                $case9=$resu[$j][11];
                $case10=$case10+$resu[$j][12];
                $case11=$case11+$resu[$j][13];
                $case12=$resu[$j][14];
                $case13=$case13+$resu[$j][15];
                $case14=$case14+$resu[$j][16];
                $case15=$resu[$j][17];
                $case16=$case16+$resu[$j][18];
                $case17=$case17+$resu[$j][19];
                $case18=$resu[$j][20];
                $case19=$case19+$resu[$j][21];
                $case20=$case20+$resu[$j][22];
                $case21=$resu[$j][23];
                $case22=$case22+$resu[$j][24];
                $case23=$case23+$resu[$j][25];
                $case24=$resu[$j][26];
                $case25=$case25+$resu[$j][27];
                $case26=$case26+$resu[$j][28];
                $case27=$resu[$j][29];
                $case28=$case28+$resu[$j][30];
                $case29=$case29+$resu[$j][31];
                $case30=$resu[$j][32];
                $case31=$case31+$resu[$j][33];
                $case32=$case32+$resu[$j][34];
                $case33=$resu[$j][35];
                $case34=$case34+$resu[$j][36];
                $case35=$case35+$resu[$j][37];
                $case36=$resu[$j][38];
                $case37=$case37+$resu[$j][39];
                $case38=$case38+$resu[$j][40];
                $case39=$resu[$j][41];
                $case40=$case40+$resu[$j][42];
                $case41=$case41+$resu[$j][43];
                $case42=$resu[$j][44];
                $case43=$case43+$resu[$j][45];
                $case44=$case44+$resu[$j][46];
                $case45=$resu[$j][47];
                $case46=$case46+$resu[$j][48];
                $case47=$case47+$resu[$j][49];
                $case48=$resu[$j][50];
                $case49=$case49+$resu[$j][51];
                $case50=$case50+$resu[$j][52];
                $case51=$resu[$j][53];
                $case52=$case52+$resu[$j][54];
                $case53=$case53+$resu[$j][55];
                $case54=$resu[$j][56];
                $case55=$case55+$resu[$j][57];
                $case56=$case56+$resu[$j][58];
                $case57=$resu[$j][59];
                $case58=$case58+$resu[$j][60];
                $case59=$case59+$resu[$j][61];
                $case60=$resu[$j][62];
                $case61=$case61+$resu[$j][63];
                $case62=$case62+$resu[$j][64];
                $case63=$resu[$j][65];
                $case64=$case64+$resu[$j][66];
                $case65=$case65+$resu[$j][67];
                $case66=$resu[$j][68];
                $case67=$case67+$resu[$j][69];
                $case68=$case68+$resu[$j][70];
                $case69=$resu[$j][71];
                $case70=$case70+$resu[$j][72];
                $case71=$case71+$resu[$j][73];
                $case72=$resu[$j][74];
                $case73=$case73+$resu[$j][75];
                $case74.=" ".$resu[$j][76];
                $case75=$case75+$resu[$j][77];
                $case76.=" ".$resu[$j][78];
                $case77=$case77+$resu[$j][79];
                $case78.=" ".$resu[$j][80];
                $case79=$case79+$resu[$j][81];
                $case80.=" ".$resu[$j][82];
                $case81=$case81+$resu[$j][83];
                $case82.=" ".$resu[$j][84];
                $case83=$case83+$resu[$j][85];
                $case84.=" ".$resu[$j][86];
                $case85=$case85+$resu[$j][87];
                $case86=$resu[$j][88];
             $good_format=strtotime ($resu[$j][1]);
                 $Y=date('Y',$good_format);
             }
             $array = preg_split('/ /', $case74);
             $case744 = array_unique ($array);
             $case74="";
             foreach($c744 as $val){
                 $case74.=" ".$val;
             }    
             /* fin case74 */
             /*case 6*/
             $array = preg_split('/ /', $case76);
             $c766= array_unique ($array);
             $case76="";
             foreach($c766 as $val){
                 $case76.=" ".$val;
             }
             /* fin case6 */
              /*case 9*/
              $array = preg_split('/ /', $case78);
              $c778 = array_unique ($array);
              $case78="";
              foreach($c778 as $val){
                  $case78.=" ".$val;
              }
              /* fin case9 */
               /*case 12*/
             $array = preg_split('/ /', $case80);
             $c800 = array_unique ($array);
             $case80="";
             foreach($c800 as $val){
                 $case80.=" ".$val;
             }
             /* fin case12 */
              /*case 14*/
              $array = preg_split('/ /', $case82);
              $c822 = array_unique ($array);
              $case82="";
              foreach($c822 as $val){
                  $case82.=" ".$val;
              }
              /* fin case14 */
               /*case 16*/
             $array = preg_split('/ /', $case84);
             $c844 = array_unique ($array);
             $case84="";
             foreach($c844 as $val){
                 $case84.=" ".$val;
             }
             /* fin case16 */
              /*case 18*/
              $array = preg_split('/ /', $case86);
              $c866 = array_unique ($array);
              $case86="";
              foreach($c866 as $val){
                  $case86.=" ".$val;
              }
              $r="INSERT INTO monthly (mois,case1,case2,case3, 
             case4,case5,case6,case7,case8,case9,case10,case11,case12,
             case13,case14,case15,case16,case17,case18,case19,case20, 
             case21,case22,case23,case24,case25,case26,case27,case28, case29, case30,case31,case32,case33,case34,case35,case36,
            case37,case38,case39,case40,case41,case42,case43,case44,case45,case46,case47,case48, case49,case50,case51,case52,
            case53,case54,case55,case56,case57,case58,case59,case60,case61,case62,case63,case64,case65,case66,case67, case68,
            case69,case70,case71,case72,case73,case74,case75,case76,case77,case78,case79,case80,case81,case82,case83,case84,
            case85,case86,annee) 
             VALUES ('$Months[$i]','$case1','$case2','$case3','$case4','$case5','$case6','$case7','$case8','$case9','$case10','$case11','$case12','$case13',
             '$case14','$case15','$case16','$case17','$case18','$case19','$case20','$case21','$case22','$case23','$case24','$case25','$case26','$case27','$case28','$case29','$case30','$case31','$case32','$case33','$case34','$case35','$case36',
             '$case37','$case38','$case39','$case40','$case41','$case42','$case43','$case44','$case45','$case46','$case47','$case48','$case49','$case50',
             '$case51','$case52','$case53','$case54','$case55','$case56','$case57','$case58','$case59','$case60','$case61','$case62','$case63','$case64',
             '$case65','$case66','$case67','$case68','$case69','$case70','$case71','$case72','$case73','$case74','$case75','$case76','$case77','$case78',
             '$case79','$case80','$case81','$case82','$case83','$case84','$case85','$case86','$Y') 
             ON DUPLICATE KEY UPDATE 
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
                      case26='$case26',
                      case27='$case27',
                      case28='$case28',
                      case29='$case29',
                      case30='$case30',
                      case31='$case31',
                      case32='$case32',
                      case33='$case33',
                      case34='$case34',
                      case35='$case35',
                      case36='$case36',
                      case37='$case37',
                      case38='$case38',
                      case39='$case39',
                      case40='$case40',
                      case41='$case41',
                      case42='$case42',
                      case43='$case43',
                      case44='$case44',
                      case45='$case45',
                      case46='$case46',
                      case47='$case47',
                      case48='$case48',
                      case49='$case49',
                      case50='$case50',
                      case51='$case51',
                      case52='$case52',
                      case53='$case53',
                      case54='$case54',
                      case55='$case55',
                      case56='$case56',
                      case57='$case57',
                      case58='$case58',
                      case59='$case59',
                      case60='$case60',
                      case61='$case61',
                      case62='$case62',
                      case63='$case63',
                      case64='$case64',
                      case65='$case65',
                      case66='$case66',
                      case67='$case67',
                      case68='$case68',
                      case69='$case69',
                      case70='$case70',
                      case71='$case71',
                      case72='$case72',
                      case73='$case73',
                      case74='$case74',
                      case75='$case75',
                      case76='$case76',
                      case77='$case77',
                      case78='$case78',
                      case79='$case79',
                      case80='$case80',
                      case81='$case81',
                      case82='$case82',
                      case83='$case83',
                      case84='$case84',
                      case85='$case85',
                      case86='$case86',
                      annee='$Y'
             ";
             $que=mysqli_query($connection,$r);
         }
 }
 
 $Request="SELECT * FROM monthly";
 $query=mysqli_query($connection,$Request);
 $res=mysqli_fetch_All($query);
 $reqSa="DELETE FROM annuel";
$queSa=mysqli_query($connection,$reqSa);
 if(!empty($res)){
     unset($tab);
 for($i=0;$i<count($res);$i++){
     $tab[$i]=$res[$i][87];
 }
     $an = array_unique ($tab);
     $k=0;
     foreach($an as $val){
        $annees[$k]=$val;
        $k++;
     }
  //var_dump($Weeks);
     for($i=0;$i<count($annees);$i++){
         $requet="SELECT * FROM monthly WHERE annee=$annees[$i]";
         $q=mysqli_query($connection,$requet);
         $resu=mysqli_fetch_All($q);
         //var_dump($resu);
         $case1=0;
         $case2=0;
         $case3=0;
         $case4=0;
         $case5=0;
         $case6=0;
         $case7=0;
         $case8=0;
         $case9=0;
         $case10=0;
         $case11=0;
         $case12=0;
         $case13=0;
         $case14=0;
         $case15=0;
         $case16=0;
         $case17=0;
         $case18=0;
         $case19=0;
         $case20=0;
         $case21=0;
         $case22=0;
         $case23=0;
         $case24=0;
         $case25=0;
         $case26=0;
         $case27=0;
         $case28=0;
         $case29=0;
         $case30=0;
         $case31=0;
         $case32=0;
         $case33=0;
         $case34=0;
         $case35=0;
         $case36=0;
         $case37=0;
         $case38=0;
         $case39=0;
         $case40=0;
         $case41=0;
         $case42=0;
         $case43=0;
         $case44=0;
         $case45=0;
         $case46=0;
         $case47=0;
         $case48=0;
         $case49=0;
         $case50=0;
         $case51=0;
         $case52=0;
         $case53=0;
         $case54=0;
         $case55=0;
         $case56=0;
         $case57=0;
         $case58=0;
         $case59=0;
         $case60=0;
         $case61=0;
         $case62=0;
         $case63=0;
         $case64=0;
         $case65=0;
         $case66=0;
         $case67=0;
         $case68=0;
         $case69=0;
         $case70=0;
         $case71=0;
         $case72=0;
         $case73=0;
         $case74="";
         $case75=0;
         $case76="";
         $case77=0;
         $case78="";
         $case79=0;
         $case80="";
         $case81=0;
         $case82="";
         $case83=0;
         $case84="";
         $case85=0;
         $case86=0;
         for($j=0;$j<count($resu);$j++){
            $case1=$case1+$resu[$j][1];
            $case2=$case2+$resu[$j][2];
            $case3=$resu[$j][3];
            $case4=$case4+$resu[$j][4];
            $case5=$case5+$resu[$j][5];
            $case6=$resu[$j][6];
            $case7=$case7+$resu[$j][7];
            $case8=$case8+$resu[$j][8];
            $case9=$resu[$j][9];
            $case10=$case10+$resu[$j][10];
            $case11=$case11+$resu[$j][11];
            $case12=$resu[$j][12];
            $case13=$case13+$resu[$j][13];
            $case14=$case14+$resu[$j][14];
            $case15=$resu[$j][15];
            $case16=$case16+$resu[$j][16];
            $case17=$case17+$resu[$j][17];
            $case18=$resu[$j][18];
            $case19=$case19+$resu[$j][19];
            $case20=$case20+$resu[$j][20];
            $case21=$resu[$j][21];
            $case22=$case22+$resu[$j][22];
            $case23=$case23+$resu[$j][23];
            $case24=$resu[$j][24];
            $case25=$case25+$resu[$j][25];
            $case26=$case26+$resu[$j][26];
            $case27=$resu[$j][27];
            $case28=$case28+$resu[$j][28];
            $case29=$case29+$resu[$j][29];
            $case30=$resu[$j][30];
            $case31=$case31+$resu[$j][31];
            $case32=$case32+$resu[$j][32];
            $case33=$resu[$j][33];
            $case34=$case34+$resu[$j][34];
            $case35=$case35+$resu[$j][35];
            $case36=$resu[$j][36];
            $case37=$case37+$resu[$j][37];
            $case38=$case38+$resu[$j][38];
            $case39=$resu[$j][39];
            $case40=$case40+$resu[$j][40];
            $case41=$case41+$resu[$j][41];
            $case42=$resu[$j][42];
            $case43=$case43+$resu[$j][43];
            $case44=$case44+$resu[$j][44];
            $case45=$resu[$j][45];
            $case46=$case46+$resu[$j][46];
            $case47=$case47+$resu[$j][47];
            $case48=$resu[$j][48];
            $case49=$case49+$resu[$j][49];
            $case50=$case50+$resu[$j][50];
            $case51=$resu[$j][51];
            $case52=$case52+$resu[$j][52];
            $case53=$case53+$resu[$j][53];
            $case54=$resu[$j][54];
            $case55=$case55+$resu[$j][55];
            $case56=$case56+$resu[$j][56];
            $case57=$resu[$j][57];
            $case58=$case58+$resu[$j][58];
            $case59=$case59+$resu[$j][59];
            $case60=$resu[$j][60];
            $case61=$case61+$resu[$j][61];
            $case62=$case62+$resu[$j][62];
            $case63=$resu[$j][63];
            $case64=$case64+$resu[$j][64];
            $case65=$case65+$resu[$j][65];
            $case66=$resu[$j][66];
            $case67=$case67+$resu[$j][67];
            $case68=$case68+$resu[$j][68];
            $case69=$resu[$j][69];
            $case70=$case70+$resu[$j][70];
            $case71=$case71+$resu[$j][71];
            $case72=$resu[$j][72];
            $case73=$case73+$resu[$j][73];
            $case74.=" ".$resu[$j][74];
            $case75=$case75+$resu[$j][75];
            $case76.=" ".$resu[$j][76];
            $case77=$case77+$resu[$j][77];
            $case78.=" ".$resu[$j][78];
            $case79=$case79+$resu[$j][79];
            $case80.=" ".$resu[$j][80];
            $case81=$case81+$resu[$j][81];
            $case82.=" ".$resu[$j][82];
            $case83=$case83+$resu[$j][83];
            $case84.=" ".$resu[$j][84];
            $case85=$case85+$resu[$j][85];
            $case86=$resu[$j][86];
 
         }
         $array = preg_split('/ /', $case74);
         $case744 = array_unique ($array);
         $case74="";
         foreach($c744 as $val){
             $case74.=" ".$val;
         }    
         /* fin case74 */
         /*case 6*/
         $array = preg_split('/ /', $case76);
         $c766= array_unique ($array);
         $case76="";
         foreach($c766 as $val){
             $case76.=" ".$val;
         }
         /* fin case6 */
          /*case 9*/
          $array = preg_split('/ /', $case78);
          $c778 = array_unique ($array);
          $case78="";
          foreach($c778 as $val){
              $case78.=" ".$val;
          }
          /* fin case9 */
           /*case 12*/
         $array = preg_split('/ /', $case80);
         $c800 = array_unique ($array);
         $case80="";
         foreach($c800 as $val){
             $case80.=" ".$val;
         }
         /* fin case12 */
          /*case 14*/
          $array = preg_split('/ /', $case82);
          $c822 = array_unique ($array);
          $case82="";
          foreach($c822 as $val){
              $case82.=" ".$val;
          }
          /* fin case14 */
           /*case 16*/
         $array = preg_split('/ /', $case84);
         $c844 = array_unique ($array);
         $case84="";
         foreach($c844 as $val){
             $case84.=" ".$val;
         }
         /* fin case16 */
          /*case 18*/
          $array = preg_split('/ /', $case86);
          $c866 = array_unique ($array);
          $case86="";
          foreach($c866 as $val){
              $case86.=" ".$val;
          }
          $req="INSERT INTO annuel (years,case1,case2,case3, 
         case4,case5,case6,case7,case8,case9,case10,case11,case12,
         case13,case14,case15,case16,case17,case18,case19,case20, 
         case21,case22,case23,case24,case25,case26,case27,case28, case29, case30,case31,case32,case33,case34,case35,case36,
         case37,case38,case39,case40,case41,case42,case43,case44,case45,case46,case47,case48, case49,case50,case51,case52,
         case53,case54,case55,case56,case57,case58,case59,case60,case61,case62,case63,case64,case65,case66,case67, case68,
         case69,case70,case71,case72,case73,case74,case75,case76,case77,case78,case79,case80,case81,case82,case83,case84,
         case85,case86) 
         VALUES ('$annees[$i]','$case1','$case2','$case3','$case4','$case5','$case6',
         '$case7','$case8','$case9','$case10','$case11','$case12','$case13','$case14'
         ,'$case15','$case16','$case17','$case18','$case19','$case20','$case21','$case22',
         '$case23','$case24','$case25','$case26','$case27','$case28','$case29','$case30','$case31','$case32','$case33','$case34','$case35','$case36',
          '$case37','$case38','$case39','$case40','$case41','$case42','$case43','$case44','$case45','$case46','$case47','$case48','$case49','$case50',
          '$case51','$case52','$case53','$case54','$case55','$case56','$case57','$case58','$case59','$case60','$case61','$case62','$case63','$case64',
          '$case65','$case66','$case67','$case68','$case69','$case70','$case71','$case72','$case73','$case74','$case75','$case76','$case77','$case78',
          '$case79','$case80','$case81','$case82','$case83','$case84','$case85','$case86') 
         ON DUPLICATE KEY UPDATE 
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
                  case26='$case26',
                  case27='$case27',
                  case28='$case28',
                  case29='$case29',
                  case30='$case30',
                  case31='$case31',
                  case32='$case32',
                  case33='$case33',
                  case34='$case34',
                  case35='$case35',
                  case36='$case36',
                  case37='$case37',
                  case38='$case38',
                  case39='$case39',
                  case40='$case40',
                  case41='$case41',
                  case42='$case42',
                  case43='$case43',
                  case44='$case44',
                  case45='$case45',
                  case46='$case46',
                  case47='$case47',
                  case48='$case48',
                  case49='$case49',
                  case50='$case50',
                  case51='$case51',
                  case52='$case52',
                  case53='$case53',
                  case54='$case54',
                  case55='$case55',
                  case56='$case56',
                  case57='$case57',
                  case58='$case58',
                  case59='$case59',
                  case60='$case60',
                  case61='$case61',
                  case62='$case62',
                  case63='$case63',
                  case64='$case64',
                  case65='$case65',
                  case66='$case66',
                  case67='$case67',
                  case68='$case68',
                  case69='$case69',
                  case70='$case70',
                  case71='$case71',
                  case72='$case72',
                  case73='$case73',
                  case74='$case74',
                  case75='$case75',
                  case76='$case76',
                  case77='$case77',
                  case78='$case78',
                  case79='$case79',
                  case80='$case80',
                  case81='$case81',
                  case82='$case82',
                  case83='$case83',
                  case84='$case84',
                  case85='$case85',
                  case86='$case86'
         ";
 
         $que=mysqli_query($connection,$req);
     }}
     ?>