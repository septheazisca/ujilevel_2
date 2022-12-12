<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datapelanggaran;


class TabledatapelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapelanggaran2 = Datapelanggaran::all();
        return view('admin.datapelanggaran.tabledatapelanggaran', compact('datapelanggaran2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datapelanggaran.formdatapelanggaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Datapelanggaran::create([
            'id' => $request->id,
            'pelanggaran' => $request->pelanggaran,
            'poin' => $request->poin,
            'tindak_lanjut' => $request->tindak_lanjut,
            'keterangan' => $request->keterangan,
        ]);
        // Datapelanggaran::create($request->all());

        return redirect('tabledatapelanggaran');
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
        $editdatapelanggaran = Datapelanggaran::findorfail($id);
        // $editpelanggaran = Pelanggaran::findorfail($id);
        return view('admin.datapelanggaran.editdatapelanggaran', compact('editdatapelanggaran'));
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
        $editdatapelanggaran = Datapelanggaran::findorfail($id);
        $editdatapelanggaran->update($request->all());
        return redirect('tabledatapelanggaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editdatapelanggaran = Datapelanggaran::findorfail($id);
        $editdatapelanggaran->delete();
        return back();
    }
}
