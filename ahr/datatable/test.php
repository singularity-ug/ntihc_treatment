<?php
$s2 = '';
$s  = '5454__';
$s1 = '3333__233__5566';


function getIndicator($str123){
	  $str123 = trim($str123);
	  $tempstr = str_replace('__','_',$str123);
	 
	     if($str123==''){ 		 return '<p style="background-color:blue;">'.$str123.'...</p>';  	 }
	 else{
          $str1234=explode('_',$tempstr);
       	if($str1234[1]==''){   	 return '<p style="background-color:red;">'.$str123.'</p>';    	 }
		
		               else{     return '<p style="background-color:green;">'.$str123.'</p>'; 	}
	}
	 
}


echo getIndicator($s2).'<br>';
echo getIndicator($s).'<br>';
echo getIndicator($s1).'<br>';
?>
