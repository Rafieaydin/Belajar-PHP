<?php

namespace App\Exports;

use App\Models\Pertanyaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PertanyaanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pertanyaan::all();
    }
    // untuk headernya
    public function headings(): array
    {
        return [
            'Nama User',
            'Judul',
            'Pertanyaan'
        ];
    }
    // // untuk memodifikasi kolom yang ingin di tampilkan
    public function map($pertanyaan): array
    {
        return [
            // unutuk mengisi data yang ada di excel
            $pertanyaan->user->profile->nama_lengkap,
            $pertanyaan->juduk,
            $pertanyaan->isi
        ];
    }
}
