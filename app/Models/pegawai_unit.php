<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai_unit extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $guarded = 'id';
    // protected $with = ['NamaPegawai','NamaUnit','NamaJabatan','NamaProfesi','StatusKepegawaian'];
    public function NamaPegawai()
    {
        return $this->belongsTo(pegawai::class,'pegawai_id','id');
    }
    public function NamaUnit()
    {
        return $this->belongsTo(ruangan::class,'ruangan_id','id');
    }
    // public function NamaJabatan()
    // {
    //     return $this->belongsTo(referensi::class,'jabatan_id','id');
    // }
    // public function NamaProfesi()
    // {
    //     return $this->belongsTo(referensi::class,'profesi','id');
    // }
    // public function StatusKepegawaian()
    // {
    //     return $this->belongsTo(referensi::class,'status_kepegawaian','id');
    // }
    public function RefRuanganToPegawai()
    {
        return $this->hasOne(ruangan::class,'id','ruangan_id');
    }
}
