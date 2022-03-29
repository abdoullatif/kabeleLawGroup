<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pieces', function (Blueprint $table) {
            $table->id();
            $table->string('nomPiece');
            $table->string('statutPiece');
            $table->string('datePiece');
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
        schema::table('pieces', function (Blueprint $table){
            $table->dropConstrainedForeignId('dossiers_id');
        });
        Schema::dropIfExists('pieces');
    }
}
