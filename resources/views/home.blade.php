@section('title') 
PPSDM Aparatur - Dashboard
@endsection 
@extends('layouts.main')
@section('style')
<!-- Chartist Chart CSS -->
<link href="{{ asset('assets/plugins/chartist-js/chartist.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Datepicker CSS -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css" />

{{-- Add style table --}}
<style>
    .scroll-indicator{
        height:700px ;
        overflow-x:auto;
        border-radius: 8px;
        position: relative;
    }

    #bpau-tab.active {
        background-color: #e2d305;
    }
    #bpak-tab.active {
        background-color: #41ad2c;
    }
    #bpas-tab.active {
        background-color: #219bb9;
    }
    #bpap-tab.active {
        background-color: #ca4d87;
    }

    /* .fixed-head {
        position: sticky;
        top: 0;
        z-index: 100; /* Sesuaikan dengan kebutuhan */
    } */
</style>
@endsection 
@section('content')
<!-- Start XP Breadcrumbbar -->                    
<br>
<br>
<br>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">

    <!-- Start XP Col -->
    <div class="col-md-12 col-lg-12 col-xl-12 ">
      
        
     </div>
    <!-- End XP Col -->

    <!-- Start XP Row -->
    <div class="row"> 
        <!-- Start XP Col -->   
        <div class="col-md-12 col-lg-12 col-xl-6">
            <!-- Start XP Row -->
            <div class="row">                             
                <!-- Start XP Col -->
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Weekly Revenue</h5>
                        </div>
                        <div class="card-body">
                            <div class="xp-chart-label">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <p class="text-black">Current Week</p>
                                        <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>78,254</h4>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-black">Previous Week</p>
                                        <h4 class="text-success-gradient mb-3"><i class="icon-wallet mr-2"></i>58,605</h4>
                                    </li>
                                </ul>
                            </div>
                            <div id="xp-chartist-series-overrides" class="ct-chart ct-golden-section xp-chartist-simple-line"></div>
                        </div>
                    </div>
                </div>
                <!-- End XP Col --> 
            </div>
            <!-- End XP Row -->
        </div>          
        <!-- End XP Col -->
         <!-- Start XP Col -->
         <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p class="text-black">Today's</p>
                                <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>8,390</h4>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-black">Last Month</p>
                                <h4 class="text-success-gradient mb-3"><i class="icon-wallet mr-2"></i>24,420</h4>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-black">Last Year</p>
                                <h4 class="text-danger-gradient mb-3"><i class="icon-wallet mr-2"></i>3,25,780</h4>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-stacked-bar" class="ct-chart ct-golden-section xp-chartist-stacked-bar"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
       
      
    </div>
    <!-- End XP Row -->
   
</div>
<!-- End XP Contentbar -->
@endsection 
@section('script')
<!-- Chartist Chart JS -->
<script src="{{ asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- To Do List JS -->
<script src="{{ asset('assets/js/init/to-do-list-init.js') }}"></script>
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<!-- Dashboard JS -->
<script src="{{ asset('assets/js/init/dashborad.js') }}"></script>

@livewireScripts
@endsection 