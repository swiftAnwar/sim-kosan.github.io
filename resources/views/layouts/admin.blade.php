<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Tell the browser to be responsive to screen width -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">
     <!-- Favicon icon -->
     <link rel="icon" href="{{ asset('assets/images/inventory_icon_white.png') }}">
     <title>@yield('title')</title>
     <!-- Bootstrap Core CSS -->
     <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <!--This page css - Morris CSS -->
     <link href="{{ asset('assets/plugins/c3-master/c3.min.css') }}" rel="stylesheet">
     <!-- Datatables -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/media/css/dataTables.bootstrap4.css') }}">
     <!-- Select2 -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}">
     <!-- Toast CSS -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/toast-master/css/jquery.toast.css') }}">
     <!-- Sweetalert -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
     <!-- Datepicker -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }} ">
     <!-- Custom CSS -->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     <!-- You can change the theme colors from here -->
     <link href="{{ asset('css/colors/blue.css') }}" id="theme" rel="stylesheet">
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
     <script src="{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
     <![endif]-->
     <style>
          @font-face {
               font-family: 'Radon Deco';
               src: url("{{ asset('font/Radon/Radon Deco.ttf') }}");
          }
     </style>
</head>
<body class="fix-header fix-sidebar card-no-border">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Preloader - style you can find in spinners.css -->
    
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
          @include('layouts.components.header')
        <!-- End Topbar header -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->
          @include('layouts.components.sidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
               <!-- Container fluid  -->
               <div class="container-fluid">
                    <!-- Bread crumb and right sidebar toggle -->
                         @include('layouts.components.breadcumb')
                    <!-- End Bread crumb and right sidebar toggle -->

                    <!-- Start Page Content -->
                         @yield('content')
                    <!-- End Start Page Content -->

                    <!-- Right sidebar -->
                         @include('layouts.components.rightsidebar')
                    <!-- End Right sidebar -->
               </div>
               <!-- End Container fluid  -->

               <!-- footer -->
                    @include('layouts.components.footer')
               <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->


     </div>
     <!-- End Main wrapper - style you can find in pages.scss -->
     
     <!-- All Jquery -->
     <!-- ============================================================== -->
     <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
     <!-- Bootstrap tether Core JavaScript -->
     <script src="{{ asset('assets/plugins/popper/popper.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
     <!-- slimscrollbar scrollbar JavaScript -->
     <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
     <!--Wave Effects -->
     <script src="{{ asset('js/waves.js') }}"></script>
     <!--Menu sidebar -->
     <script src="{{ asset('js/sidebarmenu.js') }}"></script>
     <!--stickey kit -->
     <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
     <!--Custom JavaScript -->
     <script src="{{ asset('js/custom.min.js') }}"></script>
     <!-- ============================================================== -->
     <!-- This page plugins -->
     <!-- ============================================================== -->
     <!--c3 JavaScript -->
     <script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/c3-master/c3.min.js') }}"></script>
     <!-- ============================================================== -->
     <!-- Style switcher -->
     <!-- ============================================================== -->
     <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
     <!-- Datatable -->
     <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
     <!-- Select2 -->
     <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>
     <!-- Toast CSS -->
     <script src="{{ asset('assets/plugins/toast-master/js/jquery.toast.js') }}"></script>
     <script src="{{ asset('js/toastr.js') }}"></script>
     <!-- Sweetalert -->
     <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/sweetalert/jquery.sweet-alert.custom.js') }}"></script>
     <!-- MaskMoney -->
     <script src="{{ asset('assets/plugins/maskmoney/jquery.maskMoney.js') }}"></script>
     <!-- Datepicker -->
     <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
     <!-- Notification -->
          @include('layouts.components.notification');
     <!-- End Notification -->
     <script>
          $.fn.datepicker.dates['ina'] = {
               days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"],
               daysShort: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"],
               daysMin: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"],
               months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
               monthsShort: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
               today: "Hari ini",
               clear: "Reset",
               format: "dd-mm-yyy",
               titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
               weekStart: 0
          };
          $('.datepicker').datepicker({
               language: 'ina',
               autoclose: true,
               todayHighlight: true,
               todayBtn: 'linked',
               format: 'dd-mm-yyyy',
               clearBtn: true,
          });
          $('.datepicker').keypress(function(event) {
               event.preventDefault();
               return false;
          });
          $('.maskmoney').maskMoney({ thousands: '.', decimal: ',', precision: '0', prefix: 'Rp. ' });
     </script>
     <!-- My Script -->
     @yield('script')
</body>
</html>