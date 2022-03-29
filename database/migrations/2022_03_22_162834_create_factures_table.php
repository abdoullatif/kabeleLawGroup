<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('descriptionFacture');
            $table->string('dateFacture');
            $table->string('montantFacture');
            $table->string('typeOperationFacture');
            $table->foreignId('comptabilites_id')->constrained('comptabilites')->onDelete('cascade');
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
        schema::table('factures', function (Blueprint $table){
            $table->dropConstrainedForeignId('comptabilites_id');
        });
        Schema::dropIfExists('factures');
    }
}
