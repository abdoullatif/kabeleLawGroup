<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->id();
            $table->string('privillegeShare');
            $table->string('dateAutorisationShare');
            $table->string('dateShare');
            $table->foreignId('dossiers_id')->constrained('dossiers')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
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
        schema::table('shares', function (Blueprint $table){
            $table->dropConstrainedForeignId('dossiers_id');
            $table->dropConstrainedForeignId('users_id');
        });
        Schema::dropIfExists('shares');
    }
}
