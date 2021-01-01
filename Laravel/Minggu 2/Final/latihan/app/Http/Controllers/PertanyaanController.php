<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\tag;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Sweet alert
use RealRashid\SweetAlert\Facades\Alert;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::orderBy('created_at', 'desc')->paginate(5);
        $pertanyaan = Pertanyaan::orderBy('created_at', 'desc')->paginate(5);
        $user = User::all();
        return view('admin.pertanyaan.index', compact('pertanyaan','profile','user'));
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
        // tags pivot (algoritma)
        // di rubah menjadi array
        // 1. explode untuk mengubah request tag menjadi array
        // 2. looping ke array tags tadi, buat array penampug
        // 3. setiap looping lakukan pengecekan
        // 4. kalau sudah ada ambil id nya
        // 5. kalau belum ada sipain dulu tagnya lalu ambil idnya
        // 6. tampung id di array penampung
                        // pemisah,  isinya
        $tags_arr = explode(',',$request["tags"]);

        // looping array
        // array kosong
        $tags_id = [];
        foreach($tags_arr as $tag_name){
            // mencari tagname
            // $tag = tag::where("tag_name", $tag_name)->first();
            // jika tag
            // if ($tag) {
            //     $tags_id[] = $tag->id;
            // }else{
            //         $new_tag = tag::create(['tag_name' => $tag_name]);
            //         $tags_id[] = $new_tag->id;
            // }

            // yang lebih simpel
            $tag = tag::firstOrCreate(['tag_name' => $tag_name]);
            $tags_id[] = $tag->id;
        }



        $pertanyaan = new Pertanyaan;
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->user_id = $request->profile;

        $pertanyaan->save();

        // menyimpan id
        $pertanyaan->tags()->sync($tags_id);
        // menambahkan ke pertayaan_id  baru di pertanyaan_tags
        $user = User::find($request->profile);
        $user->pertanyaan()->save($pertanyaan);


        Alert::success('Berhasil', 'Pertanyaan Berhasil di tambahkan');
        // Pertanyaan::create(['judul' => $request->judul, 'isi' => $request->isi, 'user_id' => $request->profile]);
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
        return view('admin.pertanyaan.show', compact('tanya'));
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
        return view('admin.pertanyaan.edit', compact('tanya'));
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
        Alert::success('Berhasil', 'Pertanyaan Berhasil di Update');
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
        Alert::success('Berhasil', 'Pertanyaan Berhasil di hapus');
        return redirect('Pertanyaan')->with('eror', 'data anda berhasil di hapus');
    }
}
