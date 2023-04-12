<?php

namespace App\Imports;

use App\Models\Holding;
use Maatwebsite\Excel\Concerns\ToModel;

class HoldingsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Holding([
            "name"=> $row[0],
            "spouse_name"=> $row[1],
            "gender"=> $row[2],
            "village"=> $row[3],
            "profession"=> $row[4],
            "id_no"=> $row[5],
            "holding_no"=> $row[6],
            "word_no"=> $row[7],
            "house_type"=> $row[8],
            "yearly_tax"=> $row[9],
            "opinion"=> $row[10],
            "user_id"=> auth()->user()->id,
        ]);
    }
}
