<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start(); 
require_once('model/connection.php');
require_once('function/function.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<?php
  
	$Email=0;
	$db=new config();
	$db->config();
	$banner=$db->GetAdvertisement();	

    $user="";
    $linkOption=siteURL();
	$linkOption1=$linkOption."page/";
	if(isset($_SESSION['email'])){
		if($db->GetLevelUser($_SESSION['email'])!=2){
			header("location:".$linkOption);
		}else{
		   $user= $_SESSION['email'];
		}
	}else{
		header("location:".$linkOption);
	}

	$avatarAdmin=$db->GetAvatarUser($user);

?>    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Add</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="frontend/file/jquery.tag-editor.css">	
  <link href="toastr/toastr.css" rel="stylesheet" />	
   
</head>
<body class="hold-transition sidebar-mini" onbeforeunload="return Reload()">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="index.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
       <?php
      $typeMenu="advertisement";
      require_once('menuLeft.php');
     ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Đăng quảng cáo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Đăng quảng cáo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin truyện</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <p class="txt"><a id="demo_header1" href="#" title="" >Banner header 1</a></p>
                <p class="control">
                    <input class="form-control input" type="text" placeholder="Ảnh" id="header1" name="header1" value="<?=$banner[1]?>">
                </p>
				<p class="control">
                    <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_header1" name="link_header1" value="<?=$banner[2]?>">
                </p>
				<div class="img"><img class="image-avatar-header1" id="img-header1" src="<?=$banner[1]?>" alt="" /></div>					
				<input type="file" multiple="false" name="upload_header1" id="upload_header1" style="display: none;">
				<button class="btn btn-danger btn-avatar-header1">Chọn hình</button>
				 <p class="txt"><a id="demo_header2" href="#" title="" >Banner header 2</a></p>
				<p class="control">
                    <input class="form-control input" type="text" placeholder="Ảnh" id="header2" name="header2" value="<?=$banner[3]?>">
                </p>
				<p class="control">
                    <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_header2" name="link_header2" value="<?=$banner[4]?>">
                </p>
				<div class="img"><img class="image-avatar-header2" id="img-header2" src="<?=$banner[3]?>" alt="" /></div>					
				<input type="file" multiple="false" name="upload_header2" id="upload_header2" style="display: none;">
				<button class="btn btn-danger btn-avatar-header2">Chọn hình</button>
              </div>
               <div class="form-group">
                    <p class="txt"><a id="demo_content" href="#" title="" >Banner content</a></p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="content" name="content" value="<?=$banner[5]?>">
                    </p>
					<p class="control">
                        <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_content" name="link_content" value="<?=$banner[6]?>">
                    </p>
					<div class="img"><img class="image-avatar-content" id="img-content" src="<?=$banner[5]?>" alt="" /></div>					
					<input class="form-control" type="file" multiple="false" name="upload_content" id="upload_content" style="display: none;">
					<button class="btn btn-danger btn-avatar-content">Chọn hình</button>
                </div>
                <div class="form-group">
                    <p class="txt"><a id="demo_left" href="#" title="" >Banner left</a></p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="left" name="left" value="<?=$banner[7]?>">
                    </p>
					<p class="control">
                        <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_left" name="link_left" value="<?=$banner[8]?>">
                    </p>
					<div class="img"><img class="image-avatar-left" id="img-left" src="<?=$banner[7]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_left" id="upload_left" style="display: none;">
					<button class="btn btn-danger btn-avatar-left">Chọn hình</button>								
                </div>
				<div class="form-group">
                    <p class="txt"><a id="demo_footer1" href="#" title="" >Banner footer1</a></p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="footer1" name="footer1" value="<?=$banner[9]?>">
                    </p>
					<p class="control">
                        <input class=form-control "input" type="text" placeholder="Link chuyển trang" id="link_footer1" name="link_footer1" value="<?=$banner[10]?>">
                    </p>
					<div class="img"><img class="image-avatar-footer1" id="img-footer1" src="<?=$banner[9]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_footer1" id="upload_footer1" style="display: none;">
					<button class="btn btn-danger btn-avatar-footer1">Chọn hình</button>								
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
           <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <p class="txt"><a id="demo_footer2" href="#" title="" >Banner footer2</a></p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="footer2" name="footer2" value="<?=$banner[11]?>">
                    </p>
					<p class="control">
                        <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_footer2" name="link_footer2" value="<?=$banner[12]?>">
                    </p>
					<div class="img"><img class="image-avatar-footer2" id="img-footer2" src="<?=$banner[11]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_footer2" id="upload_footer2" style="display: none;">
					<button class="btn btn-danger btn-avatar-footer2">Chọn hình</button>								
                </div>
                <div class="form-group">
                    <p class="txt"><a id="demo_mobile_content" href="#" title="" >Banner Content mobile</a></p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="content_mobile" name="content_mobile" value="<?=$banner[13]?>">
                    </p>
					<p class="control">
                        <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_content_mobile" name="link_content_mobile" value="<?=$banner[14]?>">
                    </p>
					<div class="img"><img class="image-avatar-content_mobile" id="img-content_mobile" src="<?=$banner[13]?>" alt="" /></div>					
					<input class="form-control" type="file" multiple="false" name="upload_content_mobile" id="upload_content_mobile" style="display: none;">
					<button class="btn btn-danger btn-avatar-content_mobile">Chọn hình</button>								
                </div>
				<div class="form-group">
                    <p class="txt"><a id="demo_mobile_left" href="#" title="" >Banner left mobile</a></p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="left_mobile" name="left_mobile" value="<?=$banner[15]?>">
                    </p>
					<p class="control">
                        <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_left_mobile" name="link_left_mobile" value="<?=$banner[16]?>">
                    </p>
					<div class="img"><img class="image-avatar-left_mobile" id="img-left_mobile" src="<?=$banner[15]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_left_mobile" id="upload_left_mobile" style="display: none;">
					<button class="btn btn-danger btn-avatar-left_mobile">Chọn hình</button>								
                </div> 
				<div class="form-group">
                    <p class="txt"><a id="demo_mobile_footer" href="#" title="" >Banner footer mobile</a></p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="footer_mobile" name="footer_mobile" value="<?=$banner[17]?>">
                    </p>
					<p class="control">
                        <input class="form-control input" type="text" placeholder="Link chuyển trang" id="link_footer_mobile" name="link_footer_mobile" value="<?=$banner[18]?>">
                    </p>
					<div class="img"><img class="image-avatar-footer_mobile" id="img-footer_mobile" src="<?=$banner[17]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_footer_mobile" id="upload_footer_mobile" style="display: none;">
					<button class="btn btn-danger btn-avatar-footer_mobile">Chọn hình</button>	
				</div>
				 <div class="form-group">
                         <button type="button" class="btn btn-success" id="editBanner" src-image="" src-path="">Lưu</button>
                </div>
                          
              </div>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
       

      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">mangavip</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<?php
$db->dis_connect();//ngat ket noi mysql	
?>
<!-- ./wrapper -->

<!-- jQuery -->
<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="frontend/file/jquery.caret.min.js"></script>
<script type="text/javascript" src="frontend/file/jquery.tag-editor.js"></script>	
<script type="text/javascript" src="frontend/file/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="frontend/js/jquery.ui.widget.js"></script>

<script type="text/javascript" src="../page/frontend/js/jquery.fileupload.js"></script>
<script type="text/javascript" src="../page/frontend/js/jquery.iframe-transport.js"></script>
<script src="toastr/toastr.min.js"></script>
<script>

var linkOption12=<?php echo json_encode($linkOption1)?>;
$(document).ready(function(){
	
	
	  	$("#demo_header1").tooltip({ content: '<img src="upload/demo/header1.png" />' });
		$("#demo_header2").tooltip({ content: '<img src="upload/demo/header2.png" />' });	
	    $("#demo_content").tooltip({ content: '<img src="upload/demo/content.png" />' });
		
		
$("#demo_footer1").tooltip({ content: '<img src="upload/demo/footer1.png" />' });	
$("#demo_footer2").tooltip({ content: '<img src="upload/demo/footer2.png" />' });	
$("#demo_left").tooltip({ content: '<img src="upload/demo/left.png" />' });	

$("#demo_mobile_left").tooltip({ content: '<img src="upload/demo/mobile_left.png" />' });	
$("#demo_mobile_content").tooltip({ content: '<img src="upload/demo/mobile_content.png" />' });	
$("#demo_mobile_footer").tooltip({ content: '<img src="upload/demo/mobile_footer.png" />' });	
		
	 $('.btn-avatar-header1').click(function(){ $('#upload_header1').trigger('click'); });
	 $('.btn-avatar-header2').click(function(){ $('#upload_header2').trigger('click'); });
	 $('.btn-avatar-content').click(function(){ $('#upload_content').trigger('click'); });
	 $('.btn-avatar-left').click(function(){ $('#upload_left').trigger('click'); });
	 $('.btn-avatar-footer1').click(function(){ $('#upload_footer1').trigger('click'); });
	 $('.btn-avatar-footer2').click(function(){ $('#upload_footer2').trigger('click'); });
	 
	 $('.btn-avatar-content_mobile').click(function(){ $('#upload_content_mobile').trigger('click'); });
	 $('.btn-avatar-left_mobile').click(function(){ $('#upload_left_mobile').trigger('click'); });
	 $('.btn-avatar-footer_mobile').click(function(){ $('#upload_footer_mobile').trigger('click'); });
	 $("#upload_header1").fileupload({
			url: linkOption12+"fileupload/uploadBannerHeader1.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					//$("#header1").text(linkOption12+k.path);
					
					$(".image-avatar-header1").attr("src",linkOption12+k.path);
					document.getElementById('header1').value=document.getElementById("img-header1").src;
					
				}				
				$(".btn-avatar-header1").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-header1").text(progress +"%");
			},
	
		});
		 $("#upload_header2").fileupload({
			url: linkOption12+"fileupload/uploadBannerHeader2.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-header2").attr("src",linkOption12+k.path);
					document.getElementById('header2').value=document.getElementById("img-header2").src;
				}				
				$(".btn-avatar-header2").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-header2").text(progress +"%");
			},
	
		});
		 $("#upload_content").fileupload({
			url: linkOption12+"fileupload/uploadBannerContent.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-content").attr("src",linkOption12+k.path);
					document.getElementById('content').value=document.getElementById("img-content").src;
				}				
				$(".btn-avatar-content").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-content").text(progress +"%");
			},
	
		});
		$("#upload_left").fileupload({
			url: linkOption12+"fileupload/uploadBannerLeft.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-left").attr("src",linkOption12+k.path);
					document.getElementById('left').value=document.getElementById("img-left").src;
				}				
				$(".btn-avatar-left").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-left").text(progress +"%");
			},
	
		});
		$("#upload_footer1").fileupload({
			url: linkOption12+"fileupload/uploadBannerFooter1.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-footer1").attr("src",linkOption12+k.path);
					document.getElementById('footer1').value=document.getElementById("img-footer1").src;
				}				
				$(".btn-avatar-footer1").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-footer1").text(progress +"%");
			},
	
		});
		$("#upload_footer2").fileupload({
			url: linkOption12+"fileupload/uploadBannerFooter2.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-footer2").attr("src",linkOption12+k.path);
					document.getElementById('footer2').value=document.getElementById("img-footer2").src;
				}				
				$(".btn-avatar-footer2").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-footer2").text(progress +"%");
			},
	
		});
		///
		$("#upload_content_mobile").fileupload({
			url: linkOption12+"fileupload/uploadBannerContentMobile.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-content_mobile").attr("src",linkOption12+k.path);
					document.getElementById('content_mobile').value=document.getElementById("img-content_mobile").src;
				}				
				$(".btn-avatar-content_mobile").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-content_mobile").text(progress +"%");
			},
	
		});
		$("#upload_left_mobile").fileupload({
			url: linkOption12+"fileupload/uploadBannerLeftMobile.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-left_mobile").attr("src",linkOption12+k.path);
					document.getElementById('left_mobile').value=document.getElementById("img-left_mobile").src;
				}				
				$(".btn-avatar-left_mobile").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-left_mobile").text(progress +"%");
			},
	
		});
		$("#upload_footer_mobile").fileupload({
			url: linkOption12+"fileupload/uploadBannerFooterMobile.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-footer_mobile").attr("src",linkOption12+k.path);
					document.getElementById('footer_mobile').value=document.getElementById("img-footer_mobile").src;
				}				
				$(".btn-avatar-footer_mobile").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-footer_mobile").text(progress +"%");
			},
	
		});
		 
});
</script> 
<script type="text/javascript" src="<?= $linkOption1?>js/qc/qc.js"></script>    


</body>
</html>
