    <!-- Content -->
    <h5 class="title-hocphi">Tham gia lớp học cùng với ESILK với học phí cực kì hợp lí!</h5>
    <br>

    <div class="porto-u-main-heading">
        <h2 style="font-weight:700;color:#000000;font-size:30px;line-height:40px;">Học phí lớp 1 thầy 1 trò</h2>
        <?php if (isset($mess)) { ?>
            <h2 style="font-weight:400;color:red;font-size:30px;line-height:40px;"><?= $mess; ?></h2>

        <?php } ?>
    </div>
    <div class="row box_dk_lop">
        <div class="col-md-2">
            <?php foreach ($classes as $value) { ?>
                <div class="col-md-5">
                    <img class="img-rounded" src="public/image/content1.png" alt="" width="150px">
                </div>
                <form action="index.php?ctrl=dklop" method="POST">
                    <ul>
                        <li><?= $value['subject']; ?></li>
                        <li><?= $value['number_session']; ?> Buổi </li>
                        <li><strong><?= $value['price']; ?> đ/<?= $value['number_session']; ?> buổi</strong></li>
                    </ul>
                    <input type="hidden" name="id_lop" value="<?= $value['id']; ?>">
                    <button type="submit" title="" target="_self" class="btn btn-primary">HỌC THỬ MIỄN PHÍ</button>
                </form>
            <?php } ?>
        </div>
    </div>
    </div>
    <!-- End content -->