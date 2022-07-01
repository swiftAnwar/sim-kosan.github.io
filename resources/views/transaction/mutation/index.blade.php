@extends('layouts.admin')

@section('title', 'SIM Inventaris | Mutasi')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Mutasi</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item active">Transaksi Mutasi</li>
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
                      <span style="font-size: 25px !important;"> Transaksi <strong>Mutasi</strong></span>
                     </div>
                     <div class="form mt-5">
		                  <form action="" method="post">
		                  	<div class="alert alert-info">
		                    	Transaksi Mutasi
		                    </div>
		                       <div class="form-group">
		                       {{ csrf_field() }}
		                       </div>
		                       <div class="form-group">
		                            <label for="no">No. Mutasi</label>
		                            <input type="text" class="form-control" value="{{ $no }}" id="no" name="no" required readonly>
		                       </div>
		                       <div class="form-group">
		                            <label for="mutation_date">Tanggal Mutasi</label>
		                            <div class="input-group">
			                            <input type="text" class="form-control datepicker" value="" id="mutation_date" name="mutation_date" required>
			                            <div class="input-group-append">
			                            	<span class="input-group-text">
			                            		<i class="icon-calender"></i>
			                            	</span>
			                            </div>
		                            </div>
		                       </div>
		                       <div class="form-group">
		                            <label for="description">Keterangan</label>
		                            <textarea name="description" id="description" class="form-control"></textarea>
						   </div>
						   <div class="alert alert-info">
		                       		Pilih Barang
		                       </div>
		                        <div class="form-group">
		                       		<label for="old_department">Departemen</label>
		                       		<select name="old_department" class="form-control" id="old_department" required>

		                       				<option value="" disable>-- Pilih Departemen --</option>
		                       			@foreach($department as $key)
											<option value="{{ $key->id }}">{{ $key->department_name }}</option>
		                       			@endforeach
		                       		</select>
		                       </div>
		                       <div class="form-group" id="old_location_group">
		                       		<label for="old_location">Lokasi</label>
		                       		<select name="old_location" class="form-control" id="old_location" required>
		                       			<option value="" disable>-- Pilih Lokasi --</option>
		                       		</select>
						   </div>
						   	<div class="form-group" id="item_group">
								<label for="item_key">Nama Barang</label>
								<select id="item_key" name="item_key" class="form-control" required>
									<option value="" disable="true" selected="true">-- Pilih Barang --</option>
								</select>
							</div>
						   	<div class="btn btn-success btn-rounded waves-effect mb-4" data-toggle="modal"  data-target="#modal" id="selectItem">
                                   	Pilih jumlah & kode <strong>barang</strong> 
							</div>
							<input type="hidden" name="amount" id="amount" class="form-control" required>

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

		                     	<div id="newPlacement">
								<div class="alert alert-info">
		                       		Penempatan Baru
								</div>
								<div class="form-group">
									<label for="department_id">Departemen</label>
									<select name="department_id" class="form-control" id="department_id" required>

											<option value="" disable>-- Pilih Departemen --</option>
										@foreach($department as $key)
												<option value="{{ $key->id }}">{{ $key->department_name }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" id="location_group">
									<label for="location_id">Lokasi</label>
									<select name="location_id" class="form-control" id="location_id" required>
										<option value="" disable>-- Pilih Lokasi --</option>
									</select>
								</div>
								<div class="form-group float-right mt-3">
									<button type="submit" class="btn btn-info">
										Simpan
									</button>
								</div>
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
		$('#old_location_group').hide();
		$('#item_group').hide();
		$('#selectItem').hide();
		$('#newPlacement').hide();
		$('#location_group').hide();
        	$('#old_department').on('change', function(e){
			if($(this).val() == '') {
				$('#old_location_group').hide();
				$('#item_group').hide();
				$('#selectItem').hide();
				$('#newPlacement').hide();
			}else{
				$('#old_location_group').show();
				$('#item_group').hide();				
				$('#selectItem').hide();
				let old_department = e.target.value;
				console.log(old_department);
				$.get("{{ route('transaction.mutation.department_change') }}?department_id=" + old_department, function(data) {
					console.log(data);
					$('.resetOldLocation').remove();
					$.each(data, function(index, locationObj){
						$('#old_location').append('<option class="resetOldLocation" value="' + locationObj.id + '">'+ locationObj.location_name +'</option>');
					});
				});
			}
        	});
		$('#old_location').on('change', function(e){
			if($(this).val() == '') {
				$('#selectItem').hide();
				$('#item_group').hide();
				$('#newPlacement').hide();
			}else{
				$('#selectItem').hide();
				let old_location = e.target.value;
				let old_department = $('#old_department').val();
				console.log(old_department + '|' + old_location)
				$.get("{{ route('transaction.mutation.getItem') }}?department_id=" + old_department + '&location_id=' + old_location, function(data) {
					console.log(data);
					$('.resetItem').remove();
					$('#item_group').show();
					$.each(data, function(index, itemObj){
						$('#item_key').append('<option class="resetItem" value="' + itemObj.item_key + '">'+ itemObj.item_name +'</option>');
					});
				});
			}
		});
		$('#item_key').on('change', function(){
			if($(this).val() == '') {
				$('#selectItem').hide();
				$('#newPlacement').hide();
			}else{
				$('#selectItem').show();
				$('#modalTable').DataTable().destroy();
                	fill_modalTable($(this).val());
			}
		});
		$("#selectItem").click(function() { 
			if($('#old_department').val() == '' || $('#old_location').val() == '' || $('#item_key').val() == ''){
				return false;
			}else{
				return true;
			}
        	});
		$("#basic_checkbox_1").on('change', function(){
			$('.checkboxItem').not(this).prop('checked', this.checked); 
			if($('#basic_checkbox_1:checked').length == 0) {
				$('#newPlacement').hide();
			}else{
				$('#newPlacement').show();
			}
		});
		$(document).on('change', '.checkboxItem', function(){
			$('#basic_checkbox_1').prop('checked', false);
			if($('.checkboxItem:checked').length < 1) {
				$('#newPlacement').hide();
			}else{
				$('#newPlacement').show();
			}
		});
		$('#department_id').on('change', function(e){
			if($(this).val() == '') {
				$('#location_group').hide();
			}else{
				$('#location_group').show();
				let department_id = e.target.value;
				let old_location = $('#old_location').val();
				console.log(department_id);
				$.get("{{ route('transaction.mutation.department_change') }}?department_id=" + department_id + '&location_id=' + old_location, function(data) {
					console.log(data);
					$('.resetLocation').remove();
					$.each(data, function(index, locationObj){
						$('#location_id').append('<option class="resetLocation" value="' + locationObj.id + '">'+ locationObj.location_name +'</option>');
					});
				});
			}
        	});
		$('#form_data').on('submit', function(){
			if($('[name="item_barcode[]"]:checked').length < 1) {
				swal("Terjadi Kesalahan!", "Harap pilih lokasi penempatan baru!", "warning");
				return false;
			}else{
				let amount = $('[name="item_barcode[]"]:checked').length;
				$('#amount').attr('value', amount);
			}
		});
		function fill_modalTable(item_key) {
			$('#modalTable').DataTable({
				'processing': true,
				'serverSide': true,
				"order" : [],
				'ajax': {
					url: "{{ route('transaction.mutation.availableItem') }}",
					type: 'POST',
					data: {
						item_key: item_key, _token: '{{csrf_token()}}'
					},
				},
				'columns': [
					{ data: 'no' },
					{ data: 'barcode'},
					{
						data: null,
						render: function(checkbox){
							return '<input type="checkbox" name="item_barcode[]" class="checkboxItem" id="basic_checkbox_'+ checkbox.checkbox +'" value="'+ checkbox.barcode +'"/><label for="basic_checkbox_'+ checkbox.checkbox +'"></label>'
						}
					}
				],
			});
		}
	</script>
@endsection()