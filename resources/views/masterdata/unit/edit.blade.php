@extends('layouts.admin')

@section('title','SIM Kosan | Data Kosan')
    
@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Kosan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item"><a href="{{ route('master.unit') }}">Kosan</a></li>
               <li class="breadcrumb-item active">Edit Data Kosan</li>
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
                        <span style="font-size: 25px !important;">Edit Data Kosan <strong>{{ $data->unit_name }}</strong></span>
                    </div>
                    <div class="form mt-5">
                        <form action="{{ route('master.unit.update', $data->id) }}" method="post">

                            <div class="form-group">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                            </div>

                            <div class="form-group">
                                <label for="unit_name">Nama Kosan</label>
                                <input type="text" name="unit_name" id="unit_name" value="{{ $data->unit_name }}" class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="provinsi_id">Id Provinsi</label>
                                <input type="text" name="provinsi_id" id="provinsi_id" value="{{ $data->provinsi_id }}" class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="unit_address">Alamat</label>
                                <input type="text" name="unit_address" id="unit_address" value="{{ $data->unit_address }}" class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="gender_id">Tipe Kosan</label>
                                <input type="text" name="gender_id" id="gender_id" value="{{ $data->gender_id }}" class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="unit_telphone">Nomor Telepon</label>
                                <input type="text" name="unit_telphone" id="unit_telphone" value="{{ $data->unit_telphone }}" class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="unit_imageskost">Foto Kost</label>
                                <input type="file" name="unit_imageskost" id="unit_imageskost" value="{{ $data->unit_imageskost }}" class="form-control-file" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="unit_imagesimb">Foto Imb</label>
                                <input type="file" name="unit_imagesimb" id="unit_imagesimb" value="{{ $data->unit_imagesimb }}" class="form-control-file" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="unit_deskripsi">Keterangan</label>
                                <input type="text" name="unit_deskripsi" id="unit_deskripsi" value="{{ $data->unit_deskripsi }}" class="form-control" required autocomplete="off">
                            </div>                      
                            <div class="form-group">
                                <label for="user_id">User Id</label>
                                <input type="text" name="user_id" id="user_id" value="{{ $data->user_id }}" class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="unit_lat">Latitude</label>
                                  <input type="text" name="unit_lat" id="unit_lat" value="{{ $data->unit_lat }}" class="form-control" placeholder="latitude">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="unit_ing">Longitude</label>
                                  <input type="text" name="unit_ing" id="unit_ing" value="{{ $data->unit_ing }}" class="form-control" placeholder="longitude">
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