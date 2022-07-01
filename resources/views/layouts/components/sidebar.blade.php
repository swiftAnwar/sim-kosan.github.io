<aside class="left-sidebar">
     <!-- Sidebar scroll-->
     <div class="scroll-sidebar">
          <nav class="sidebar-nav">
               <ul id="sidebarnav" class="mt-3">
                    <li class="dashboard">
                         <a class="waves-effect" href="{{ route('home') }}" aria-expanded="true">
                              <i class="mdi mdi-gauge"></i>
                              <span class="hide-menu">Dashboard </span>
                         </a>
                    </li>
                    <li>
                         <a class="has-arrow waves-effect" href="#" aria-expanded="false">
                              <i class="mdi mdi-dropbox"></i>
                              <span class="hide-menu">Master Data </span>
                         </a>
                         <ul aria-expanded="false" class="collapse">
                              {{-- <li><a href="{{ route('master.unit') }}">Data Kosan </a></li> --}}
                              <li><a href="{{ route('master.owner') }}">Data Pemilik Kosan </a></li>
                              {{-- <li><a href="{{ route('master.order') }}">Data Pesanan Kosan </a></li> --}}
                         </ul>
                    </li>
                    <li> 
                         <a class="has-arrow waves-effect" href="#" aria-expanded="false">
                              <i class="mdi mdi-swap-vertical"></i>
                              <span class="hide-menu">Transaksi </span>
                         </a>
                         <ul aria-expanded="false" class="collapse">
                              {{-- <li><a href="{{ route('transaction.entryment') }}">Pengadaan </a></li>
                              <li><a href="{{ route('transaction.placement') }}">Penempatan </a></li>
                              <li><a href="{{ route('transaction.mutation') }}">Mutasi </a></li>
                              <li><a href="{{ route('transaction.loaning') }}">Peminjaman </a></li>
                              <li><a href="{{ route('transaction.reversion') }}">Pengembalian </a></li> --}}
                         </ul>
                    </li>
                    <li> 
                         <a class="has-arrow waves-effect" href="#" aria-expanded="false">
                              <i class="mdi mdi-clipboard-outline"></i>
                              <span class="hide-menu">Laporan </span>
                         </a>
                         <ul aria-expanded="false" class="collapse">
                              
                         </ul>
                    </li>
               </ul>
          </nav>
          <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
</aside>