<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();;
            $table->string('marque');
            $table->string('urlimg')->nullable();
            $table->string('name')->nullable();
//            $table->string('sieges');
//            $table->string('puissance');
//            $table->string('annee');
//            $table->string('prix');
//            $table->string('volume_coffre');
//            $table->string('consommation');
//            $table->string('description');
//            $table->string('photos');
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
        Schema::dropIfExists('cars');
    }
}
