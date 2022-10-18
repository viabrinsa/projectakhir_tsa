@extends('layoutpengunjung.master')
@section('content')
@include('layoutpengunjung.navbar')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
  <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h2>SELAMAT DATANG DI <span>AGROWISATA</span></h2>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="pengunjung/assets/img/logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        <br><br>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>ABOUT US</h2>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 portfolio-container">

          <div class="col-xl-12 portfolio-item filter-product">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="pengunjung/assets/img/home/apel.jpg" class="d-block w-100" alt="pengunjung/assets/img/kategori/apel.jpg">
                </div>
                <div class="carousel-item">
                  <img src="pengunjung/assets/img/home/jeruk.jpeg" class="d-block w-100" alt="pengunjung/assets/img/kategori/jeruk.jpeg">
                </div>
                <div class="carousel-item">
                  <img src="pengunjung/assets/img/home/strawberry.jpg" class="d-block w-100" alt="pengunjung/assets/img/kategori/strawberry.jpg">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
  </section><!-- End Portfolio Section -->
  @include('layoutpengunjung.footer')
  @endsection