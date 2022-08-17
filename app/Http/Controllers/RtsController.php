<?php

namespace App\Http\Controllers;

use App\Models\Rts;
use Illuminate\Http\Request;

class RtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rts = Rts::all();
        return view('rts.index', compact('Rts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rts.create');

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
            'nama' => 'required',
        ]);

        $Rts = new Rts();
        $Rts->nama = $request->nama;
        $Rts->save();
        return redirect()->route('rts.index')
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
        $Rts = Rts::findOrFail($id);
        return view('rts.show', compact('Rts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Rts = Rts::findOrFail($id);
        return view('rts.edit', compact('Rts'));

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
            'nama' => 'required',
        ]);

        $Rts = Rts::findOrFail($id);
        $Rts->nama = $request->nama;
        $Rts->save();
        return redirect()->route('rts.index')
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
        $Rts = Rts::findOrFail($id);
        $Rts->delete();
        return redirect()->route('rts.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
