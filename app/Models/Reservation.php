<?php

namespace App\Models;

use App\Mail\ReservationConfirmation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function accepter()
    {
        if($this->accepte != 1) return;
        
        Mail::to($this->client->email)->send(new ReservationConfirmation($this));

    }
    
    public function getEvenementAttribute()
    {
        if($this->type === "Evenement" ) {
            return Evenement::find($this->reservation_id);
        }elseif ($this->type === "Conference") {
            return Conferance::find($this->reservation_id);
        }elseif($this->type === "Manifistation") {
            return Manifestation::find($this->reservation_id);
        }else {
            return;
        }
        
    }
}
