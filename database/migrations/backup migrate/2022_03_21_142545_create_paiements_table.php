<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->string('montantHonorairePaiement');
            $table->string('montantPremierDegrePaiement');
            $table->string('montantDeuxiemeDegrePaiement');
            $table->string('montantCourSupremePaiement');
            $table->string('montantTotalPaiement');
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
        schema::table('paiements', function (Blueprint $table){
            $table->dropConstrainedForeignId('dossiers_id');
        });
        Schema::dropIfExists('paiements');
    }
}
