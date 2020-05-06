<div class="page container">
   <div class="row">
      <!-- page with sidebar starts -->
      <div class="col-lg-9 page-with-sidebar">
         <div class="row">
            <div class="col-lg-12">
               <!-- contact-info-->
               <h2>Thông tin liên hệ </h2>
               <p>Các bạn có thể liên hệ với chúng tôi bằng các cách sau:
               </p>
			    <!-- contact info boxes start-->
               <div class="contact-info res-margin">
                  <div class="row res-margin mt-5 res-margin">
                     <div class="col-lg-4 mt-5">
                        <div class="contact-icon bg-light">
                           <!---icon-->
                           <i class="fa fa-envelope top-icon"></i>
                           <!-- contact-icon info-->
                           <div class="contact-icon-info">
                              <h5>Gửi email</h5>
                              <p><a href="mailto:email@hotro.com">email@hotro.com</a></p>
                           </div>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                     <div class="col-lg-4 mt-5 res-margin">
                        <div class="contact-icon bg-light">
                           <!---icon-->
                           <i class="fa fa-map-marker top-icon"></i>
                           <!-- contact-icon info-->
                           <div class="contact-icon-info">
                              <h5>Trực tiếp</h5>
                              <p>Học viện ngân hàng</p>
                           </div>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                     <div class="col-lg-4 mt-5 res-margin">
                        <div class="contact-icon bg-light">
                           <!---icon-->
                           <i class="fa fa-phone top-icon"></i>
                           <!-- contact-icon info-->
                           <div class="contact-icon-info">
                              <h5>Điện thoại</h5>
                              <p>(+84) 456-7889</p>
                           </div>
                        </div>
                     </div>
                     <!-- /contact-icon-->
                  </div>
                  <!-- /row -->
               </div>
               <!-- /contact-info-->
            </div>
            <!-- /col-lg-->
            <!-- contact-info-->
            <div class="contact-info col-lg-12 mt-5 res-margin">
               <h3>Gửi lời nhắn đến chúng tôi</h3>
               <!-- Form Starts -->
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
                     <button onClick="alert('Cảm ơn lời nhắn của bạn đén chúng tôi...')" type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Gửi phản hôi</button>
                  </div>
                  <!-- /form-group-->
                  <!-- Contact results -->
                  <div id="contact_results"></div>
               </div>
               <!-- /contact)form-->
            </div>
            <!-- /contact-info-->
         </div>
         <!-- /row-->
         <!-- map-->
         <div id="map-canvas" class="mt-5 map-small-height container"></div>
         <!-- /map-->
      </div>
      <!-- /page-with-sidebar -->
      <!-- ==== Sidebar ==== -->
      <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3 ">
         <div class="widget-area">
            <h5 class="sidebar-header">Sự kiện nhận nuôi</h5>
            <!-- event 1 -->		 
            <div class="widget2">
               <div class="card" >
                  <div class="card-img">
                     <!-- image event -->	
                     <a href="event-single.php">
                     <img class="card-img-top" src="img/adoption/adoptionsidebar1.jpg" alt="">
                     </a>
                  </div>
                  <!-- /card-img -->
                  <div class="card-body">
                     <!-- event info -->	
                     <a href="event-single.php"> 
                        <h6 class="card-title">Hà Nội</h6>
                     </a>
                     <!-- list -->
                     <ul class="list-inline colored-icons">
                        <li class="list-inline-item"> <span><i class="fas fa-calendar-alt mr-2"></i>8h ngày 11 tháng 3</span></li>
                        <li class="list-inline-item">	<span><i class="fas fa-map-marker-alt mr-2"></i>Học Viện Ngân Hàng</span></li>
                     </ul>
                     <!-- button -->	
                     <div class="text-center">
                        <a href="event-single.php" class="btn btn-primary  btn-sm mt-0">Thêm thông tin</a>
                     </div>
                  </div>
                  <!--/card-body -->	
               </div>
               <!-- /card -->	
            </div>
            <!--/widget2 -->
         </div>
         <!--/widget-area -->
         <div class="widget-area">
            <h5 class="sidebar-header">Thông tin</h5>
            <p>Yêu thương động vật.</p>
            <h5 class="sidebar-header">Nhận nuôi</h5>
            <div class="widget1">
               <!-- widget info 1 -->
               <div class="col-lg-12">
                  <a href="adoption-single.php#">
                     <div class="widget-1-info">
                        <!-- image -->
                        <img src="img/adoption/adoption2.jpg"  alt="" class="img-fluid rounded">
                        <span>Lóng</span>           
                     </div>
                  </a>
               </div>
               <!-- widget info 1 -->
               <div class="col-lg-12">
                  <a href="adoption-single.php#">
                     <div class="widget-1-info">
                        <!-- image -->
                        <img src="img/adoption/adoption3.jpg"  alt="" class="img-fluid rounded">
                        <span>Yoshida</span>           
                     </div>
                  </a>
               </div>
               <!-- widget info 1 -->
               <div class="col-lg-12">
                  <a href="adoption-single.php#">
                     <div class="widget-1-info">
                        <!-- image -->
                        <img src="img/adoption/adoption5.jpg" alt="" class="img-fluid rounded">
                        <span>Mĩ Lệ</span>           
                     </div>
                  </a>
               </div>
               <!-- /col-lg-12 -->
               <div class="text-center">
                  <a href="adoption.php" class="btn btn-primary btn-sm">Xem tất cả</a>
               </div>
            </div>
            <!-- /widget1 -->
         </div>
         <!-- /widget-area -->
      </div>
      <!-- /sidebar -->   </div>
   <!-- /row -->
</div>