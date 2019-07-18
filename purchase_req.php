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
     
    <link href="assets/css/invoice_intmemos.css" rel="stylesheet" />
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
                                    <li class="active"><a href="pdu.php">Dashboard</a></li>
                                    <li><a href="purchase_req_editor.php">Process Purchase Requisition </a></li> 
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
                                  <li class="nav-header">Click to display procurement order </li>
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
                                Internal memo
                            </button>
                             
                        </div>
                    </div>
                    </div> 
                    <div class="col-lg-12">
                        <div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog2">
                                    <div class="modal-content" style="width: 1076px;margin-left: -433px; height: 1000px;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H3"> </h4>
                                        </div>
                                        <div class="modal-body" style= "background-color:#FFFFBB; height:1563px;"/>   
                                        
                                         
                        <div class="box">  
      <h1 class="page-head-line">INTERNAL MEMO</h1>  
                <!-- /. ROW  --> 
     
      <div class="row pad-top-botm ">
         <div class="col-md-push-3  col-md-pull-1" >
            <img src="assets/img/ntihclog2.png" width="90" height="110" margin-top="6"/> 
         </div>
          <div class="col-md-push-4 col-md-push-6 " style="margin-left: 12%;">
            
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
       
          <form action="#" class="register" method="POST" style="background-color:#fff;">
            </div> 
                                   
          <div class="col-xs-pull-7 col-lg-143">
           </p>
          <div class="input-group">
                <span class="input-group-addon" style="width: 144px;background-color:#FFFFBB; text-align:left;">Date</span>
                 <input type="date"  id="REQUISTIONDATE" value="<?php echo date('d-m-y'); ?>"  class="form-control" style="height:28px;width: 222px;"/>
                </div>  
                <br> 
                </p>  
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 144px;background-color:#FFFFBB;text-align:left;">Memo Ref No.</span>
                <input type="numeric" input name="ID"  id="ID" disabled="disabled" class="form-control" style="height:28px;width: 222px;"/>
                </div>  
                <br> 
                </p> 
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 144px; background-color:#FFFFBB;text-align:left;">Memo category</span>
                <select class="form-control" id="TO" input name="TO" required="required" style="height:28px; width: 179px;width: 222px;"/>
                <option value="Request for purchases">Request for purchases</option> 
                               <option> Others</option>   
                               </select> 
               </div>   
               <br> 
               </p>
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 144px; background-color:#FFFFBB;text-align:left;">From</span> 
                <input type="numeric" input name="FROM"  id="FROM" placeholder="Title" class="form-control" style="height:28px;width: 222px;"/> 
                </div>   
                <br>  
                 
                <div class="col-xs-pull-8 col-lg-144 ">
                </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">To</span>
                <select class="form-control" id="TO" input name="TO" required="required" style="height:28px; width: 480px;"/>
                <option value="_1"> </option>
                               <option> Head Service Delivery</option>
                               <option> Head Advocacy and Research</option>
                               <option> Head Administration and Finance</option> 
                               <option> Programme Director</option>   
                               </select> 
              </div>   
               <br> 
                
              </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Through</span>
                <select class="form-control" id="THROUGH" input name="THROUGH" required="required" style="height:28px; width: 480px;"/>
                <option value="_1"> </option>
                               <option> Supervisor Service Delivery</option>
                               <option> Deputy Programme Director</option>
                               <option> Head Administration and Finance</option>
                               <option> Supervisor Service Delivery</option>
                               <option> Supervisor Advocacy and Research</option>
                               <option> Assistant Administration and Finance</option>   
                               </select> 
              </div>   
               <br> 
               </p>
               
              <div class="input-group">
              <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Subject</span>
               <textarea id="wysihtml" name="PROBLEMBRIEF" class="form-control"  style="width:480px; height:69px;" ></textarea>     
               </div>   
               <br>
               </div> 
               </p>
                
            
 
     <div class="input-group" style="width:987px;">
              <span class="input-group-addon" style="width: 144px; background-color:#FFFFBB;text-align:left;">Body</span>
               <textarea id="wysihtml5" name="BODY" class="form-control"  style="width:480px; height:280px;" ></textarea> 
      </div>
      <br> 
       </p>
      <!-- USER BLOCK -->
     <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Attach</span>
      <input type="file" input name="file_attach[]"  id="ATTACH1" placeholder="" class="form-control" style="height:28px;width: 201px;background-color:#ffffc6;"/>   
	 </div> </p>
    
     <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Attach</span>  
      <input type="file" input name="file_attach[]"  id="ATTACH2" placeholder="" class="form-control" style="height:28px;width: 201px;background-color:#ffffc6;"/>   
	 </div> </p>
     
	 <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Attach</span>   
      <input type="file" input name="file_attach[]"  id="ATTACH2" placeholder="" class="form-control" style="height:28px;width: 201px;background-color:#ffffc6;"/>   
	 </div> </p>
      
     <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Initiated by</span>   
      <input type="text" input name="INITIATOR"  id="INITIATOR" disabled="disabled" class="form-control" style="height:28px;width: 201px;"/>   
	 </div> </p>  
        
      <div class="switch">
					<input type="radio" class="switch-input" name="view" value="on" id="on">
					<label for="on" class="switch-label switch-label-off">Status</label>
					<input type="radio" class="switch-input" name="view" value="off" id="off" checked="">
					<label for="off" class="switch-label switch-label-on">Active</label>
					<span class="switch-selection"></span>
				</div> 
                
				<div class="switch switch-yellow">
					<input type="radio" class="switch-input" name="view3" value="yes" id="yes" >
					<label for="yes" class="switch-label switch-label-off">Approval</label>
					<input type="radio" class="switch-input" name="view3" value="no" id="no" checked="">
					<label for="no" class="switch-label switch-label-on">Pending</label>
					<span class="switch-selection"></span>
				</div>   
           <!-- close messanger -->
           
 <div class="col-md-30">
    <script>
 function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<input type="text" name="DESCRIPTION" id="d_'+rowCount+'" required="required" '+
              ' style= "height:20px; width:300px; background-color:#fff" >'+   
                                            '</Select>'; 
   
	 var   select2  =  '<input type="numeric" name="QUANTITYNEEDED" required="required" id="qn_'+rowCount+'"'+
                    'style= " height:20px; width:53px; background-color:#fff;" >'+ 
                    '</select>';				
					    
	 var   select5  =  '<input type="numeric" name="UNIT" value="1"  id="ut_'+rowCount+'"'+
                    'style= "width:40px; background-color:#fff;" >'+ 
                    '</select>'; 
					
					var   select7  =  '<input type="double" name="UNITPRICE" required="required" id="up_'+rowCount+'"'+
                    'style= "height:20px; width:65px; background-color:#fff;" >'+ 
                    '</select>';
					
					var   select8  =  '<input type="double" name="AMOUNT" disabled="disabled" id="am_'+rowCount+'"'+
                    'style= "height:20px; width:70px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					var   select9  =  '<input type="numeric" name="OUTSTANDINGT" disabled="disabled" id="ots_'+rowCount+'"'+
                    'style= "height:20px; width:40px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					
     var row1= '<td><input type="checkbox" checked=""></td>'+ 
	             '<td>'+s1+'</td>'+  
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
<div class="container" style="width: 715px;font-size: 12px;margin-left: -58px;margin-top: 50px;"> 
     <input type="button" onClick="addRow12('mytable')" value="Add specifications" class="btn btn-danger"> 
     <input type="button" onClick="deleteRow12('mytable')" value="(-)" class="btn btn-danger">
     <input type="hidden" id="mytable_rows" value="0">
 
  <table class="table table-striped" id="mytable">
    <thead>
      <tr>
        <th>*</th>
        <th>DESCRIPTION</th> 
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
 
  <div class="col-xs-pull-10" >
  <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Order value</span>
                 <input type="numeric" input name="ORDERVALUE"  id="ORDERVALUE" disabled="disabled" class="form-control" style="height:28px; width: 174px;"/>
              </div>  
              <br>  
       </p>
  
  
  <div class="input-group"> 
                <textarea id="REASONFORSUPPLY" style= " width:666px; height:74px; background-color:#fff;" placeholder="Reason for placing a requisition order.."></textarea>
              </div>  
              <br>  
        
    <input type="submit" name="button" id="button" value="Submit" style="background-color:red;">  
  </form>  
    </div>
		</div></div>
   
  </div> 
  </div>
  </div>   
  </div>   
  </div>
           
	 <div class="col-lg-4">
	<div class="box" style="width: 542px; margin-left: -33px; margin-top: -30px;">  
	   <div class="body" style="height:1300px; width:193%; background:#ffffa6; margin-left:0px;"/>
   <div class="col-md-22 "> 
      
                                         
                        <div class="box">  
      <h1 class="page-head-line">PROCUREMENT MEMO</h1>  
                <!-- /. ROW  --> 
     
      <div class="row pad-top-botm ">
         <div class="col-md-push-3  col-md-pull-1" >
            <img src="assets/img/ntihclog2.png" width="90" height="110" margin-top="6"/> 
         </div>
          <div class="col-md-push-4 col-md-push-6 " style="margin-left: 12%;">
            
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
       
          <form action="#" class="register" method="POST" style="background-color:#fff;">
            </div> 
                                   
          <div class="col-xs-pull-7 col-lg-143">
           </p>
          <div class="input-group">
                <span class="input-group-addon" style="width: 144px;background-color:#FFFFBB; text-align:left;">Date</span>
                 <input type="date"  id="REQUISTIONDATE" value="<?php echo date('d-m-y'); ?>"  class="form-control" style="height:28px;width: 222px;"/>
                </div>  
                <br> 
                </p>  
              
               <div class="input-group">
                <span class="input-group-addon" style="width: 144px;background-color:#FFFFBB;text-align:left;">Memo Ref No.</span>
                <input type="numeric" input name="ID"  id="ID" disabled="disabled" class="form-control" style="height:28px;width: 222px;"/>
                </div>  
                <br> 
                </p> 
              
                <div class="input-group">
                <span class="input-group-addon" style="width: 144px; background-color:#FFFFBB;text-align:left;">Memo category</span>
                <select class="form-control" id="TO" input name="TO" required="required" style="height:28px; width: 179px;width: 222px;"/>
                <option value="Request for purchases">Request for purchases</option> 
                               <option> Others</option>   
                               </select> 
               </div>   
               <br> 
               </p>
              
              <div class="input-group">
                <span class="input-group-addon" style="width: 144px; background-color:#FFFFBB;text-align:left;">From</span> 
                <input type="numeric" input name="FROM"  id="FROM" placeholder="Title" class="form-control" style="height:28px;width: 222px;"/> 
                </div>   
                <br>  
                 
                <div class="col-xs-pull-8 col-lg-144 ">
                </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">To</span>
                <select class="form-control" id="TO" input name="TO" required="required" style="height:28px; width: 480px;"/>
                <option value="_1"> </option>
                               <option> Head Service Delivery</option>
                               <option> Head Advocacy and Research</option>
                               <option> Head Administration and Finance</option> 
                               <option> Programme Director</option>   
                               </select> 
              </div>   
               <br> 
                
              </p>
                <div class="input-group">
                <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Through</span>
                <select class="form-control" id="THROUGH" input name="THROUGH" required="required" style="height:28px; width: 480px;"/>
                <option value="_1"> </option>
                               <option> Supervisor Service Delivery</option>
                               <option> Deputy Programme Director</option>
                               <option> Head Administration and Finance</option>
                               <option> Supervisor Service Delivery</option>
                               <option> Supervisor Advocacy and Research</option>
                               <option> Assistant Administration and Finance</option>   
                               </select> 
              </div>   
               <br> 
               </p>
               
              <div class="input-group">
              <span class="input-group-addon" style="width: 134px; background-color:#FFFFBB;text-align:left;">Subject</span>
               <textarea id="wysihtml" name="PROBLEMBRIEF" class="form-control"  style="width:480px; height:69px;" ></textarea>     
               </div>   
               <br>
               </div> 
               </p>
                
            
 
     <div class="input-group" style="width:987px;">
              <span class="input-group-addon" style="width: 144px; background-color:#FFFFBB;text-align:left;">Body</span>
               <textarea id="wysihtml5" name="BODY" class="form-control"  style="width:842px; height:280px;" ></textarea> 
      </div>
      <br> 
       </p>
      <!-- USER BLOCK -->
     <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Attach</span>
      <input type="file" input name="file_attach[]"  id="ATTACH1" placeholder="" class="form-control" style="height:28px;width: 201px;background-color:#ffffc6;"/>   
	 </div> </p>
    
     <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Attach</span>  
      <input type="file" input name="file_attach[]"  id="ATTACH2" placeholder="" class="form-control" style="height:28px;width: 201px;background-color:#ffffc6;"/>   
	 </div> </p>
     
	 <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Attach</span>   
      <input type="file" input name="file_attach[]"  id="ATTACH2" placeholder="" class="form-control" style="height:28px;width: 201px;background-color:#ffffc6;"/>   
	 </div> </p>
      
     <div class="input-group">
     <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Initiated by</span>   
      <input type="text" input name="INITIATOR"  id="INITIATOR" disabled="disabled" class="form-control" style="height:28px;width: 201px;"/>   
	 </div> </p> 
     
      <div class="input-group">
                <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Action</span>
                <select class="form-control" id="ACTION_PDULEVEL1" input name="ACTION_PDULEVEL1" required="required" style="height:28px; width: 201px;"/>
                <option value="Not started">Not started</option>
                <option value="Started">Process a requisition</option> 
                               </select> 
              </div>   
               <P/>  
        
        
           <div class="input-group">
                <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Assigned to</span>
                <select class="form-control" id="HANDLINGOFFICER" input name="HANDLINGOFFICER" required="required" style="height:28px; width: 201px;"/>
                <option value="Head PDU"> Head PDU </option>
                <option>Officer 1</option> 
                <option>Officer 2</option>   
                               </select> 
              </div>   
               </P> 
   
           <div class="input-group">
                <span class="input-group-addon" style="width: 100px; background-color:#FFFFBB;text-align:left;">Reject</span>
                <select class="form-control" id="REWINDPROCESS" input name="REWINDPROCESS"  style="height:28px; width: 201px;"/>
                <option value="-1"> Back to </option>
                <option>Initiator</option>  
                
                               </select> 
              </div>   
               <br> 
            
           <!-- close messanger -->
           
 <div class="col-md-30" >
    <script>
 function addRow12(tableId){
     var table = document.getElementById(tableId);
     var rowCount = table.rows.length;

     var s1 = '<input type="text" name="DESCRIPTION" id="d_'+rowCount+'" required="required" '+
              ' style= "height:20px; width:300px; background-color:#fff" >'+   
                                            '</Select>'; 
   
	 var   select2  =  '<input type="numeric" name="QUANTITYNEEDED" required="required" id="qn_'+rowCount+'"'+
                    'style= " height:20px; width:53px; background-color:#fff;" >'+ 
                    '</select>';				
					    
	 var   select5  =  '<input type="numeric" name="UNIT" value="1"  id="ut_'+rowCount+'"'+
                    'style= "width:40px; background-color:#fff;" >'+ 
                    '</select>'; 
					
					var   select7  =  '<input type="double" name="UNITPRICE" required="required" id="up_'+rowCount+'"'+
                    'style= "height:20px; width:65px; background-color:#fff;" >'+ 
                    '</select>';
					
					var   select8  =  '<input type="double" name="AMOUNT" disabled="disabled" id="am_'+rowCount+'"'+
                    'style= "height:20px; width:70px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					var   select9  =  '<input type="numeric" name="OUTSTANDINGT" disabled="disabled" id="ots_'+rowCount+'"'+
                    'style= "height:20px; width:40px; background-color:#eeeeee;" >'+ 
                    '</select>';
					
					
     var row1= '<td><input type="checkbox" checked=""></td>'+ 
	             '<td>'+s1+'</td>'+  
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
<div class="container" style="width: 715px;font-size: 12px;margin-left: -58px;margin-top: 40px;"> 
     <input type="button" onClick="addRow12('mytable')" value="Add specifications" class="btn btn-danger"> 
     <input type="button" onClick="deleteRow12('mytable')" value="(-)" class="btn btn-danger">
     <input type="hidden" id="mytable_rows" value="0">
 
  <table class="table table-striped" id="mytable">
    <thead>
      <tr>
        <th>*</th>
        <th>DESCRIPTION</th> 
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
 
  <div class="col-xs-pull-10" >
  <div class="input-group">
                <span class="input-group-addon" style="width: 124px;background-color:#FFFFBB;text-align:left;">Order value</span>
                 <input type="numeric" input name="ORDERVALUE"  id="ORDERVALUE" disabled="disabled" class="form-control" style="height:28px; width: 174px;"/>
              </div>  
              <br>  
       </p>
  
  
  <div class="input-group"> 
                <textarea id="REASONFORSUPPLY" style= " width:666px; height:74px; background-color:#fff;" placeholder="Reason for placing a requisition order.."></textarea>
              </div>  
              <br>  
        
   <input type="submit" name="button" id="button" value="Update an order" style="background-color:#D70000; height:32px;">  
  </form>  
    </div>
		</div></div>
    
    
    
           
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
                
    <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
    <link rel="stylesheet" href="assets/css/Markdown.Editor.hack.css" />
    <link rel="stylesheet" href="assets/plugins/CLEditor1_4_3/jquery.cleditor.css" />
    <link rel="stylesheet" href="assets/css/jquery.cleditor-hack.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-wysihtml5-hack.css" />
    <style>
                        ul.wysihtml5-toolbar > li {
                            position: relative;
                        }
                    </style>
     <!-- END PAGE LEVEL  STYLES -->   
                
     <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
     <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
     <!-- END GLOBAL SCRIPTS -->
     
      <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
      <script src="assets/js/formsInit.js"></script>


         <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
    <script src="assets/plugins/bootstrap-wysihtml5-hack.js"></script>
    <script src="assets/plugins/CLEditor1_4_3/jquery.cleditor.min.js"></script>
    <script src="assets/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="assets/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="assets/plugins/Markdown.Editor-hack.js"></script>
    <script src="assets/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>

    <!--END PAGE LEVEL SCRIPTS -->
    
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
