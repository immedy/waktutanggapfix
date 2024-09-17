<?php

namespace App\Http\Controllers\Master;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\laporan_kerusakan;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class MasterController extends Controller
{
    public function Laporan_kerusakan()
    {
        return view('Dashboard.Home.index',[
            'LaporanPengirimian' => laporan_kerusakan::where('pegawai_id', Auth()->user()->pegawai_id)->latest()->get()
        ]);
    }
    public function storeLaporanKerusakan(Request $request)
    {
       
        $validateData = $request->validate([
            'keterangan' => 'required',
            'waktu_lapor' => 'required'
        ]);
        $uuid = str::uuid();
        $shortUUID = substr($uuid, 0, 13);
        $validateData['id'] = $shortUUID;
        $validateData['status'] = '0';
        $validateData['pegawai_id'] = auth()->user()->pegawai_id;
        $validateData['ruangan_id'] = auth()->user()->Pegawai->RefRuanganToUnit->ruangan_id;
        laporan_kerusakan::updateOrInsert($validateData);
        if ($validateData) {
            Alert::success('Pegawai Berhasil Di tambahkan');
        }
        return back();
    }

    public function Respon_Kerusakan()
    {
        return view('Dashboard.Home.respon',[
            'ResponLaporan' => laporan_kerusakan::where('status','0')->latest()->get()
        ]);
    }
    public function storeResponKerusakan(Request $request)
    {
        $validateData = $request->validate([
            5
        ]);
    }
}
