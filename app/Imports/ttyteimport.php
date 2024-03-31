<?php

namespace App\Imports;

use App\Models\ttyte;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');


class ttyteimport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ttyte([
                'ID' => $row['ID'],
                'TEN_TRUNG_TAM_Y_TE' => $row['TEN_TRUNG_TAM_Y_TE'],
                'SO_Y_TE_ID' => $row['SO_Y_TE_ID'],
        ]);
    }
}
