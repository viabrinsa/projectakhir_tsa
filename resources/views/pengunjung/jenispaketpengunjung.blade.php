@extends('layoutpengunjung.master')
@section('content')
@include('layoutpengunjung.navbar')

<!-- ======= Jenis Paket Section ======= -->
<section id="artikel" class="artikel sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>JENIS PAKET</h2>
        </div>

        <div class="row gy-4">

            <div class="article">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="pengunjung/assets/img/home/apel.jpeg" class="img-fluid rounded" style="width:90%; height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Wisata Petik Apel</h5><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>Paket</th>
                                        <th>Fasilitas</th>
                                        <th>Weekday</th>
                                        <th>Weekend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paket Apel</td>
                                        <td>Wisata memetik apel, menanam tanaman apel, cara pengolahan yogurt apel, yogurt apel </td>
                                        <td>Rp.45000</td>
                                        <td>Rp.55000</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!-- End jenis paket list item -->

            <div class="article">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="pengunjung/assets/img/home/jeruk.jpg" class="img-fluid rounded" style="width:90%; height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Wisata Petik Jeruk</h5><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>Paket</th>
                                        <th>Fasilitas</th>
                                        <th>Weekday</th>
                                        <th>Weekend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paket Jeruk</td>
                                        <td>Wisata memetik jeruk, menanam tanaman jeruk, cara pengolahan yogurt jeruk, yogurt jeruk </td>
                                        <td>Rp.45000</td>
                                        <td>Rp.55000</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!-- End jenis paket list item -->

            <div class="article">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="pengunjung/assets/img/home/str1.jpg" class="img-fluid rounded" style="width:90%; height:100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Wisata Petik Strawberry</h5><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>Paket</th>
                                        <th>Fasilitas</th>
                                        <th>Weekday</th>
                                        <th>Weekend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paket Strawberry</td>
                                        <td>Wisata memetik strawberry, menanam tanaman strawberry, cara mengolah yogurt strawberry, yogurt strawberry </td>
                                        <td>Rp.45000</td>
                                        <td>Rp.55000</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!-- End jenis paket list item -->

        </div><!-- End recent jenis paket list -->

    </div>
</section>
<!-- End Artikel Section -->

<!-- ======= Promo Section ======= -->
<section id="promo" class="promo sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>PROMO</h2>
        </div>

        <div class="row gy-4">

            <div class="article">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Wisata Petik Apel</h5><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>Paket</th>
                                        <th>Fasilitas</th>
                                        <th>Weekday</th>
                                        <th>Weekend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paket Apel</td>
                                        <td>Wisata memetik apel, menanam tanaman apel, cara pengolahan yogurt apel, yogurt apel </td>
                                        <td>Rp.45000</td>
                                        <td>Rp.55000</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <img src="pengunjung/assets/img/home/apel.jpeg" class="img-fluid rounded" style="width:90%; height:100%; margin-left:40px;">
                    </div>

                </div>

            </div><!-- End jenis paket list item -->

        </div>

    </div>
</section><!-- End promo Section -->

@include('layoutpengunjung.footer')
@endsection