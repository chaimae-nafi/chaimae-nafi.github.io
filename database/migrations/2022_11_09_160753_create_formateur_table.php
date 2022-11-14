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
        Schema::create('formateur', function (Blueprint $table) {
            $table->integer('id_formateur', true);
            $table->string('nom_formateur', 100)->nullable();
            $table->string('prenom_formateur', 100)->nullable();
            $table->string('tel_formateur', 100)->nullable();
            $table->string('email_formateur', 100)->nullable();
            $table->integer('id_profile')->nullable();
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
        Schema::dropIfExists('formateur');
    }
};
