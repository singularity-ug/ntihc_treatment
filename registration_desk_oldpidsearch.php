<?Php
//*************************************** 
require "registration_desk_oldpidconfig.php";  // database connection
//////////
//////////////////////////////// Main Code sarts /////////////////////////////////////////////


$in=$_GET['txt'];
if(!ctype_alnum($in)){
echo "Data Error";
exit;
}


$msg=" 
 <table>
                <tr>
                    <th>OLD-PID</th>
                    <th>FIRST-NAME</th>
                    <th>LAST-NAME</th>
                    <th>NTIHC-NO.</th> 
					<th>MOTHER-FNAME.</th>
					<th>MOTHER-LNAME.</th> 
                </tr> ";
                
     
if(strlen($in)>0 and strlen($in) <20 ){
$sql="select OLDPID, FIRSTNAME, LASTNAME, NTIHCNO, MOTHERFIRSTNAME, MOTHERLASTNAME from cmpatientsnewregistration where OLDPID like '%$in%'";
foreach ($dbo->query($sql) as $nt) {

$msg .=" <tr>  <td>". $nt['OLDPID']."</td>".
              " <td>". $nt['FIRSTNAME']." </td>".
              " <td>". $nt['LASTNAME'] ."</td>".
              " <td>". $nt['NTIHCNO']."</td>". 
              " <td>". $nt['MOTHERFIRSTNAME']."</td>".
              " <td>". $nt['MOTHERLASTNAME']."</td>".
                "</tr>";

}
}
$msg .='</table>';
echo $msg;
?>