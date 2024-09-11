<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_kerusakan extends Model
{
    use HasFactory;
    protected $connection = 'mysql_2';
    protected $keyType = 'string';
    protected $guarded = 'id';
    public function getFormatWaktuLaporAttribute()
    {
        $schedule_date = Carbon::parse($this->attributes['waktu_lapor']);
        return $schedule_date->isoFormat('D MMMM Y,  HH : mm : ss');
    }  
}
