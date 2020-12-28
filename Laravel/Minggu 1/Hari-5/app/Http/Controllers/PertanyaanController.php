<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('queryBuilder.pertanyaan', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('queryBuilder.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:2',
            'isi' => 'required',
        ]);
        // ada di dokumentasi laravel
        DB::table('pertanyaan')->insert([
            // harus satu arrow
            'judul' => $request->judul,
            'isi' => $request->isi,
            'profile_id' => $request->jawban
        ]);
        // memakai flash data (Response)
        return redirect('/pertanyaan')->with('status', 'Data Sudah berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = DB::table('pertanyaan')
            ->where('id', $id)
            ->get();
        return view('queryBuilder.detail',['detail'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DB::table('pertanyaan')
        ->where('id', $id)
            ->first();
        return view('queryBuilder.edit', compact('edit'));
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
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        DB::table('pertanyaan')
        // , artinya smadengan
        ->where('id', $id)
            // update
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi
            ]);


        return redirect('/pertanyaan')->with('status', 'Data Sudah berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('status', 'Data Sudah berhasil di hapus!');
    }
}
