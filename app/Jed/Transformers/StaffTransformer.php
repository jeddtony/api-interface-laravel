<?php

namespace App\Jed\Transformers;

use App\Models\Department;

class StaffTransformer extends Transformer
{
    public function transform($staff)
    {
        return [
            'name' => $staff['name'],
            'email' => $staff['email'],
            'staff_id' => $staff['staff_id'],
            'department_name'=> $staff->department->name
        ];
    }

    
}