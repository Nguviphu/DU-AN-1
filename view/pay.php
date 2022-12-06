  

  <?php 

  if(isset($_POST['submit-course']) && ($_POST['submit-course'])) {
    
  
  ?>
        <div class="box-pay-total">
                <marquee behavior="" direction=""><h3 style="color: #D0001E;">Quý học viên vui lòng thanh toán tại đây.</h3></marquee>
                <img src="./public/image/Hoàn thành 13.gif" alt="">
                <div class="pay">
                        <h2>Quét mã QR</h2>
                        <img src="./public/image/qrcode.png" alt="">
                        <p>* Quý khách vui lòng thanh toán khóa học bằng việc quét mã QR Code</p>
                        <div class="border-bottom"></div>
                        <p>Tên ngân hàng: <mark>Trung Tâm Anh Ngữ ESILK</mark></p>
                        <div class="border-bottom"></div>
                        <p>Học viên thanh toán: <mark><?php echo $_SESSION['info_user']['name']  ?></mark></p>

                        
                        
                </div>


                
                        <a href="index.php?ctrl=finish-pay"><button type="button" title="" target="_self"
                            class="btn btn-modern btn-borders btn-lg btn-primary btn-bottom">Hoàn thành</button></a>
        </div>
                        
                
        
<?php  
  }else{

?>

<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Bạn chưa có khóa học nào để thanh toán. Vui lòng chọn khóa học.</h5>

<?php

  }
?>