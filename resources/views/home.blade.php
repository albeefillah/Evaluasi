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

    table {
        font-size: 12px;
}


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
        <div class="col-md-12 col-lg-12 col-xl-12">
            <!-- Start XP Row -->
            <div class="row">                             
                <!-- Start XP Col -->
                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Evaluasi WI PPSDM Aparatur</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive m-b-30">
                                <table class="table table-bordered" style="text-align: center;">
                                  <thead>
                                    <tr>
                                      <th scope="col" colspan="11" style="background-color: #478C5C; color: white;">Kriteria Kemampuan Mengajar</th>
                                    </tr>
                                    <tr>
                                      <th scope="col" rowspan="2" style="vertical-align: middle; background-color: #478C5C; color: white">
                                          Nama Pelatihan</th>
                                          <th scope="col" rowspan="2" style="vertical-align: middle; background-color: #478C5C; color:white;">
                                          Pengajar</th>
                                      <th scope="col" colspan="3" style="vertical-align: middle; background-color:#BACC81;">
                                        Kompetensi</th>
                                      <th scope="col" colspan="3" style="vertical-align: middle; background-color:#BACC81;">
                                        Teknik Mengajar</th>
                                      <th scope="col" colspan="3" style="vertical-align: middle; background-color:#BACC81;">
                                        Personality</th>
                                    </tr>
                                    <tr>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Penguasaan Materi</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Cara Menjawab Pertanyaan</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Sistematika Penyajian</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Kemampuan Menyajikan Materi</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Penggunaan Metode dan Sarana Pembelajaran</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Kualitas Bahan Tayang</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Pemberian Motivasi Bagi Peserta</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Ketepatan Waktu Menyajikan Materi</th>
                                      <th scope="col" style="vertical-align: middle; background-color: #478C5C; color: white">
                                        Penggunaan dan Kejelasan Bahasa</th>
                                    </tr>
                                  </thead>

                                    @php
                                        $current_pelatihan = null;
                                        $rowspan_count = [];
                                        foreach ($evalWi as $data) {
                                            $rowspan_count[$data['nama_pelatihan']] = ($rowspan_count[$data['nama_pelatihan']] ?? 0) + 1;
                                        }
                                    @endphp

                                  <tbody>
                                    @foreach ($evalWi as $item)
                                    <tr>
                                        @if($current_pelatihan !== $item['nama_pelatihan'])
                                        <td style="background-color: #B1D8B7;" rowspan="{{ $rowspan_count[$item['nama_pelatihan']] }}">
                                            {{ $item['nama_pelatihan'] }}
                                        </td>
                                        @php $current_pelatihan = $item['nama_pelatihan']; @endphp
                                        @endif
                                        <td style="background-color: #B1D8B7;">{{ $item->user->name }}</td>
                                        <td>{{ $item->penguasaan_materi }}</td>
                                        <td>{{ $item->cara_jawab_pertanyaan }}</td>
                                        <td>{{ $item->sistematika_penyajian }}</td>
                                        <td>{{ $item->menyajikan_materi }}</td>
                                        <td>{{ $item->metode_sarana_pemb }}</td>
                                        <td>{{ $item->kualitas_bahan_tayang }}</td>
                                        <td>{{ $item->pemberian_motivasi }}</td>
                                        <td>{{ $item->ketepatan_waktu_materi }}</td>
                                        <td>{{ $item->penggunaan_bahasa }}</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>          

                        </div>
                    </div>
                </div>
                <!-- End XP Col --> 
            </div>
            <!-- End XP Row -->
        </div>          
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

@endsection 