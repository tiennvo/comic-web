<?php

	session_status() === PHP_SESSION_ACTIVE ?: session_start(); 
	require_once('page/model/connection.php'); 
	require_once('page/function/function.php'); 
	$db=new config();
	$db->config();
	//echo $_SERVER['SERVER_NAME'];
	$linkOption=siteURL();
	$linkOption1=$linkOption."page/";
	$banner=$db->GetAdvertisement();
	$domain=$_SERVER['SERVER_NAME'];
   
?>
<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="vi">
   <head>
       <meta name="google-site-verification" content="2I0e17bT7fcjaz2QcIGkmDtW1RUViBSvLLH2uHdte30" />
       <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WGWWSVM');</script>
<!-- End Google Tag Manager -->
       <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R1NF3VXZFC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R1NF3VXZFC');
</script>
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8462084599469529"
     crossorigin="anonymous"></script>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <title>Truyện tranh online - truyện tranh online ngôn tình full !!</title>
	  <meta name="keyword" content="truyện tranh online, truyện tranh đam mỹ, truyện tranh bách hợp hàn quốc, truyện tranh xuyên không cổ đại, truyện tranh audio, truyện tranh ngôn tình full">
	  <meta name="description" content="Web Truyện tranh online lớn nhất được cập nhật liên tục mỗi ngày - truyện tranh online ngôn tình full, truyện tranh đam mỹ, truyện tranh xuyên không cổ đại">
	  
	  <meta property="og:title" content="truyện tranh online ngôn tình full, truyện tranh đam mỹ, truyện tranh bách hợp hàn quốc, truyện tranh xuyên không cổ đại, truyện tranh audio">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://truyenhh.net/">
	  <meta property="og:site_name" content="<?=$domain?>">
	  <meta property="og:type" content="article">     
	  <meta property="fb:admins" content="100050330791250">
	  <meta property="fb:pages" content="104642545523676">	 
	  <meta name="copyright" content="Copyright © 2022 <?=$domain?>">
	  <meta name="Author" content="<?=$domain?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="<?php echo $linkOption1;?>frontend/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo $linkOption1;?>frontend/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $linkOption1;?>frontend/css/read.css">	  
    <link rel="stylesheet" type="text/css" href="<?php echo $linkOption1;?>frontend/css/style.css">	  
    <script src="<?php echo $linkOption1;?>js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZYEMWG5N62"></script>
   </head>
   <body>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGWWSVM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root" class=" fb_reset">
         <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
         </div>
      </div>
      <input type="hidden" id="keyword-default" value="black">
      <div class="outsite ">
         <?php 
		 require_once('page/header/headerDetail.php');		 
		 ?>
         <!-- /.top-bar -->
       
         <!-- /.login-modal -->
    
         <!-- /.notify-modal -->
        
         <!-- /.main-menu --> 
		<?php
			$tempStory="temp/slider.txt";
			
			$myfile = fopen($tempStory, "r") or die("Unable to open file!");
			if(filesize($tempStory) > 0){
			$name1=fread($myfile,filesize($tempStory));	
			fclose($myfile);
		?>
         <section class="hero">
            <div class="container">
			<?php			
			$arr1=$db->GetSliderStory();
			/////////////////////////////
		
			
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$myJSON=array();
			$dateStart=date('Y-m-d H:i:s');	
			foreach($arr1 as $muc3){			
				$myObj = new stdClass();
				$myObj->dateRandom = $dateStart;
				$myObj->Id = $muc3['Id'];
				$myObj->IdStory = $muc3["IdStory"];	
				$myObj->Name =$muc3["Name"];
				$myObj->Path = $muc3["Path"];
				$myObj->Genre = $muc3["Genre"];
				$myObj->Content = $muc3["Content"];
				$myObj->NameUpdate_Chap = $muc3["NameUpdate_Chap"];
				$myObj->DateUpdate_Chap = $muc3["DateUpdate_Chap"];
				$myObj->Male = $muc3["Male"];
				array_push($myJSON,json_encode($myObj));
				
			}		
			
			
			$temp=convert_string_json($name1);	
			 $o = json_decode($db->chuyen_timer($temp[0]["dateRandom"],$dateStart));	 	
			 if($o->years!=0 || $o->months!=0 || $o->days!=0 || $o->hours!=0) {
					$myfile2 = fopen($tempStory, "w") or die("Unable to open file!");
					fwrite($myfile2, implode(',',$myJSON));
					fclose($myfile2);  
			 }
			 else if($o->minutes!=0) {
				 if($o->minutes>=1){
					$myfile2 = fopen($tempStory, "w") or die("Unable to open file!");
					fwrite($myfile2, implode(',',$myJSON));
					fclose($myfile2); 
				 }
			 }
			////////////////////////////
			?>
               <div class="tile is-ancestor">
			   <?php
				$i=0;
			$random=array("violet","green","orange","blue","red");
			shuffle($random);
			
			   foreach($temp as $muc3)			   			   
			   {
				   $the_loai="truyen-tranh/";
				if($muc3['Male']==1)
				   $the_loai="tieu-thuyet/";   
				$NameStory=$db->GetNameStory($muc3['IdStory']);
$ChapSlider=$linkOption.$the_loai.vn_str_filter($NameStory)."-".$muc3['IdStory']."-chap-".tofloat($muc3['NameUpdate_Chap']).".html";
				$i++;
			 if($i==1 || $i==2){
				if($i==1)	   
				echo '<div class="tile is-3 is-vertical is-parent">';           
                   echo  '<div class="tile is-child">';			  
                     echo   '<a href="'.$ChapSlider.'">';
                         echo  '<div class="hero-item">';
                             echo '<img class="cover" src="page/'.$muc3['Path'].'" alt="cover" width="290px" height="191px">';
                              echo'<div class="bottom-shadow"></div>';
                              echo '<div class="captions">';
                                echo '<h3>'.$muc3['Name'].'</h3>';
								echo'</div>';
                              echo'<div class="chapter '.$random[$i-1].'">'.$muc3['NameUpdate_Chap'].'</div>';
                           echo'</div>';
                          
				echo'</a>';
				echo'</div>';
				
				if ($i==2) echo'</div>';
				
				}
                if($i==3){
				echo '<div class="tile is-parent">';
                 echo '<div class="tile is-child">';
                       echo   '<a href="'.$ChapSlider.'">';
                         echo  '<div class="hero-item has-excerpt">';
                            echo  '<img class="cover" src="page/'.$muc3['Path'].'" alt="cover">';
                             echo '<div class="bottom-shadow"></div>';
								echo '<div class="captions">';
                                 echo '<h5>Thể loại: '.$muc3['Genre'].'</h5>';
                                echo '<h3>'.$muc3['Name'].'</h3>';
                              echo '</div>';
                              echo '<div class="chapter '.$random[$i-1].'">'.$muc3['NameUpdate_Chap'].'</div>';
								echo '<div class="excerpt">'.ConvertStr($muc3['Content'],3).'</div>';
                           echo '</div>';                       
                        echo '</a>';
                     echo '</div>';
				echo '</div>';
				 }
				if($i==4 || $i==5){
				if($i==4)	   
				echo '<div class="tile is-3 is-vertical is-parent">';           
                   echo  '<div class="tile is-child">';
                     echo   '<a href="'.$ChapSlider.'">';
                         echo  '<div class="hero-item">';
                             echo '<img class="cover" src="page/'.$muc3['Path'].'" alt="cover" width="290px" height="191px">';
                             echo '<img class="cover" src="page/'.$muc3['Path'].'" alt="cover" width="290px" height="191px">';
                              echo'<div class="bottom-shadow"></div>';
                             echo '<div class="captions">';
                                echo '<h3>'.$muc3['Name'].'</h3>';
								echo'</div>';
                              echo'<div class="chapter '.$random[$i-1].'">'.$muc3['NameUpdate_Chap'].'</div>';
                           echo'</div>';
                          
				echo'</a>';
				echo'</div>';
				if ($i==5) echo'</div>';
				}				   					  			   			   
			   }
			
				?>
               </div>
            </div>
         </section>
         <!-- /.hero -->   
		<?php
			}
		$arr_Release=$db->GetRelease();		
		$date_Release=date("d/m/Y", strtotime(date('Y-m-d')));
		
		if(count($arr_Release)>0){
		?>	
         <section class="schedule">
            <div class="container">
               <div class="schedule-inner">
                  <div class="time">
                     Lịch Ra Truyện Ngày <?php echo $date_Release ?>      
                  </div>
                  <!-- /.time -->
                  <ul class="schedule-list">
				     <?php
					 foreach($arr_Release as $muc3)	{
							 $the_loai="truyen-tranh/";
							if($muc3['Male']==1)
							   $the_loai="tieu-thuyet/"; 
							echo '<li><a href="'.$the_loai.vn_str_filter($muc3['Name']).'-'.$muc3['IdStory'].'.html"><strong class="'.$muc3['Type'].'">['.$muc3['TimeRelease'].']</strong> '.$muc3['Name'].' - Chương '.$muc3['NameChap'].'</a></li>';
						}
					 ?>
                     
                    
                  </ul>
                  <!-- /.schedule-list -->
               </div>
               <!-- /.schedule-inner -->
            </div>
         </section>
         <!-- /.schedule -->    
       <?php
	   }
	   ?>
	   
         <!-- <section class="right-bar pc">
            <div class="top-right-bar">
               <div class="right-bar-item">
                  <a href="#home"><span class="group-icon"></span></a>
               </div>
               <div class="right-bar-item">
                  <a href="#list-update">
                  <span class="starts-icon"></span>
                  Truyện tranh cập nhật
                  </a>
               </div>
               <div class="right-bar-item">
                  <a href="#list-female">
                  <span class="female-icon"></span>
                  Top ngày
                  </a>
               </div>
            </div>
            
         </section> -->
         <!-- /.right-bar -->
         <section class="main-content index">
            <div class="container">
               <div class="latest">
                  <div class="caption" id="list-update"><a href="<?php echo $linkOption;?>truyen-tranh-hay.html"><span class="starts-icon"></span>Truyện tranh mới cập nhật</a></div>
                  <?php
						$arrLatest=$db->GetLatest();
						storiesList($arrLatest,$linkOption);
				  ?>
                  <!-- /.list-stories -->
                  <!-- <div class="has-text-centered">
                     <a href="<?php echo $linkOption;?>truyen-tranh-hay/trang-2.html" class="view-more-btn">Xem thêm nhiều truyện</a>
                  </div> -->
               </div>
               <!-- /.latest -->
               <div class="female">
                  <div class="caption" id="list-female"><a href="<?php echo $linkOption;?>top-ngay.html"><span class="female-icon"></span>Top ngày</a></div>
                  <div class="tile is-ancestor">
                     <div class="tile is-vertical is-parent">
						<?php
						 $date=findTop("day");
						 $arrFemaleIndex=$db->GetFemaleIndex($date);
						 storiesList($arrFemaleIndex,$linkOption);
						?>
                        <!-- /.list-stories -->
                     </div>
                  </div>
               </div>
               <!-- /.female -->
               
               <!-- /.male -->
            </div>
            <div id="Top" class="scrollTop none" style="display: none;">
               <span><a href="index.html"><img src="<?php echo $linkOption1?>frontend/images/back-to-top-icon.png"></a></span>
            </div>
         </section>
         <!-- /.main-content -->        
         <!-- <div class="container quick-link">
            <ul class="list-inline">
               <li>
                  <a href="index.html" title="Truyen tranh">
                  <strong class="text-link">Truyen tranh</strong>
                  </a>
               </li>
               <li>
                  <a href="index.html" title="Truyện tranh">
                  <strong class="text-link">Tieu thuyet</strong>
                  </a>
               </li>
               <li>
                  <a href="index.html" title="Truyen tranh online">
                  <strong class="text-link">Truyen tranh online</strong>
                  </a>
               </li>
               <li>
                  <a href="index.html" title="Truyện tranh online">
                  <strong class="text-link">Truyện tranh online</strong>
                  </a>
               </li>
               <li>
                  <a href="index.html" title="Doc truyen tranh">
                  <strong class="text-link">Doc truyen tranh</strong>
                  </a>
               </li>
               <li>
                  <a href="index.html" title="Đọc truyện tranh">
                  <strong class="text-link">Đọc truyện tranh</strong>
                  </a>
               </li>
               <li>
                  <a href="index.html" title="Manhua">
                  <strong class="text-link">Manhua</strong>
                  </a>
               </li>
               <li>
                  <a href="index.html" title="Manga">
                  <strong class="text-link">Manga</strong>
                  </a>
               </li>
            </ul>
         </div> -->
           <?php	
				require_once('page/footer/footerDetail.php');	
			?> 
			
	   
      </div>	  
	   <script>
	   var linkOption1=<?php echo json_encode($linkOption1)?>;
	   </script>
   </body>
</html>