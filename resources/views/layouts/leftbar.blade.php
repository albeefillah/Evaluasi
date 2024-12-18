<div class="xp-leftbar">
    <!-- Start XP Sidebar -->
    <div class="xp-sidebar">
        <!-- Start XP Logobar -->
        <div class="xp-logobar text-center">
            <a href="{{ route('home') }}" class="xp-logo"><img src="{{asset('assets/images/logo-ppsdm-tr.png')}}" width="80%" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End XP Logobar -->
        <!-- Start XP Navigationbar -->
        <div class="xp-navigationbar">
            <ul class="xp-vertical-menu">
                <li>
                    <a href="{{ route('home') }}">
                      <i class="icon-speedometer"></i><span>Dashboard</span>
                  </a>
                </li>

              
                <li class="xp-vertical-header">Master Data</li>

                <li>
                    <a href="{{ route('user.index') }}">
                      <i class="icon-people"></i><span>Data User</span>
                  </a>
                </li>
                <li>
                    <a href="{{ route('eval-wi.index') }}">
                      <i class="icon-note"></i><span>Evaluasi WI</span>
                  </a>
                </li>
               
                {{-- <li>
                  <a href="javaScript:void();">
                    <i class="icon-event"></i><span>Program PPSDM</span><i class="icon-arrow-right pull-right"></i>
                  </a>
                  <ul class="xp-vertical-submenu">
                      <li><a href="">Kegiatan Program</a></li>
                      <li><a href="">Klasifikasi Rincian Output (KRO)</a></li>
                      <li><a href="">Rincian Output</a></li>
                      <li><a href="">Sub Komponen</a></li>
                      <li><a href="">Detail Komponen</a></li>
                  </ul>
                </li> --}}
            </ul>
        </div>
        <!-- End XP Navigationbar -->
    </div>
    <!-- End XP Sidebar -->
</div>