@extends('layoutadmin.master')
@section('content')
@include('layoutadmin.navbar')
@include('layoutadmin.sidebar')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">PENYEWA</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Tempat, Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Email</th>
          <th>No. HP</th>
          <th>Alamat</th>
          <th>Identitas</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>


@endsection