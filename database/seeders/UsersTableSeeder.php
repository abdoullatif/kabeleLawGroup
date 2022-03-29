<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert([
            [
                "nomPersonnel"=>"Super",
                "prenomPersonnel"=>"Admin",
                "sexePersonnel"=>"Masculin",
                "telephonePersonnel"=>"00224627928920",
                "adressePersonnel"=>"kaloum",
                "fonctionPersonnel"=>"DG",
                "statutPersonnel"=>"Actif",
                "privillegePersonnel"=>"SuperAdmin",
                "dateInscriptionPersonnel"=>now(),
                "photoPersonnel"=>"avatar.png",
                "email"=>"root@gmail.com",
                "password"=>Hash::make("kabeleLaw2020"),
            ],
        ]);
    }
}
