@extends('layoutpengunjung.master')
@section('content')
@include('layoutpengunjung.navbar')

<!-- ======= Artikel Section ======= -->
<section id="artikel" class="artikel sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>ARTIKEL</h2>
        </div>

        <div class="row gy-4">

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="pengunjung/assets/img/kemenkop.webp" style="width:100%; height:100%">
                    </div>

                    <p class="post-category">AGROWISATA</p>

                    <h2 class="title">
                        <a href="blog-details.html">Kemenkop Terus Kembangkan Eksistensi Koperasi di Bidang Pariwisata</a>
                    </h2>

                </article>
            </div><!-- End artikel list item -->

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="pengunjung/assets/img/puan.webp" style="width:100%; height:100%">
                    </div>

                    <p class="post-category">AGROWISATA</p>

                    <h2 class="title">
                        <a href="blog-details.html">Puan Maharani Dorong Pertanian Dijadikan Agrowisata</a>
                    </h2>

                </article>
            </div><!-- End artikel list item -->

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="pengunjung/assets/img/milenial.webp" style="width:100%; height:100%">
                    </div>

                    <p class="post-category">AGROWISATA</p>

                    <h2 class="title">
                        <a href="blog-details.html">Pengembangan Agrowisata Rangsang Ketertarikan Milenial akan Sektor Pertanian</a>
                    </h2>

                </article>
            </div><!-- End artikel list item -->

        </div><!-- End recent artikel list -->

    </div>
</section>
<!-- End Artikel Section -->


@include('layoutpengunjung.footer')
@endsection