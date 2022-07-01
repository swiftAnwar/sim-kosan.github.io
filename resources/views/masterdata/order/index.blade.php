@extends('layouts.admin')

@section('title', 'SIM Kosan | Pesanan')

@section('breadcumb')
     <div class="col-md-5 col-8 align-self-center">
          <h3 class="text-themecolor">Pesanan</h3>
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
               <li class="breadcrumb-item active">Pesanan</li>
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
                              <span style="font-size: 25px !important;">Master Data <strong>Pesanan</strong></span>
                         </div>
                         <a href="{{ route('master.order.create') }}" class="btn btn-success btn-rounded waves-effect float-right m-t-10 m-b-10">
                              <i class="fa fa-plus m-r-5"></i>
                              Tambah <strong>Pesanan</strong> Baru
                         </a>
                         <div class="table-responsive m-t-40">
                              <table id="PesananTable" class="table table-bordered table-striped">
                                   <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Nama Pesanan</th>
                                             <th>Status</th>
                                             <th>Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
               @php $no=1;  @endphp
               @foreach($data as $key)
                                        <tr>
                                             <td>{{ $no++ }}</td>
                                             <td>{{ $key->order_name }}</td>
                                             <td>{{ $key->status }}</td>
                                             <td>
                                                  <form action="{{ route('master.order.destroy', $key) }}" method="post">
                                                     {{ csrf_field() }}
                                                     {{ method_field('DELETE') }}
                                                     <a href="{{ route('master.order.edit', $key) }}" class="btn btn-warning waves-effect" data-toggle="tooltip" title="Edit">
                                                         <i class="fa fa-edit"></i>
                                                     </a>
                                                     <button type="submit" class="btn btn-danger waves-attack swalDelete" data-toggle="tooltip" title="Hapus">
                                                         <i class="fa fa-trash-alt"></i>
                                                     </button>
                                                 </form>
                                             </td>
                                        </tr>
               @endforeach
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

@section('script')
    <script>
         $('#PesananTable').DataTable();
    </script>
@endsection