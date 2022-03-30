<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('statutNotification');
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
        schema::table('notifications', function (Blueprint $table){
            $table->dropConstrainedForeignId('dossiers_id');
            $table->dropConstrainedForeignId('users_id');
        });
        Schema::dropIfExists('notifications');
    }
}
