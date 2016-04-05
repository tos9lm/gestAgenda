<?php
/**
 * Created by PhpStorm.
 * User: guill_000
 * Date: 12/12/2015
 * Time: 16:43
 */

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        for($i = 0; $i < 3; ++$i)
        {
            DB::table('users')->insert([
                'nom' => 'Nom' . $i,
                'prenom' => 'Prenom' . $i,
                'email' => 'email' . $i . '@blop.fr',
                'password' => bcrypt('password' . $i),
                'admin' => rand(0, 1),
                'id_classe' => rand(1, 6)
            ]);
        }
    }
}