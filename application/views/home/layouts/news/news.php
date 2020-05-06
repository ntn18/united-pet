<div id="blog-home" class="page">
   <div class="container">
      <div class="row">
         <!-- Blog Entries Column -->
         <div class="col-lg-9 page-with-sidebar">
            <div class="row">
               <?php foreach ($danh_sach as $key => $row) {;?>
               <div class="col-lg-6 res-margin">
                  <!-- blog-box -->
                  <div class="blog-box" style="margin-bottom:40px;">
                     <!-- image -->
                     <a href="<?=base_url();?>bai_viet/xem/<?=$row->id;?>">
                        <div class="image" style="height:200px;"><img src="<?=base_url()."assets/images/news/".$row->anh_minh_hoa;?>" alt=""/></div>
                     </a>
                     <!-- blog-box-caption -->
                     <div class="blog-box-caption" style="height:240px;">
                        <!-- date -->
                        <div class="date"><?=$row->ngay_dang;?></div>
                        <a href="<?=base_url();?>bai_viet/xem/<?=$row->id;?>" class="title">
                           <h4><?=$row->tieu_de;?></h4>
                        </a>
                        <!-- /link -->
                        <p><?=$row->mo_ta;?></p>
                     </div>
                     <!-- blog-box-footer -->
                     <div class="blog-box-footer">
                        <div class="author">Đăng bởi<a href="#"><i class="fas fa-user"></i><?=$row->tac_gia;?></a></div>
                        <!-- Button -->
                        <div class="text-center col-md-12">
                           <a href="<?=base_url();?>bai_viet/xem/<?=$row->id;?>" class="btn btn-primary ">Đọc thêm</a>
                        </div>
                     </div>
                     <!-- /blog-box-footer -->
                  </div>
                  <!-- /blog-box -->
               </div>
               <!-- /col-lg-6-->
               <?php   
                        }
                        ;?>
            </div>
            
            <!-- /row -->
            <div class="col-md-12 mt-5">
               <!-- pagination -->
               <nav aria-label="pagination">
                  <ul class="pagination"><?php echo $paginator; ?>
                     <!-- <li class="page-item"><a class="page-link active" href="blog.html#">1</a></li>
                     <li class="page-item"><a class="page-link" href="blog.html#">2</a></li>
                     <li class="page-item"><a class="page-link" href="blog.html#">3</a></li>
                     <li class="page-item"><a class="page-link" href="blog.html#">Tiếp theo</a></li> -->
                  </ul>
               </nav>
               <!-- /nav -->
            </div>
            <!-- /col-md -->
         </div>
         <!-- /page-with-sdiebar -->
         <!-- Sidebar -->
         <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3">
            <!--widget-area -->
            <div class="widget-area">
               <h5 class="sidebar-header">Tìm kiếm</h5>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Tìm...">
                  <span class="input-group-btn">
                  <button class="btn btn-secondary btn-sm" type="button">Tìm!</button>
                  </span>
               </div>
            </div>
            <!--/widget-area -->
            <div class="widget-area">
               <h5 class="sidebar-header">Danh mục</h5>
               <div class="list-group">
                  <a href="blog.html#" class="list-group-item list-group-item-action">
                  Huấn luyện thú cưng
                  </a>
                  <a href="blog.html#" class="list-group-item list-group-item-action">Bác sĩ thú y</a>
                  <a href="blog.html#" class="list-group-item list-group-item-action">Pet Hotel</a>
                  <a href="blog.html#" class="list-group-item list-group-item-action">Vaccines</a>
               </div>
            </div>
            <!--/widget-area -->
            <div class="widget-area">
               <h5 class="sidebar-header">Video của chúng tớ</h5>
               <!-- video -->
               <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/22-OYBWLWU4"></iframe>
               </div>
            </div>
            <!--/widget-area -->
            <div class="widget-area">
               <h5 class="sidebar-header">Tags</h5>
               <div class="tags-widget">
                  <a href="blog.html#" class="badge badge-pill badge-default">Chó</a>
                  <a href="blog.html#" class="badge badge-pill badge-default">Mèo</a>
                  <a href="blog.html#" class="badge badge-pill badge-default">Dinh dưỡng</a>
                  <a href="blog.html#" class="badge badge-pill badge-default">Sự kiện</a>
                  <a href="blog.html#" class="badge badge-pill badge-default">Exotic pets</a>
                  <a href="blog.html#" class="badge badge-pill badge-default">Nhận nuôi</a>
               </div>
            </div>
            <!--/widget-area -->
            <div class="widget-area">
               <h5 class="sidebar-header">Theo dõi chúng tớ</h5>
               <div class="contact-icon-info">
                  <ul class="social-media text-center">
                     <!--social icons -->
                     <li><a href="blog.html#"><i class="fab fa-facebook-square"></i></a></li>
                     <li><a href="blog.html#"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="blog.html#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="blog.html#"><i class="fab fa-pinterest"></i></a></li>
                  </ul>
               </div>
               <!--/contact-icon-info -->
            </div>
            <!--/widget-area -->
         </div>
      </div>
   </div>
</div>