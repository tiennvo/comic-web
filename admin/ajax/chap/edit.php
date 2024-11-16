<?php
require_once('../../model/connection.php');
require_once('../../function/function.php');
$IdStory=$_POST['IdStory'];
$IdChap=$_POST['IdChap'];

$Name="Chương ".tofloat($_POST['Name']);
$Path="";
if(isset($_POST['Path']))
$Path=implode(",",$_POST['Path']);

$Summary=$_POST['Summary'];
//$tempChap=$_POST['tempChap'];
$Title=$_POST['Title'];
	$db=new config();
	$db->config();
	
	$error="";
     date_default_timezone_set("Asia/Ho_Chi_Minh");
	 $DateUpload=date('Y-m-d h:i:s');

$error=$db->UpdateChap($IdChap,$Name,$Summary,$IdStory,$Path,$Title,$DateUpload);
//$nameChap=$db->GetByNameChap($IdStory);
//$dateChap=$db->GetByDateChap($IdStory);
//$db->UpdateChapToStory($IdStory,$nameChap,$dateChap);
$db->dis_connect();//ngat ket noi mysql	
$array=array("Error"=>"$error");
//unlink("../../temp/".$tempChap);
echo json_encode($array);

?>