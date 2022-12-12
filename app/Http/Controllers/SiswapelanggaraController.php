<?php

namespace App\Http\Controllers;

use App\Models\Datapelanggaran;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\SiswaDatapelanggaran;

class SiswapelanggaraController extends Controller
{
    public function getSiswa(){
        // $data = SiswaDatapelanggaran::find($id);
        // $inipsiswa = SiswaDatapelanggaran::all();
        // $inipelanggaran = Datapelanggaran::all();
        // return view('admin.siswapelanggaran.siswapelanggaran', compact( 'inipsiswa', 'inipelanggaran'));
        $dataSiswa = Siswa::with('relationToDatapelanggaran')->get();
        dd($dataSiswa);
        $data = SiswaDatapelanggaran::all();
        return view('admin.siswapelanggaran.siswapelanggaran', ['dataSiswa' => $dataSiswa]);
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
        // dd($request->all());
        SiswaDatapelanggaran::create([
            'siswa_id' => $request->siswa_id,
            'datapelanggaran_id' => $request->datapelanggaran_id,
        ]);
        // Siswa::create($request->all());

        // return redirect('siswapelanggaran');
        return redirect('index');

    }

    
    // update
    public function edit($id)
    {
        $data = SiswaDatapelanggaran::find($id);
        $inipsiswa = SiswaDatapelanggaran::all();
        $inipelanggaran = Datapelanggaran::all();
        return view('admin.siswapelanggaran.editformsiswapelanggaran', compact( 'data', 'inipsiswa', 'inipelanggaran'));
    }

    // delete
    public function destroy($id)
    {
        
        $editsiswa = Siswa::findorfail($id);
        $editsiswa->delete();
        return back();
    }
    public function detail($id)
    {
        $editsiswa = SiswaDatapelanggaran::findorfail($id);
        return view('admin.siswapelanggaran.detailsiswapelanggaran', compact('editsiswa'));
    }
}
