<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IMMS</title>

    <meta name="description" content=" ntihc">
    <meta name="author" content="">

    <link href="assets/css/invoice_issue.css" rel="stylesheet" />
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href=" assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" assets/css/main.css">
    <link rel="stylesheet" href=" assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href=" assets/lib/animate.css/animate.css"> 
      <style>
h9 {
    border-bottom: 2px solid #cc9900;
    color:#FF0000;
    font-size: 12px;
}
table, th , td  {
    border: 2px solid black;
    border-collapse: collapse;
    padding-left: 0px;
	padding-bottom: 0px;
	font-size: 12px;
	color:#000000;
}
table tr:nth-child(odd) {
background:#fff;
}
table tr:nth-child(even) {
    background:#fff;
}
</style>  
   
    <link rel="stylesheet" href=" assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href=" assets/less/theme.less">
    <script src="assets/libs/less.js/2.7.1/less.js"></script>
    <script src="assets/js/stock_outscript.js"></script>
  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrapdddd">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">


                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                                </button>
                            <a href="" class="navbar-brand"><img src="" alt=""></a>                            </header>



                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a href="logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>        
                                       <span class="glyphicon glyphicon-comment"></span>                                    </a>                                </div>
                            </div>
 

                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="pdu.php">Dashboard</a></li> 
                                     <li><a href="purchase_req.php">Back to orders </a></li> 
                                      <li><a href="purchase_lpo.php">Run an LPO </a></li> 
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                             <b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu"> 
                                            <li><a href="">.</a></li>  
                                            </li> 
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                  </nav>
                    <!-- /.navbar -->               <header class="head">
                                <div class="search-bar">
                                    <form class="main-search" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class=""></i>                                                </button>
                                            </span>                                        </div>
                                  </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              <i class="animated"></i>&nbsp;
             NAGURU TEENAGE INFORMATION AND HEALTH CENTRE : (I.M.M.SYSTEM)          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                      <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href=""> 
                                    <span class="label label-danger user-label"></span>                                </a>

                                <div class="media-body"> 
                                    <ul class="list-unstyled user-info"> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-header">Click to display an order</li>
                                  <li class="nav-divider"></li>
                                  <li class=""> 
                                  
                                  
                                  
                                  
                                  
                                   
                                      </a>    
                                           </li> 
                                        </ul>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
      <div id="content">
                    <div class="outer">
                    
                        <div class="inner bg-light lter2" >
                            <div class="text-center">
                            
    <ul class="stats_box" >
         </span> 
         </div>
	  
	 <div class="box">  
      <h1 class="page-head-line">PURCHASE REQUISITION</h1>  
                <!-- /. ROW  --> 
     
      <div class="row pad-top-botm ">
         <div class="col-md-push-3  col-md-push-7" >
            <img src="assets/img/ntihclog2.png" width="90" height="110" margin-top="6"/> 
         </div>
          <div class="col-md-push-4 col-md-push-6" style="margin-left: 34%;">
            
               <strong4> Naguru Teenage Information and Health Centre.</strong4>
              <br />
                <strong2> Address :Spring road, opposite Shell Bugolobi,<strong2>
              <br />
                  <strong3> P.O.Box 27572,<strong3>
              <br />
                  <strong3>Kampala-Uganda.<strong3> 
         </div>
     </div>
     <div  class="row text-center contact-info">
         <div class="col-md-push-5 col-md-push-8">
             <hr />
             <span>
                 <strong>Email : </strong>  info@ntihc.org 
             </span>
             <span>
                 <strong>Call : </strong>  +256 - 41- 288- 304 
             </span>
              <span>
                 <strong>Fax : </strong>  +256-41-288-305  
             </span>
             <hr />
         </div>
     </div>    
            
            <div  class="row pad-top-botm client-info">
       
          <form action="purchases.php" class="register" method="POST" style="background-color:#fff;">
            </div> 
                                   
          <div class="col-xs-pull-7 col-md-push-9" style="width: 300px;">
           </p>
           
           <div class="input-group">
           <span class="input-group-addon" style="width: 134px; background-color:#fff;text-align:left;">Attention</span>
           <select class="form-control" id="SERVICEPROVIDER" input name="SERVICEPROVIDER" required="required"style="height:28px; width: 589px;"/>
              </select> 
              </div>   
              <br> 
           
           
           
           <div class="input-group">
              <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Quotation No.</span>
              <input type="numeric" input name="INVOICENO"  id="INVOICENO" class="form-control" style="height:28px; width: 166px;"/>
              </div>  
              <br>  
              
           
          <div class="input-group">
              <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB; text-align:left;">Requisition date</span>
              <input type="date"  id="REQUISTIONDATE" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px; width: 166px;"/>
              </div>  
              <br>   
              
              <div class="input-group">
              <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Job ref No.</span>
              <input type="numeric" input name="REQUISTIONNO"  id="REQUISTIONNO" disabled="disabled" class="form-control" style="height:28px; width: 166px;"/>
              </div>  
              <br>  
               
               <div class="col-xs-pull-8 col-md-push-10" style=" margin-top: -157px"/>
               </p> 
               <div class="input-group">
               <span class="input-group-addon" style="width:185px; background-color:#FFFFBB;text-align:left;">Procurement type</span>
               <select class="form-control" id="PROCUREMENTTYPE" input name="PROCUREMENTTYPE"  style="height:28px; width: 178px;;"/>
               <option value="_1">Macro procurement</option>
               <option>Micro procurement</option>
               <option>Pre-qualified</option>  
               <option> </option>  
               <option> </option> 
               </select> 
               </div>   
               <br>
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 185px;background-color:#FFFFBB; text-align:left;">Expected date of delivery</span>
                 <input type="date"  id="REQUISTIONDATE" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px;     width: 178px;"/>
              </div>  
              <br>
                
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 185px; background-color:#FFFFBB;text-align:left;">Initiated by</span> 
                <input type="numeric" input name="INITIATOR"  id="INITIATOR" required="required" class="form-control" style="height:28px;     width: 178px;"/> 
               </div>   
               <br>
                   
              <div class="col-xs-pull-8 col-md-push-10 " style=" margin-top: -146px;margin-left: 416px;"/> 
              <span class="input-group-addon" style="width: 113px; background-color:#dddddd; border:0px; text-align:left;">Job code</span>
              <div class="switch" style="margin-top: -25px;"> 
					<input type="radio" class="switch-input" name="JOBCODE" value="PCS" id="PCS" checked="">
					<label for="PCS" class="switch-label switch-label-off">Pcs</label>
					<input type="radio" class="switch-input" name="JOBCODE" value="SVS" id="SVS">
					<label for="SVS" class="switch-label switch-label-on">Svs</label>
					<span class="switch-selection"></span>
				</div>
                
                <span class="input-group-addon" style="width: 113px; background-color:#dddddd; border:0px; text-align:left;">LPO priority</span>
				<div class="switch switch-blue" style="margin-top: -26px;">
					<input type="radio" class="switch-input" name="LPO_URGENCY" value="NORMAL" id="NORMAL" checked="">
					<label for="NORMAL" class="switch-label switch-label-off">Normal</label>
					<input type="radio" class="switch-input" name="LPO_URGENCY" value="CRITICAL" id="CRITICAL">
					<label for="CRITICAL" class="switch-label switch-label-on">Critical</label>
					<span class="switch-selection"></span>
				</div>
				
                <span class="input-group-addon" style="width: 113px; background-color:#dddddd; border:0px; text-align:left;">Order type</span>
				<div class="switch switch-yellow" style="margin-top: -26px;">
					<input type="radio" class="switch-input" name="REQUISITIONTYPE" value="General" id="General" checked="">
					<label for="General" class="switch-label switch-label-off">General</label>
					<input type="radio" class="switch-input" name="REQUISITIONTYPE" value="Drugs" id="Drugs">
					<label for="Drugs" class="switch-label switch-label-on">Drugs</label>
					<span class="switch-selection"></span>
				</div> 
               <br>
               </div>
               
   <div class="col-md-31" > 
   
   <script>

  function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;
	 
	 var s12 = '<input type="numeric" name="NO" id="nu_'+rowCount+'" required="required" '+
              ' style= "height:20px; width:40px; background-color:#fff" >'+             		                      	
                                             
                                            '</Select>'; 
	 

     var s1 = '<select name="DESCRIPTION" id="d_'+rowCount+'" required="required" '+
              ' style= "height:20px; width:326px; background-color:#fff" >'+             		                      	
                                             
                                            '</Select>';
   
	 var   select2  =  '<input type="numeric" name="QUANTITYNEEDED" id="qn_'+rowCount+'"'+
                    'style= " height:20px; width:50px; background-color:#fff;" >'+ 
                    '</select>';	 
					
	 var select4  =  '<select name="UOM" required="required"  id="uo_'+rowCount+'"'+
                    'style= "height:20px; width:120px; background-color:#fff;" >'+
					                    '<option>Nill</option>'+
             		                    '<option>Number</option>'+
                                        '<option>Strips</option>'+
                                        '<option>Balm</option>'+
                                   '</select>';
                    '</select>';
					
					
	 var   select5  =  '<input type="numeric" name="UNIT" required="required"  id="ut_'+rowCount+'"'+
                    'style= "width:50px; background-color:#fff;" >'+ 
                    '</select>';
					 					
					var   select7  =  '<input type="double" name="UNITPRICE" id="up_'+rowCount+'"'+
                    'style= "height:20px; width:76px; background-color:#fff;" >'+ 
                    '</select>';
					
					var   select8  =  '<input type="double" name="AMOUNT" id="am_'+rowCount+'"'+
                    'style= "height:20px; width:90px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					var   select9  =  '<input type="numeric" name="OUTSTANDINGT" id="ots_'+rowCount+'"'+
                    'style= "height:20px; width:50px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					
     var row1= '<td><input type="checkbox" checked=""></td>'+ 
	             '<td>'+s12+'</td>'+  
	             '<td>'+s1+'</td>'+  
			     '<td>'+select2+' </td>'+ 
				 '<td>'+select4+' </td>'+
				 '<td>'+select5+' </td>'+ 
				 '<td>'+select7+' </td>'+
			     '<td>'+select8+' </td>'+
				 '<td>'+select9+' </td>';
                  
			   

      var row = table.insertRow(rowCount);
          row.innerHTML = row1;
          document.getElementById('mytable_rows').value=rowCount;

  }

  function deleteRow12(tableID) {
         var table = document.getElementById(tableID);
	     var rowCount = table.rows.length;
	     for(var i=1; i<rowCount; i++) { //0
		     var row = table.rows[i];
		     var chkbox = row.cells[0].childNodes[0];
		    if(null != chkbox && true == chkbox.checked) {
                 table.deleteRow(i);
			     rowCount--;
			     i--;
		     }
	      }
          rowCount = table.rows.length;
          for(var x=1; x<rowCount; x++){
		  table.rows[x].cells[12].childNodes[0].id="nu_"+x; 
          table.rows[x].cells[1].childNodes[0].id="d_"+x;  
		  table.rows[x].cells[4].childNodes[0].id="qn_"+x; 
		  table.rows[x].cells[6].childNodes[0].id="uo_"+x;
		  table.rows[x].cells[7].childNodes[0].id="ut_"+x;   
		  table.rows[x].cells[9].childNodes[0].id="up_"+x;
		  table.rows[x].cells[10].childNodes[0].id="am_"+x;
		  table.rows[x].cells[11].childNodes[0].id="ots_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}


  </script> 
</p>
<div class="container" style="width: 715px;font-size: 12px;margin-left: -363px;margin-top: -40px;"> 
     <input type="button" onClick="addRow12('mytable')" value="Add details" class="btn btn-danger"> 
     <input type="button" onClick="deleteRow12('mytable')" value="(-)" class="btn btn-danger">
     <input type="hidden" id="mytable_rows" value="0">
 
  <table class="table table-striped" id="mytable">
    <thead>
      <tr>
        <th>*</th>
        <th>NO.</th> 
        <th>DESCRIPTION</th> 
        <th>QTY</th> 
        <th>UOM</th>
        <th>UNIT</th> 
        <th>UNIT-PRICE</th>
        <th>AMOUNT</th>
        <th>OSG</th> 
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
  </div>
   
  <div class="col-xs-pull-10" style="margin-left: -349px;"> 
  <div class="input-group">
                <span class="input-group-addon" style="width:124px;background-color:#FFFFBB;text-align:left;">Delivery terms</span>
                 <textarea id="wysihtml" name="COMMENT_DELIVERY" class="form-control"   style= "width:546px; height:50px; background-color:#fff;" placeholder=""></textarea>
               </div>  
               </p> 
              
               <div class="input-group">
               <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Approved by</span>
               <input type="numeric" input name="APPROVEDBY"  id="APPROVEDBY" disabled="disabled" class="form-control" style="height:28px; width: 193px;"/>
               </div>  
               </p>  
               
               <div class="input-group">
               <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB; text-align:left;">Approval date</span>
               <input type="date"  id="APPROVALDATE" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px; width: 193px;"/>
              </div>  
              <br>   
              
              <div class="col-xs-pull-11" style="margin-top: -90px; margin-left: 342px;">
               <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Authorised by</span>
                 <input type="numeric" input name="AUTHORISEDBY"  id="APPROVEDBY" disabled="disabled" class="form-control" style="height:28px;  width: 193px;"/>
              </div>  
              </p>  
           
          <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB; text-align:left;">Authorised date</span>
                 <input type="date"  id="AUTHORISEDBY" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px; width: 193px;"/>
              </div>  
         </div>    
         </div>     
          <div class="col-xs-pull-10" style="margin-left: 323px; margin-top:-129px;">
              <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Sub total (ugx)</span>
                 <input type="numeric" input name="ORDERVALUE"  id="ORDERVALUE"  class="form-control" style="height:28px; width: 185px;"/>
              </div>  
              <br>    
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Tax(% on bill)</span>
                 <input type="double" input name="INVOICETAX"  id="INVOICETAX" class="form-control" style="height:28px; width: 185px;"/>
              </div>  
              <br>  
              
              <div class="input-group">
              <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Total cost (ugx)</span>
              <input type="numeric" input name="ORDERTOTALCOST"  id="ORDERTOTALCOST" class="form-control" style="height:28px; width: 185px;"/>
              </div>  
              <br>   
              
              </div> 
           <input type="submit" name="button" id="button" value="Submit &raquo;" style=" height: 35px; margin-left: -5px;"/>  
           <input type="reset" name="button" id="button" value="Clear &raquo;" style="height: 35px;"/> 
        </div>  
         <div class="row">
         <div class="col-md-push-12" style="margin-left: -287px;">
            <strong> Note: </strong>
             <ol>
                  <li>
                    Purchase Requisition order valid only when stamped and signed.
                 </li>
                 <li>
                    Please quote this requisition number on your invoice.
                    </li>
                 <li>
                    This invoice is valid for two weeks from the date of signature.
                      
                 </li>
             </ol>
             </div>
         </div>      
  </form>  
       
 
</div>
</div>

 
<span > ...</span></div>
</div> 
  <!-- /.outer -->
                </div>
                <!-- /#content -->
                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger" style="margin-left:-14px;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>
               .....................
               
               
                       
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                            ..
                   
                                 <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>RID</th>"; 
					echo "<th>NTIHC-NO.</th>";
                    echo "<th>VIST-TYPE</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['RID'] . "</td>"; 
                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['VISTTYPE'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>  
                                <li><span class="inlinesparkline pull-right"></span></li>
                                <li><span class="dynamicsparkline pull-right"></span></li>
                                <li><span class="dynamicbar pull-right"></span></li>
                                <li><span class="inlinebar pull-right"></span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                        <span>
                       Completed Lab Orders 
                                 <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "patientmgt");

       // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

     // Attempt select query execution
	$date = date("Y-m-d").' 00:00:00';
	 $sql = "SELECT * FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='MEDICAL SERVICES' AND INSVCSTATUS ='YES'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            echo "<table>";
                echo "<tr>";
				    echo "<th>RID</th>"; 
					echo "<th>NTIHC-NO.</th>";
                    echo "<th>VIST-TYPE</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
			       	echo "<td>" . $row['RID'] . "</td>"; 
                     echo "<td>" . $row['NTIHCNO'] . "</td>";
					 echo "<td>" . $row['VISTTYPE'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Close result set

            mysqli_free_result($result);
        } else{
           echo "No records matching your query were found.";
       }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);

    ?>  
                        </span>                      
                          </div>
</div>

</div>
</div>
</div>

                        </span>
                        </div>
                       </div>
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2016 &copy; Naguru Teenage Information And Health Centre</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->

                    <script src=" assets/lib/jquery/jquery.js"></script>

                    <script src="assets/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="assets/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="assets/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="assets/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="assets/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="assets/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src=" assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src=" assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src=" assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src=" assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src=" assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
 
	<!-- NOTY JAVASCRIPT -->
    <link href="assets/admin_css/main.css" rel="stylesheet">
	<script type="text/javascript" src=" assets/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src=" assets/js/noty/layouts/topCenter.js"></script>
    <script type="text/javascript" src=" js/admin.js"></script>
        </body>
</html>
