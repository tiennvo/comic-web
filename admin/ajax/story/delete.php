<?php
	require_once('../../model/connection.php');
	require_once('../../function/function.php');
	$db=new config();
	$db->config();
	$id=$_POST['id'];

	foreach($db->GetListChapterByIdStory($id) as $muc){
        $db->DeleteChapByIdStr($id);
	}

	//alert("Error parsing response: " + $id);
	$db->DeleteStrById($id);
	$db->dis_connect();//ngat ket noi mysql	
?>