<?php
include('connect.php');
if(isset($_POST['upload'])) {
	$per_id = $_POST['per_name'];

	$target_dir = "uploads/";
    $target_file = $target_dir. basename($_FILES["per_file"]["name"]);
    $uploadOk = 1;
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["per_file"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $file = $target_file; // used to store the filename in a variable
	$add_file = $con->prepare("INSERT INTO tbl_files (file_name, per_id , filetype , date_uploaded) VALUES (?, ? , ? , NOW())");
	$add_file->execute(array($file, $per_id , $FileType ));

    header('location:file_table.php');
}
?>