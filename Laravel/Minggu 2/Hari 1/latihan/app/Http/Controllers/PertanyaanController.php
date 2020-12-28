<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        $pertanyaan = Pertanyaan::all();
        return view('admin.index', compact('profile','pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // tambah
    public function store(Request $request)
    {
        $request->validate([
            'profile' => 'required',
            'judul' => 'required|min:8',
            'isi' => 'required'
        ]);
        $profile_id = Profile::select('id')
                    ->where ('nama_lengkap',$request->profile)
                    ->get();
        $profile = 0;
        foreach ($profile_id as $prof) {
            $profile += $prof->id;
        }
        Pertanyaan::create(['judul' => $request->judul, 'isi' => $request->isi, 'profile_id' => $profile]);
        return redirect('Pertanyaan')->with('sukses','data anda berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    // detail
    public function show($id)
    {
        $tanya = Pertanyaan::find($id);
        return view('admin.show', compact('tanya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    // edit
    public function edit($id)
    {
        $tanya = Pertanyaan::find($id);
        return view('admin.edit', compact('tanya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    // uodate
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:8',
            'isi' => 'required'
        ]);
        Pertanyaan::where('id', $id)
        ->update(['judul' => $request->judul, 'isi' => $request->isi]);
        return redirect('Pertanyaan')->with('sukses', 'data anda berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    // hapus
    public function destroy(Pertanyaan $pertanyaan, $id)
    {
        Pertanyaan::where('id', $id)->delete();
        return redirect('Pertanyaan')->with('eror', 'data anda berhasil di hapus');
    }
}
