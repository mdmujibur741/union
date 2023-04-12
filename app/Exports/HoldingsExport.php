<?php

namespace App\Exports;

use App\Models\Holding;
use Maatwebsite\Excel\Concerns\FromCollection;

class HoldingsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Holding::all();
    }
}
