@extends('layout.master')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Penjualan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
      </div>
      <div class="card-body">
        <div class="card-title">
            <div class="panel-wrapper">
                <a href="{{ route('sale.create') }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a>
            </div>
        </div>
        @include('Alert.alert-session')
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Nama Produk</th>
                <th>Jumlah item</th>
                <th>Harga/pcs</th>
                <th>Total Tagihan</th>
                <td>Tanggal</td>
              </tr>
            </thead>
            <tbody>
                @php
                $no=1;
                @endphp
                @foreach ($data as $row)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>{{ $row->total_item }}</td>
                @php
                    $price="Rp".number_format( $row->harga,2,',','.');
                    $total="Rp".number_format($row->tagihan,2,',','.');
                @endphp
                <td>{{$price }}</td>
                <td>{{ $total }}</td>
                <td>{{ $row->tanggal }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
