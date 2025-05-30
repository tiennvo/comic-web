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
	$id=$_GET['id'];
	
	$arr_news=$db->GetIdNews($id);
   
?>    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Sửa bài viết</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="frontend/file/jquery.tag-editor.css">	
  <link href="toastr/toastr.css" rel="stylesheet" />
  <script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="frontend/file/jquery.caret.min.js"></script>
<script type="text/javascript" src="frontend/file/jquery.tag-editor.js"></script>	
<script type="text/javascript" src="frontend/file/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="frontend/js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="frontend/js/jquery.fileupload.js"></script>
<script type="text/javascript" src="frontend/js/jquery.iframe-transport.js"></script>
<script src="toastr/toastr.min.js"></script>
   
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
        $typeMenu="addNews";
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
            <h1>Sửa bài viết mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sửa bài viết mới</li>
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
              <h3 class="card-title">Thông tin bài viết</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            
              <div class="form-group">
               <div class="img"><img id="idAvatar" class="image-avatar" src="<?php echo $linkOption1.$arr_news[1]?>" alt=""  /></div>
			    <input type="file" multiple="false" name="file" id="uploadavatar" style="display: none;">
                <button class="btn btn-success btn-avatar" id="chon_hinh" >Chọn hình</button>
				<button class="btn btn-warning" id="clear_hinh">Clear hình</button>
              </div>
              <div class="form-group">
               
                  
			    <input type="text" id="Name" class="form-control" placeholder="Nhập tên tiêu đề bài viết" value="<?php echo $arr_news[0]?>">
              </div>
               <div class="form-group">
               
                   
				<textarea name="Content" class="form-control" rows="10" cols="106" id="Content"></textarea>  
              </div>

           
              
              <div class="form-group">
                   <button type="button" class="btn btn-success" id="addNews" src-image="value="<?php echo $arr_news[1]?>"" src-path="">Lưu</button>
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



<script>
	//CKEDITOR.replace('Content');
	
var id=<?php echo json_encode($id)?>;
CKEDITOR.replace('Content', {
      extraPlugins: 'editorplaceholder',
      editorplaceholder: 'Nhập tên nội dung bài viết',
    });
var linkOption12=<?php echo json_encode($linkOption1)?>;
var user=<?php echo json_encode($user)?>;
	 var r1=<?php echo json_encode($arr_news[2]); ?>;
	CKEDITOR.instances.Content.setData(r1);
$(document).ready(function(){
		
   
	$("#addNews").click(function(){
		var path=$('#addNews').attr("src-image");
	   var name=document.getElementById("Name").value;
		var content=CKEDITOR.instances.Content.getData();
	  $.ajax({     
	   url:'ajax/news/edit.php',
	   type:'POST',
	   cache:false,
	   data:{'id':id,'user':user,'path':path,'content':content,'name':name},
	   success:function(kq){
		      var o = JSON.parse(kq);
		       if(o.Error=="Sửa thành công"){
		           toastr.success('Sửa thành công');
		           setTimeout(function(){  location.reload(); }, 2000);
		          
		           
		           
		       }else{
		           toastr.error('Sửa lỗi');
		       }
		       
			 }
	   })
		 
	});
    $('.btn-avatar').click(function(){ $('#uploadavatar').trigger('click');
	  
	});
	
	$("#uploadavatar").fileupload({
			url: "fileupload/uploadNews.php",
			//dataType: 'json',
			done: function (e, data) {	
				
			var k= JSON.parse(data.result);	
			console.log(k);
				if(k.path==""){
					
					alert("Upload fail!!!");
				}else{
					if($('#inputDelImage').val() == ''){
							$('#inputDelImage').val($('#avatar').val());
						}else{
							$('#inputDelImage').val($('#inputDelImage').val() + ',' + $('#avatar').val());
						}
						//alert(data.result.path);
						$("#addNews").attr("src-image",k.path);
						
						$(".image-avatar").attr("src",linkOption12+k.path);
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
