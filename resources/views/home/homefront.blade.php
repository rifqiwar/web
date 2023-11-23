@extends('home.layouts.layout-home')
@section('content')
<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">

        <!-- ltn__slide-item -->
        @foreach ($banner as $item)
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 bg-image"
            data-bg="{{ $item->banner_image }}">
            <div class="ltn__slide-item-inner text-right text-end">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-video mb-50 d-none">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                            href="https://www.youtube.com/embed/tlThdr3O5Qo"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <h6 class="slide-sub-title ltn__secondary-color animated text-uppercase">
                                        <span><i class="fas fa-square-full"></i></span> Layanan Kami
                                    </h6>
                                    <h1 class="slide-title animated ">{{ $item->name }}</h1>
                                    <div class="slide-brief animated">
                                        <p>{{ $item->description }}</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="#" class="theme-btn-2 btn btn-effect-2"
                                            style="border-radius :30px">Buat Sekarang</a>
                                        {{-- <a class="ltn__video-play-btn bg-white"
                                            href="https://www.youtube.com/embed/HnbMYzdjuBs?autoplay=1&amp;showinfo=0"
                                            data-rel="lightcase">
                                            <i class="icon-play  ltn__secondary-color"></i>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img">
                                {{-- <img src="{{url('themes-frontend/img/slider/21.png')}}" alt="#"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- FITUR KAMI START -->
<div class="ltn__feature-area section-bg-1--- pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span>
                        FITUR KAMI</h6>
                    <h1 class="section-title"> Keuntungan Luar Biasa
                    </h1>
                </div>
            </div>
        </div>
        <div class="row align-self-center">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">
                    <div class="ltn__feature-icon">
                        <span><i class="flaticon-slider"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h3>Performa Stabil
                        </h3>
                        <p>Website yang stabil dapat membantu meningkatkan efisiensi operasional dengan memberikan akses
                            cepat dan mudah ke informasi internal, komunikasi antar tim, dan alat manajemen bisnis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">
                    <div class="ltn__feature-icon" style="color: #00CEC9">
                        <span><i class="flaticon-building"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h3>Mudah
                        </h3>
                        <p>Memungkinkan Anda menyediakan informasi produk atau layanan dengan mudah diakses oleh
                            pengguna.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__feature-item ltn__feature-item-6 box-shadow-1">

                    <div class="ltn__feature-icon" style="color: #F7578C">
                        <span><i class="flaticon-house"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h3>UI Menarik
                        </h3>
                        <p>pengalaman yang menyenangkan, dan mendorong interaksi lebih lanjut, menciptakan landasan
                            positif untuk interaksi digital yang efektif.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FITUR KAMI END -->
<!-- TEMPLATE START (Team - 3) -->
<div class="ltn__team-area pt-120 pb-90---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span>
                        Gabung Sekarang</h6>
                    <h1 class="section-title">Banyak Pilihan Template</h1>
                    <div class="btn-wrapper">
                        <a href="{{ route('shop.index') }}" class="theme-btn-2 btn btn-effect-2">Semua Template</a>


                        {{-- <li><a href="{{ route('shop.index') }}">Template</a></li> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($popular_product as $item)
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__team-item ltn__team-item-3 ltn__team-item-3-2" style="border-radius: 30px">
                    <div class="team-img">
                        <img src="{{$item->productImages->count() ? $item->productImages->first()->image : ''}}" alt="#"
                            style="border-radius: 30px; width: 370px;height:429px; object-fit: cover ">
                    </div>
                    <div class="team-info">
                        <h4><a href="team-details.html" style="display: block;
                            white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">{{$item->title}}</a></h4>
                        <h6 class="ltn__secondary-color">{{$item->category->name ?? ''}}</h6>
                    </div>
                    <div style="text-align: center">
                        <a href="{{$item->link}}" target="_blank" class=""
                            style="display: block; text-align:-webkit-center;">
                            <button class="btn-small theme-btn-5">Demo</button>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- TEMPLATE END -->

<!-- MARKETING -->
<div class="ltn__about-us-area pt-90 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <div class="ltn__video-img ltn__video-img-before-none ltn__animation-pulse2">
                        <img src="{{ url('storage/image/banner/2023/marketing1.png') }}" alt="video popup bg image">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border--- border-radius-no ltn__secondary-bg"
                            href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0"
                            data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color"><span><i
                                    class="fas fa-square-full"></i></span> CARA ORDER</h6>
                        <h1>Pastikan Bisnis teteap Deras saat Hujan datang!!</h1>
                        <p>"Waktunya beraksi sekarang sebelum badai menghantam bisnis Anda! Jangan biarkan peluang
                            mengalir begitu saja. Sedia payung sebelum hujan -
                            onlinekan bisnis Anda sekarang juga! </p>
                        {{-- <h1 class="section-title">{{ $company->name }}</h1> --}}
                        {{-- <p>{{ $company->tagline }}</p> --}}
                    </div>
                    {{-- <p>{{ $company->description }}</p> --}}
                    <div class="about-author-info d-flex mt-50">
                        <div class="author-name-designation  align-self-center mr-30">
                            <!-- <h4 class="mb-0">Jerry Henson</h4>
                                                                                                <small>/ Shop Director</small> -->
                            <div class="btn-wrapper mt-0">
                                {{-- <a class="btn theme-btn-2 btn-effect-1" href="about.html">About Us</a> --}}
                            </div>
                        </div>
                        {{-- <div class="author-sign  align-self-center">
                            <img src="{{ url('themes-frontend/img/icons/icon-img/author-sign.png') }}" alt="#">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MARKETING END -->

<!-- HUB KAMI START (call-to-action-4) -->
<div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image"
    data-bg="{{ $company->image ?? url('themes-frontend/img/bg/36.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-4 text-center--- pt-115 pb-120">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color"><span><i
                                    class="fas fa-square-full"></i></span> SOLUSI BISNIS ANDA</h6>
                        <h1 class="section-title black-color">Pastikan Bisnis Anda <br>
                            Mendunia</h1>
                        <p>"jangan terlalu lama berpikir!!, berinovasilah, dan buat kehadiran online yang memukau sekarang
                            juga! Dengan bergerak cepat, Anda tidak hanya melindungi bisnis dari badai, tetapi juga
                            membuka pintu untuk pertumbuhan dan sukses yang luar biasa di dunia digital yang terus
                            berkembang." </p>
                    </div>
                    <div class="btn-wrapper">
                        <a href="{{ route('home.about') }}" class="theme-btn-2 btn btn-effect-2"> Kenapa Webiin.com?</a>

                    </div>
                </div>
                <div class="ltn__call-to-4-img-2">
                    <img src="{{ url('/storage/image/banner/2023/marketing2.png') }}" alt="#">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HUB KAMI ACTION END -->


<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area section-bg-6 bg-image-right-before pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2 mb-20">
                        <h6 class="section-subtitle ltn__secondary-color"><span><i
                                    class="fas fa-square-full ltn__secondary-color"></i></span> Q&A</h6>
                        <h1 class="section-title">Pertanyaan Populer</h1>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu Webiin?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong> Webiin.com adalah platform pelayanan</strong> yang menghadirkan solusi
                                    lengkap bagi Usaha Mikro, Kecil, dan Menengah (UMKM) dalam mengembangkan keberadaan
                                    online mereka. Dengan fokus pada pemberian layanan web yang efisien dan berkualitas,
                                    Webiin.com hadir sebagai mitra terpercaya untuk membantu UMKM meraih potensi penuh
                                    dari keberadaan online.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#c2" aria-expanded="false" aria-controls="collapseOne">
                                    Apakah saya membuat website sendiri?
                                </button>
                            </h2>
                            <div id="c2" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Produk website yang Anda terima sudah dalam bentuk website</strong> Anda
                                    tinggal
                                    edit dan upload materi. Semua sangat mudah dikerjakan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                                    Bagaimana pembelian dan pembayaran di website Webiin?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"><strong>memudahkan
                                        proses pembayaran melalui integrasi dengan penyedia layanan pembayaran pihak
                                        ketiga, </strong>
                                    Midtrans. Dengan tingkat keamanan transaksi yang tinggi, pelanggan dapat berbelanja
                                    dengan keyakinan penuh. Midtrans mendukung berbagai metode pembayaran, transfer
                                    bank, dan opsi pembayaran digital lainnya, memberikan
                                    fleksibilitas kepada pelanggan. Proses pembayaran yang cepat dan efisien, pembaruan
                                    status otomatis, serta layanan pelanggan yang responsif adalah bagian dari komitmen
                                    kami untuk memberikan pengalaman berbelanja online yang lancar dan memuaskan melalui
                                    Webiin.com.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                    Bisakah membatalkan pembelian website di Webiin?

                                </button>
                            </h2>
                            <div id="c5" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Webiin.com tidak menyediakan refund dana karena setiap domain dan
                                    website yang dipesan akan otomatis teregister dengan sistem domain dan server kami.
                                    Jadi kalian harus memastikan nama domain dan data yang dipesan benar-benar sesuai
                                    yah!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="hc6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#c6" aria-expanded="false" aria-controls="c5">
                                    Semudah itu kah membuat Website dengan Webiin.com?

                                </button>
                            </h2>
                            <div id="c6" class="accordion-collapse collapse" aria-labelledby="hc6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ya, kami menyediakan template yang mempermudah anda</strong> Webbin.com
                                    memberikan solusi lengkap
                                    dengan menyediakan layanan template yang sudah
                                    termasuk dalam paket kami. Dengan fokus pada kenyamanan dan efisiensi, kami
                                    menghadirkan berbagai pilihan desain template yang siap pakai untuk memenuhi
                                    kebutuhan berbagai jenis situs web. Pelanggan Webbin.com dapat dengan mudah memilih
                                    template yang sesuai dengan visi dan gaya mereka, mempercepat proses pembangunan
                                    situs tanpa harus memikirkan desain dari awal.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">

                <div class="about-us-img-wrap about-img-left">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->


{{--
<!-- TESTIMONIAL AREA START (testimonial-8) -->
<div class="ltn__testimonial-area section-bg-1--- pt-115--- pb-75 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span>
                        Client,s Testimonial</h6>
                    <h1 class="section-title">Client,S Feedback</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-6-active slick-arrow-1">
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                    <div class="ltn__testimoni-info">
                        <div class="ltn__testimoni-author-ratting">
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ url('themes-frontend/img/testimonial/1.jpg') }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                            <div class="ltn__testimoni-rating">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                    <div class="ltn__testimoni-info">
                        <div class="ltn__testimoni-author-ratting">
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ url('themes-frontend/img/testimonial/2.jpg') }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                            <div class="ltn__testimoni-rating">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                    <div class="ltn__testimoni-info">
                        <div class="ltn__testimoni-author-ratting">
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ url('themes-frontend/img/testimonial/3.jpg') }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                            <div class="ltn__testimoni-rating">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                    <div class="ltn__testimoni-info">
                        <div class="ltn__testimoni-author-ratting">
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ url('themes-frontend/img/testimonial/4.jpg') }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                            <div class="ltn__testimoni-rating">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

<!-- VIDEO AREA START -->
<div class="ltn__video-popup-area ltn__video-popup-margin---">
    <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1"
        data-bg="{{ url('themes-frontend/img/bg/37.jpg') }}">
        <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
            href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
            <i class="fa fa-play"></i>
        </a>
    </div>
</div>
<!-- VIDEO AREA END --> --}}
<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color"><span><i class="fas fa-square-full"></i></span>
                        INFO DARI WEBIIN</h6>
                    <h1 class="section-title">Berita & Blogs</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            @foreach ($article as $item)
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        {{-- <a href="blog-details.html"><img src="{{{url('themes-frontend/img/blog/1.jpg')}}}"
                                alt="#"></a> --}}
                        <a href="{{ route('blog.detail', $item->slug) }}"><img src="{{ $item->thumbnail }}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: {{ $item->user_id }}</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>{{ $item->category->name }}</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="{{ route('blog.detail', $item->slug) }}">{{ $item->titles
                                }}</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>{{ $item->created_at
                                        }}</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="{{ route('blog.detail', $item->slug) }}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- BLOG AREA END -->
<!-- render the button and direct it to wa.me -->

{{-- <p><a href="tel:+0123-456789">{{ $company->phone ?? '' }}</a></p> --}}
<a href="https://wa.me/{{ $company->phone ?? '' }}?text=Hi%20Webiin.com" class="floating" target="_blank">
    <i class="fab fa-whatsapp fab-icon"></i>
</a>
@endsection