<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pegawai extends Model
{
    use HasFactory;
    // protected $with = ['Refabesensi'];
    protected $guarded = 'id';
    protected $connection = 'mysql';
    public function scopeFilter($query)
    {
        if (request('CariPegawai')) {
            $query->where('nip', 'like', '%' . request('CariPegawai') . '%')
                ->orWhereRaw("LOWER(nama) LIKE '%" . strtolower(request('CariPegawai')) . "%'");
        }
    }
    public function user()
    {
        return $this->hasOne(User::class,'pegawai_id','id');
    }
    Public function RefRuanganToUnit()
    {
        return $this->belongsTo(pegawai_unit::class,'id','pegawai_id');        
    }

}
