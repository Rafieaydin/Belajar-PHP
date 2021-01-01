<?php

namespace App\Exports;

use App\Models\Jawaban;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class eportJawaban implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jawaban::all();
    }
    public function headings(): array
    {
        return [
            'Nama User',
            'Judul',
            'Pertanyaan',
            'jawaban'
        ];
    }
    // // untuk memodifikasi kolom yang ingin di tampilkan
    public function map($jawaban): array
    {
        return [
            // unutuk mengisi data yang ada di excel
            $jawaban->pertanyaan->user->profile->nama_lengkap,
            $jawaban->pertanyaan->judul,
            $jawaban->pertanyaan->isi,
            $jawaban->isi
        ];
    }
}
