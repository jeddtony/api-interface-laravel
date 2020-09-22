<?php

namespace App\Jed\Transformers;

use Illuminate\Database\Eloquent\Collection;

abstract class Transformer {
    
    public function transformCollection(Collection $items) {
        return $items->map([$this, 'transform']);
    }

    public abstract function transform($item);
}