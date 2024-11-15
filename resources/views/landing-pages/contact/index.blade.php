
@extends('layouts.landing-page.app')
@section('content')
<div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url('storage/Background-Hubungi%20Kami.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Hubungi Kami</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
                    <li class="active">Hubungi Kami</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="contact-us-area default-padding mb-5">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-5 info">
                <div class="content">
                    <h2>Hubungi Kami</h2>
                    <p>
                        Kami di Sini untuk Anda! Hubungi Kami untuk Bantuan Langsung
                    </p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h5>Address</h5>
                                <p>
                                                                                Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang
                                        Ploso, Kabupaten Malang, Jawa Timur 65152.
                                                                                </p>
                                </div>
                            </li>
                            <li>
                                                                        <div class="icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="content">
                                        <h5>WhatsApp</h5>

                                        <a href="https://wa.me/6285176777785" target="_blank">085176777785</a>
                                    </div>
                                                                </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5>Email</h5>
                                    <p>
                                                                                        <a href="mailto:info@hummatech.com">info@hummatech.com</a>
                                                                                </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 contact-form-box">
                                                                    <div class="form-box">
                        <form action="https://hummatech.com/contact/store" method="POST">
                            <input type="hidden" name="_token" value="wB6aCPSl75SzeTuJrOzWlJjtCWJHX5V9u04vpri9" autocomplete="off">                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" value="" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                                                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" value="" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                                                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="no_telp" value="" name="no_telp" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                                                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="description" placeholder="Tell Us About Project *"></textarea>
                                                                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-3">

                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
