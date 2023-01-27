<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function assurance()
    {
        return $this->belongsTo(Assurance::class);
    }
}
