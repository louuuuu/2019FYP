<?php
require('db.php');
	header("content-type:text/html;charset=utf-8");

	date_default_timezone_set('PRC');

	$filename = $_FILES['file']['name'];

	$temp_name = $_FILES['file']['tmp_name'];

	$size = $_FILES['file']['size'];

	$error = $_FILES['file']['error'];

echo $filename;

	if ($size > 10*1024*1024){
		//
		echo "<script>alert('File size exceeds 10M');window.history.go(-1);</script>";
		exit();
	}

	$arr = pathinfo($filename);

	$ext_suffix = $arr['extension'];

	$allow_suffix = array('jpg','gif','jpeg','png','docx','pptx');

	if(!in_array($ext_suffix, $allow_suffix)){

		echo "<script>alert('Uploaded file class error');window.history.go(-1);</script>";
		exit();
	}

	if (!file_exists('uploads')){
		mkdir('uploads');
	}

$new_filename = $filename;
    $query  = "INSERT INTO file(file_name)";
    $query .= "VALUES ('$new_filename')";
 
    mysqli_query($connection, $query);



	if (move_uploaded_file($temp_name, 'uploads/'.$filename)){
		echo "<script>alert('File uploaded successfully!');window.history.go(-1);</script>";
	}else{
		echo "<script>alert('File upload failed with error code: $ error');</script>";
	}

 ?>
