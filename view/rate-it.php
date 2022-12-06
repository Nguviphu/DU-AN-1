

<?php
    if(isset($id_class_detail)) {
        $id = $id_class_detail['id'];

        ?>
   
<div class="porto-u-main-heading">
    <h2 style="font-weight:700;color:#000000;font-size:30px;line-height:40px;">Đánh giá của bạn.</h2>

    <div class="porto-price-boxes pricing-table  pricing-table-flat">
        
    <form action="index.php?ctrl=rate-it" method="post">
        <div class="input-group mb-3">
            <input type="text" name="rate_it_content" class="form-control" placeholder="Viết đánh giá" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <input type="hidden" name="id_class_detail" value="<?=$id ?>">
            <input type="submit" name="send" class="input-group-text" value="Đánh giá">
            
          </div>
          <p style="color: red;"><?php if(!empty($error['rate_it_content'])) echo $error['rate_it_content'] ?></p>
          
    </form>

    </div>

    </div>
</div>
<br>
<br>
<!-- End content -->

<?php

     }else{
        if(!isset($_SESSION['info_user'])) {
            echo '<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Bạn bắt buộc phải đăng nhập để có thể  đánh giá.</h5>';

        }
     }

     

?>

