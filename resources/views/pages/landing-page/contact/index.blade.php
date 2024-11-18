@extends('layouts.landing-page.app')
@section('content')
<!-- Breadcrumb Area -->
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

<!-- Contact Us Area -->
<div class="contact-us-area default-padding mb-7">
    <div class="container">
        <h2>Hubungi Kami</h2>
        <p>Kami di Sini untuk Anda! Hubungi Kami untuk Bantuan Langsung</p>

        <!-- Address and Contact Info Area (Top Section) -->
        <div class="row mb-5">
            <div class="col-lg-12 info text-start">
                <!-- Flexbox for aligning items horizontally -->
                <ul class="list-unstyled d-flex justify-content-between align-items-center">
                    <li class="d-flex align-items-center mx-3">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div class="content ms-3">
                            <h5>Address</h5>
                            <p>Jl. Imam Syafi'i No.45, Tugung, Sempu,</p>
                            <p>Kec. Sempu Kabupaten Banyuwangi,</p>
                            <p>Jawa Timur Kode Pos: 68468.</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mx-3">
                        <div class="icon">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </div>
                        <div class="content ms-3">
                            <h5>WhatsApp</h5>
                            <a href="https://wa.me/6285335104442" target="_blank">+62 853-3510-4442</a>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mx-3">
                        <div class="icon">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div class="content ms-3">
                            <h5>Email</h5>
                            <p><a href="mailto:smkalazhar.sempubwi@gmail.com">smkalazhar.sempubwi@gmail.com</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        

        <!-- Map and Contact Form Area (Sejajar dalam satu Container) -->
        <div class="row">
            <!-- Left Column with Map -->
            <div class="col-lg-6">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.9846373674577!2d114.13522647373497!3d-8.30432468354779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6acb17e63e19d%3A0xf0a7e21e4fcadf5f!2sSMK%20AL-AZHAR%20SEMPU!5e0!3m2!1sid!2sid!4v1731914869984!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Right Column with Contact Form (Card) -->
            <div class="col-lg-6">
                <div class="contact-form-box">
                    <div class="form-box">
                        <form action="https://hummatech.com/contact/store" method="POST">
                            <input type="hidden" name="_token" value="wB6aCPSl75SzeTuJrOzWlJjtCWJHX5V9u04vpri9" autocomplete="off">
                            
                            <div class="row">
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
                                <div class="col-lg-12">
                                    <button type="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
