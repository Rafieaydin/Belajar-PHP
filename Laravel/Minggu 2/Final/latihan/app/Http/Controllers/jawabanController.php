<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use App\Models\User;
use Illuminate\Http\Request;

//Sweet alert
use RealRashid\SweetAlert\Facades\Alert;

class jawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban = Jawaban::paginate(5);

        $user = User::all();
        $pertanyaan = Pertanyaan::all();
        $profile = Profile::all();
        return view('admin.jawaban.index', compact('pertanyaan', 'user','jawaban','profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'profile' => 'required',
        //     'Pertanyaan' => 'required',
        //     'Jawaban' => 'required'
        // ]);
        $profile_id = Profile::select()
            ->where('id', $request->profile)
            ->get();
        $profile = 0;
        foreach ($profile_id as $prof) {
            $profile += $prof->user_id;
        }

        $jawaban = new Jawaban;
        $jawaban->isi = $request->Jawaban;
        $jawaban->pertanyaan_id = $request->pertanyaan;
        $jawaban->user_id = $profile;
        $jawaban->save();


        // Jawaban::create(['isi' => $request->Jawaban, 'pertanyaan_id' => $request->Pertanyaan, 'profile_id' => $profile]);
        Alert::success('Berhasil', 'Jawaban Berhasil di tambahkan');
        return redirect('jawaban')->with('sukses', 'data anda berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(Jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jawab = Jawaban::find($id);
        return view('admin.jawaban.edit', compact('jawab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jawaban' => 'required'
        ]);
        Jawaban::where('id', $id)
        ->update(['isi' => $request->jawaban]);
        Alert::success('Berhasil', 'Jawaban Berhasil di update');
        return redirect('jawaban')->with('sukses', 'data anda berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawaban $jawaban, $id)
    {
        Jawaban::where('id', $id)->delete();
        Alert::success('Berhasil', 'Jawaban Berhasil di hapus');
        return redirect('jawaban')->with('eror', 'data anda berhasil di hapus');
    }
}
