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
        Schema::create('conseiller', function (Blueprint $table) {
            $table->integer('id_conseiller', true);
            $table->string('nom_conseiller', 100)->nullable();
            $table->string('prenom_conseiller', 100)->nullable();
            $table->string('tel_conseiller', 100)->nullable();
            $table->string('email_conseiller', 100)->nullable();
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
        Schema::dropIfExists('conseiller');
    }
};
