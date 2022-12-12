<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class TableguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tableguru()
    {
        $dataguru = Guru::all();
        return view('admin.guru.tableguru', compact('dataguru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.formguru');
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
        // Guru::create([
        //     'nama' => $request->nama,
        //     'nip' => $request->nip,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'alamat' => $request->alamat,
        //     'notelepon' => $request->notelepon,
        //     'email' => $request->email,
        //     'wali_kelas' => $request->wali_kelas,

        // ]);

        Guru::create($request->all());
        return redirect('tableguru');
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
        $editguru = Guru::find($id);
        // dd(($editguru));
        return view('admin.guru.editformguru', compact('editguru'));
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
        $editguru = Guru::findorfail($id);
        $editguru->update($request->all());
        return redirect('tableguru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editguru = Guru::findorfail($id);
        $editguru->delete();
        return back();
    }
    public function detail($id)
    {
        $editguru = Guru::findorfail($id);
        return view('admin.guru.detailguru', compact('editguru'));
    }
}
