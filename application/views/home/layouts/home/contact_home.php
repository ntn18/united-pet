<section id="contact-home" class="container-fluid">
        <!-- section heading -->
        <div class="section-heading text-center">
            <p class="subtitle">Yêu động vật</p>
            <h2>Liên lạc với chúng tôi</h2>
        </div>
        <!-- /section-heading -->
        <div class="container">
            <div class="row">
                <!-- image -->
                <img src="img/contactbg1.png" class="img-fluid contact-home-img hidden-medium-small" alt="">
                <!-- contact box -->
                <div class="col-lg-5 offset-lg-2 h-100">
                    <div class="contact-form3 bg-secondary" data-aos="flip-right">
                        <div class="contact-image bg-secondary">
                            <!-- envelope icon-->
                            <i class="fas fa-envelope bg-secondary"></i>
                        </div>
                        <h4 class="text-center mt-3 text-light">Gửi tin nhắn cho chúng tôi</h4>
                        <!-- Form Starts -->
                        <div id="contact_form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Tên <span class="required">*</span></label>
                                        <input type="text" name="name" class="form-control input-field" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" name="email" class="form-control input-field" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Tiêu đề</label>
                                        <input type="text" name="subject" class="form-control input-field">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Tin nhắn<span class="required">*</span></label>
                                        <textarea name="message" id="message" class="textarea-field form-control"
                                            rows="3" required=""></textarea>
                                    </div>
                                </div>
                                <!-- button -->
                                <button type="submit" id="submit_btn" value="Submit"
                                    class="btn btn-quaternary btn-block mt-3">Gửi lời nhắn</button>
                            </div>
                            <!-- /form-group-->
                            <!-- Contact results -->
                            <div id="contact_results"></div>
                        </div>
                        <!-- /contact-form-->
                    </div>
                </div>
                <!-- /col-lg-->
                <div class="text-center col-lg-5 res-margin">
                    <h3>Liên lạc</h3>
                    <p>Hoặc liên lạc bằng các thông tin dưới đây</p>
                    <!-- contact icons-->
                    <ul class="list-inline mt-3 list-contact colored-icons font-weight-bold">
                        <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a
                                href="mailto:email@hotro.com">email@hotro.com</a></li>
                        <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>(+84) 456-7889</li>
                    </ul>
                    <!-- /list-->
                    <!--divider-->
                    <hr class="mt-2">
                    <!-- map-->
                    <div id="map-canvas" class="mt-5"></div>
                </div>
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </section>