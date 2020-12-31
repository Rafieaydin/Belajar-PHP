<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use Illuminate\Http\Request;
// export
use App\Exports\PertanyaanExport;
use App\Exports\eportJawaban;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
class exportController extends Controller
{
    public function PDFPertanyaan(){
        $profile = Profile::all();
        $pertanyaan = Pertanyaan::all();
        $user = User::all();
        $pdf = PDF::loadView('admin.export.pertanyaan', compact('profile','pertanyaan','user'));

        return $pdf->download('pertanyaan.pdf');
    }
    public function ExcelPertanyaan(){
        return Excel::download(new PertanyaanExport, 'Pertanyaan.xlsx');
    }
    public function PDFJawaban()
    {
        $profile = Profile::all();
        $jawaban = Jawaban::all();
        $user = User::all();
        $pdf = PDF::loadView('admin.export.jawaban', compact('profile', 'jawaban', 'user'));

        return $pdf->download('jawaban.pdf');
    }
    public function ExcelJawaban()
    {
        return Excel::download(new eportJawaban, 'Jawaban.xlsx');
    }
}
