@extends('layouts.admin')

@section('title','SIM Kosan | Pesanan')
    
@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Pesanan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('master.order') }}">Pesanan</a></li>
               <li class="breadcrumb-item active">Edit Data Pesanan</li>
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
                        <span style="font-size: 25px !important;">Edit Data Pesanan <strong>{{ $data->order_name }}</strong></span>
                    </div>
                    <div class="form mt-5">
                        <form action="{{ route('master.order.update', $data->id) }}" method="post">

                            <div class="form-group">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                            </div>

                            <div class="form-group">

                                <label for="order_name">Nama Pesanan</label>
                                <input type="text" name="order_name" id="order_name" value="{{ $data->order_name }}" class="form-control" required autocomplete="off">
                            </div>

                            <div class="form-group">

                                <label for="status">Status</label>
                                <input type="text" name="status" id="status" value="{{ $data->status }}" class="form-control" required>
                            </div>

                            <div class="form-group float-right mt-3">
                                <button type="submit" class="btn btn-info">
                                    Update
                                </button>
                                <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection