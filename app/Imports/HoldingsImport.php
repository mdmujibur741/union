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
            "name"=> $row['name'],
            "spouse_name"=> $row['spouse_name'],
            "gender"=> $row['gender'],
            "village"=> $row['village'],
            "profession"=> $row['profession'],
            "id_no"=> $row['id_no'],
            "holding_no"=> $row['holding_no'],
             "word_no"=> $row['word_no'],
            "house_type"=> $row['house_type'],
             "yearly_tax"=> $row['yearly_tax'],
            "opinion"=> $row['opinion'],
            "user_id"=> auth()->user()->id,
        ]);
    }
}
