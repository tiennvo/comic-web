<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start(); 
require_once('model/connection.php');
require_once('function/function.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<?php
    $db=new config();
	$db->config();	
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

	$id="";
if(isset($_GET['id']))	
$id=$_GET['id'];	

	$arr_story= $db->GetStory();
	$img_slider= $db->GetPathSliderById($id);
   
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
        $typeMenu="editSlider";
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
                	<div class="img"><img id="idAvatar" class="image-avatar" src="<?=$img_slider[0]?>" alt=""  /></div>
                    <input type="file" multiple="false" name="file" id="uploadavatar" style="display: none;">
                    <button class="button is-danger btn-avatar" id="chon_hinh" >Chọn hình</button>
              </div>
              <div class="form-group">
                 
                                <p class="txt">Name</p>
                                <select id='selUser' class="form-control">
								<option value='0'>-- Select Name --</option> 
								<?php
								   foreach($arr_story as $muc)
									{
											if($img_slider[1]==$muc['Id'])
											 echo '<option value="'.$muc['Id'].'" selected>'.$muc['Name'].'</option>';
											else
											 echo '<option value="'.$muc['Id'].'">'.$muc['Name'].'</option>'; 												
										 
									}	
								?>											
								</select>   
                            
              </div>
                <div class="form-group">
                     <button class="button is-danger"  id="editSlider" data-id="<?=$id?>" src-image="<?=$img_slider[0]?>" src-path="">Lưu</button>
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
<script src="toastr/toastr.min.js"></script>	
<script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
<link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>

<script>
var linkOption12=<?php echo json_encode($linkOption1)?>;
$(document).ready(function(){
		
    $("#selUser").select2();
	$("#editSlider").click(function(){
		var id=$('#editSlider').attr("data-id");
		var path=$('#editSlider').attr("src-image");
		var idStory = $('#selUser').val();
		
	  $.ajax({     
	   url:linkOption12+'ajax/slider/edit.php',
	   type:'POST',
	   cache:false,
	   data:{'id':id,'idStory':idStory,'path':path},
	   success:function(kq){
		   var o = JSON.parse(kq);
		   console.log("a"+o.Error+"b");
		       //location.reload();
			 }
	   })
		 
	});
    $('.btn-avatar').click(function(){ $('#uploadavatar').trigger('click');
	  
	});
	
	$("#uploadavatar").fileupload({
			url: "fileupload/uploadSlider.php",
			//dataType: 'json',
			done: function (e, data) {	
				
			var k= JSON.parse(data.result);	
			//console.log(k.name);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					
						//alert(data.result.path);
						console.log(k.path);
						$("#editSlider").attr("src-image",k.path);
						
						$(".image-avatar").attr("src",k.path);
						//$("#avatar").val(data.result.path);
				}				
				
				
				$(".btn-avatar").text('Chọn Hình...');
			},
			progressall: function (e, data) {
				//alert(data.loaded);
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$(".btn-avatar").text(progress +"%");
			},
	
		});
});
</script>       


</body>
</html>
