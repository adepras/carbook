@extends('frontend.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2">CarBook <i class="ion-ios-arrow-forward"></i></span>
                        <span>Mobil <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Pilih Mobil Anda</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url(images/);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">BMW 330i LCI</a></h2>
                            <div class="d-flex mb-3">
                                <p class="price ml-auto">Rp.1.000.000 <span>/hari</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Pesan</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Detail</a></p>
                        </div>
                    </div>
                </div>
                {{-- Display Mobil --}}
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
