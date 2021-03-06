@extends('layout.master')
@section('content')
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Kelola Pelanggan</h1>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Pelanggan</h6>
     </div>
     <div class="card-body">
        <form  action="{{ route('customer.store') }}" method="POST" autocomplete="on" enctype="multipart/form-data">
           @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan nama pelanggan">
                @if ($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label  class="form-label">Alamat</label>
                <input autocomplete="on" type="text" class="form-control" name="alamat" placeholder="Masukan alamat">
                @if ($errors->has('alamat'))
                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukan email">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label class="form-label">Telepon</label>
                <input type="number" class="form-control" name="telpon" placeholder="Masukan no telepon">
                @if ($errors->has('telpon'))
                    <span class="text-danger">{{ $errors->first('telpon') }}</span>
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
