<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/contact_styles.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/styles/contact_responsive.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container contact_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Map Container -->

    <div class="row">
        <div class="col">
            <div id="google_map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6648.128697635077!2d110.40640743547051!3d-7.7897199079993245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x822239245295f074!2sRumah%20Herbal%20Ibnul%20Baria!5e0!3m2!1sid!2sid!4v1614743255412!5m2!1sid!2sid"
                    width="1110" height="500" border="1px solid balck" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <!-- Contact Us -->

    <div class="row">

        <div class="col-lg-6 contact_col">
            <div class="contact_contents">
                <h1>Contact Us</h1>
                <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose
                    what suits you the most.</p>
                <div>
                    <p>(800) 686-6688</p>
                    <p>info.deercreative@gmail.com</p>
                </div>
                <div>
                    <p>mm</p>
                </div>
                <div>
                    <p>Open hours: 8.00-18.00 Mon-Fri</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>

            <!-- Follow Us -->

            <div class="follow_us_contents">
                <h1>Follow Us</h1>
                <ul class="social d-flex flex-row">
                    <li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a></li>
                    <li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter"
                                aria-hidden="true"></i></a></li>
                    <li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus"
                                aria-hidden="true"></i></a></li>
                    <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a></li>
                </ul>
            </div>

        </div>

        <div class="col-lg-6 get_in_touch_col">
            <div class="get_in_touch_contents">
                <h1>Get In Touch With Us!</h1>
                <p>Fill out the form below to recieve a free and confidential.</p>
                <form action="post">
                    <div>
                        <input id="input_name" class="form_input input_name input_ph" type="text" name="name"
                            placeholder="Name" required="required" data-error="Name is required.">
                        <input id="input_email" class="form_input input_email input_ph" type="email" name="email"
                            placeholder="Email" required="required" data-error="Valid email is required.">
                        <input id="input_website" class="form_input input_website input_ph" type="url" name="name"
                            placeholder="Website" required="required" data-error="Name is required.">
                        <textarea id="input_message" class="input_ph input_message" name="message" placeholder="Message"
                            rows="3" required data-error="Please, write us a message."></textarea>
                    </div>
                    <div>
                        <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300"
                            value="Submit">send message</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div
                    class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="post">
                    <div
                        class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" type="email" placeholder="Your email" required="required"
                            data-error="Valid email is required.">
                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                            value="Submit">subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9K4aTrGMuFDmr9bOFQnbpLTN4rPMOrx8&callback=initMap"
    type="text/javascript"></script>
<script src="<?php echo e(asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/contact_custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>