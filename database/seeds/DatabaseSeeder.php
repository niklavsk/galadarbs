<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Adrese;
use App\Amats;
use App\Darbinieki;
use App\Depo;
use App\MaksajumuVesture;
use App\Marsruti;
use App\MarsrutaPieturas;
use App\Nodala;
use App\PienaksanasLaiki;
use App\Pietura;
use App\Transportlidzeklis;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();

        DB::table('users')->insert([
            'name' => 'Lietotajs',
            'email' => 'lietotajs@lietotajs.com',
            'password' => bcrypt('lietotajslietotajs'),
            'role' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'Administrators',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'role' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Depo vadītājs',
            'email' => 'depo@depo.com',
            'password' => bcrypt('depodepo'),
            'role' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'Nodaļas vadītājs',
            'email' => 'nodala@nodala.com',
            'password' => bcrypt('nodalanodala'),
            'role' => 3
        ]);

        DB::table('users')->insert([
            'name' => 'Grāmatvedis',
            'email' => 'gramatvedis@gramatvedis.com',
            'password' => bcrypt('gramatvedisgramatvedis'),
            'role' => 4
        ]);

        $this->call([
            AdreseSeeder::class,
            AmatsSeeder::class,
            DarbiniekiSeeder::class,
            DepoSeeder::class,
            MaksajumuVestureSeeder::class,
            MarsrutiSeeder::class,
            MarsrutuPieturasSeeder::class,
            NodalaSeeder::class,
            PienaksanasLaikiSeeder::class,
            PieturaSeeder::class,
            TransportlidzeklisSeeder::class,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}


