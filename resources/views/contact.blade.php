@extends('layouts.main')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">
@endsection


@section('content')
<div class="container contact_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
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
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.05480374352!2d110.3573852!3d-7.7840145000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a583d1d2303bb%3A0x3f6cb15eeaa2fe2f!2sUniversitas%20Janabadra!5e0!3m2!1sid!2sid!4v1705961756978!5m2!1sid!2sid"
                         width="1110" height="500" border="1px solid black" allowfullscreen="" loading="lazy" ></iframe>
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



@endsection

@section('js')
<script>
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9K4aTrGMuFDmr9bOFQnbpLTN4rPMOrx8&callback=initMap"
    type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/contact_custom.js')}}"></script>
@endsection