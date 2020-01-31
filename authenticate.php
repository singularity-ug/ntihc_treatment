<?php
session_start();

  if(isset($_POST['loginname'])){

      require('config.php');

      $desc     = '';
      $name     ='';
      $username = 'sip:'.trim($_POST['loginname']);
      $pwd      = trim($_POST['password']);

		if (strpos($username, '@') !== false) { 			$username=$username;      }
                                      else{       $username=$username.'@ntihc.org';}
      $sql =   "SELECT * FROM `sys_users` WHERE Username='$username' AND Pwd='$pwd'";
      $res = $conn->query($sql);
      $num = $res->num_rows;

   if($num > 0){
     echo 'seen';
          while ($row = $res->fetch_assoc()) {
                 $desc     = $row['Description'];
                 $name     = $row['Name'];
                 $username = $row['Username'];
                 $uid = $row['id'];
                 $dept     = $row['Dept'];
          }
          $_SESSION = array();
          $_SESSION['USERID'] = $username;
          $_SESSION['ID'] = $uid;
          $_SESSION['NAME']   = $name;
          $_SESSION['DESC']   = $desc;
          $_SESSION['DEPT']   = $dept;

// deal with the dat of the  resultas
        if ($desc==='H.O.D'||$desc==='Supervisor') {

             header("location:datatable/myappraisals_supervisor.php");

             exit();
        }
        else if((strpos($desc, 'Counselor') !== false)||(strpos($desc, 'Head of') !== false)||(strpos($desc, 'Supervisor') !== false)) {
            header("location:counsellingroom.php");
            exit();
        }
        else{
          //if some one is a normal user
            header("location:appraisal1.php");
            exit();
        }
//close the connection to the database;
       $conn->close();
}
else{  $conn->close(); header("Location:index.php"); exit();}
}
else{header("Location:index.php"); exit();}
 exit();
?>
s