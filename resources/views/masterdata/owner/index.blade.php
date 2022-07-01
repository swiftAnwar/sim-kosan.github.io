@extends('layouts.admin')

@section('title','SIM Kosan | Owner')
    
@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Pemilik</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item active">Pemilik</li>
          </ol>
     </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <i class="mdi mdi-account text-success" style="font-size: 35px !important;"></i>
                        <span style="font-size: 25px !important;">Master Data <strong>Pemilik</strong></span>
                    </div>
                    <a href="{{ route('master.owner.create') }}" class="btn btn-rounded btn-success waves-effect float-right m-t-1-10 m-b-10">
                        <i class="fa fa-plus m-r-5"></i>
                        Tambah <strong>Pemilik</strong> Baru
                    </a>

                    <div class="table-responsive m-t-40">
                        <table class="table table-bordered table-striped" id="userTable">
                            <thead>
                                <tr>
                                    <th>Id Pemilik</th>
                                    <th>Nama Pemilik</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->user_name }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>{{ $item->Alamat }}</td>
                                        <td>{{ $item->Telepon }}</td>
                                        <td>{{ $item->Username }}</td>
                                        <td>{{ $item->Password }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <form action="{{ route('master.owner.destroy', $item->ID_Pemilik_Kost) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <a href="{{ route('master.owner.edit', $item->ID_Pemilik_Kost) }}" class="btn btn-warning waves-effect" data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <button type="submit" class="btn btn-danger waves-effect swalDelete" data-toggle="tooltip" title="Hapus">
                                                    <i class="fa fa-trash-alt"></i>
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
    </div>
@endsection

@section('script')
    <script>
        $('#userTable').DataTable();
    </script> 
@endsection