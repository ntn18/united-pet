<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('home/base/head')?>
<!-- ==== body starts ==== -->

<body id="top">
    <!-- Preloader  -->
    <?php $this->load->view('home/base/preloader')?>
    <!--/Preloader ends -->
    <!-- nav -->
    <?php $this->load->view('home/components/nav')?>
    <!-- /nav -->

    <!-- Jumbotron -->
    <?php $this->load->view('home/layouts/contact/jumbotron')?>
    <!-- /jumbotron -->

    <!-- ==== Page Content ==== -->
    <div class="page">
        <?php $this->load->view('home/layouts/contact/contact')?> 
    <!-- </div> 
     <div id="contact_form">
                  <div class="form-group">
                    <form method="POST" enctype="multipart/form-data" action="<?=base_url().'admin/quan_tri_phan_hoi/thuc_hien_them_moi_phan_hoi';?>">
                     <div class="row">
                        <div class="col-md-6">
                           <label>Tên<span class="required">*</span></label>
                           <input type="text" name="txtHoTen" class="form-control input-field" required=""> 
                        </div>
                        <div class="col-md-6">
                           <label>Email <span class="required">*</span></label>
                           <input type="email" name="txtEmail" class="form-control input-field" required=""> 
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <label>Tiêu đề</label>
                           <input type="text" name="txtTieuDe" class="form-control input-field"> 
                        </div>
                        <div class="col-md-12">
                           <label>Lời nhắn<span class="required">*</span></label>
                           <textarea name="txtLoiNhan" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                        </div>
                     </div>
                     <button onClick="alert('Thanks for your feedback')" type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Gửi phản hôi</button>
                  </div>
              </form>
          </div>
      </div> -->
      

    <!-- ==== Newsletter - call to action ==== -->
    <?php $this->load->view('home/components/newsletter')?>
    
    <!--/ container-->
    </div>
    <!--/container-fluid-->
    <?php $this->load->view('home/components/footer')?>

    <?php $this->load->view('home/base/script')?>