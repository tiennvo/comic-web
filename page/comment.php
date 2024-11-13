<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start(); 
$email_1="";
if(isset($_SESSION['email'])){
	$email_1=$_SESSION['email'];
}
?>
   <input type="hidden" id="current_page" value="1">
   <input type="hidden" id="id_textarea" value="content_comment">
   <input type="hidden" id="id_textarea_s" value="content_comment_s">
<div class="comment-container">
    <span class="story-detail-title"><i class="fas fa-comments"></i>Bình Luận (<span class="comment-count"><?=$countComment?></span>)</span>

    <div class="group01 comments-container">

        <div class="form-comment main_comment">
            <div class="message-content">
                <div class="input-comment">
                    <span class="col-md-6 col-sm-6 col-xs-12 text-center"><input  class="input" id="name_comment" type="text" placeholder="Họ tên" value="<?=$_SESSION['name_comment']?>"/></span>
                    <span class="col-md-6 col-sm-6 col-xs-12 text-center"><input  class="input" id="email_comment" type="email" placeholder="Email" value="<?=$email_1?>"></span>
                </div>
                <div class="mess-input">
                    <textarea class="textarea" placeholder="Nội dung bình luận" id="content_comment" ></textarea>
                    <button id="emoji_1" type="submit" class="click_emoji"></button>
                    <button type="submit" class="submit_comment " id="submit_comment-id"></button>
                </div>
            </div>
        </div>

        <!--commnets -->
        <div class="list-comment">
            <div id="tam-thoi"></div>
            

        </div>

        <!--commnets -->
    </div>



    <div class="load-more load_more_comment" id="load_comments"><a class="button is-info">Xem thêm nhiều bình luận</a>
    </div>
</div>
