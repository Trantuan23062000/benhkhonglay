<?php

namespace App\Imports;

use App\Models\tramyte;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class tramyteimport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new tramyte([
            'ID' => $row['ID'],
            'TEN_TRAM_Y_TE' => $row['TEN_TRAM_Y_TE'],
            'TRUNG_TAM_Y_TE_ID' => $row['TRUNG_TAM_Y_TE_ID'],
        ]);
    }
}
