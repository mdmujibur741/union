<?php

namespace App\Imports;

use App\Models\Shop;
use Maatwebsite\Excel\Concerns\ToModel;

class ShopsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Shop([
            "organization" => $row[0],
            "name"=> $row[1],
            "father"=> $row[2],
            "address"=> $row[3],
            "mobile"=> $row[4],
            "budget"=> $row[5],
            "annually_tax"=> $row[6],
            "opinion"=> $row[7],
             "user_id"=> auth()->user()->id,
  

        ]);
    }
}
