@extends('layout.master')
@section('content')
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Kelola Pegawai</h1>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai</h6>
     </div>
     <div class="card-body">
        <form action="{{ route('produk.update',$data->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            @method("PUT")
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" value="{{ $data->nama_produk }}">
                    @if ($errors->has('nama_produk'))
                        <span class="text-danger">{{ $errors->first('nama_produk') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Stok Produk</label>
                    <input type="number" class="form-control" name="stok" value="{{ $data->stok }}">
                    @if ($errors->has('stok'))
                        <span class="text-danger">{{ $errors->first('stok') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Harga Satuan</label>
                    <input type="number" class="form-control" name="harga" value="{{ $data->harga }}">
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
