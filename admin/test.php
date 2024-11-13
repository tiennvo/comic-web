<?php
include 'class.cURL.php';
$curl = new cURL();

        $url="http://truyenqqpro.com/truyen-tranh/dao-hai-tac-128";
        $string = $curl->getContent($url);
        if (!preg_match('#<meta charset="utf-8">#imsU', $string)) {
            preg_match('#document.cookie="VinaHost-Shield=(.*)"#imsU', $string, $shield);
            $header = [
                'Cookie: VinaHost-Shield=' . $shield[1] . ';'
            ];
           $string = $curl->getContent($url, $header);
        }
        preg_match('#class="list01">(.*)<ul class="story-detail-menu"#ismU', $string, $theloai);
        preg_match_all('#<li class="li03">(.*)</li>#imsU', $theloai[1], $genres);
       $arr_genre=array();
      for($i=0;$i<count($genres[1]);$i++){	
        	 preg_match_all('#<a.*>(.*)</a>#imsU', $genres[1][$i], $gen1);	
        	
        	 array_push($arr_genre,$gen1[1][0]);
             
        }
      
    function implodeGenres(array $listGenres,$curl)
    {
        $data = '';
        if (!is_array($listGenres)) {
            return false;
        }

        foreach ($listGenres as $key => $genre) {
            $data .= $curl->slug($genre) . ',';
        }
        return rtrim($data, ',');
    }
      
        echo implodeGenres($arr_genre,$curl);



?>