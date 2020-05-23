<?php 

	function yonlendir($fname) {
		   if($fname=="anasayfa"){
		   	header('Location: http://localhost/IPmanagement/index.php');
		   }
		   else  if($fname=="edit"){
		   	header('Location: http://localhost/IPmanagement/edit.php');
		   }
		   echo "<script type='text/javascript'>alert('$message');</script>";
	}

 ?>