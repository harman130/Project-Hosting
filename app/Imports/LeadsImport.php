<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LeadsImport implements ToModel,WithHeadingRow
{
 
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lead([
        'title'            =>$row['title'],
        'description'      =>$row['description'],

        
        'deadline'=>$row['deadline'],
        
        'due_date' =>$row['due_date'],
    
       
         ]);
    }
}
