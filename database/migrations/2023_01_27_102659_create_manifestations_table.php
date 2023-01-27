<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifestations', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->string("titre");
            $table->foreignId("oeuvre_id")->constrained();
            $table->foreignId("salle_id")->constrained();
            $table->dateTime("date_debut");
            $table->dateTime("date_fin");
            $table->string("theme");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manifestations');
    }
};
