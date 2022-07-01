@extends('layouts.admin')

@section('title','SIM Kosan | Owner')
    
@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">User</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('master.owner') }}">Pemilik Kosan</a></li>
               <li class="breadcrumb-item active">Edit Data Pemilik Kosan</li>
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
                        <span style="font-size: 25px !important;">Edit Data Pemilik Kosan <strong>{{ $data->Nama_Pemilik_Kost }}</strong></span>
                    </div>
                    <div class="form mt-5">
                        <form action="{{ route('master.owner.update', $data->ID_Pemilik_Kost) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group">
                                <label for="ID_Pemilik_Kost">ID Pemilik</label>
                                <input type="text" name="ID_Pemilik_Kost" id="ID_Pemilik_Kost" value="{{ $data->ID_Pemilik_Kost }}" class="form-control" required readonly autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Nama_Pemilik_Kost">Nama Pemilik</label>
                                <input type="text" name="Nama_Pemilik_Kost" id="Nama_Pemilik_Kost" value="{{ $data->Nama_Pemilik_Kost }}" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="Email" id="Email" class="form-control" value="{{ $data->Email }}" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <textarea name="Alamat" id="Alamat" cols="30" rows="5" class="form-control" autocomplete="off">{{ $data->Alamat }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="Username" id="Username" value="{{ $data->Username }}" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="Password" id="Password" value="{{ $data->Password }}" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group float-right mt-3">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection