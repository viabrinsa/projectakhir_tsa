@extends('layoutpengunjung.master')
@section('content')
@include('layoutpengunjung.navbar')

<!-- ======= Galeri Section ======= -->
<section id="galeri" class="galeri sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>GALERI</h2>
        </div>

        <div class="row gy-4 galeri-container">

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/1.jpeg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/1.jpeg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/2.jpeg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/2.jpeg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/3.jpeg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/3.jpeg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/4.jpeg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/4.jpeg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/5.jpeg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/5.jpeg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/6.jpeg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/6.jpeg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/7.jpg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/7.jpg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/8.jpg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/8.jpg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

            <div class="col-xl-4 col-md-6">
                <div class="galeri-wrap">
                    <a href="pengunjung/assets/img/galeri/9.jpeg" data-gallery="galeri-gallery-app" class="glightbox"><img src="pengunjung/assets/img/galeri/9.jpeg" style="width:100%; height:100%" alt=""></a>
                </div>
            </div><!-- End galeri Item -->

        </div><!-- End galeri Container -->

    </div>

    </div>
</section><!-- End galeri Section -->

@include('layoutpengunjung.footer')
@endsection