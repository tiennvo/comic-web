<?php
require_once('../../model/connection.php');
require_once('../../function/function.php');
$db=new config();
$db->config();
$id=$_POST['idAuthor'];
$Name_Author=$_POST['newName'];
$Name_Genre_old=$_POST['Name'];
if ($Name_Author == ""){
	$Name_Author = $Name_Genre_old;
}
foreach($db->GetListStoryForAuthor($Name_Genre_old) as $muc){
			$array_Genre = explode(',',$muc["Author"]);
			$array_1=array();
			//$array_2=array();
			for($i=0;$i<count($array_Genre);$i++){
				if($array_Genre[$i]!=$Name_Genre_old){					
					array_push($array_1,$array_Genre[$i]);
					//array_push($array_2,vn_str_filter($array_Genre[$i]));
				}
			}			
			array_push($array_1,$Name_Genre);
			//array_push($array_2,vn_str_filter($Name_Genre));
				
			$db->UpdateAuthorForStory($muc["Id"],implode(",",$array_1));
}

$db->UpdateAuthor($id,$Name_Author,vn_str_filter($Name_Author));
//NameEncodeGenres


$db->dis_connect();//ngat ket noi mysql	
$error=1;
$array=array("Error"=>"$Name_Author");
echo json_encode($array);
?>