<?php

use Illuminate\Database\Seeder;
use App\Marsruti;

class MarsrutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('marsruti')->truncate();


        DB::table('marsruti')->insert(array(
            array(
                'nosaukums' => 'Zaļā līnija (turp)',
                'apraksts' => 'Parastais maršruts Imanta-Jugla.',
            ),
            array(
                'nosaukums' => 'Zaļā līnija (atpakaļ)',
                'apraksts' => 'Parastais maršruts Jugla-Imanta.',
            ),
            array(
                'nosaukums' => 'Oranžā līnija (turp)',
                'apraksts' => 'Parastais maršruts Buļļu kāpa-Dreiliņi.',
            ),
            array(
                'nosaukums' => 'Oranžā līnija (atpakaļ)',
                'apraksts' => 'Parastais maršruts Dreiliņi-Buļļu kāpa.',
            ),
            array(
                'nosaukums' => 'Zilā līnija (turp)',
                'apraksts' => 'Parastais maršruts Sarkandaugava-Ziepniekkalns.',
            ),
            array(
                'nosaukums' => 'Zilā līnija (atpakaļ)',
                'apraksts' => 'Parastais maršruts Ziepniekkalns-Sarkandaugava.',
            ),
            array(
                'nosaukums' => 'Zaļā līnija (paatrinatais)',
                'apraksts' => 'Paātrinātais maršruts Imanta-Jugla.',
            ),
            array(
                'nosaukums' => 'Zaļā līnija (paatrinatais atpakal)',
                'apraksts' => 'Paātrinātais maršruts Jugla-Imanta.',
            ),
            array(
                'nosaukums' => 'Oranžā līnija (paatrinatais)',
                'apraksts' => 'Paātrinātais maršruts Buļļu kāpa-Dreiliņi.',
            ),
            array(
                'nosaukums' => 'Oranžā līnija (paatrinatais atpakal)',
                'apraksts' => 'Paātrinātais maršruts Dreiliņi-Buļļu kāpa.',
            ),
            array(
                'nosaukums' => 'Zilā līnija (paatrinatais)',
                'apraksts' => 'Paātrinātais maršruts Sarkandaugava-Ziepniekkalns.',
            ),
            array(
                'nosaukums' => 'Zilā līnija (paatrinatais atpakal)',
                'apraksts' => 'Paātrinātais maršruts Ziepniekkalns-Sarkandaugava.',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
