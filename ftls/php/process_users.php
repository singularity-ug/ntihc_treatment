<?php
session_start();
require('connect/config.php');

$ortfolio = '';
$name     ='';
  $username = trim($_POST['username']);
	$pwd      =  md5(trim($_POST['pwd']));
		if (strpos($username, '@') !== false) { 			$username=$username;      }
		                           else{              $username=$username.'@kcca.go.ug';}

  $sql =   "SELECT * FROM `panel` WHERE Email='$username' AND Password='$pwd' AND Current_Status = 'ACTIVE' ";

      $res = $conn->query($sql);

    if ($res)
		{

		   if($res->num_rows > 0){

		         while($row=$res->fetch_assoc()){
                         $portfolio=$row['Portfolio'];
						 $name     =$row['First_Name'].' '.$row['Last_Name'];
						 $desc     = $row['Description'];
						 $dept     = $row['Dept'];
						 $pf     = $row['Staff_Number'];
						 $rm     = $row['Email']; 
		    }
               $_SESSION['USERID'] = $name;
               $_SESSION['PORT']   = $portfolio; 
               $_SESSION['DESC']   = $desc;
               $_SESSION['DEPT']   = $dept;
			   $_SESSION['STAFNO']   = $pf; 
			   $_SESSION['MREPEAT']   = $rm;  

   					//	$portfolio=trim($portfolio);
						 if($portfolio=='USER'){header('location:dashboard.php');}
						 elseif($portfolio==='FUEL AGENT'){header('location:fuel_datacenter.php');} 
						 elseif($portfolio==='ADMINISTRATOR'){header('location:dashboard.php');}
						 elseif($portfolio==='ADMINISTRATORONE'){header('location:fleet_administrator.php');} 
						 else{header('location:index.php');  $conn->close();	 exit();}
						 echo 'finished ()';exit();
		   }
	    else{

				header('location:../index.php');
					}
		}
		else{echo 'someting wrong '.$conn->error;}
exit();
?> 