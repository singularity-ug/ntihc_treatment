
<?php
session_start();
$_SESSION['session']=session_id();

$host="localhost";
$username="root";
$password="";
$databasename="contemporary";
$connect = new mysqli("localhost", "root", "", "contemporary");

/* check connection */
if ($connect->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


function total_online()
{
 global $connect;

 $current_time=time();
 $timeout = $current_time - (60);

 if($session_exist = $connect->query("SELECT session FROM `total_visitors` WHERE session='".$_SESSION['session']."'")){
    $session_check = $session_exist->num_rows;
 }
else {
  echo $connect->error;
}

return 0;
 if($session_check==0 && $_SESSION['session']!="")
 {
  $connect->query("INSERT INTO total_visitors values ('','".$_SESSION['session']."','".$current_time."')");
 }
 else
 {
  $sql = $connect->query("UPDATE total_visitors SET time='".time()."' WHERE session='".$_SESSION['session']."'");
 }

 $select_total = $connect->query("SELECT * FROM total_visitors WHERE time>= '$timeout'");
 $total_online_visitors = $select_total->num_rows;
 return $total_online_visitors;
}

if(isset($_POST['get_online_visitor']))
{
 $total_online=total_online();
 echo $total_online;
 exit();
}
?>

<html>
<head>
<link href="assets/css/statistics_style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="assets/lib/jquery/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
setInterval(function()
{
 $.ajax
 ({
 type:'post',
 url:'',
 data:{
  get_online_visitor:"online_visitor",
 },
 success:function(response) {
 if(response!="")
 {
  $("#online_visior_val").html(response);
 }
 }
 });
}, 10000)
});
</script>
</head>
<body>
<div id="wrapper">

<?php

// To Get Total Online Visitors
$total_online_visitors=total_online();

// To Get Total Visitors
$total_visitors =   $connect->query("SELECT * FROM total_visitors");
$total_visitors = $total_visitors->num_rows;

// To Insert Page View And Select Total Pageview
$user_ip=$_SERVER['REMOTE_ADDR'];
$page=$_SERVER['PHP_SELF'];
$connect->query("insert into pageviews values('','$page','$user_ip')");
$pageviews =   $connect->query("SELECT * FROM pageviews");
$total_pageviews = $pageviews->num_rows;

//To Get Total Articles
$articles = $connect->query("SELECT * FROM articles");
$total_articles = $articles->num_rows;
?>

<div id="stat_div">
<li><p>Total Visitors</p><br><span><?php echo $total_visitors;?></span></li>
<li><p>Visitors Online</p><br><span id="online_visior_val"><?php echo $total_online_visitors;?></span></li>
<li><p>Total Pageviews</p><br><span><?php echo $total_pageviews;?></span></li>
<li><p>Total Articles</p><br><span><?php echo $total_articles;?></span></li>
</div>

</div>
</body>
</html>
