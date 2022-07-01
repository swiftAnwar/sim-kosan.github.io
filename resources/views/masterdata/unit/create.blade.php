@extends('layouts.admin')

@section('title', 'SIM Kosan | Data Kosan')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Kosan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('master.unit') }}">Kosan</a></li>
               <li class="breadcrumb-item active">Tambah Data Kosan</li>
          </ol>
     </div>
@endsection

@section('content')
    <div class="row">
         <div class="col-lg-12">
              <div class="card">
                   <div class="card-body">
                        <div>
                              <i class="mdi mdi-unity text-success" style="font-size: 35px !important;"></i>
                              <span style="font-size: 25px !important;">Tambah Data <strong>Kosan</strong></span>
                         </div>
                        <div class="form mt-5">
                              <form action="{{ route('master.unit.store') }}" method="POST">
                                   <div class="form-group">
                                   {{ csrf_field() }}
                                   </div>
                                   <div class="form-group">
                                        <label for="unit_name">Nama Kosan</label>
                                        <input type="text" class="form-control" id="unit_name" name="unit_name" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="provinsi_id">Id Provinsi</label>
                                        <input type="text" class="form-control" id="provinsi_id" name="provinsi_id" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="unit_address">Alamat</label>
                                        <input type="text" class="form-control" id="unit_address" name="unit_address" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="gender_id">Tipe Kosan</label>
                                        <input type="text" class="form-control" id="gender_id" name="gender_id" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="unit_telphone">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="unit_telphone" name="unit_telphone" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="unit_imageskost">Upload Foto</label>
                                        <input type="file" class="form-control-file" id="unit_imageskost" name="unit_imageskost" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="unit_imagesimb">Upload Foto imb</label>
                                        <input type="file" class="form-control-file" id="unit_imagesimb" name="unit_imagesimb" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="unit_deskripsi">Keterangan</label>
                                        <input type="text" class="form-control" id="unit_deskripsi" name="unit_deskripsi" required autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                        <label for="user_id">Userid</label>
                                        <input type="text" class="form-control" id="user_id" name="user_id" required autocomplete="off">
                                   </div>
                                   <div class="form-row">
                                        <div class="form-group col-md-6">
                                             <label for="unit_lat">Lat</label>
                                             <input type="text" class="form-control" id="unit_lat" name="unit_lat" required autocomplete="off" placeholder="latitude">
                                        </div>
                                        <div class="form-group col-md-6">
                                             <label for="unit_ing">Ing</label>
                                             <input type="text" class="form-control" id="unit_ing" name="unit_ing" required autocomplete="off" placeholder="longitude">
                                        </div>     
                                   </div> 
                                   <div id="map" style="height:300px; width: 700px;" class="my-3"></div>

                <script>
                    let map;
                    function initMap() {
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: { lat: -6.175371641294809, lng: 106.82710647583008 },
                            zoom: 15,
                            scrollwheel: true,
                        });
                        const uluru = { lat: -6.175371641294809, lng: 106.82710647583008 };
                        let marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                            draggable: true
                        });
                        google.maps.event.addListener(marker,'position_changed',
                            function (){
                                let lat = marker.position.lat()
                                let lng = marker.position.lng()
                                $('#unit_lat').val(lat)
                                $('#unit_ing').val(lng)
                            })
                        google.maps.event.addListener(map,'click',
                        function (event){
                            pos = event.latLng
                            marker.setPosition(pos)
                        })
                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
                        type="text/javascript"></script>            
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

@section('script')
    <!--  -->
@endsection