 
   <style>
h9 {
    border-bottom: 1px solid #eee;
    color:#FF0000;
    font-size: 12px;

}
table, th , td  {
    border: 1px solid #eee;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background-color: #eee;;
}
table tr:nth-child(even) {
    background:#fff ;
}
</style>
 <style media="screen">
  .btn {padding : 0px 5px;}
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #eee;
    line-height: 1.0;
    padding: 1px;
    vertical-align: center;
   }

.progress{
  vertical-align:center;
  margin-bottom: 0px;
}
             table, th , td  {
                 border: 1px solid #eee;
                 border-collapse: collapse;
                 padding-left: 0px;
             	 padding-bottom: 0px;
             	 font-size: 12px;
             	 color:#000000;
				 background-color: #fff;
             }
             table tr:nth-child(odd) {
             background:#ffffff;
             }
             table tr:nth-child(even) {
             background:#ffffff;
             }

</style>

    <table id="example7" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>JOB NO.</th>
                <th>CREATED</th> 
                <th>H.O.D</th>
                <th>DATE</th>
                <th>B.DESK</th>
                <th>DATE</th>
                <th>AO.APPROVALS</th>
                <th>FA.DATE</th>
                <th>P.D.U</th>
				<th>ALLOCATED.TO</th>
                <th>JOB.STATUS</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>JOB NO.</th>
                <th>CREATED</th> 
                <th>H.O.D</th>
                <th>DATE</th>
                <th>B.DESK</th>
                <th>DATE</th>
                <th>AO.APPROVALS</th>
                <th>FA.DATE</th>
                <th>P.D.U</th>
				<th>OFFICER</th>
                <th>JOB.STATUS</th>
            </tr>
        </tfoot>
        <tbody>

<?php

//$level = trim($_GET['q']);



function getLevel(){
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

require('connect/config.php');
$sql = "SELECT * FROM procreqn WHERE  CORACTION ='AUTHORISED' AND CONFEXTENSION ='$rm' 
                                              AND  AOACTION = 'APPROVED' AND ACTION = 'PENDING' 
                                              GROUP BY REQUISITIONID ORDER BY TIMESTAMP DESC";

 $res = $conn->query($sql);

 while($row=$res->fetch_assoc()){

	 echo '<tr>'.
                 '<td>'.$row["JOBNUMBER"].'</td>'.
                 '<td>'.$row["TIMESTAMP"].'</td>'. 
				 getIndicator($row["CORACTION"]). 
                 getIndicator($row["CORDATE"]). 
                 getIndicator($row["CONFSTATUS"]).
			     getIndicator($row["CONFDATE"]).
                 getIndicator($row["AOACTION"]).
				 getIndicator($row["CONFDATE"]).
				 getIndicator($row["PROCUREMENTSTATUS"]).
                 getIndicator($row["OFFICERALLOCATED"]).
                 '<td>'.$row["ACTION"].'</td></tr>';

 }

?>

	  </tbody>
  </table>  