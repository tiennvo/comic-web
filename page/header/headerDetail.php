<?php 
session_status() === PHP_SESSION_ACTIVE ?: session_start(); 
$user="_o_";
if(isset($_SESSION['email']))
	$user=$_SESSION['email'];

	$whitelist = array(
		'127.0.0.1',
		'::1'
	);
	
	if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
		require_once($_SERVER['DOCUMENT_ROOT'].'/page/model/connection.php');
		require_once($_SERVER['DOCUMENT_ROOT'].'/page/function/function.php');
		require_once($_SERVER['DOCUMENT_ROOT'].'/page/function/menu.php');	
		//require_once($_SERVER['DOCUMENT_ROOT'].'/itruyentranh/page/captcha/captcha.php');		
	}else{
		require_once($_SERVER['DOCUMENT_ROOT'].'/page/model/connection.php');
		require_once($_SERVER['DOCUMENT_ROOT'].'/page/function/function.php');
		require_once($_SERVER['DOCUMENT_ROOT'].'/page/function/menu.php');	
		//require_once($_SERVER['DOCUMENT_ROOT'].'/page/captcha/captcha.php');			
	}
	


	// Lưu code session
	
	$db=new config();
	$db->config();
    $linkOption=siteURL();
	
	$linkOption_1=$linkOption."page/";
	$avatarUser="";
	$arrNotify=array();
	if($user!="_o_"){
	 $avatarUser=$db->GetAvatarUser($user);
	 $arrNotify = $db->GetNotify($user);
	}
	$arrGenre = $db->GetGenres();
	$arrSort = $db->GetSort();
	$levelUser=0;
	if(isset($_SESSION['email'])){
	$levelUser=$db->GetLevelUser($user);
	}
	//$db->dis_connect();//ngat ket noi mysql	
	$On="";
	if(isset($styleOn))
	$On="on";	
 ?>
<style>
	@media screen and (max-width: 1026px) {
	/* mang hinh nho hon 1024 */
	  
	    .login-btn{
			visibility: hidden;
		}
		.register-btn{
			visibility: hidden;
		}
		
	}

	@media screen and (min-width: 1025px) {
		/* mang hinh lon hon 1024 */
		
		.login-btn{
			visibility: visible;
		}
		.register-btn{
			visibility: visible;
		}
		#lg_003,#lg_004{
			visibility: hidden;

		}
		
	 
	}
</style>
<script>
$(document).ready(function(){
if ($(window).width() > 1023) {
	
	
	$('<button class="login-btn">Đăng nhập</button><button class="register-btn">Đăng ký</button>').insertAfter("#lg_005");
   //alert('Less than 960');
}else{
	$('#captcha_register').css('width', '87%');
	$('<div class="notify center login-modal-open" id="lg_004"><i class="fas fa-envelope" ></i></div><div class="notify center login-modal-open" data-id="notification" id="lg_003"><i class="fas fa-bell"></i></div>').insertAfter("#lg_005");	
}
});
</script>
	<section class="top-bar <?= $On?>" id="home">
    <div class="container">
        <div class="level">
            <div class="level-left pc">
                <span class="logo">
                    <a href="<?= $linkOption?>">iTruyenTranh</a>
                </span>
                    <!-- /.logo -->
                    <div class="top-search">
                        <input type="text" class="text-search" input-Link="<?= $linkOption?>" placeholder="Nhập từ khoá"/>
                        <button class="submit-btn btn_search" button-Link="<?= $linkOption?>"></button>
                        <div class="list-results"><!-- Add class 'open' to open list results -->
                            <div class="title-search">Tìm kiếm gần đây</div>
                            <div class="list-container">
                            </div>
                        </div>
                        <!-- /.list-results -->
                    </div>					
                <!-- /.top-search -->
            </div>
            <div class="level-right">
                <ul class="top-links pc">
                    <li>
                        <a href="<?php echo $linkOption ?>lich-su.html">Lịch sử</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo $linkOption ?>truyen-dang-theo-doi.html">Theo dõi</a>
                    </li> -->
                </ul>
                <!-- /.top-links -->
				<div class="top-buttons has-login">
				
				<?php
				if($user=="_o_"){
				?>               
						<div class="notify home smp" id="lg_001"><a href="<?=$linkOption?>"><i class="fas fa-home"></i></a></div>
						
						
						<div class="notify center btn-search smp" id="lg_002" for="focus-input"><i class="fas fa-search"></i></div>
						<div class="user center login-modal-open" id="lg_005">
							<div class="notify btn-user smp"><i class="fas fa-user-circle"></i></div>
						</div>	
						

				<?php
				}else{
					$noti="unread";
					
				?>
				<div class="notify home smp"><a href="<?=$linkOption?>"><i class="fas fa-home"></i></a></div>
				
				
				<div class="notify center btn-search smp" for="focus-input"><i class="fas fa-search"></i></div>
				<div class="notify user center">
				<span class="avatar-menu"><img src="<?php echo $linkOption."page/".$avatarUser;?>"></span>
				<div class="notify btn-user smp"><i class="fas fa-user-circle"></i></div>
                            <ul class="user-links">
                                 <?php
                                if($levelUser>0){
                                ?>
                                <li>
                                    <a href="<?php echo $linkOption ?>admin"><i class="fa fa-user-circle-o"></i>Admin</a>
                                     <hr>
                                </li>
                                <?php
                                }
                                ?>
                               
                                <li>
                                    <a href="<?php echo $linkOption ?>quan-ly-tai-khoan.html"><i class="fas fa-user-circle"></i> Quản lý tài khoản</a>
                                </li>
                               
                                <!-- <li>
                                    <a href="<?php echo $linkOption ?>truyen-dang-theo-doi.html"><i class="fas fa-heart"></i> Truyện đang theo dõi</a>
                                </li> -->
                                <li>
                                    <a href="<?php echo $linkOption ?>lich-su.html"><i class="fas fa-history"></i> Lịch sử đọc truyện</a>
                                </li>
                               
                                 <li>
								  <a href="<?php echo $linkOption ?>doi-mat-khau.html"><i class="fas fa-lock"></i> Đổi mật khẩu</a>
							
								</li>
                               
                                <li>
                                    <a href="javascript:void(0)" id="button_logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                                </li>
                         </ul>
                </div>
				
				<?php
				}
				?>
				<div class="head_menu smp"><span>&nbsp;</span></div>
				</div>
               
            </div>
        </div>
    </div>
</section>

<div class="modal login-modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div>
            <!-- /.top-caption -->
            <div class="tabs-buttons">
                <button data-type="login">Đăng nhập</button>
                <button data-type="register">Đăng ký</button>
            </div>
            <!-- /.tabs-button -->
            <div class="tabs-contents">
                <div class="login-section">
                    <div class="form-login">
                            <input type="email" placeholder="Email" id="email_login"/>
                            <input type="password" placeholder="Mật khẩu" id="password_login">
                            <button type="submit" class="button_login btn btn-lg" id="button_login2">Đăng nhập</button>
                            <a href="javascript:void(0);" class="forget-password-link">Quên mật khẩu</a>
                    </div>                   
                </div>            
                <div class="register-section">
                    <div class="form-login">
                        <input type="email" placeholder="Email" id="email_register"/>
                        <input type="password" placeholder="Mật khẩu >6 ký tự" id="password_register">
					   <input type="text" id="captcha_register" name="captcha_register" placeholder="Nhập mã xác nhận" style="width:85%">
					     <span id="refresh_captcha"></span>
                        <button type="submit" id="button_register">Đăng ký</button>
                    </div>
                </div>
            </div>          
        </div>     
    </div>
</div>

<div class="modal notify-modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <span class="top-caption">
            Quên mật khẩu hử !<br/>
        </span>
      
        <div class="forget-password-section">
            <span class="caption">Mật khẩu khôi phục sẽ được gởi qua email mà bạn đăng ký</span>
            <div class="form-forgot">
                <input type="email" placeholder="Email" id="email-forgot"/>
              
                <button type="submit" id="button-forgot">Gửi mật khẩu</button>
            </div>
        </div>
       
        <div class="sent-password-section">
            <span class="check-icon"></span>
            <span class="caption">Mật khẩu khôi phục đã được gởi bạn hãy kiểm tra trong hộp thư</span>
        </div>
      
        <a href="javascript:void(0);" class="back-to-login">Tôi muốn quay lại đăng nhập</a>
    
    </div>
</div>
<script>
  var type_new = <?php echo json_encode($linkOption); ?>   
        var refresh_captcha1=Math.floor(Math.random()*90000) + 10000;
		$("#refresh_captcha").text(refresh_captcha1);
</script>
<script src="<?php echo $linkOption_1;?>js/login/login.js"></script>

<section class="main-menu">
    <div class="container">
        <nav class="navbar">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <div class="top-search smp">
                        <input class="text-search" type="text" placeholder="Nhập từ khoá">
                        <button class="submit-btn btn_search"></button>
                        <div class="list-results">
                        </div>
                    </div>
                    <a href="<?= $linkOption?>" class="navbar-item">Trang Chủ</a>
                    <div class="navbar-item has-dropdown is-hoverable is-mega">
                        <div class="navbar-link">Thể loại</div>
                        <div class="navbar-dropdown ">
                            <div class="container">
                                <div class="level">
                                    <div class="level-left mega-list-wrapper">
                                       <div class="columns">	 
										   <?php
											 GetMenuSub('<div class="column column-menu"><ul class="mega-list">','</ul></div>',$arrGenre,10,"genres=",$linkOption);
										   ?>
									   </div>
                                      </div>
                                    <div class="level-right pc">
                                        <img src="<?= $linkOption_1?>frontend/images/menu-icon.jpg" class="mega-menu-cover" alt="img" style="width:360px;height:343px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable is-mega">
                        <div class="navbar-link">Sắp Xếp</div>
                        <div class="navbar-dropdown ">
                            <div class="container">
                                <div class="level">
                                    <div class="level-left mega-list-wrapper">
                                        <div class="columns">
											<?php												 											 
												 GetMenuSub('<div class="column"><ul class="mega-list">','</ul></div>',$arrSort,2,"sort=",$linkOption);
											?>											                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="<?= $linkOption."truyen-tranh-hay.html"?>" class="navbar-item">Truyện Tranh</a> -->
					<a href="<?= $linkOption."tim-kiem-nang-cao.html"?>" class="navbar-item">Tìm Truyện Thủ Công</a>
                    <a href="<?= $linkOption."tim-kiem-ai.html"?>" class="navbar-item">Tìm Truyện Với AI</a>
                    <a rel="nofollow" href="<?= $linkOption."lich-su.html"?>" class="navbar-item">Lịch Sử</a>
                    <!-- <a rel="nofollow" href="<?= $linkOption."truyen-dang-theo-doi.html"?>" class="navbar-item">Theo Dõi</a> -->
                </div>
            </div>
        </nav>
    </div>
</section>
<?php
if($user=="_o_")
$user=0;
?>