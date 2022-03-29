<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nomPersonnel');
            $table->string('prenomPersonnel');
            $table->string('sexePersonnel');
            $table->string('telephonePersonnel');
            $table->string('adressePersonnel');
            $table->string('fonctionPersonnel');
            $table->string('statutPersonnel');
            $table->string('privillegePersonnel');
            $table->string('dateInscriptionPersonnel');
            $table->string('email')->unique();
            $table->string('photoPersonnel'); //->default('avatar.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
