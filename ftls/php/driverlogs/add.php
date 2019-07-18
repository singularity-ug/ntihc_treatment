<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>

<?php
	include('db.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location=$_FILES["image"]["name"];
									$fname= $_POST['fname'];
									$mname= $_POST['mname'];
									$lname= $_POST['lname'];
									$address= $_POST['address'];
									$email= $_POST['email'];

						mysql_query("insert into student (fname,mname,lname,address,email,location) 
						values('$fname','$mname','$lname','$address','$email','$location')")or die(mysql_error());
									
									}
										header('location:index.php');
									}
							}
?>								