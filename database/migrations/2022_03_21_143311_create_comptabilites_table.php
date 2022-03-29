<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptabilitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptabilites', function (Blueprint $table) {
            $table->id();
            $table->string('typeOperationComptabilite');
            $table->string('natureComptabilite');
            $table->string('montantComptabilite');
            $table->string('DateComptabilite');
            $table->foreignId('dossiers_id')->constrained('dossiers')->onDelete('cascade');
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
        schema::table('comptabilites', function (Blueprint $table){
            $table->dropConstrainedForeignId('dossiers_id');
        });
        Schema::dropIfExists('comptabilites');
    }

}
