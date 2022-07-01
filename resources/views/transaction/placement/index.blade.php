@extends('layouts.admin')

@section('title','SIM Inventaris | Penempatan')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Penempatan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item active">Penempatan</li>
          </ol>
     </div>
@endsection

@section('content')
    <div class="row">
        <div class="col lg 12">
            <div class="card">
                <div class="card-body">

                    <div>
                        <i class="mdi mdi-map-marker text-success" style="font-size: 35px !important;"></i>
                        <span style="font-size: 25px !important"><strong>Penempatan</strong></span>
                    </div>

                    <div class="form mt-5">
                        <form action="{{ route('transaction.placement.store') }}" method="POST" id="form_data">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>

                            <div class="alert alert-info">Transaksi Penempatan</div>
                        
                            <div class="form-group">
                                <label for="no">Nomor Penempatan</label>
                                <input type="text" name="no" id="no" class="form-control" value="{{ $no }}" readonly required>
                            </div>     

                            <label for="placement_date">Tanggal Penempatan</label>
                            <div class="form-group">
                                <div class="input-group">
                                        <input type="text" class="form-control datepicker" name="placement_date" id="placement_date" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            <i class="icon-calender"></i>
                                            </span>
                                        </div>
                                </div>
                            </div>                            

                            <div class="form-group">
                                <label for="department_id">Depertemen</label>
                                <div class="input-group">
                                    <select name="department_id" id="department_id" class="form-control" required>
                                        <option value="" disable="true" selected="true">-- Pilih Departemen --</option>
                                        @foreach ($departemen as $item)
                                            <option value="{{ $item->id }}">{{ $item->department_name }}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ route('master.department.create') }}" class="input-group-append" data-toggle="tooltip" title="Tambah departemen baru">
                                        <span class="input-group-text">
                                        <i class="mdi mdi-plus-circle text-success"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="form-group" id="location">
                                <label for="location_id">Lokasi</label>
                                <div class="input-group">
                                    <select name="location_id" id="location_id" class="form-control" required>
                                        <option value="" disable="true" selected="true">-- Pilih Lokasi --</option>
                                    </select>
                                    <a href="{{ route('master.location.create') }}" class="input-group-append" data-toggle="tooltip" title="Tambah lokasi baru">
                                        <span class="input-group-text">
                                        <i class="mdi mdi-map-marker-plus text-success"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                            </div>

                            <div class="alert alert-info">Pilih Barang</div>

                            <div class="form-group">
                                <label for="category_id">Pilih Kategori</label>
                                <div class="input-group">
                                    <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="" disable="true" selected="true">-- Pilih Kategori --</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>    
                                        @endforeach
                                    </select>
                                    <a href="{{ route('master.category.create') }}" class="input-group-append" data-toggle="tooltip" title="Tambah kategori baru">
                                        <span class="input-group-text">
                                        <i class="mdi mdi-plus-circle text-success"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="form-group" id="item">
                                <label for="item_key">Nama Barang</label>
                                <div class="input-group">
                                    <select id="item_key" name="item_key" class="form-control" required>
                                        <option value="" disable="true" selected="true">-- Pilih Barang --</option>
                                    </select>
                                    <a href="{{ route('master.item.create') }}" class="input-group-append" data-toggle="tooltip" title="Tambah barang baru">
                                        <span class="input-group-text">
                                        <i class="mdi mdi-plus-circle text-success"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                    <div class="btn btn-success btn-rounded waves-effect" data-toggle="popover"  data-target="#modal" id="selectItem" data-container="body" data-placement="top" data-content="Pilih kategori & barang terlebih dahulu">
                                        Pilih jumlah & kode <strong>barang</strong> 
                                    </div>
                                    <input type="hidden" name="amount" id="amount" class="form-control">
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">
                                                <i class="mdi mdi-checkbox-marked-circle-outline text-success" style="font-size: 30px"></i>
                                                Pilih kode barang
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <div class="row">
                                                <div class="col-3 form-inline">
                                                    <p>Barang  Terpilih  : </p><p class="text-success">&nbsp;5</p>
                                                </div>
                                            </div> --}}
                                            <input type="checkbox" id="basic_checkbox_1"/>
                                            <label for="basic_checkbox_1">Pilih Semua</label>
                                            <div class="responsive">
                                                <table id="modalTable" class="table table-bordered table-striped" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Barcode</th>
                                                            <th>Supplier</th>
                                                            <th>Pilih</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <div class="form-group float-right mt-3">
                                <button type="submit" class="btn btn-info">
                                    Simpan
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    

@endsection

@section('script')
    <script type="text/javascript">
        $('#location').hide();
        $('#department_id').on('change', function(e){
            let department_id = e.target.value;
            $.get("{{ route('transaction.placement.department_change') }}?department_id=" + department_id, function(data) {
                console.log(data);
                $('.resetLocation').remove();
                $('#location').show();
                $.each(data, function(index, locationObj){
                    $('#location_id').append('<option class="resetLocation" value="' + locationObj.id + '">'+ locationObj.location_name +'</option>');
                });
            });
        });


        $('#item').hide();
        $('#category_id').on('change', function(e){
            let category_id = e.target.value;
            console.log(category_id);
            $.get("{{ route('transaction.placement.category_change') }}?category_id=" + category_id, function(data){
                console.log(data);
                $('.resetItem').remove();
                $('#item').show();
                $.each(data, function(index, itemObj){
                    $('#item_key').append('<option class="resetItem" value="' + itemObj.key + '">'+ itemObj.item_name +'</option>');
                });
            });
        });

        $('#item_key').on('change',function() {
            if($(this).val() == '') {
                $('#selectItem').removeAttr('data-toggle');
                $('#selectItem').attr('data-toggle','popover');
            }else{
                $('#selectItem').removeAttr('data-toggle');
                $('#selectItem').attr('data-toggle','modal');                
                $('#modalTable').DataTable().destroy();
                fill_modalTable($('#category_id').val(),$('#item_key').val());
            }
        });

        function fill_modalTable(category_id,item_key) {
            $('#modalTable').DataTable({
                'processing': true,
                'serverSide': true,
                "order" : [],
                'ajax': {
                    url: "{{ route('transaction.placement.availableItem') }}",
                    type: 'POST',
                    data: {
                        category_id: category_id, item_key: item_key, _token: '{{csrf_token()}}'
                    },
                },
                'columns': [
                    { data: 'no' },
                    { data: 'barcode'},
                    { data: 'supplier_name'},
                    {
                        data: null,
                        render: function(checkbox){
                            return '<input type="checkbox" name="item_barcode[]" class="checkboxItem" id="basic_checkbox_'+ checkbox.checkbox +'" value="'+ checkbox.barcode +'"/><label for="basic_checkbox_'+ checkbox.checkbox +'"></label>'
                        }
                    }
                ],
            });
        }
        $("#selectItem").popover({ trigger:"manual" }).click(function() { 
            if($('#item_key').val() == '' || $('#category_id').val() == ''){
                $(this).attr('data-toggle','popover');
                var pop = $(this); 
                pop.popover("show") 
                pop.on('shown.bs.popover',function() { 
                setTimeout(function() {
                    pop.popover("hide")}, 2200); 
                }) 
            }else{
                return true;
            }
        });
        $("#basic_checkbox_1").on('change', function(){
            $('.checkboxItem').not(this).prop('checked', this.checked);
            console.log();  
        });

        $('#form_data').on('submit', function(){
            if($('[name="item_barcode[]"]:checked').length < 1) {
                swal("Terjadi Kesalahan!", "Harap pilih barang terlebih dahulu!", "warning");
                return false;
            }else{
                let amount = $('[name="item_barcode[]"]:checked').length;
                $('#amount').attr('value', amount);
            }
        });
    </script>
@endsection