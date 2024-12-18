<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiWI extends Model
{
    use HasFactory;

    protected $table = 'eval-wi';
    protected $fillable = [
        'id_user',
        'ket_pengajar',
        'nama_pelatihan',
        'penguasaan_materi',
        'cara_jawab_pertanyaan',
        'sistematika_penyajian',
        'menyajikan_materi',
        'metode_sarana_pemb',
        'kualitas_bahan_tayang',
        'pemberian_motivasi',
        'ketepatan_waktu_materi',
        'penggunaan_bahasa',
        'bulan',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
