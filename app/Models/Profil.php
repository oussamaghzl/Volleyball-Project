<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    public function equipe()
    {
        return $this->belongsTo('App\Models\Equipe', "equipes_id");
    }
    public function poste()
    {
        return $this->belongsTo('App\Models\Poste', "poste_id");
    }

}
