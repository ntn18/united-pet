<div class="page container">
   <div class="row">
      <div class="col-lg-7">
         <h2>Cứu hộ</h2>
         <p class="mt-4">Đây là nơi cập nhật những ca cứu hộ 24/7. Có những ca đã được giải quyết, có những ca chưa...</p>
         <p class="font-weight-bold">Nếu bạn có thể giúp, hãy gọi ngay đến hotline <span style="color: red;font-size: 20px;font-weight: bold;">1900-123-456</span> hoặc <a href="#">Liên hệ với chúng tôi</a>
         </p>
      </div>
	  <!-- /col-lg -->
      <div class="col-lg-5 card bg-light">
         <h5>Sẵn sàng</h5>
         <ul class="checkmark pl-0 font-weight-bold">
            <li>Tiếp nhận tất cả những ca cứu hộ có thể</li>
            <li>Chăm sóc và tìm chủ mới cho những ca cứu hộ ấy</li>
         </ul>
      </div>
	  <!-- /col-lg -->
   </div>

   <?php foreach ($danh_sach as $key => $row) {;?>
   <!-- Gallery -->
   <div id="gallery-isotope" class="row row-eq-height mt-lg-5">
      <!-- Rescue 1 -->
      <div class="dogs col-lg-6">
         <div class="isotope-item">
            <div class="adopt-card res-margin row bg-light pattern2">
               <div class="col-md-5">
                  <!-- Image -->
                  <div class="adopt-image d-flex flex-wrap align-items-center ">
                     <a href="<?=base_url();?>cuu_ho/xem/<?=$row->case_id;?>">
                     </a>
                  </div>
               </div>
               <div class="col-md-7 res-margin">
                  <!-- Name -->
                  <div class="caption-adoption">
                     <h5 class="adoption-header"><a href="<?=base_url();?>cuu_ho/xem/<?=$row->case_id;?>"><?=$row->case_id;?></h5>
                     <!-- List -->
                     <ul class="list-unstyled">
                        <li><strong>Tiếp nhận:</strong><span><?=$row->tiep_nhan_id;?></span></li>
                        <li><strong>Địa điểm:</strong><?=$row->dia_diem_cuu;?></li>
                        <li><strong>Loài:</strong><?=$row->loai_pet_id;?></li>
                        <li><strong>Tình trạng:</strong><?=$row->tinh_trang;?></li>
                        <li><strong>Mức độ:</strong><span style="color: red;font-weight: bold;"><?=$row->muc_do_id;?></span></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 mt-3">
                  <!-- Button -->	
                  <div class="text-center">
                     <!-- button-->
                     <a href="<?=base_url();?>bai_viet/xem/<?=$row->case_id;?>" class="btn btn-primary">Thêm thông tin</a>
                  </div>
                  <!-- /text-center -->
               </div>
               <!-- /col-md -->
            </div>
            <!-- /adopt-card -->
         </div>
         <!-- /isotope-item--> 
         <?php   
                        }
                        ;?>
      </div>
      <!-- /col-lg- --> 
      <!-- Rescue 2 -->
      	
	    <div class="col-md-12 mt-5">
		   <!-- pagination -->
		   <nav aria-label="pagination">
			  <ul class="pagination"><?php echo $paginator; ?>
				 <!--<li class="page-item"><a class="page-link active" href="adoption.html#">1</a></li>
				 <li class="page-item"><a class="page-link" href="adoption.html#">2</a></li>
				 <li class="page-item"><a class="page-link" href="adoption.html#">3</a></li>
				 <li class="page-item"><a class="page-link" href="adoption.html#">Tiếp theo</a></li>-->
			  </ul>
		   </nav>
		   <!-- /nav -->
		</div>
		<!-- /col-md -->  
</div>