<?php

$servername = "localhost";
$username = "root";
$password = "toor2";
$dbname = "patientmgt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:".$conn->error);
}

if(isset($_POST['VISTDATECREATED'])){

$dnx =array(); $fqx =array(); $tmx=array(); $pdx =array(); $qtyx =array();
$ab =array(); $bc =array(); $cd=array(); $de =array(); $ef =array();
$fg =array(); $gh =array(); $hi=array(); $ij =array(); $jk =array();  $jkxx =array();
$kl =array(); $lm =array(); $mn=array();  

$VISTDATECREATED  = trim($_POST['VISTDATECREATED']); 
$DATECREATED  = trim($_POST['DATECREATED']); 

if (isset($_POST['dnx'])) {
  $dnx =      $_POST['dnx'];
  $fqx   =       $_POST['fqx'];
  $tmx      =       $_POST['tmx'];
  $pdx   =       $_POST['pdx'];
  $qtyx      =       $_POST['qtyx']; 
  $ab =      $_POST['ab'];
  $bc   =       $_POST['bc'];
  $cd      =       $_POST['cd'];
  $de   =       $_POST['de'];
  $ef      =       $_POST['ef'];
  $fg =      $_POST['fg'];
  $gh   =       $_POST['gh'];
  $hi      =       $_POST['hi'];
  $ij =      $_POST['ij'];
  $jkxx   =       $_POST['jkxx'];
  $jk   =       $_POST['jk'];
  $kl      =       $_POST['kl'];
  $lm   =       $_POST['lm'];
  $mn      =       $_POST['mn'];
}
   

$i=0;
for($i=0;$i<count($dnx);$i++){

$VISTDATE =$dnx[$i];
$WEEKSOFAMENOE  = $fqx[$i];
$FUNDALHEIGHT  =  $tmx[$i];
$PRESENTATION   = $pdx[$i];
$POSITIONLIE  =  $qtyx[$i];  
$RELATIONPP =$ab[$i];
$FOETALHEART  = $bc[$i];
$PROGRESSWEIGHT  =  $cd[$i];
$PROGRESSBP   = $de[$i];
$VARICOSEOEDEMA  =  $ef[$i];  
$URINE  = $fg[$i];
$TT  =  $gh[$i];
$IRONFOLIC   = $hi[$i];
$MEBENDAZOLE  =  $ij[$i]; 
$IPT =$jkxx[$i];
$NETUSE =$jk[$i];
$COMPLAITS  = $kl[$i];
$RETURNDATE  =  $lm[$i]; 
$NAMEOFEXAMINER =$mn[$i]; 

$NTIHCNO  = trim($_POST['NTIHCNO']);
$AGE  = trim($_POST['AGE']);
$AGE_GROUP  = trim($_POST['AGE_GROUP']); 

 
$REGNO  = trim($_POST['REGNO']);
$CLIENTNAME  = trim($_POST['CLIENTNAME']);
$SCHOOLINGSTATUS  = trim($_POST['SCHOOLINGSTATUS']);  
$PHONECONTACT  = trim($_POST['PHONECONTACT']);  

$HEALTHUNIT  = trim($_POST['HEALTHUNIT']); 
$USERINITIAL  = trim($_POST['USERINITIAL']);
$USERDESIGNATION  = trim($_POST['USERDESIGNATION']);
$USERACCOUNT  = trim($_POST['USERACCOUNT']);
$PARTNERESCORT  = trim($_POST['PARTNERESCORT']);

$ARTCLINIC  = trim($_POST['ARTCLINIC']); 
$VISTTYPE  = trim($_POST['VISTTYPE']);
$FINALREACTIVITY  = trim($_POST['FINALREACTIVITY']); 

  $sql1="INSERT INTO `patientmgt`.`anteprogress` (`DATECREATED`,   `VISTDATECREATED`, `NTIHCNO`,  `AGE`,   `AGE_GROUP`,
                                                             `CLIENTNAME`, `REGNO`, `SCHOOLINGSTATUS`,  `PHONECONTACT`,
                               `HEALTHUNIT`, `USERINITIAL`, `USERDESIGNATION`,   `USERACCOUNT`,  `PARTNERESCORT`,
                                   `VISTDATE`,
                                   `WEEKSOFAMENOE`,
                                   `FUNDALHEIGHT`,
                                   `PRESENTATION`, `POSITIONLIE`,
                               `RELATIONPP`, `FOETALHEART`, `PROGRESSWEIGHT`, `PROGRESSBP`, `VARICOSEOEDEMA`, `URINE`,
                               `TT`, `IRONFOLIC`, `MEBENDAZOLE`,  `IPT`, `NETUSE`, `COMPLAITS`, `RETURNDATE`, 
                               `ARTCLINIC`, `VISTTYPE`, `FINALREACTIVITY`, 
                               `NAMEOFEXAMINER`)
                                                VALUES (DATECREATED,
                               '$VISTDATECREATED',  '$NTIHCNO', '$AGE',  '$AGE_GROUP',
                             '$CLIENTNAME',  '$REGNO', '$SCHOOLINGSTATUS',   '$PHONECONTACT',
                             '$HEALTHUNIT', '$USERINITIAL', '$USERDESIGNATION',  '$USERACCOUNT',   '$PARTNERESCORT',
                             '$VISTDATE', '$WEEKSOFAMENOE',
                             '$FUNDALHEIGHT',
                             '$PRESENTATION', '$POSITIONLIE',
                             '$RELATIONPP', '$FOETALHEART', '$PROGRESSWEIGHT', '$PROGRESSBP', '$VARICOSEOEDEMA', '$URINE',
                             '$TT', '$IRONFOLIC', '$MEBENDAZOLE',  '$IPT', '$NETUSE', '$COMPLAITS', '$RETURNDATE',  
                             '$ARTCLINIC', '$VISTTYPE', '$FINALREACTIVITY',  
                             '$NAMEOFEXAMINER')";

                                  $conn->query($sql1);

            }
            }
                         header("location:anc_home.php");
                                exit();

                                    ?>
