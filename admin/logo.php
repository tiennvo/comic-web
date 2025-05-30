
<!DOCTYPE html>
<html lang="en">
    
<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start(); 
require_once('model/connection.php');
require_once('function/function.php');
$db=new config();
$db->config();	
$linkOption=siteURL();
	$linkOption1=$linkOption."page/";
	if(isset($_SESSION['email'])){
		if($db->GetLevelUser($_SESSION['email'])<2){
			header("location:".$linkOption);
		}
	}else{
		header("location:".$linkOption);
	}

	$logo=$db->GetLogo();	
   //echo $logo[1];
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
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
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
        $typeMenu="logo";
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
            <h1>Thêm truyện mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm truyện mới</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
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
                <div class="field">
                   <p class="txt">Logo</p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="logo" name="logo" value="<?php echo $logo[1]?>">
                    </p>						
					<div class="img"><img class="image-avatar-logo" id="img-logo" src="<?php echo $logo[1]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_logo" id="upload_logo" style="display: none;">
					<button class="btn btn-danger btn-avatar-logo">Chọn hình</button>								
                </div>
                <div class="field">
                    <p class="txt">logo on</p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="logo_on" name="logo_on" value="<?php echo $logo[2]?>">
                    </p>
				
					<div class="img"><img class="image-avatar-logo_on" id="img-logo_on" src="<?php echo $logo[2]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_logo_on" id="upload_logo_on" style="display: none;">
					<button class="btn btn-danger btn-avatar-logo_on">Chọn hình</button>
                </div>
                <div class="field">
                    <p class="txt">favicon</p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="favicon" name="favicon" value="<?=$logo[3]?>">
                    </p>
					
					<div class="img"><img class="image-avatar-favicon" id="img-favicon" src="<?=$logo[3]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_favicon" id="upload_favicon" style="display: none;">
					<button class="btn btn-danger btn-avatar-favicon">Chọn hình</button>								
                </div>
				<div class="field">
                    <p class="txt">group</p>
                    <p class="control">
                        <input class="form-control input" type="text" placeholder="Ảnh" id="group" name="group" value="<?=$logo[4]?>">
                    </p>
					
					<div class="img"><img class="image-avatar-group" id="img-group" src="<?=$logo[4]?>" alt="" /></div>					
					<input type="file" multiple="false" name="upload_group" id="upload_group" style="display: none;">
					<button class="btn btn-danger btn-avatar-group">Chọn hình</button>								
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       

      </div>
      <div class="row">
        <div class="col-12">
          <button type="button" class="btn btn-success" id="editLogo">Lưu</button>
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
	 $('.btn-avatar-logo').click(function(){ $('#upload_logo').trigger('click'); });
	 $('.btn-avatar-logo_on').click(function(){ $('#upload_logo_on').trigger('click'); });
	 $('.btn-avatar-favicon').click(function(){ $('#upload_favicon').trigger('click'); });
	 $('.btn-avatar-group').click(function(){ $('#upload_group').trigger('click'); });
	 var dateRandom = new Date();
	
	 $("#upload_logo").fileupload({
			url: linkOption12+"fileupload/uploadLogo.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					
					$(".image-avatar-logo").attr("src", linkOption12+k.path+"?"+dateRandom.getTime());
					
					//$(".image-avatar-logo").attr("src",linkOption12+k.path);
					document.getElementById('logo').value=document.getElementById("img-logo").src;
					
				}				
				$(".btn-avatar-logo").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-logo").text(progress +"%");
			},
	
		});
		 $("#upload_logo_on").fileupload({
			url: linkOption12+"fileupload/uploadLogoOn.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-logo_on").attr("src", linkOption12+k.path+"?"+dateRandom.getTime());
					document.getElementById('logo_on').value=document.getElementById("img-logo_on").src;
				}				
				$(".btn-avatar-logo_on").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-logo_on").text(progress +"%");
			},
	
		});
		 $("#upload_favicon").fileupload({
			url: linkOption12+"fileupload/uploadLogoFavicon.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-favicon").attr("src", linkOption12+k.path+"?"+dateRandom.getTime());
					document.getElementById('favicon').value=document.getElementById("img-favicon").src;
				}				
				$(".btn-avatar-favicon").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-favicon").text(progress +"%");
			},
	
		});
		$("#upload_group").fileupload({
			url: linkOption12+"fileupload/uploadLogoGroup.php?linkOption12="+linkOption12,
			
			done: function (e, data) {
				var k=JSON.parse(data.result);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					//console.log(linkOption12+k.path);
					$(".image-avatar-group").attr("src", linkOption12+k.path+"?"+dateRandom.getTime());
					document.getElementById('group').value=document.getElementById("img-group").src;
				}				
				$(".btn-avatar-group").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar-group").text(progress +"%");
			},
	
		});
		
		 
});
</script> 
<script type="text/javascript" src="<?= $linkOption1?>js/logo/logo.js"></script>  

</body>
</html>
