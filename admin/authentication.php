<?php
session_start();
require('connect/config.php');

$portfolio = '';
$name     ='';
  $username = trim($_POST['username']);
	$pwd      =  md5(trim($_POST['pwd']));
		if (strpos($username, '@') !== false) {$username=$username;      }
		                           else{$username=$username.'@ntihc.org';}

  $sql =   "SELECT * FROM `user_table` WHERE Email='$username' AND Password='$pwd' AND Current_Status = 'ACTIVE' ";

      $res = $conn->query($sql);

    if ($res)
		{

		   if($res->num_rows > 0){

		         while($row= $res->fetch_assoc()){
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
						 if($portfolio=='USER'){header('location:home_user.php');}
						 elseif($portfolio==='SYSTEM ADMIN'){header('location:system_admin.php');}
						 elseif($portfolio==='ADMIN USER'){header('location:home_user.php');}
						 elseif($portfolio==='DIRECTOR'){header('location:sys_dashboard.php');}
						 elseif($portfolio==='DEPUTY DIRECTOR'){header('location:sys_dashboard.php');}
						 elseif($portfolio==='HEAD FINANCE AND ADMIN'){header('location:sys_dashboard.php');}
						 elseif($portfolio==='HEAD ADVOCACY AND RESEARCH'){header('location:sys_dashboard.php');}
						 elseif($portfolio==='HEAD SERVICE DELIVERY'){header('location:sys_dashboard.php');}
						 elseif($portfolio==='CLIENT MANAGEMENT'){header('location:../tollfree.php');}
						 elseif($portfolio==='CLIENT MANAGEMENT AND ADMIN'){header('location:../client_management.php');}  
						 elseif($portfolio==='FINANCE AND ADMIN DEPARTMENTAL USER'){header('location:sys_dashboard.php');}
						 elseif($portfolio==='MULTIPLE'){header('location:sys_dashboard.php');}	
						 else{header('location:index.php');  $conn->close();	 exit();}
						 echo 'finished ()';exit();
		   }
	    else{

				header('location:index.php');
					}
		}
		else{echo 'someting wrong '.$conn->error;}
exit();
?> 
