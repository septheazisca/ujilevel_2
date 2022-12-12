<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;

class TablesiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tablesiswa()
    {
        $datasiswa = Siswa::with('guru')->get();
        // return view('admin.tablesiswa');
        return view('admin.siswa.tablesiswa', compact('datasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru_walas = Guru::all();
        return view('admin.siswa.formsiswa', compact('guru_walas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Siswa::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'nis' => $request->nis,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,
            'email' => $request->email,
            'password' => $request->password,
            'guru_id' => $request->guru_id,
        ]);
        // Siswa::create($request->all());

        return redirect('tablesiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru_walas = Guru::all();
        $editsiswa = Siswa::with('guru')->findorfail($id);
        return view('admin.siswa.editformsiswa', compact('editsiswa', 'guru_walas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editsiswa = Siswa::findorfail($id);
        $editsiswa->update($request->all());
        return redirect('tablesiswa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editsiswa = Siswa::findorfail($id);
        $editsiswa->delete();
        return back();
    }
    public function detail($id)
    {
        $guru_walas = Guru::all();
        $editsiswa = Siswa::findorfail($id);
        return view('admin.siswa.detailsiswa', compact('editsiswa', 'guru_walas'));
    }
}
