<?php

if(isset($_POST['send']) && ($_POST['send'])) {
    

 ?>
<div class="video">
        <video src="public/video/Cảm ơn bạn đã đánh giá.mp4" width="1300" height="500"   autoplay ></video>
       
    </div>

    <div class="previous">
    <a href="index.php?ctrl=course-assessment"><button type="button" title="" target="_self"
    class="btn btn-modern btn-borders btn-lg btn-primary btn-bottom">Đánh giá khóa học khác</button></a>
    </div>

   <?php

}else{
    echo '<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Trang trống.</h5>';
}
?>