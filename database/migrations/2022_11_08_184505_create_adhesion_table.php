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
        Schema::create('adhesion', function (Blueprint $table) {
            $table->integer('id_adhesion',true);
            $table->string('num_adhesionnaire',100)->nullable();
            $table->string('nometprenom_beneficiaire', 100)->nullable();
            $table->string('fonction_beneficiaire', 100)->nullable();
            $table->date('datenaissance_beneficiaire')->nullable();
            $table->string('adresse_beneficiaire', 100)->nullable();
            $table->string('tel_beneficiaire', 100)->nullable();
            $table->string('mail_beneficiaire', 100)->nullable();
            $table->string('nometprenom_tuteur', 100)->nullable();
            $table->string('fonction_tuteur', 100)->nullable();
            $table->date('datenaissance_tuteur')->nullable();
            $table->string('adresse_tuteur', 100)->nullable();
            $table->string('tel_tuteur', 100)->nullable();
            $table->string('type_inscri1', 100)->nullable();
            $table->string('type_inscri2', 100)->nullable();
            $table->string('type_inscri3', 100)->nullable();
            $table->integer('prix')->nullable();
            $table->string('recu1', 100)->nullable();
            $table->string('recu2', 100)->nullable();
            $table->string('recu3', 100)->nullable();
            $table->string('recudetransfer', 100)->nullable();
            $table->string('renouvellement', 100)->nullable();
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
        Schema::dropIfExists('adhesion');
    }
};
