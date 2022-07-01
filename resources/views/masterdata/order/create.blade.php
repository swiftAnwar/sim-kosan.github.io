@extends('layouts.admin')

@section('title', 'SIM Kosan | Pesanan')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Pesanan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('master.order') }}">Pesanan</a></li>
               <li class="breadcrumb-item active">Tambah Data Pesanan</li>
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
                              <span style="font-size: 25px !important;">Tambah Data <strong>Pesanan</strong></span>
                         </div>
                        <div class="form mt-5">
                              <form action="{{ route('master.order.store') }}" method="POST">
                                   <div class="form-group">
                                   {{ csrf_field() }}
                                   </div>
                                   <div class="form-group">
                                        <label for="order_name">Nama Pesanan</label>
                                        <input type="text" class="form-control" id="order_name" name="order_name" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                             <option value="#" disabled>-- Pilih Status -- </option>
                                             <option value="1">Aktif</option>
                                             <option value="0">Off</option>
                                        </select>	
                                   </div>
                                   <input type="hidden" name="redirect" value="{{ url()->previous() }}">
                                   <div class="form-group float-right mt-3">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                        <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                                   </div>
                              </form>
                         </div>
                   </div>
              </div>
         </div>
    </div>
@endsection