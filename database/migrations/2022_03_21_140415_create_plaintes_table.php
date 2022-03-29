<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaintes', function (Blueprint $table) {
            $table->id();
            $table->string('naturePlainte');
            $table->string('datePlainte');
            $table->string('descriptionsPlainte');
            $table->foreignId('clients_id')->constrained('clients')->onDelete('cascade');
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
        schema::table('plaintes', function (Blueprint $table){
            $table->dropConstrainedForeignId('clients_id');
        });
        Schema::dropIfExists('plaintes');
    }
}
