<?php

use App\Models\Conferance;
use App\Models\Evenement;
use App\Models\Manifestation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home/Index');
})->name("index");

Route::get('/reservation/success', function () {
    return Inertia::render('ReservationSuccess');
})->name("index");

Route::get('/reservation', function () {
    return Inertia::render('Reservation', [
        "conferences" => Conferance::with("salle")->get(),
        "evenments" => Evenement::with("salle")->get(),
        "manifestations" => Manifestation::with(["salle", "oeuvre"])->get(),
    ]);
})->name("reservation.index");


Route::post('/reservation', function (Request $request) {
    foreach ($request->reservation_id as $id) {
        Reservation::create([
            "type" => $request->type,
            "reservation_id" => $id,
        ]);
    }

    return redirect('/reservation/success');
})->name("reservation.store");


