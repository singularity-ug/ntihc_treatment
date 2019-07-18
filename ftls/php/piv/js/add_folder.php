<?php 
define("PATH", "/profiling system/");

$test = "set";
$_POST["dirname"] = "test";


if (isset($test)) {
  //get value of inputfield
  $dir = $_POST['dirname'];
  //set the target path ??

$targetfilename = PATH . '/' . $dir;

if (!is_file($dir) && !is_dir($dir)) {
    mkdir($dir); //create the directory
    chmod($targetfilename, 0777); //make it writable
}
else
{
    echo "{$dir} exists and is a valid dir";
}
}
 ?>