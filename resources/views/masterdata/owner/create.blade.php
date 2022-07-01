@extends('layouts.admin')

@section('title','SIM Kosan | Owner')
    
@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Pemilik Kosan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('master.owner') }}">Pemilik Kosan</a></li>
               <li class="breadcrumb-item active">Tambah Data Pemilik Kosan</li>
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
                        <span style="font-size: 25px !important;">Tambah Data <strong>Pemilik Kosan</strong></span>
                    </div>
                    <div class="form mt-5">
                        <form action="{{ route('master.owner.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="ID_Pemilik_Kost">ID Pemilik</label>
                                <input type="text" name="ID_Pemilik_Kost" id="ID_Pemilik_Kost" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Nama_Pemilik_Kost">Nama_Pemilik_Kost</label>
                                <input type="text" name="Nama_Pemilik_Kost" id="Nama_Pemilik_Kost" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="Email" id="Email" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Telepone">Telepone</label>
                                <input type="text" name="Telepone" id="Telepone" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <textarea name="Alamat" id="Alamat" cols="30" rows="5" class="form-control" autocomplete="off"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="Username" id="Username" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="Password" id="Password" class="form-control" required autocomplete="off">
                            </div>

                            <input type="hidden" name="redirect" value="{{ url()->previous() }}">
                            <div class="form-group float-right mt-3">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                    <a href="{{  url()->previous() }}" class="btn btn-warning">Kembali</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection