@extends('layoutpengunjung.master')
@section('content')
@include('layoutpengunjung.navbarlogin')

<!-- ======= Reservasi Section ======= -->
<section id="reservasi" class="reservasi sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>RESERVASI</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h5 class="card-title">Daftar Reservasi</small></h5>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="" enctype="multipart/form-data" id="quickForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Nama Pemesan</label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Nama Pemesan">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Tanggal Pesan</label>
                                    <input type="datetime-local" name="isi" class="form-control" id="isi" placeholder="Tanggal Pesan">
                                </div>
                                <div class="form-group">
                                    <label for="isi">Jenis Paket</label>
                                    <select class="form-control" id="sel1">
                                        <option>Pilih Paket</option>
                                        <option>Wisata Petik Apel</option>
                                        <option>Wisata Petik Jeruk</option>
                                        <option>Wisata Petik Strowberry</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Promo</label>
                                    <select class="form-control" id="sel1">
                                        <option>Pilih Promo</option>
                                        <option>Diskon 5%</option>
                                        <option>Gratis yogurt</option>
                                        <option>Diskon 8%</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Jumlah Orang</label>
                                    <input type="number" name="isi" class="form-control" id="isi" placeholder="Jumlah Orang">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
            </div>
            <!--/.col (right) -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
</section>
<!-- End Reservasi Section -->

@include('layoutpengunjung.footer')
@endsection