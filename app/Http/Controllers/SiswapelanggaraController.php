<?php

namespace App\Http\Controllers;

use App\Models\Datapelanggaran;
use App\Models\datapelanggarans_kasus;
use App\Models\Kasus;
use App\Models\Kasus_siswa;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\SiswaDatapelanggaran;
use Illuminate\Support\Facades\DB;

class SiswapelanggaraController extends Controller
{
    public function getSiswa(){
        // $data = SiswaDatapelanggaran::find($id);
        // $inipsiswa = SiswaDatapelanggaran::all();
        // $inipelanggaran = Datapelanggaran::all();
        // return view('admin.siswapelanggaran.siswapelanggaran', compact( 'inipsiswa', 'inipelanggaran'));
        $datakasus = Kasus::with(['relasitopelanggaran','relasitosiswa'])->get();
      
        $data = Kasus::all();
        return view('admin.siswapelanggaran.siswapelanggaran', ['datakasus'=>$datakasus]);
    }

    // create
    public function create()
    {
        $inidatasiswa = Siswa::all();
        $inidatapelanggaran = Datapelanggaran::all();
        return view('admin.siswapelanggaran.formsiswapelanggaran', compact('inidatasiswa', 'inidatapelanggaran'));
    }

    // store
    public function store(Request $request)
    {
        Kasus::create([
            'siswa_id' => $request->siswa_id,
            'datapelanggaran_id'=>$request->datapelanggaran_id,
            'tanggal'=>$request->tanggal
        ]);
        $data = DB::table('kasus')->orderBy('id', 'DESC')->limit(1)->get()->pluck('id')->first();
        Kasus_siswa::create([
            'siswa_id' => $request->siswa_id,
            'kasus_id' =>$data,
        ]);
        datapelanggarans_kasus::create([
            'datapelanggaran_id'=>$request->datapelanggaran_id,
            'kasus_id' =>$data,
        ]);
        $siswa = Siswa::findOrFail($request->siswa_id);
        $pelanggaran = Datapelanggaran::findOrFail($request->datapelanggaran_id);
        $p = $pelanggaran->poin;
       
        $s = $siswa->point;
        $plus = $s + $p;
        $siswa->update([
            'point' => $plus
        ]);
        return redirect('index');

    }

    
    // update
    public function edit($id)
    {
       
    }

    // delete
    public function destroy($id)
    {
        
        $editsiswa = Kasus::findorfail($id);
        $siswa = $editsiswa->siswa_id;
        $pelanggaran = $editsiswa->datapelanggaran_id;
        
        $s= Siswa::findOrFail($siswa);
        $p=Datapelanggaran::findOrFail($pelanggaran);
        $ss = $s->point;
        $pp = $p->poin;
        $minus = $ss - $pp;

        $editsiswa->delete();
        $s->update([
            'point'=>$minus
        ]);
        return back();
    }
    public function detail($id)
    {   
        $kasus = Kasus::findorfail($id);
        $s = $kasus->siswa_id;
        $p = $kasus->datapelanggaran_id;
      
       
        return view('admin.siswapelanggaran.detailsiswapelanggaran');
    }
}
