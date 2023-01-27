<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function oeuvre()
    {
        return $this->belongsTo(Oeuvre::class);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
}
