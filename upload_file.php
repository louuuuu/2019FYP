<?php
 
	header("Content_type:text/html;charset=utf8");
	
	//session_start();
	
	$imgname = $_FILES['myFile']['name'];
    $tmp = $_FILES['myFile']['tmp_name'];
	$error=$_FILES['myFile']['error'];
		
   move_uploaded_file($tmp,'C:\xampp\htdocs\fyp\uploads'.iconv("UTF-8", "gbk",$imgname));
 
   if ($error==0) {
  			echo "Uploaded successfully!";
   }else{
		  switch ($error){
		    case 1:
		      echo "Exceeded maximum upload file";
		      break;
		    case 2:
		      echo "Too many uploaded files, please upload 20 and below files at once!";
		      break;
		    case 3:
		      echo "The file was not completely uploaded, please try again!";
		      break;
		    case 4:
		      echo "No upload file selected!";
		      break;
		    case 5:
		      echo "Uploaded files are 0";
	      	 break;
	}
}
 
?>