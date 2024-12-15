<?php
$li01="";$li02="";$li03="";$li04="";$li05="";$li06="";$li07="";$li08="";$li10="";$li11="";$li12="";

switch ($typeLeftHeader) {
  case "account":
    $li01="is-active";
    break;
  case "addStory":
    $li05="is-active";
    break;
  case "messages":
    $li02="is-active"; 
    break;
  case "changePassword":
    $li03="is-active";
    break;
  case "listStory":
   $li04="is-active";
    break;
  case "advertisement":
    $li06="is-active";
    break;
  case "listRelease":
    $li07="is-active";
    break;
  case "listSlider":
    $li08="is-active";
    break;
  case "listGenre":
    $li10="is-active";
    break;
 case "logo":
    $li11="is-active";
    break;
case "update":
    $li12="is-active";
    break;	
  
}	
	$numFee=$db->CountFeedbackAdmin();
?>

<div class="column is-narrow left pc">
	<ul class="nav-user">
		<li><a class="li01 <?=$li01?>" href="<?=$linkOption?>quan-ly-tai-khoan.html">Quản lý tài khoản</a></li>
		<li><a class="li03 <?=$li03?>" href="<?=$linkOption?>doi-mat-khau.html">Đổi mật khẩu</a></li>	
	</ul>
</div>