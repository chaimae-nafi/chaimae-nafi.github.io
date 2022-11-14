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
        Schema::create('client', function (Blueprint $table) {
            $table->integer('id_client', true);
            $table->string('nom_client', 100)->nullable();
            $table->string('prenom_client', 100)->nullable();
            $table->string('tel_client', 100)->nullable();
            $table->string('email_client', 100)->nullable();
            $table->string('fonction_client', 100)->nullable();
            $table->integer('formation')->nullable();
            $table->string('responsable_client', 100)->nullable();
            $table->string('source_client', 100)->nullable();
            $table->string('num_adhesion', 100)->nullable();
            $table->integer('num_conseiller')->nullable();
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
        Schema::dropIfExists('client');
    }
};
