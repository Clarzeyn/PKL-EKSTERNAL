<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Rts;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penduduk::with('rts')->get();
        return view('penduduk.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Rts = Rts::all();
        return view('penduduk.create', compact('Rts'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:penduduks|max:255',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'id_rts' => 'required|unique:penduduks',
        ]);

        $data = new Penduduk();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->status = $request->status;
        $data->id_rts = $request->id_rts;
        $data->save();
        return redirect()->route('penduduk.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Penduduk::findOrFail($id);
        return view('penduduk.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Penduduk::findOrFail($id);
        $Rts = Rts::all();
        return view('penduduk.edit', compact('data', 'Rts'));

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
        $validated = $request->validate([

            'nik' => 'required|max:255',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'id_rts' => 'required|unique:penduduks,id_rts,',
        ]);

        $data = Penduduk::findOrFail($id);
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->status = $request->status;
        $data->id_rts = $request->id_rts;
        $data->save();
        return redirect()->route('penduduk.index')
            ->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Penduduk::findOrFail($id);
        $data->delete();
        return redirect()->route('penduduk.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
