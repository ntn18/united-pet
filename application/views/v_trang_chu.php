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
    <!-- ==== Slider ==== -->
    <?php $this->load->view('home/layouts/home/slider')?>
    <!-- /container-fluid -->
    <!-- ==== Page Content ==== -->
    <!-- section -->
    <?php $this->load->view('home/layouts/home/intro_home')?>
    <!-- /section ends -->
    <!-- section -->
    <?php $this->load->view('home/layouts/home/call_widget')?>
    <!-- /section-->
    <!-- section -->
    <?php $this->load->view('home/layouts/home/services_home')?>
    <!-- /section ends -->
    <!-- section -->
    <?php $this->load->view('home/layouts/home/about_home')?>
    <!-- /section ends -->
    <!-- section -->
    <?php $this->load->view('home/layouts/home/adoption_home')?>
    <!-- /section ends -->
    <!-- section -->
    <?php $this->load->view('home/layouts/home/gallery_home')?>
    <!-- /section ends -->
    <!-- section -->
    <?php $this->load->view('home/layouts/home/blogprev_home')?>
    <!-- /section ends-->
    <!-- section-->
    <?php $this->load->view('home/layouts/home/team_home')?>
    <!-- /section ends-->
    <!-- Section  -->
    <?php $this->load->view('home/layouts/home/counter_section')?>
    <!-- /section ends-->
    <!-- section-->
    <?php $this->load->view('home/layouts/home/contact_home')?>
    <!-- /section -->
    <!-- ==== Newsletter - call to action ==== -->
    <?php $this->load->view('home/components/newsletter')?>
    
    <!--/ container-->
    </div>
    <!--/container-fluid-->
    <?php $this->load->view('home/components/footer')?>

    <?php $this->load->view('home/base/script')?>