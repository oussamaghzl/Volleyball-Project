<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public function pays()
    {
        return $this->belongsTo('App\Models\Pays', "pays_id");
    }
    
}
