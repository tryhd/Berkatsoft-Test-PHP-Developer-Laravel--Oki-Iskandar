@extends('layout.master')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Pelanggan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
      </div>
      <div class="card-body">
        <div class="card-title">
            <div class="panel-wrapper">
                <a href="{{ route('customer.create') }}" class="btn btn-primary btn-icon-split">
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
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Aksi</th>
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
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->email}}</td>
                <td>{{ $row->telpon}}</td>
                <td>
                    <a href="{{ route('customer.edit',$row->id) }}" class="btn btn-link" data-placement="bootom" title="Edit Data">
                        <i class="fa fa-pen"></i></a>
                        <form action="{{route('customer.destroy',$row->id)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-link" data-placement="bootom" title="Hapus Data"><i class="fa fa-trash"></i>
                            </button>
                        </form>
                </td>
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
