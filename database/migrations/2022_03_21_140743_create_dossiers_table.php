<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('numeroDossier');
            $table->string('dateOuvertureDossier');
            $table->string('carpaDossier');
            $table->string('titreDossier');
            $table->string('referenceDossier');
            $table->string('statutDossier');
            $table->foreignId('Plaintes_id')->constrained('Plaintes')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('categories_id')->constrained('categories')->onDelete('cascade');
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
        schema::table('dossiers', function (Blueprint $table){
            $table->dropConstrainedForeignId('Plaintes_id');
            $table->dropConstrainedForeignId('users_id');
            $table->dropConstrainedForeignId('categories_id');
        });
        Schema::dropIfExists('dossiers');
    }
}
