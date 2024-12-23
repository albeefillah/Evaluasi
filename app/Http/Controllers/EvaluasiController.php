<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiWI;
use App\Models\User;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexWI()
    {
        $evalwi = EvaluasiWI::all();

        return view('evaluasi.wi.index', compact('evalwi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createWI()
    {
        $user = User::all();

        return view('evaluasi.wi.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeWI(Request $request)
    {

        $evalWI = EvaluasiWI::create([
            'id_user' => $request['id_user'],
            'ket_pengajar' => $request['ket_pengajar'],
            'nama_pelatihan' => $request['nama_pelatihan'],
            'penguasaan_materi' => $request['penguasaan_materi'],
            'cara_jawab_pertanyaan' => $request['cara_jawab_pertanyaan'],
            'sistematika_penyajian' => $request['sistematika_penyajian'],
            'menyajikan_materi' => $request['menyajikan_materi'],
            'metode_sarana_pemb' => $request['metode_sarana_pemb'],
            'kualitas_bahan_tayang' => $request['kualitas_bahan_tayang'],
            'pemberian_motivasi' => $request['pemberian_motivasi'],
            'ketepatan_waktu_materi' => $request['ketepatan_waktu_materi'],
            'penggunaan_bahasa' => $request['penggunaan_bahasa'],
            'bulan' => $request['bulan'], 
        ]);

        session()->flash('success','Data Berhasil Ditambahkan!');
        return redirect()->route('eval-wi.index');
    }

    /**
     * Display the specified resource.
     */
    public function showWI(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editWI(string $id)
    {
        $evalWI = EvaluasiWI::find($id);
        $user = User::all();

        return view('evaluasi.wi.edit', compact('evalWI', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateWI(Request $request, string $id)
    {
        $evalWI = EvaluasiWI::find($id);
        $evalWI->update([
            'id_user' => $request['id_user'],
            'ket_pengajar' => $request['ket_pengajar'],
            'nama_pelatihan' => $request['nama_pelatihan'],
            'penguasaan_materi' => $request['penguasaan_materi'],
            'cara_jawab_pertanyaan' => $request['cara_jawab_pertanyaan'],
            'sistematika_penyajian' => $request['sistematika_penyajian'],
            'menyajikan_materi' => $request['menyajikan_materi'],
            'metode_sarana_pemb' => $request['metode_sarana_pemb'],
            'kualitas_bahan_tayang' => $request['kualitas_bahan_tayang'],
            'pemberian_motivasi' => $request['pemberian_motivasi'],
            'ketepatan_waktu_materi' => $request['ketepatan_waktu_materi'],
            'penggunaan_bahasa' => $request['penggunaan_bahasa'],
            'bulan' => $request['bulan'], 
        ]);

        session()->flash('success','Data Berhasil Diubah!');
        return redirect()->route('eval-wi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyWI(string $id)
    {
        $evalWI = EvaluasiWI::find($id);
        $evalWI->delete();

        session()->flash('success','Data Berhasil Dihapus!');
        return redirect()->back();

    }
}
