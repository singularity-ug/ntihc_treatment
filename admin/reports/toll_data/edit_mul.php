<?php

	error_reporting(0);

	include_once 'dbcon.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='index.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>pcms</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="../../plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="../../plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="../../plugins/bootstrap-slider/slider.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

   <link rel="stylesheet" href="../../assets/notifier2.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css"> 
  
  
 <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.css"> 
  <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons --> 

<script src="../jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>

<script type="text/javascript">
  function 	calcTotal(objct){
      var id = objct.id;  //get elems id
			var num = id.charAt(id.length-1); //get number from id
      //start getting values
			var qty = parseFloat(document.getElementById('qua'+num).value);
			var unitcost = parseFloat(document.getElementById('ucoss'+num).value);
			var qtut = parseFloat(document.getElementById('qtut'+num).value);
			var oqtr = parseFloat(document.getElementById('1qtr'+num).value);
			var twoqtr = parseFloat(document.getElementById('2qtr'+num).value);
			var threeqtr = parseFloat(document.getElementById('3qtr'+num).value);
			var fourthqtr = parseFloat(document.getElementById('4qtr'+num).value);

			//set the apparopriate values as required
      document.getElementById('qttt'+num).value = ''+(oqtr + twoqtr + threeqtr + fourthqtr);
			document.getElementById('ttc'+num).value  = ''+(qty * unitcost * qtut);

    //get the new values  for further comparisons
     var		ttc = parseFloat(document.getElementById('ttc'+num).value);
		 var    qttt = parseFloat(document.getElementById('qttt'+num).value);
		 if(qttt>ttc){
			     document.getElementById('qttt'+num).style ="background-color:yellow;";
		 }
		 else {
			     document.getElementById('qttt'+num).style ="background-color: gainsboro;";
		 }
			}
    </script>
    
 
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
             	font-size: 10px;
             	color:#000000;
				font-weight:normal;
             }
             table tr:nth-child(odd) {
             background:#fff;
             }
             table tr:nth-child(even) {
                 background:#fff;
             } 
            </style> 
</head>  
   
 


</head> 
  
<style>
div {
    width: 100%;
    height: 100%;
    background-color: black;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 4s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    0%   {background-color: black;}
    25%  {background-color: red;}
    50%  {background-color: black;}
    100% {background-color: green;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color: black;}
    25%  {background-color: red;}
    50%  {background-color: black;}
    100% {background-color: green;}
}
</style>
 

  <!-- Left side column. contains the logo and sidebar -->
             <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">
  
<div class="col-sm-12"><p></p>
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:2px solid #fff;	text-align:left;" width="100%">
		<thead>  
		<tr>
      <td style="width:100%;background-color:#fff;">
      <center>
              <a rel="facebox" title="" href="../tollree_rpt.php?d1=0&d2=0" >
              <button class="" ><i class="icon-edit">   
   </i>Back</button> </a>   
    <a rel="facebox" title="" href="index.php"><button class="">
   <i class="icon-edit">  
   </i>  <strong>Tollfree data</strong></button> </a>  
   </center>  </td>   
			 </tr>             
            </table>
     <br> 
<form method="post" action="update_mul.php">
<table class='table table-bordered' >
<tr>
   <th >DATE</th>
    <th style=" text-align:center;">PHONECONTACT</th>
    <th style=" text-align:center;">CALLER NAME</th>
    <th style="">SEX</th>
    <th style="">AGE</th>  
	<th style="">SCH</th> 
    <th style="">MARITAL</th> 
    <th style="">EMPLOYMENT</th>
    <th style="">DISTRICT</th>
    <th style="">DIVISION</th>
	<th style="">PLACEOFRESIDENCE</th>   
    <th style="">LIVING WITH</th>
    <th style="">HEAR ABOUT US</th>
	<th style="">HEAR ABOUT NUMBER</th> 
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];
	$res=$MySQLiconn->query("SELECT * FROM tollfree WHERE CID=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="CID[]" value="<?php echo $row['CID'];?>" />
        
		<input type="numeric" name="fy[]" value="<?php echo $row['DATECREATED'];?>"  
        style="width:100%;padding: 0px 0px; " />   </td>
        <td>
		<input type="numeric" name="account[]" value="<?php echo $row['PHONECONTACT'];?>"  
        style="width:100%;padding: 0px 0px; " />   </td>
         
        <td>
		<input type="numeric" name="fagone[]" value="<?php echo $row['FIRSTNAME'];?>"  
        style="width:100%;padding: 0px 0px; " />    </td>
        
        <td>
        <input type="numeric" name="fagtwo[]" value="<?php echo $row['SEX'];?>"  
         style="width:100%;padding: 0px 0px; " />  </td> 
         
        <td>
		<input type="numeric" name="fagthree[]" value="<?php echo $row['AGE'];?>" 
        style="width:100%;padding: 0px 0px; " /> </td> 
        
        <td>
		<input type="numeric" name="tt[]" value="<?php echo $row['SCHOOLINGSTATUS'];?>"  
        style="width:100%;padding: 0px 0px;  " />  </td>
           
        <td>
		<input type="numeric" name="fqone[]" onkeyUp = "calcTotal(this)"  id="fqone<?php echo $i; ?>" 
        value="<?php echo $row['MARITALSTATUS'];?>"  style="width:100%;padding: 0px 0px;  " />  </td>
        
        <td>
		<input type="numeric" name="fqtwo[]" onkeyUp = "calcTotal(this)"  id="fqtwo<?php echo $i; ?>" 
        value="<?php echo $row['EMPLOYMENTSTATUS'];?>"  style="width:100%;padding: 0px 0px; " /> </td>
         
        <td>
		<input type="numeric" name="fqthree[]" onkeyUp = "calcTotal(this)" id="fqthree<?php echo $i; ?>" 
        value="<?php echo $row['DISTRICT'];?>"   style="width:100%;padding: 0px 0px; " /> </td>
        
        <td>
		<input type="numeric" name="fourthqtr[]" onkeyUp = "calcTotal(this)" id="fourthqtr<?php echo $i; ?>" 
        value="<?php echo $row['DIVISION'];?>"  style="width:100%;padding: 0px 0px; " /> </td>
        
        <td> <input type="numeric" name="qtt[]" value="<?php echo $row['PLACEOFRESIDENCE'];?>" id="qttt<?php echo $i; ?>"  style="width:100%;padding: 0px 0px;  " /> </td> 
         
        <td> <input type="numeric" name="LLqtt[]" value="<?php echo $row['LIVINGWITH'];?>" id="LLqtt<?php echo $i; ?>"  style="width:100%;padding: 0px 0px;  " /> </td>
       
        <td> <input type="numeric" name="HHqtt[]" value="<?php echo $row['HEAREDABOUTNTIHC'];?>" id="HHqtt<?php echo $i; ?>"  style="width:100%;padding: 0px 0px;  " /> </td>
        
        <td> <input type="numeric" name="NNqtt[]" value="<?php echo $row['HOWDIDYOUKNOABOUTTHISNO'];?>" id="NNqtt<?php echo $i; ?>"  style="width:100%;padding: 0px 0px;  " /> </td>
        
        
		</tr>
		<?php
	}
}
?>
<tr>
<td colspan="15">
<center><button type="submit" name="savemul" class=""><i class="glyphicon glyphicon-edit"></i> &nbsp; Update all</button>&nbsp;
<a href="index.php" class=""><i class="glyphicon glyphicon-plus"></i> &nbsp; Back</a></center>
<br>
</td>
</tr>
</table>

</form>
<body style="background-color:#ddd;">
 
        </body>
</html>
