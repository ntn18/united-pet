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
    <?php $this->load->view('home/layouts/adoption/jumbotron')?>
    <!-- /jumbotron -->

    <!-- ==== Page Content ==== -->
    <div class="page">
        <?php $this->load->view('home/layouts/adoption/adoption')?>
    </div>

    <!-- ==== Newsletter - call to action ==== -->
    <?php $this->load->view('home/components/newsletter')?>
    
    <!--/ container-->
    </div>
    <!--/container-fluid-->
    <?php $this->load->view('home/components/footer')?>

    <?php $this->load->view('home/base/script')?>