<?php
$connect = new mysqli("localhost", "root", "", "patientmgt");
$stss ="";
if( $result = $connect->query("SELECT * FROM ntihcdrugs"))
{ while ($row = $result->fetch_assoc() ) {   $stss=$stss. "<option>" . $row['DRUGNAME'] . "</option>";   }
  }
$connect->close();
?>

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

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href=" assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href=" assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href=" assets/css/main.css">
    <link rel="stylesheet" href=" assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href=" assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="assets/libs/fullcalendar/2.2.5/fullcalendar.min.css">
     
    <link href="assets/css/invoice.css" rel="stylesheet" />
    <link rel="stylesheet" href=" assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href=" assets/less/theme.less">
    <script src="assets/libs/less.js/2.7.1/less.js"></script>
    
    <script type="text/javascript" src="assets/lib/jquery/jquery.min.js"> </script>
    <script type="text/javascript">
      function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment!='' && name!='')
  {
    $.ajax({
      type: 'post',
      url: 'post_messanger.php',
      data: 
      {
         user_comm:comment,
	     user_name:name
      },
      success: function (response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("comment").value="";
        document.getElementById("username").value="";
  
      }
    });
  }
  
  return false;
}
</script>  
    
    
  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
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
                                        <span class="glyphicon glyphicon-comment"></span>       </a>                               
                                         </div>
                            </div>
 
                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="procurement.php">Dashboard</a></li>
                                    <li><a href="outgoing_items.php">Process store requistion </a></li> 
                                    <li><a href="purchase_recieve.php">Recieve stock </a></li> 
                                    <li class='dropdown '>
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                             <b class="caret"></b>                                        </a>
                                        <ul class="dropdown-menu"> 
                                            <li><a href="">.</a></li> 
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
                                            <input type="text" class="form-control" placeholder=" ">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm text-muted" type="button">
                                                    <i class=""></i>                                                </button>
                                            </span>                                        </div>
                                  </form>
                                    <!-- /.main-search -->                                </div>
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3> 
              <img src="assets/img/ntihclog2.png" width="30" height="30" style="margin-left:-3px;">
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
                                  <li class="nav-header">Items Below Target Level </li>
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
                        <div class="inner bg-light lter">
                            <div class="text-center">
    <ul class="stats_box" style="background-color:#FFFFC6;">
    <li> 
     
	    <div class="stat_text">
		<strong></strong>.....................
		<span class="percent down"> <i class=""></i>
        <?php
$link = mysqli_connect("localhost", "root", "", "contemporary");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT ID, comment FROM usersnotebook WHERE TIMESTAMP >='$date' ORDER BY comment")) {
  

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d \n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
        </span>	    </div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong>.........
		<span class="percent up"> <i class=""></i>
                               <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND SERVICETYPE ='COUNSELLING SERVICES' AND INSVCSTATUS ='NO' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?> 
</span></div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong> .........
		<span class="percent">  
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='YES' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
        </span>	    </div>
	</li>
	<li> 
    
    	    <div class="stat_text">
		<strong></strong>.........
		<span class="percent">  
        <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' AND INSVCSTATUS ='LABORDERCOMPLETED' ORDER BY NTIHCNO")) { 

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>   
        </span>	    </div>
	</li>
	<li> 
    
	    <div class="stat_text">
		<strong></strong> ..........
		<span class="percent down"> <i class=""></i> 
         <?php
$link = mysqli_connect("localhost", "root", "", "patientmgt");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$date = date("Y-m-d").' 00:00:00';
if ($result = mysqli_query($link, "SELECT RID, NTIHCNO FROM cmpatientsregistration WHERE TIMESTAMP >='$date' ORDER BY NTIHCNO")) {

    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);

    printf(" %d .\n", $row_cnt);

    /* close result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>  
         </span>	    </div>
	</li>
    </ul>
</div> 
<div class="text-center" >
  <div class="form-inline">
   <div class="form-group"> 
        </div>  
<div class="row">
    <div class="col-lg-130">
	<div class="box">
 
                        </p>        
            <button class="btn btn-info" data-toggle="modal" data-target="#uiModal" style="margin-left: -29px; margin-top: -138px; width: 177px;">
                                Requisition form
                            </button>
                             
                        </div>
                    </div>
                    </div> 
                    <div class="col-lg-12">
                        <div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog2">
                                    <div class="modal-content" style="width: 800px;margin-left: -433px;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3"> </h4>
                                        </div>
                                        <div class="modal-body" style= "background-color:#FFFFBB; "/>   
                                        
                                         
                        <h1 class="page-head-line" style="width: 798px;margin-left:-15px;">STORE REQUISITION</h1> 
  
                <!-- /. ROW  --> 
     
      <div class="row pad-top-botm ">
         <div class="col-md-push-3">
            <img src="assets/img/ntihclog2.png" width="90" height="100" margin-top="6" margin-left="33" style="margin-left:-632px;"/> 
         </div>
          <div class="col-md-push-4">
            
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
         <div class="col-md-push-5">
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
                                   
          <div class="col-xs-pull-7">
           </p>
          <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB; text-align:left;">Date</span>
                 <input type="date"  id="REQUISTIONDATE" value="<?php echo date('d-m-y'); ?>" class="form-control" style="height:28px;"/>
              </div>  
              <br>  </p>
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Requisition No.</span>
                 <input type="numeric" input name="REQUISTIONNO"  id="REQUISTIONNO" disabled="disabled" class="form-control" style="height:28px;"/>
              </div>  
              <br> </p> 
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 124px; background-color:#FFFFBB;text-align:left;">UD initials</span> 
                <input type="numeric" input name="USERINITIAL"  id="USERINITIAL" disabled="disabled" class="form-control" style="height:28px;"/> 
              </div>   
               <br>
               </p> 
               
  <div class="col-xs-pull-8" >
           </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 124px; background-color:#FFFFBB;text-align:left;">Order type</span>
                <select class="form-control" id="REQUISITIONTYPE" input name="REQUISITIONTYPE" required="required" style="height:28px; width: 179px;"/> 
                <option value="General">General</option>   
 </select> 
              </div>   
               <br>
               </p>
                 
                 
              <div class="input-group">
                <span class="input-group-addon" style="width: 124px; background-color:#FFFFBB;text-align:left;">Requesting unit</span>
                <select class="form-control" id="DEPARTMENT" input name="DEPARTMENT" required="required" style="height:28px; width: 179px;"/>
                <option value="_1"> </option>
                               <option value="Administration">Administration</option>
<option value="Service delivery">Service delivery</option>  
<option value="Advocacy and Research">Advocacy and Research</option>  
 </select> 
              </div>   
               <br>
               </p>
   
              <div class="input-group">
                <span class="input-group-addon" style="width: 124px; background-color:#FFFFBB;text-align:left;">Initiated by</span> 
                <input type="numeric" input name="INITIATOR"  id="INITIATOR" required="required" placeholder="title" class="form-control" style="height:28px;width: 179px;"/> 
              </div>   
               <br>
               </p>
               
   
   <div class="col-xs-pull-9"> 
   
   <script>
 function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<select name="DESCRIPTION" id="d_'+rowCount+'" required="required" '+
              ' style= "height:20px; width:200px; background-color:#fff" >'+             		                      	
                                             
                                            '</Select>';

 
   var select1  =  '<input type="numeric" name="QUANTITYINSTOCK" disabled="disabled"  id="qis_'+rowCount+'"'+
                    'style= " height:20px; width:53px; background-color:#eeeeee;" >'+
             		 
                    '</select>';
					
					
	 var   select2  =  '<input type="numeric" name="QUANTITYNEEDED" required="required" id="qn_'+rowCount+'"'+
                    'style= " height:20px; width:53px; background-color:#fff;" >'+ 
                    '</select>';				
					    
	 var   select5  =  '<input type="numeric" name="UNIT" required="required"  id="ut_'+rowCount+'"'+
                    'style= "width:40px; background-color:#fff;" >'+ 
                    '</select>'; 
					
					var   select7  =  '<input type="double" name="UNITPRICE" disabled="disabled" id="up_'+rowCount+'"'+
                    'style= "height:20px; width:65px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					var   select8  =  '<input type="double" name="AMOUNT" disabled="disabled" id="am_'+rowCount+'"'+
                    'style= "height:20px; width:70px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					var   select9  =  '<input type="numeric" name="OUTSTANDINGT" disabled="disabled" id="ots_'+rowCount+'"'+
                    'style= "height:20px; width:40px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					
     var row1= '<td><input type="checkbox" checked=""></td>'+ 
	             '<td>'+s1+'</td>'+ 
                 '<td>'+select1+' </td>'+
			     '<td>'+select2+' </td>'+  
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
          table.rows[x].cells[1].childNodes[0].id="d_"+x; 
		  table.rows[x].cells[3].childNodes[0].id="qis_"+x;
		  table.rows[x].cells[4].childNodes[0].id="qn_"+x;  
		  table.rows[x].cells[7].childNodes[0].id="ut_"+x;  
		  table.rows[x].cells[9].childNodes[0].id="up_"+x;
		  table.rows[x].cells[10].childNodes[0].id="am_"+x;
		  table.rows[x].cells[11].childNodes[0].id="ots_"+x;
          }
           document.getElementById('mytable_rows').value=rowCount-1;
}


  </script> 
</p>
<div class="container" style="width: 715px;font-size: 12px;margin-left: -42px;margin-top: -6px;"> 
     <input type="button" onClick="addRow12('mytable')" value="Add details" class="btn btn-danger"> 
     <input type="button" onClick="deleteRow12('mytable')" value="(-)" class="btn btn-danger">
     <input type="hidden" id="mytable_rows" value="0">
 
  <table class="table table-striped" id="mytable">
    <thead>
      <tr>
        <th>*</th>
        <th>DESCRIPTION</th>
        <th>IN-STOCK</th>
        <th>NEEDED</th> 
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
 
  <div class="col-xs-pull-10">
  <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Order valuation</span>
                 <input type="numeric" input name="ORDERVALUE"  id="ORDERVALUE" disabled="disabled" class="form-control" style="height:28px; width: 174px;"/>
              </div>  
              <br>  
       </p>
  
  
  <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Reason </span>
                <textarea id="wysihtml" name="REASONFORSUPPLY" class="form-control" style= " width:546px; height:50px; background-color:#fff;" placeholder="Reason for placing a requisition order.."></textarea>
              </div>  
              <br> 
              </p>
               
            
               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Approved by</span>
                 <input type="numeric" input name="APPROVEDBY"  id="APPROVEDBY" disabled="disabled" class="form-control" style="height:28px;width: 174px; "/>
              </div>  
              <br> </p>
          
          
          </p>
          <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB; text-align:left;">Approval date</span>
                 <input type="date"  id="APPROVALDATE" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px;width: 174px;"/>
              </div>  
              <br>  </p>
                  
              <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Authorised by</span>
                 <input type="numeric" input name="AUTHORISEDBY"  id="APPROVEDBY" disabled="disabled" class="form-control" style="height:28px;width: 174px;"/>
              </div>  
              <br> </p>
          
          
          </p>
          <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB; text-align:left;">Date</span>
                 <input type="date"  id="AUTHORISEDBY" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px;"/>
              </div>  
              <br>  </p> 
              
              
              <div class="col-xs-pull-11">
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Recieved by</span>
                 <input type="numeric" input name="RECIEVEDBY"  id="RECIEVEDBY" disabled="disabled" class="form-control" style="height:28px;"/>
              </div>  
              <br> </p>
          
          
          </p>
          <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB; text-align:left;">Recieved date</span>
                 <input type="date"  id="RECIEVEDDATE" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px;"/>
              </div>  
              <br>  </p>
              
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Issued to</span>
                 <input type="numeric" input name="ISSUEDTO"  id="ISSUEDTO" disabled="disabled" class="form-control" style="height:28px;"/>
              </div>  
              <br> </p>
          
          
          </p>
          <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB; text-align:left;">Issued date</span>
                 <input type="date"  id="ISSUEDDATE" value="<?php echo date('d-m-y'); ?>" disabled="disabled" class="form-control" style="height:28px;"/>
              </div>  
              <br>  </p>
              </div> 
           <input type="submit" name="button" id="button" value="Forward for approval" style="background-color:#FFCB00;">  
        </div>  
              
  </form>   
  </div>
  </div>         
     
  </div></div></div>
  </div> </div></div>
  </div>
           
	  <div class="col-lg-4">
	<div class="box" style="width: 542px; margin-left: -19px; margin-top: -30px;">  
	   <div class="body" style="height:700px; width:193%; background:#ffffa6; margin-left:0px;"/>
   <div class="col-md-22 ">
   
   <div id="tabs">
	<ul>
		<li><a href="#tabs-1">Drug store monitor</a></li> 
		<li><a href="#tabs-2">General stores monitor</a></li>
		<li><a href="#tabs-3">Add-ins</a></li>
	</ul>
	<div id="tabs-1">
    Local storage tested successfully
    
    
    
    
    </div>
    
	<div id="tabs-2">
    Local storage tested successfully
    
    
    
    </div>
    
	<div id="tabs-3" style="width: 1021px;"> 
    
    <div id="accordion">
    
	<h3>Add new drug / General items</h3>
	<div> 
     <form action="new_itemprocess.php" class="register" method="POST" > 
     
     <div class="col-lg-117">  
     </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Item name</span>
                <input type="numeric" input name="ITEMNAME"  id="ITEMNAME"  required="required" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br>  
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Make</span>
                <select class="form-control" id="MAKE" input name="MAKE" required="required" style="height:28px; width: 300px;"/>
                <option value="_1"> </option>
                               <option value="Drugs">Drug</option>
                               <option value="General">General item</option>   
                               <option value="General">Others</option>   
                               </select> 
               </div>   
               <br>
               
               <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Type</span>
                <select class="form-control" id="TYPE" input name="TYPE" required="required" style="height:28px; width: 300px;"/>
                <option value="_1"> </option>
                               <option>Drug</option>
                               <option>General</option>    
                               </select> 
               </div>   
               <br>
               
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Net weight</span>
                <input type="numeric" input name="NETWEIGHT"  id="NETWEIGHT" placeholder="If applicables" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br> 
               
               <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Category</span>
                <select class="form-control" id="CATEGORY" input name="CATEGORY" required="required" style="height:28px; width: 300px;"/>
                <option value="_1"> Applies to all</option>
                               <option>....</option>
                               <option>....</option>   
                               <option>....</option>   
                               </select> 
                </div>   
                <br>
                  
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Min stock level</span>
                <input type="numeric" input name="MINSTOCKLEVEL" id="MINSTOCKLEVEL" required="required" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                  
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Storage location</span>
                <input type="text" input name="LOCATION"  id="LOCATION" required="required" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br> 
      
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Level</span>
                <input type="text" input name="LEVEL"  id="LEVEL" placeholder="Shelve" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                </div> 
                
                <div class="col-lg-142"> 
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Shelve no.</span>
                <input type="numeric" input name="SHELVENO"  id="SHELVENO" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br>
                
     
                <p>Add valution info</p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">	Qty available</span>
                <input type="numeric" input name="OPENINGSTOCK_QTY"  id="OPENINGSTOCK_QTY"  value="0" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br>
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">UOM</span>
                <select class="form-control" id="UOM" input name="UOM" required="required" style="height:28px; width: 300px;"/>
                <option value="nill"> </option>
                               <option>Packs</option>   
                               <option>pieces</option> 
                               <option>numbers</option>
                               <option>boxes</option> 
                               <option>cartons</option>
                               <option>boxes</option>  
                               </select> 
               </div>   
               <br> 
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Qty per Uom</span>
                <input type="numeric" input name="QTY_UOM"  id="QTY_UOM" required="required" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                 
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">	Unit price</span>
                <input type="decimal" input name="UNITPRICE"  id="UNITPRICE"  value="0" class="form-control" style="height:28px;width: 300px;"/>
                </div>  
                <br>
                  
                <label>Discontinued</label> 
		        <input type="radio" name="DISCONTINUE" id="NO" value="NO" checked>
                <label for="NO">No</label>
		        <input name="DISCONTINUED" type="radio" id="YES" value="YES">
		        <label for="YES">Yes</label>  
                </p>   
           
    	     <div class="clear"></div>
			 <input class="submit" type="submit" value="Save &raquo;" > 
             <input class="reset" type="reset" value="Clear &raquo;"/>  
			 <div class="clear"></div>  
         
        </form> 
     </p> 
     </div>              
    </div>  
 
	<h3>Add new supplier / Donor >>> </h3>
	<div>
    <form action="suppliers_process.php"method="POST"> 
     <div class="col-lg-117">  
     </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Service provider</span>
                <input type="text" input name="SUPPLIERNAME"  id="SUPPLIERNAME" placeholder="Vendor / donor name"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>  
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Supplier type</span>
                <select class="form-control" id="SUPPLIERTYPE" input name="SUPPLIERTYPE" required="required" style="height:28px; width: 300px;"/>
                <option value="_1"> </option>
                               <option>Vendor</option>
                               <option>Donor</option>   
                               <option>Partner</option>   
                               </select> 
               </div>   
               <br>
        
               <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Category</span>
                <select class="form-control" id="CATEGORY" input name="CATEGORY" required="required" style="height:28px; width: 300px;"/>
                <option value="_1"> </option>
                               <option>Company</option>
                               <option>Individual</option>   
                               <option>Donor</option>   
                               </select> 
               </div>   
               <br>
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Products dealt in</span>
                <select class="form-control" id="SPECIALIZATION" input name="SPECIALIZATION" required="required" style="height:28px; width: 300px;"/>
                <option value="_1"> </option>
                               <option>Drugs</option>
                               <option>General</option> 
                               <option>Both</option>   
                               <option>Others</option>   
                               </select> 
               </div>   
               <br> 
  
               <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Country</span>
                <select class="form-control" id="COUNTRYOFOPERATION" input name="COUNTRYOFOPERATION" required="required" style="height:28px; width: 300px;"/>
<option value="UGANDA">UGANDA</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</div>   
<br> 

<div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Box number</span>
                <input type="text" input name="BOX_NO"  id="BOX_NO" placeholder="Address"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>  
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Location</span>
                <input type="test" input name="PHYSICALLOCATION"  id="PHYSICALLOCATION"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Website</span>
                <input type="test" input name="WEBSITE"  id="WEBSITE"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Contact person</span>
                <input type="test" input name="CONTACTPERSON"  id="CONTACTPERSON"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Position</span>
                <input type="test" input name="POSITION"  id="POSITION"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                
                
                <div class="col-lg-142" style="margin-top: -469px">
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Phone contact</span>
                <input type="test" input name="CONTACTPHONENO"  id="CONTACTPHONENO"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">E-mail</span>
                <input type="test" input name="EMAIL"  id="EMAIL"  required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>
                
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;"> CP.Address</span>
                <input type="test" input name="CONTACTADDRESS"  id="CONTACTADDRESS"  placeholder="Contact person address" required="required" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>
                 
                 <p> Financial details </p> 
                 </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Tin number</span>
                <input type="numeric" input name="TINNO"  id="TINNO" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>
                 
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Tax type</span> 
                <select class="form-control" id="TAXTYPE" input name="TAXTYPE" style="height:28px;width: 300px;"/>
                <option value="None"> None</option>
                               <option>Withholding tax</option>
                               <option>Value added tax</option>   
                               <option>Others</option>  
                               </select> 
              </div>   
               <br>
    
	            <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Account title</span>
                <input type="numeric" input name="BANKACCOUNTTITLE"  id="BANKACCOUNTTITLE" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>
      
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Acccount No.</span>
                <input type="numeric" input name="BANKACCOUNTNO"  id="BANKACCOUNTNO" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>    
                  
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Bank name</span>
                <input type="text" input name="BANKNAME"  id="BANKNAME" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br>      
       
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px;background-color:#FFFFBB;text-align:left;">Bank branch</span>
                <input type="text" input name="BRANCH"  id="BRANCH" class="form-control" 
                style="height:28px;width: 300px;"/>
                </div>  
                <br> 
                  
               <label>Discontinue</label> 
		       <input type="radio" name="DISCONTINUE" id="NO" value="NO" checked>
               <label for="NO">No</label>
		       <input name="DISCONTINUED" type="radio" id="YES" value="YES">
        
        
	 	     <div class="clear"></div>
			 <input class="submit" type="submit" value="Save and New &raquo;"/> 
             <input class="reset" type="reset" value="Clear &raquo;"/>     
               
			 <div class="clear"></div> 
         </div> 
    </form>  
  </p>     
                
    </div>
    </div>
 
    
       
  </div>     
 </div> 
</div>  
<span > ...</span></div>
</div> 
  <!-- /.outer -->
 
                                    
   
    </div> 
</div>     
       
  </div>     
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
              ,,,
               
               
                       
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                             ,,,,,,,, 
                   
           
           
           
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
                       Completed 
    
    
    
    
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
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
                
     <!-- END PAGE LEVEL SCRIPTS -->
 <link href="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
            <script src="assets/lib/jquery/jquery.js"></script>
<script src="assets/lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
			    <!-- END PAGE LEVEL SCRIPTS -->
        </body>
</html>
