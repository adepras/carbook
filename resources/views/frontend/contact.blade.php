@extends('frontend.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">CarBook <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Kontak Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-map-o"></span>
                                </div>
                                <p><span>Alamat Kantor Kami:</span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-mobile-phone"></span>
                                </div>
                                <p><span>Telepon:</span>
                                    <a href="tel://1234567920">+62 812 XXXX XXXX</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-envelope-o"></span>
                                </div>
                                <p><span>Email:</span>
                                    <a href="mailto:info@domain.com">info@domain.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="border w-100 p-4 rounded mb-2 d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-whatsapp"></span>
                                </div>
                                <p><span>Whatsapp:</span>
                                    <a href="tel://1234567920">+62 812 XXXX XXXX</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
