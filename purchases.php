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
    <link rel="stylesheet" href="../ntihc/assets/lib/bootstrap/css/bootstrap_default.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../ntihc/assets/css/main.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/metismenu/metisMenu.css">
    <link rel="stylesheet" href="../ntihc/assets/lib/animate.css/animate.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
    <style>
	table{border:2px solid white;}
	td,th,tr{border:2px solid white;}
	select{width:64%;margin-left: -5px;float: right;font-size: 11px; height:24px;border: -1px solid #ccc;border-radius: 9px;} 
	</style> 
     <link href="assets/css/invoice.css" rel="stylesheet" />
    <link rel="stylesheet" href=" assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href=" assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
    <script src="assets/js/purchaseorder_script.js"></script>
   
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
                                    <a href="../php/logut.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>                                    </a>                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>                                    </a>
                                    <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip"
                                       class="btn btn-default btn-sm toggle-right">
                                        <span class="glyphicon glyphicon-comment"></span>                                    </a>                                </div>
                            </div>




                            <div class="collapse navbar-collapse navbar-ex1-collapse">

                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="store_admin.php">Dashboard</a></li> 
                                    <li><a href="">INITIATE A LOCAL PURCHASE ORDER</a></li> 
                                                                              </a>
                                        <ul class="dropdown-menu"> 
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
                                  <li class="nav-header">STORES | RECIEVE ITEMS</li>
                                  <li class="nav-divider"></li>
                                  <li class=""> 
                                    <a href="calendar_store_planner.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">User calender</span> </a>                                
                                        </li>
                                    <li>  
                                        
                                       <a href="incoming_items.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Recieve incoming stock</span> </a>                                
                                        </li>
                                    <li> 
                                                                    
                                     <a href="outgoing_items.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Issue requisitioned orders</span> </a> 
                                       </li>
                                    <li> 
                                                                    
                                     <a href="new_item.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Medical and general items</span> </a> 
                                      
                                      
                                       </li>
                                    <li>  
                                        
                                       <a href="suppliers.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Suppliers management</span> </a>    
                                                        
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
    <ul class="stats_box"> 
	</li>
    </ul>
</div> 
<div class="text-center" >
  <div class="form-inline"> 
	<div class="box" > 
		
		            <div class="row"> 
                                   <div class="col-md-12">
                        <h1 class="page-head-line">LOCAL PURCHASE ORDER</h1> 
 
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       <div >
     
      <div class="row pad-top-botm ">
         <div class="col-md-push-3">
            <img src="assets/img/ntihclog2.png" width="120" height="140" margin-top="6" margin-left="33" /> 
         </div>
          <div class="col-md-push-4">
            
               <strong1> Naguru Teenage Information and Health Centre.</strong1>
              <br />
                <strong2> Address :Spring road, opposite Shell Bugolobi,<strong2>
              <br />
                  <strong3> P.O.Box 27572,<strong3>
              <br />
                  <strong4>Kampala-Uganda.<strong4> 
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
       
          <form action="purchases.php" class="register" method="POST">
            <div class="col-md-push-1">
                   </p> 
               <label>Attention:</label> 
               </p>
                  <textarea name="SERVICEPROVIDER" placeholder="Enter service provider name" id="autosize" style= "width:312px;" class="form-control"></textarea>   
            </p>
            </div>
             <div class="col-md-push-2">
           <label>Invoice No.</label>      
            <input type="numeric" name="INVOICENO" id="INVOICENO" placeholder="Type invoice no." style= "margin-left: 26px;height:25px; width:202px;background-color:#FFF;"/>  
            </p>
           <label>Amount</label>
               <input type="numeric" name="INVOICEAMOUNT" id="INVOICEAMOUNT"  style= " margin-left: 53px;height:25px; width:202px;background-color:#FFF;"/> 
                </p>
           <label> Tax rate</label>
               <input type="numeric" name="TAXRATE" id="TAXRATE"  style= "margin-left: 49px;height:25px; width:202px;background-color:#FFF;"/>     
                </p>
          <label> L.P.O date</label> 
               <input name="LPODATE" type="date"  value="<?php echo date('d-m-y');?>" style= "margin-left: 34px; height:25px; width:202px;background-color:#FFF;'/>
                 </p> 
                </div> 
                  <div class="col-md-push-6"> 
           <label>Job code</label>
           <input type="Radio" name="JOBCODE" id="SVS" value="SVS" checked style= 'margin-left: 43px; margin-top: -7px;'/>
        <label for="SVS">Svs</label>
		<input name="JOBCODE" type="Radio" id="PCS" value="PCS">
		<label for="PCS">Pcs</label>
		 </p> 
         </div> 
         
          <div class="col-md-push-7">   
       <label>Purchase type</label>
      <select name="PURCHASETYPE" id="PURCHASETYPE" required="required" placeholder="Choose a PURCHASE TYPE" class="form-control chzn-select" tabindex="2" style= 'margin-left: 2px; margin-top: -7px; width:285px; height:29px;'/>
<option value="-1"></option> 
<option value="Medical purchase">Medical</option>
<option value="General purchases">General</option>
<option value="Services">Services</option>
<option value="Capital equipment">Capital equipment</option>
<option value="Transportation and third-party purchasing">Transportation and third-party purchasing</option>
 <option value="Maintenance, repair, and operating items (MRO)">Maintenance, repair, and operating items (MRO)</option> 
 </select>       
           </p>
           </div>
             <div class="col-md-push-8">
        <label> Completion certificate expectation date</label> 
               <input name="COMPLETIONCERTDATE" type="date"  value="<?php echo date('d-m-y');?>" style= 'margin-left: 2px;margin-top: 5px;height:25px; width:283px;background-color:#FFF;'/> 
               </p>
                <label>LPO NO.</label>
               <input type="text" name="LPONO" id="LPONO" placeholder="Local P.O No." style= "margin-left: 17px;height:25px; width:202px;background-color:#FFF;"/>  
            </p>   
           </p>
           <label>Job Ref:</label>
           <input type="text" name="REFERENCE" id="REFERENCE" placeholder="Ref No." style= "margin-left: 20px;height:25px; width:202px;background-color:#FFF;"/>   
           
                  
                </p>
                 </div>
                   <div class="col-md-push-9">   
                  <textarea name="CREDITTERMS" placeholder="Credit/pmt terms:  Payment shall be processed with 10 working days" id="autosize" style= "margin-left: -15px; margin-top: 14px; height: 165px; width: 257px; " class="form-control"></textarea>   
                </p>   
         </div>    
           <div class="col-md-push-10"> 
 <strong>We are pleased to confirm our purchase of the following items.</strong> 
                  <input type="button" value="Add row" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove" onClick="deleteRow('dataTable')"  /> 
                     
                                    <table id="dataTable"  border="2" style="width:94%; margin-top:8px; background:#ADADAD; ">
                                      <thead>
                                        <tr style="width:100%;">
                                <th> <label for="Checked" class="label"> *</label>                   </th>
                                <th> <label for="ITEMNO" class="label">ITEM NO.</label>          </th>
                                <th><label for="DESCRIPTION" class="label">DESCRIPTION</label>             </th>
                                <th> <label for=" QUANTITY" class="label">QTY</label>  </th>
                                     <th> <label for="UOM" class="label">UOM</label></th> 
                                <th><label for="UNIT " class="label">UNIT</label>                </th>
                                <th><label for="UNITPRICE" class="label">UNIT PRICE</label></th>
                               <th><label for=" AMOUNT" class="label">AMOUNT</label></th>  
                             </tr>
                                      </thead>
                                       <tbody id="tablebody" style="width:820px;">
                                         <tr id="0_rowdata" >
                                         <td><input type="checkbox" required="required" checked="checked" /></td>
                                         <td>
				</p>         
		<input type="number" name="ITEMNO" id="ITMENO" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:50px;background-color:#FFF;'/> 
          </td> 
						 <td>   
		<input type="text" name="DESCRIPTION" id="DESCRIPTION" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:300px;background-color:#FFF;'/> 
						 </td>
						 <td>   
		<input type="number" name="QUANTITY" id="QUANTITY" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:60px;background-color:#FFF;'/>  
					     </td>
						 <td> 
                         	<select name="UOM" id="UOM" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:120px;background-color:#FFF;'/> 
			<option value="-1"></option>
                                <option>Nill</option>
								<option>Pieces</option>
							    </select>
					     </td>
						 <td> 
		<input type="number" name="UNIT" id="UNIT" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:60px;'/>  
						 </td>
						 <td> 
		<input type="double" name="UNITPRICE" id="UNITPRICE" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:120px;'/>   
					     </td>
						 <td> 
		<input type="double" name="AMOUNT" id="AMOUNT" placeholder="Auto" required="required" style= 'margin-left: 0px;margin-top: 5px;height:20px; width:140px; background-color:#F5F5F5;'/>  
					     </td>
					   </tr>
                    </tbody>            
                </table> 
                </div>
                    <div class="col-md-push-11">   
                  <textarea name="COMMENT_DELIVERY" placeholder="Delivery terms" id="autosize" style= "margin-left: -15px; margin-top: 14px; height: 55px; width:889px ;" class="form-control"></textarea>   
                </p>   
         </div>   
             </p>
             <fieldset class="row042" style= 'margin-left: 0px;margin-top: 0px; width:600px;'/>
              <input type="text" name="APPROVEDBY" id="APPROVEDBY" placeholder="Approved by" style= "margin-left: 2px;margin-top: 5px;height:25px; width:182px;background-color:#FFF;"/>
              <label> For NTIHC</label>
                 <input type="text" name="APPROVEDDATE" id="APPROVEDDATE" placeholder="Approved date" style= "margin-left: 2px;margin-top: 5px;height:25px; width:150px; background-color:#FFF;"/> 
                  </p>  
                </fieldset>
                
             </p>
             <fieldset class="row043" style= 'margin-left: 0px;margin-top: 0px; width:600px;'/>
              <input type="text" name="AUTHORISEDBY" id="AUTHORISEDB" placeholder="Authorised by" style= "margin-left: 2px;margin-top: 5px;height:25px; width:182px;background-color:#FFF;"/>
              <label> For NTIHC</label>
                 <input type="text" name="AUTHORISEDDATE" id="AUTHORISEDDATE" placeholder="Authorised date" style= "margin-left: 2px;margin-top: 5px;height:25px; width:150px;background-color:#FFF;"/> 
                  </p>  
                </fieldset>
              
             </p>
            <fieldset class="row044" style= 'margin-left: 647px;margin-top: -115px; width:339px;'/>
                 <label>Sub total (ugx) :</label>
              <input type="numeric" name="AMOUNT" id="AMOUNT"  placeholder="Auto field" style= 'margin-left: 29px;margin-top: 5px;height:25px; width:180px; background-color:#F5F5F5;'/> 
           </p>
       <label> Tax(% on bill):</label>      
            <input type="numeric" name="AMOUNT" id="AMOUNT" placeholder="Auto field"  style= 'margin-left: 46px;margin-top: 5px;height:25px; width:180px; background-color:#F5F5F5;'/>  
           </p>
        <label> Total cost (ugx):</label>
               <input type="numeric" name="AMOUNT" id="AMOUNT"  placeholder="Auto field" style= 'margin-left: 30px;margin-top: 5px;height:25px; width:180px; background-color:#F5F5F5;'/> 
                </p>
                </fieldset>
             </div>
         </div>
     </div>
      <div class="row">
         <div class="col-md-push-12">
            <strong> Important: </strong>
             <ol>
                  <li>
                    Purchase order valid only when stamped and signed.
                 </li>
                 <li>
                     Please quote this L P O No. on your invoice.
                    </li>
                 <li>
                     This invoice is valid for two weeks from the date of signature.
                      
                 </li>
             </ol>
             </div>
         </div>
                
				<div class="clear"></div>
               </div>
</ul>
       <div class="clear"></div>
			<input class="submit" type="submit" value="Save and New &raquo;" style= 'margin-left: 17px;margin-top: 5px;'/> 
            <input class="submit" type="submit" value="Print Invoice &raquo;" />
            <input class="submit" type="submit" value="Download In Pdf &raquo;" />
            <input type="reset" name="button" id="button" value="Clear &raquo;" />
			<div class="clear"></div>
            
        </form>
		</div>  
 </ul>  
  </div> 
	  
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
               Approved orders
               
               
                       
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                         .....................
                   
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
                       
                        </span>                        </div> 
                            </div>
                        </div>                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap --> 
            <!-- /#footer -->
            <!-- #helpModal -->

            <script src="../ntihc/assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

            <!--Bootstrap -->
            <script src="../ntihc/assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="../ntihc/assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="../ntihc/assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="../ntihc/assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="../ntihc/assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src=" assets/js/style-switcher.js"></script>
			    <!-- END PAGE LEVEL SCRIPTS -->
 
        </body>
</html>
