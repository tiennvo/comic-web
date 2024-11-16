<?php

	require_once('../../model/connection.php');
	require_once('../../function/function.php');
	$db=new config();
	$db->config();
	$Name_Author=$_POST['Name'];
	$Name_Author_en=vn_str_filter($Name_Author);

	if($db->CheckNameAuthor($Name_Author)<1){
	
	$db->AddAuthors($Name_Author,vn_str_filter($Name_Author));
	}
	$db->dis_connect();//ngat ket noi mysql	
	$error=1;
	$array=array("Error"=>"$Name_Author");
	echo json_encode($array);

?>