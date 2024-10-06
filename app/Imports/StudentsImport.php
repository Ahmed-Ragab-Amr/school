<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[0]) || empty($row[0])) {
            // تجاهل الصف إذا كان الاسم فارغًا
            return null;
        }
        return new User([
            'name'=>$row[0],
            'national_id'=>$row[1],
            'password'=>$row[1],
            'user_type'=>$row[4],
            'grade'=>$row[5],
        ]);
    }
}
