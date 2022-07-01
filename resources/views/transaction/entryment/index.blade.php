@extends('layouts.admin')

@section('title', 'SIM Inventaris | Pengadaan')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Pengadaan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item active">Pengadaan</li>
          </ol>
     </div>
@endsection

@section('content')
     <div class="row">
          <div class="col-lg-12">
               <div class="card">
                    <div class="card-body">
                         <div>
                              <i class="mdi mdi-cart-plus text-success" style="font-size: 35px !important;"></i>
                              <span style="font-size: 25px !important;">Transaksi <strong>Pengadaan</strong></span>
                         </div>
                         <div class="form mt-5">
                              <form action="{{ route('transaction.entryment.store') }}" method="POST">
                                   <div class="form-group">
                                   {{ csrf_field() }}
                                   </div>
                                   <div class="alert alert-info">Transaksi Pengadaan</div>
                                   <div class="form-group">
                                        <label for="no">No Pengadaan</label>
                                        <input type="text" name="no" id="no" class="form-control" required readonly value="{{ $no }}">
                                   </div>
                                   <div class="form-group">
                                        <label for="entryment_date">Tanggal Pengadaan</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control datepicker" name="entryment_date" id="entryment_date" autocomplete="off" required>
                                             <div class="input-group-append">
                                                  <span class="input-group-text">
                                                  <i class="icon-calender"></i>
                                                  </span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="form-group">
                                        <label for="supplier_id">Supplier</label>
                                        <div class="input-group">
                                             <select name="supplier_id" class="form-control select2" id="supplier_id" required>
                                                  <option value="" disable>-- Pilih Supplier --</option>
                                                  @foreach ($supplier as $key)
                                                       <option value="{{ $key->id }}">{{ $key->supplier_name }}</option>
                                                  @endforeach
                                             </select>
                                             <a href="{{ route('master.supplier.create') }}" class="input-group-append" data-toggle="tooltip" title="Tambah supplier baru">
                                                  <span class="input-group-text">
                                                  <i class="mdi mdi-account-plus text-success"></i>
                                                  </span>
                                             </a>
                                        </div>
                                   </div>
                                   <div class="form-group">
                                        <label for="type">Jenis Pengadaan</label>
                                        <select name="type" class="form-control" id="type" required>
                                             <option value="" disable>-- Pilih Jenis Pengadaan --</option>
                                             <option value="0">Pembelian</option>
                                             <option value="1">Wakaf</option>
                                             <option value="2">Hibah</option>
                                             <option value="3">Hadiah</option>
                                             <option value="4">Donasi</option>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label for="information">Keterangan</label>
                                        <textarea name="information" id="information" cols="30" rows="5" class="form-control"></textarea>
                                   </div>
                                   <div class="alert alert-info">Pilih Barang</div>
                                   <div class="form-group">
                                        <label for="category_id">Kategori</label>
                                        <div class="input-group">
                                             <select name="category_id" class="form-control select2" id="category_id" required>
                                                  <option value="" disable>-- Pilih Kategori --</option>
                                                  @foreach ($category as $key)
                                                       <option value="{{ $key->id }}">{{ $key->category_name }}</option>
                                                  @endforeach
                                             </select>
                                             <a href="{{ route('master.category.create') }}" class="input-group-append" data-toggle="tooltip" title="Tambah kategori baru">
                                                  <span class="input-group-text">
                                                  <i class="mdi mdi-plus-circle text-success"></i>
                                                  </span>
                                             </a>
                                        </div>
                                   </div>
                                   <div class="form-group" id="item_group">
                                        <label for="item_key">Nama Barang</label>
                                        <div class="input-group">
                                             <select name="item_key" class="form-control select2" id="item_key">
                                                  <option value="" disable>-- Pilih Barang --</option>
                                             </select>
                                             <a href="{{ route('master.item.create') }}" class="input-group-append" data-toggle="tooltip" title="Tambah barang baru">
                                                  <span class="input-group-text">
                                                  <i class="mdi mdi-plus-circle text-success"></i>
                                                  </span>
                                             </a>
                                        </div>
                                   </div>
                                   <div class="form-group" id="price_group">
                                        <label for="price">Harga</label>
                                        <input type="text" name="price" id="price" class="form-control maskmoney" min="1">
                                   </div>
                                   <div class="form-group">
                                        <label for="amount">Jumlah</label>
                                        <input type="number" name="amount" id="amount" class="form-control" required min="1">
                                   </div>
                                   <div class="form-group">
                                        <label for="item_description">Deskripsi Barang</label>
                                        <textarea name="item_description" id="item_description" cols="30" rows="5" class="form-control"></textarea>
                                   </div>
                                   <div class="form-group float-right mt-3">
                                        <button type="submit" class="btn btn-info">Simpan</button>  
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
         $('#price_group').hide();
         $('#type').on('change', function() {
               if($(this).val() == 0) {
                    $('#price_group').show();
                    $('#price').attr('required','true');
               }else{
                    $('#price').val(0);
                    $('#price_group').hide();
                    $('#price').removeAttr('required');
               }
         });
         $('#item_group').hide();
         $('#category_id').on('change', function(e) {
               let category_id = e.target.value;
               $.get("{{ route('transaction.entryment.getItem') }}?category_id=" + category_id, function(data) {
                    console.log(data);
                    $('.resetChange').remove();
                    $('#item_group').show();
                    $('#item_key').attr('required','true');
                    $.each(data, function(index, itemObj) {
                         $('#item_key').append('<option class="resetChange" value="' + itemObj.key + '">'+ itemObj.item_name +'</option>');
                    });
               });
         });
    </script>
@endsection