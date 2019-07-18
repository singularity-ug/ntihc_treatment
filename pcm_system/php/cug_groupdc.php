<?php
session_start();
session_regenerate_id();
$nameofuser = '';
$desc       = "";
$dept       = "";
$pf       = "";
$rm         = "";
if(isset($_SESSION['USERID'])){
$nameofuser = $_SESSION['USERID'];
$desc = $_SESSION['DESC'];
$dept = $_SESSION['DEPT'];
$pf = $_SESSION['STAFNO'];
$rm = $_SESSION['MREPEAT'];
}

else{
  $_SESSION = array();
  session_destroy();
  header('location:index.php');
}
 ?>


<?php
  $id = $_GET['q'];  
  
  $CATEGORY = '';  
  $dnx = array();
  $dnx2 = array();
  $fqx = array(); 
  $tmx = array();
  $pdx = array(); 
  $qtyx = array();
  $ord = array(); 
  $dri = array();   
  $DIRECTORATE='';  
  	  
 $servername = "localhost";
 $username = "root";
 $password = "toor2";
 $dbname = "pcms";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

 $sql  = "SELECT * FROM cug  WHERE `CATEGORY` = '$id' ";

  $res = $conn->query($sql);

  while($row=$res->fetch_assoc()){
     $DIRECTORATE = $row['DIRECTORATE'];
     $CATEGORY = $row['CATEGORY'];   
	 $dnx[] = $row['id'];
	 $dnx2[] = $row['DATECREATED'];
     $fqx[]    = $row['STAFFNAMES']; 
     $tmx[]       = $row['PFNO'];   
	 $pdx[]       = $row['DESIGNATION']; 
	 $qtyx[]        = $row['ALLOCATION'];
     $ord[]       = $row['CUGNO'];
	 $dri[]        = $row['STATUS'];   
      }

  ?>
 
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #000000;
    line-height: 1.0;
    padding: 3px;
    vertical-align: center;
}

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}

             table, th , td  {
                 border: 1px solid black;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	font-size: 11px;
             	color:#000000;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             }

</style> 
  
 </head>
<body style="background: #fff;"> 
 
</head>   
  
           <div class="table-responsive mailbox-messages">   
        <center> <p style="color:#000; font-weight:bold;font-size:11px; background-color:#fff; font-family:lcd;margin-top: 0px;">
                             <b>ACTIVE CUG USERS FOR DIRECTORATE OF  </b> </p> </center> 
          <center> <p style="color:#000; font-weight:bold;font-size:11px; background-color:#fff; font-family:lcd;margin-top: 0px;">
                             <b> <?php echo $DIRECTORATE; ?>&nbsp; (<?php echo $CATEGORY; ?>s) </b> </p> </center> 
          
     <form id="form1" class="form-horizontal" action="str_reqn_dsprocess.php" method="POST" style="height:auto; font-weight:normal; height:auto;">  
         
        
   <table class="table table-striped" id="mytable1" style="font-weight:normal; ">
    <thead>
      <tr>   
   <th>R/NO.</th>
   <th>DATE ISSUED</th>
   <th>STAFF NAMES</th>
   <th>PFNO</th> 
   <th>DESIGNATION </th> 
   <th>ALLOCATION</th> 
   <th>CUG NO.</th>
   <th>STATUS</th> 
      </tr>
      </thead>
      <tbody>
        
       
 <?php  $tot = count($dnx); $s=0; $totals =0;
                                                 for($s=0;$s<$tot;$s++){ 
                                                             $totals += intval($qtyx[$s]);?>
                                                            <tr > 
                                                  
                                                  <td> <?php  echo $dnx[$s]; ?> </td>
                                                  <td> <?php  echo $dnx2[$s]; ?> </td>
                                                  <td> <?php  echo $fqx[$s]; ?> </td> 
                                                  
                                                  <td> <?php echo $tmx[$s]; ?> </td>  
                                                  
                                                  <td> <?php echo $pdx[$s]; ?> </td> 
                                                  
                                                   <td> <?php echo $qtyx[$s]; ?> </td> 
                                                  
                                                   <td> <?php echo $ord[$s]; ?> </td>  
                                                    
                                                    <td> <?php echo $dri[$s]; ?> </td> 
                                                    
                                                   
                                                  
                                              </tr>
                                              <?php } ?>
                                       </tbody>
                                </table>  
       
          <input type="hidden" id="id" name="id" value="<?php echo $id; ?>"  > 
                  
        </form>
       </div>
   