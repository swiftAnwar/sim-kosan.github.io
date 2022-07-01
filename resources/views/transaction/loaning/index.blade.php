@extends('layouts.admin')

@section('title', 'SIM Inventaris | Peminjaman')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Peminjaman</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item active">Transaksi Peminjaman</li>
          </ol>
     </div>
@endsection

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div>
                      <i class="mdi mdi-widgets text-success" style="font-size: 35px !important;"></i>
                      <span style="font-size: 25px !important;"> Transaksi <strong>Peminjaman</strong></span>
                     </div>
                     <div class="form mt-5">
		                  <form action="" method="post">
		                  	<div class="alert alert-info">
		                    	Peminjaman
		                    </div>
		                       <div class="form-group">
		                       {{ csrf_field() }}
		                       </div>
		                       <div class="form-group">
		                            <label for="no">No. Peminjaman</label>
		                            <input type="text" class="form-control" value="{{ $no }}" id="no" name="no" required readonly>
		                       </div>
		                       <div class="form-group">
		                            <label for="loaning_date">Tanggal Peminjaman</label>
		                            <div class="input-group">
			                            <input type="text" class="form-control datepicker" value="" id="loaning_date" name="loaning_date" required>
			                            <div class="input-group-append">
			                            	<span class="input-group-text">
			                            		<i class="icon-calender"></i>
			                            	</span>
			                            </div>
		                            </div>
		                       </div>
		                       <div class="form-group">
		                       		<label for="employee_id">Data Pegawai</label>
		                       		<select name="employee_id" class="form-control select2" id="employee_id" required>

		                       				<option value="" disable>-- Pilih Pegawai --</option>
		                       			@foreach($employee as $key)
											<option value="{{ $key->employee_id }}">{{ $key->employee_name }}</option>
		                       			@endforeach
		                       		</select>
		                       </div>
		                       <div class="form-group">
		                            <label for="description">Keterangan</label>
		                            <textarea name="description" id="description" class="form-control"></textarea>
		                       </div>
		                       <div class="alert alert-info">
		                       		INPUT BARANG
		                       </div>
		                       <div class="form-group">
		                       		<label for="key_item">Kode / Label Barang</label>
		                       		<input type="text" class="form-control col-md-8" value="" id="key_item" name="key_item" required><button>Tambah</button>
		                       		<input type="text" class="form-control col-md-8" value="" id="" name="" required>
		                       </div>
		                       <div class="form-group float-right mt-3">
		                            <button type="submit" class="btn btn-info">Update</button>
		                            <a href="" class="btn btn-warning">Kembali</a>
		                       </div>
		                  </form>
		             </div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script>
		$('.select2').select2();
	</script>
@endsection()