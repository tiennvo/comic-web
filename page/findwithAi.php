<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
		require_once('model/connection.php'); 
		require_once('function/function.php');
         		
		$db=new config();
		$db->config();
		$linkOption=siteURL();
		$linkOption1=$linkOption."tim-kiem-ai/";	
		$metaFind=$db->GetMetaSeoFind();
		$domain=$_SERVER['SERVER_NAME'];
		$banner=$db->GetAdvertisement();
		$question;
        $result;
        require_once('genAI.php');
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="utf-8">
    <title>Tìm kiếm AI - <?=$domain?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="Tìm kiếm AI - <?=$domain?>">
    <meta property="og:description" content="">
    <link href="<?=$linkOption?>tim-kiem-ai.html" rel="canonical">
    <meta property="og:site_name" content="<?=$domain?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?=$linkOption?>tim-kiếm-ai.html">
    <meta property="fb:pages" content="109139867535054">
    <meta name="copyright" content="Copyright © 2022 <?=$domain?>">
    <meta name="Author" content="<?=$domain?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="<?php echo $linkOption;?>page/frontend/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo $linkOption;?>page/frontend/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $linkOption;?>page/frontend/css/style.css">	
    <link rel="stylesheet" type="text/css" href="<?php echo $linkOption;?>page/frontend/find/read.css" />	
    <script src="<?php echo $linkOption;?>page/js/main.js"></script>
	<script src="<?php echo $linkOption;?>page/js/find/findAI.js"></script>
	<?php include 'googleAnalytics.php';?>
</head>
<body>
    <input type="hidden" id="keyword-default" value="one">
    <div class="outsite ">

	<?php
			require_once('header/headerDetail.php');
	?>
	<section class="main-content">
		<div class="container story-list">
			<div class="title-list">Tìm kiếm với AI</div>
            <!-- <div>
                <?php
                    $question = "Chào bạn?";
                    $result = callApiAndGetResult($question);
                    echo $result;
                ?>
            </div> -->
			<div class="story-list-bl01 box">
				<div class="text-center">
					<button type="button" class="btn btn-info btn-collapse">
						<?php
						  	$advsearch="";				
						   if(isset($_GET["category"])){
						        $advsearch="hidden";
							    	
								echo '<span class="show-text hidden">Hiện </span>';
						        echo '<span class="hide-text">Ẩn </span>khung tìm kiếm';
						   }else{
							 
							   echo '<span class="show-text">Hiện </span>';
						       echo '<span class="hide-text hidden">Ẩn </span>khung tìm kiếm';
						   }		
						?>
						
					</button>
				</div>
				<div class="advsearch-form  <?=$advsearch?>">
                    <br>
                    <div class="form-group row text-center">
						<a class="btn btn-primary btn-sm btn-reset" href="<?php echo $linkOption."tim-kiem-ai.html";?>"><i class="fa fa-repeat"></i> Reset</a>
					</div>
                    <div class="form-group row" style="display: none;">
						<div class="col-sm-10">
						<?php
					
						 $arr2 = $db->GetGenres();
						 $textgenres= "";
						 foreach($arr2 as $textg){				
							$textgenres .= $textg['Id'] . ': ' . $textg['Name'].', ';
						   }
							echo $textgenres;
						 $arrCountry=$db->GetCountryFind();
						 $arrStatus=$db->GetStatusFind();
						 $arrMinchapter=$db->GetMinchapterFind();
						 $arrSort=$db->GetSortFind();
						 function searchCategory($b,$a){
							 $c=0;
							
							foreach ($a as $value) {
							 if($b==$value){
									$c=1;
									break;
								}
							}
							return $c;
						 }
						 $category="";$notcategory="";$category1="";$notcategory1="";$country="";$status="";$minchapter=0;$sort="";
						 if(isset($_GET["category"])){
							 $category=$_GET["category"];
							 $category1=$_GET["category"];
							 if($category !=""){									
								 $category = explode(",", $category);
							 }
						 }
						
						 if(isset($_GET["notcategory"])){
							 $notcategory=$_GET["notcategory"];
							 $notcategory1=$_GET["notcategory"];
							  if($notcategory !=""){									
								 $notcategory = explode(",", $notcategory);
							 }
						 }
						 if(isset($_GET["country"])){
							 $country=$_GET["country"];
						 }
						 if(isset($_GET["status"])){
							 $status=$_GET["status"];
						 }
						 if(isset($_GET["minchapter"])){
							 $minchapter=$_GET["minchapter"];
						 }
						 if(isset($_GET["sort"])){
							 $sort=$_GET["sort"];
						 }
						 // if(isset($_GET["page"])){
							// $page="/trang-".tofloat($_GET["page"]);	
						 // }
						 foreach($arr2 as $muc3){				
							$iconCheck="icon-checkbox";
							if($category !=""){
								if(searchCategory($muc3['Id'],$category)==1){
									$iconCheck="icon-tick";
								}
							}
							if($notcategory !=""){
								if(searchCategory($muc3['Id'],$notcategory)==1){
									$iconCheck="icon-cross";
								}	
							}								
							echo '<div class="col-md-3 col-sm-4 col-xs-6 mrb10">';
								echo '<div class="genre-item" title="'.$muc3['Title'].'">';
									echo '<span class="'.$iconCheck.'" data-id="'.$muc3['Id'].'">';
								echo '</span>'.$muc3['Name'].' </div>';
							echo '</div>';
						   }
						  
						?>
						   
							
						</div>
					</div>

                    <label for="country" class="col-sm-2 col-form-label">Bạn muốn tôi giúp gì</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Hãy nhập gì đó <3">
                        </div>
					</div>
					<div class="form-group clearfix">
                    
						<div class="text-center">
							<button type="button" class="btn btn-success btn-search is-danger">Tìm kiếm</button>
						</div>
					</div>
				</div>
			</div>
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-parent">
                    <?php
                        $category_notcategory="";
						if($category!=""){
							for($i=0;$i<count($category);$i++){
								$c11=$db->GetGenresByIdAndNameCode($category[$i]);
								$category_notcategory.="WHERE Genre LIKE '%".$c11."%'";	
								
								
							}
						}

                        $arr=$db->GetFindAI($category_notcategory,'');
                        storiesList($arr,$linkOption);
                        
                        $totalRecords = $db->GetFindAI($category_notcategory,'total');	
                        $db->dis_connect();//ngat ket noi mysql		
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
	require_once('footer/footerDetail.php');
?>        
</div>
</body>
</html>