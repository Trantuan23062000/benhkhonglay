<?php

namespace App\Imports;

use App\Models\soyte;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');


class soyteimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new soyte([
            'ID' => $row['ID'],
            'TEN_SO_Y_TE' => $row['TEN_SO_Y_TE'],
        ]);
    }
}
