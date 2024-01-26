<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/single_styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/single_responsive.css')); ?>">
<style>
.google {
    border: 1px solid black !important;
    overflow: hidden;
    height: 200px !important;
}
</style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container contact_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>profil</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Contact Us -->

    <div class="row">

        <div class="col-lg-6 contact_col">
            <div class="contact_contents">
                <h1>Contact Us</h1>
                <p>Ada banyak cara untuk menghubungi kami. Anda dapat menelepon kami atau mengirim email, pilih yang
                    paling cocok untuk Anda..</p>
                <div>
                    <p>No. Hp : 085 327 5555 46</p>
                    <p>Email : maswira@gmail.com</p>
                </div>
            </div>

            <!-- Follow Us -->



        </div>

        <div class="col-lg-6 get_in_touch_col">
            <div class="get_in_touch_contents">
                <h1>Follow Us</h1>
                <ul class="social d-flex flex-row">
                    <li><a href="https://www.facebook.com/maswirajogja/" style="background-color: #3a61c9"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/maswirajogja" style="background-color: #41a1f6"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/maswirajogja/?hl=id" style="background-color: #8f6247"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- Newsletter -->



<?php $__env->stopSection(); ?>
</script>



<script src="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/single_custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>