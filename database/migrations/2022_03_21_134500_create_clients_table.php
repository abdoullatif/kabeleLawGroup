<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nomClient');
            $table->string('prenomClient');
            $table->string('sexeClient');
            $table->string('etatCivileClient');
            $table->string('adresseClient');
            $table->string('raisonSocialClient');
            $table->string('formeJuridiqueClient');
            $table->string('siegeSocialeClient');
            $table->string('nationaliteClient');
            $table->string('professionClient');
            $table->string('repreneurLegalClient');
            $table->string('numeroClient');
            $table->string('telephoneClient');
            $table->string('emailClient');
            $table->string('photoClient');
            $table->string('numeroRC5Client');
            $table->string('dateJuridictionClient');
            $table->string('dateDeroulementProcedureClient');
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
        Schema::dropIfExists('clients');
    }
}
