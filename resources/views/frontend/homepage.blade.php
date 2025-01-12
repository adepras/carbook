@extends('frontend.layout')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Cara Cepat &amp; Mudah Menyewa Mobil</h1>
                        <p style="font-size: 18px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae magni,
                            explicabo libero adipisci obcaecati placeat sequi velit ullam deleniti recusandae accusantium,
                            iusto rerum et, optio eius? Veniam reiciendis soluta dicta.</p>
                        <a href="https://www.youtube.com/"
                            class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Cara Mudah Menyewa Mobil</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 featured-top">
                    <div class="row justify-content-center no-gutters">
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section text-center mb-4">Cara yang Lebih Baik untuk Menyewa Mobil
                                    Sempurna Anda</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Lokasi Penjemputan Anda</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Penawaran Terbaik</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100 text-center mx-auto m-auto">
                                                <h3 class="heading mb-2 text-center">Pesan Mobil Sewaan Anda</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center mt-5"><a href="#"
                                        class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Pesan Mobil
                                        Sempurna Anda</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Apa yang Kami Tawarkan</span>
                    <h2 class="mb-2">Kendaraan Unggulan Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        {{-- --- --}}
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end" style="background-image: url(images/);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">BMW 330i LCI</a></h2>
                                    <div class="d-flex mb-3">
                                        <p class="price ml-auto">Rp.1.000.000<span>/hari</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Pesan</a> <a href="car-single.html"
                                            class="btn btn-secondary py-2 ml-1">Detail</a></p>
                                </div>
                            </div>
                        </div>
                        {{-- Tampilan Mobil --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(images/);">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">Tentang Kami</span>
                        <h2 class="mb-4">Selamat Datang di Carbook</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, tempora. Animi, dolor iste!
                            Maiores incidunt quas tenetur distinctio doloremque harum quis a, aut vel, nisi nobis,
                            voluptatum ut saepe iusto.</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus modi veniam dolor aut doloremque
                            doloribus repellendus laudantium temporibus sapiente possimus suscipit blanditiis, enim
                            recusandae consequuntur consectetur nulla autem soluta voluptatum!</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Cari Mobil</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Layanan Kami</span>
                    <h2 class="mb-3">Layanan Terbaru Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-wedding-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Upacara Pernikahan</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores neque est quasi maiores
                                animi? Fugit corporis dignissimos quae quidem voluptates consectetur in minus. Ipsum unde
                                corrupti, recusandae porro veniam amet!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Antar Kota</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos blanditiis ipsam
                                repudiandae deserunt doloremque laborum, expedita fugit veritatis libero rerum eveniet
                                quisquam natus omnis nulla. Rem eos saepe dolores veniam?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Antar Jemput Bandara</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores unde possimus voluptatem
                                dolorem tenetur ratione natus dicta dolor dignissimos ipsam, corporis consectetur accusamus
                                nesciunt ipsa omnis animi, aspernatur sequi velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Berkeliling Kota</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus doloribus, ex, in eveniet et
                                delectus laborum hic quis, deleniti voluptatem harum repellat neque distinctio a non
                                voluptates adipisci repellendus quas?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro" style="background-image: url(images/);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3">Ingin Bergabung Bersama Kami?</h2>
                    <a href="#" class="btn btn-primary btn-lg">Bergabung</a>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimoni</span>
                    <h2 class="mb-3">Pelanggan Puas</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        {{-- --- --}}
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                                        consectetur quo magnam quasi illum veniam, id esse provident atque minima mollitia
                                        nesciunt alias maxime non, blanditiis temporibus, animi quos! Laboriosam?</p>
                                    <p class="name">Someone</p>
                                    <span class="position">Nobody</span>
                                </div>
                            </div>
                        </div>
                        {{-- Tampilan Testimoni --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
