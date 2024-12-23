@section('title') 
SiARTUR - Tambah Data Evaluasi Widyaiswara
@endsection 
@extends('layouts.main')
@section('style')
   <!-- Select2 CSS -->
   <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection 
@section('content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('eval-wi.index') }}">Evaluasi widyaiswara</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-header bg-grey">
                <h5 class="card-title text-black">Tambah Data</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('eval-wi.store') }}" onsubmit="return Validation()" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_user">Pengajar</label>
                            <select class="xp-select2-single form-control" name="id_user">
                                <option>Pilih Pengajar</option>
                                @foreach ($user as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Keterangan Pengajar</label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline" style="margin-top: 8px;">
                                <input type="radio" id="wi_ppsdma" name="ket_pengajar" class="custom-control-input" value="WI PPSDMA">
                                <label class="custom-control-label" for="wi_ppsdma">WI PPSMA</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="wi_eksternal" name="ket_pengajar" class="custom-control-input" value="WI Eksternal">
                                <label class="custom-control-label" for="wi_eksternal">WI Eksternal</label>
                              </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama_pelatihan">Nama Pelatihan</label>
                        <input type="text" required name="nama_pelatihan" class="form-control" id="nama_pelatihan" placeholder="Masukan Nama Pelatihan">
                    </div>

                    <div class=" col-md-2 mt-5">
                        <h5 class="card-title text-black pl-1"> Form Penilaian </h5>
                        <hr style="border: 1px solid black;">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id_user">Penguasaan Materi</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="penguasaan_materi">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_user">Cara Menjawab Pertanyaan</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="cara_jawab_pertanyaan">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_user">Sistematika Penyajian</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="sistematika_penyajian">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id_user">Kemampuan Menyajikan Materi</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="menyajikan_materi">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_user">Penggunaan Metode dan Sarana Pembelajaran</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="metode_sarana_pemb">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_user">Kualitas Bahan Tayang</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="kualitas_bahan_tayang">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="id_user">Pemberian Motivasi Bagi Peserta</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="pemberian_motivasi">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_user">Ketepatan Waktu Menyajikan Materi</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="ketepatan_waktu_materi">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="id_user">Penggunaan dan Kejelasan Bahasa</label>
                            <input type="number" min="0" placeholder="0.00" step="0.01" max="100" class="form-control" name="penggunaan_bahasa">
                        </div>
                    </div>
                
                  <a href="{{ route('eval-wi.index') }}" class="btn btn-secondary">Kembali</a>
                  <button type="submit" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End XP Contentbar -->
@endsection 
@section('script')
 <!-- Select2 JS -->
 <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
 <script src="{{ asset('assets/js/init/form-select-init.js') }}"></script>
@endsection 