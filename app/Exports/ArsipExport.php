<?php

namespace App\Exports;

use App\Models\Surat;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArsipExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Surat::where('status', 'selesai')->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'User',
            'Date',
        ];
    }

}
