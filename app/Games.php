<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    public function user() {
        return $this->belongsTo("App\Tags");
    }
}
