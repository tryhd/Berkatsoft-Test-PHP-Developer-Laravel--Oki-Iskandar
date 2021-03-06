@extends('layout.master')
@section('content')
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Kelola Produk</h1>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Produk</h6>
     </div>
     <div class="card-body">
        <form  action="{{ route('produk.store') }}" method="POST" autocomplete="on" enctype="multipart/form-data">
           @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" placeholder="Masukan nama produk">
                @if ($errors->has('nama_produk'))
                    <span class="text-danger">{{ $errors->first('nama_produk') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Stok Produk</label>
                <input type="number" class="form-control" name="stok" placeholder="Masukan jumlah produk">
                @if ($errors->has('stok'))
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Harga Satuan</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukan harga">
                @if ($errors->has('harga'))
                <span class="text-danger">{{ $errors->first('harga') }}</span>
                @endif
            </div>
            <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
   </div>
@endsection
