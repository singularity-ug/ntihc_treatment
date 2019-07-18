<?php
$host="localhost";
$username="root";
$password="";
$databasename="contemporary";

$connect= new mysqli($host,$username,$password,$databasename);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=$connect->query("INSERT INTO usersnotebook(name,comment,timestamp) VALUES('$name','$comment',CURRENT_TIMESTAMP)");
  
  if($insert){
  $select=$connect->query("SELECT name,comment,timestamp FROM usersnotebook ");
  
  while($row=$select->fetch_assoc())
  {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['timestamp'];
  ?>
      <div class="comment_div"> 
	    <p class="name">Posted By:<?php echo $name;?></p>
        <p class="comment"><?php echo $comment;?></p>	
	    <p class="time"><?php echo $time;?></p>
	  </div>
  <?php
  }
  }
exit;
}

?>  