<?php

function getLevel($str_123){
  	  $str_123 = trim($str_123);
  	  $tempstr = str_replace('__','_',$str_123);

  	if($str_123==''){ 	return false;	 }
  	else
  	{
  		  $str_1234=array();
            $str_1234=explode('_',$tempstr);
  		  $cnt = count( $str_1234);
         	if($str_1234[$cnt-1]==''){   	 return true;   	 }

  		               else{     return false; 	}
  	}

  return false;
}

function getIndicator($str123){
	  $str123 = trim($str123);
	  $tempstr = str_replace('__','_',$str123);

	if($str123==''){ 		 return '<td style="background-color:blue;">'.$str123.'</td>';  	 }
	else
	{
		  $str1234=array();
          $str1234=explode('_',$tempstr);
		  $cnt = count( $str1234);
       	if($str1234[$cnt-1]==''){   	 return '<td style="background-color:red;">'.$str123.'</td>';    	 }

		               else{     return '<td style="background-color:green;">'.$str123.'</td>'; 	}
	}

}

require('../connect/config.php');
$sql = "SELECT * FROM job_tracker_mechanical WHERE STATUS='PENDING'";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

if( getLevel($row["MATERIALS_WORK_PACK"])){

	 echo '<tr>'.
                 '<td> <input type="button"  id="'.$row["JOB_NUMBER"].'" onclick="redirect(this.id)" value="'.$row["JOB_NUMBER"].'"></td>'.
                 '<td>'.$row["SUBJECT"].'</td>'.
                 '<td>'.$row["YEAR"].'</td>'.
                 getIndicator($row["JOB_ORDER_REQUEST"]).
                 getIndicator($row["WORK_ORDER"]).
                 getIndicator($row["WORK_PACK"]).
                 getIndicator($row["MATERIALS_WORK_PACK"]).
			        	 getIndicator($row["PROCUREMENT"]).
                 getIndicator($row["MATERIALS_DELIVERY"]).
                 getIndicator($row["IMPLEMENTATION"]).
                 '<td>'.$row["STATUS"].'</td></tr>';

 }
}
?>
