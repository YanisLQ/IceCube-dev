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
        Schema::create('sun_burger_categories', function (Blueprint $table) {
            $table->id(); // L'identifiant
            $table->string('name'); // Le nom ou titre
            $table->text("description"); // La description
            $table->double("price"); // Le prix
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sun_burger_categories');
    }
};
