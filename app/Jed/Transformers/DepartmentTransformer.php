<?php

namespace App\Jed\Transformers;

class DepartmentTransformer extends Transformer
{
    public function transform($department)
    {
        return [
            'name' => $department['name'],
            'brief_description' => $department['description']
        ];
    }
}