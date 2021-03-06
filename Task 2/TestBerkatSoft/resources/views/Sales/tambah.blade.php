@extends('layout.master')
@section('content')
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Kelola Penjualan</h1>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    @include('Alert.alert-session')
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Penjualan</h6>
     </div>
     <div class="card-body">
        <form  action="{{ route('sale.store') }}" method="POST" autocomplete="on" enctype="multipart/form-data">
           @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">Nama Pelanggan</label>
                <select name="cust" id="id_cust" class="form-control">
                    <option selected>Pilih Pelanggan</option>
                    @foreach($cust as $row)
                      <option name="cust" value="{{ $row->id }}">{{ $row->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Nama Produk</label>
                <select name="produk" id="id_produk" class="form-control">
                    <option selected>Pilih Produk</option>
                    @foreach($produk as $row)
                      <option name="produk" value="{{ $row->id }}">{{ $row->nama_produk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Total Item</label>
                <input type="text" class="form-control" name="total_item" placeholder="Masukan total item">
                @if ($errors->has('total_item'))
                <span class="text-danger">{{ $errors->first('total_item') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label  class="form-label">Tanggal</label>
                <input autocomplete="on" type="date" class="form-control" name="tanggal" placeholder="Masukan tanggal">
                @if ($errors->has('tanggal'))
                <span class="text-danger">{{ $errors->first('tanggal') }}</span>
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
