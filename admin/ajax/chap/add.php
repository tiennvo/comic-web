<?php
require_once('../../model/connection.php');
require_once('../../function/function.php');
$IdStory=$_POST['IdStory'];
$Name="Chương ".tofloat($_POST['Name']);
$Path="";
if(isset($_POST['Path']))
$Path=implode(",",$_POST['Path']);

$Summary=$_POST['Summary'];
//$tempChap=$_POST['tempChap'];
$Title=$_POST['Title'];
	
	$db=new config();
	$db->config();
	$min=$db->GetMinChap($IdStory);
	 $error="";
     date_default_timezone_set("Asia/Ho_Chi_Minh");
	 $DateUpload=date('Y-m-d H:i:s');

$error=$db->AddChap($Name,$Summary,$DateUpload,$IdStory,$Path,$Title);

$db->UpdateChapToStory($IdStory,$Name,$DateUpload);
$db->dis_connect();//ngat ket noi mysql	
$array=array("Error"=>"$error");
//unlink("../../temp/".$tempChap);	
echo json_encode($array);

?>