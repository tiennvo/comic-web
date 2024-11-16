<?php

	require_once('../../model/connection.php');
	require_once('../../function/function.php');
	$db=new config();
	$db->config();
	$Name_Genre=$_POST['Name'];
	$Title_Genre=$_POST['Title'];
	//CheckNameGenre
	if($db->CheckNameGenre($Name_Genre)<1){
	
	$db->AddGenre($Name_Genre,vn_str_filter($Name_Genre),$Title_Genre,"");
	}
	$db->dis_connect();//ngat ket noi mysql	
	$error=1;
	$array=array("Error"=>"$error");
	echo json_encode($array);

?>