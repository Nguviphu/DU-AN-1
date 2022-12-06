<?php 
  if(is_array($class_detail_for_one_student)){
     extract($class_detail_for_one_student);
  }
?>
              
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-center bg-dark text-white text-uppercase">
                                    Xác nhận thanh toán
                                </div>
                                <div class="card-body">
                                    <form action="index.php?ctrl=update_status" method="POST" id="add_khoahoc">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã sinh viên</label>
                                            <input type="text" name="" class="form-control" disabled  value="PH<?php echo $student_id ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Trạng thái</label>
                                            
                                            
                                            <select name="status" id="" class="form-control">
                                
                                        <option value="<?php echo $status;?>" class="form-control"><?php if(isset($status)&&($status!="")) echo $status;?></option>
                                            
                                        <option value="Đã thanh toán" class="form-control">Đã thanh toán</option>';

                                        
                                            
                                            </select>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                                            <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                            <input type="submit" name="btn_update_status" value="Cập Nhật"
                                                class="btn btn-primary mr-3" />
                                            <a href="index.php?ctrl=confirm"><input type="button" class="btn btn-success"
                                                    value="Danh sách" /></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of content -->