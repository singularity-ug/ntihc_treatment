<?php
	include_once 'dbcon.php';
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
   
  
<body class="hold-transition skin-blue sidebar-mini" style="background-color:#ddd;">
  
  <!-- Left side column. contains the logo and sidebar -->
             <div class="table-responsive mailbox-messages">
                 <div class="col-sm-12" style="height:auto; ">
  
<div class="col-sm-12"><p></p>
<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 12px;border:2px solid #fff;	text-align:left;" width="100%">
		<thead>  
		<tr>
      <td style="width:100%;background-color:#fff;">
      <center>
              <a rel="facebox" title="" href="../med_dailyvists.php?d1=0&d2=0" >
              <button class="" ><i class="icon-edit">   
   </i>Back</button> </a>   
    <a rel="facebox" title="" href="index.php"><button class="">
   <i class="icon-edit">  
   </i>  <strong>Registration desc</strong></button> </a>  
   </center>  </td>   
			 </tr>             
            </table>
     <br> 
             
<form method="post" name="frm">
<table class='table table-tabled table-responsive' >
<tr>
<th>##</th>
    <th >DATE</th>
    <th style=" text-align:center;">MONTH</th>
    <th style=" text-align:center;">YEAR</th>
    <th style="">NTIHC NO.</th>
    <th style="">SERVICE TYPE</th>  
	<th style="">VIST TYPE</th> 
    <th style="">DATA TYPE</th> 
    <th style="">CLIENT NAME</th>
    <th style="">AGE</th>
    <th style="">AGE GROUP</th>
	<th style="">SEX</th> 
</tr>
<?php
	$res = $MySQLiconn->query("SELECT * FROM cmpatientsregistration ORDER BY DATECREATED asc");
	$count = $res->num_rows;

	if($count > 0)
	{
		while($row=$res->fetch_array())
		{
			?>
			<tr>
			<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['RID']; ?>"  /></td>
			<td><?php echo $row['DATECREATED']; ?></td>
			<td><?php echo $row['FISCALMONTH']; ?></td>
			<td><?php echo $row['FISCALYEAR']; ?></td>
            <td><?php echo $row['NTIHCNO']; ?></td>
			<td><?php echo $row['SERVICETYPE']; ?></td> 
			<td><?php echo $row['VISTTYPE']; ?></td>
			<td><?php echo $row['DATATYPE']; ?></td> 
			<td><?php echo $row['CLIENTNAME']; ?></td> 
            <td><?php echo $row['AGE1']; ?></td>
			<td><?php echo $row['AGE_GROUP']; ?></td>
			<td><?php echo $row['SEX']; ?></td>  
			</tr>
			<?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="10"> No Records Found ...</td>
        </tr>
        <?php
	}
?>

<?php

if($count > 0)
{
	?>
	<tr>
    <td colspan="12">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>


    <label style="margin-left:100px; width: 223px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="edit.png" onClick="edit_records();" alt="edit" />edit</span>
    <span><img src="delete.png" onClick="delete_records();" alt="delete" />delete</span>
    </label>


    </td>
	</tr>
    <?php
}

?>

</table>
</form>
             
</body>
</html>