<?php

use Illuminate\Database\Seeder;
use App\Pietura;

class PieturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pietura')->truncate();

        DB::table('pietura')->insert(array(
            array(
                'nosaukums' => 'Imanta',
                'atrasanas_vieta' => 1,
            ),
            array(
                'nosaukums' => 'Zolitūde',
                'atrasanas_vieta' => 2,
            ),
            array(
                'nosaukums' => 'Pleskolāde',
                'atrasanas_vieta' => 3,
            ),
            array(
                'nosaukums' => 'Zasulauks',
                'atrasanas_vieta' => 4,
            ),
            array(
                'nosaukums' => 'Arkādija',
                'atrasanas_vieta' => 5,
            ),
            array(
                'nosaukums' => 'Torņkalns (LU)',
                'atrasanas_vieta' => 6,
            ),
            array(
                'nosaukums' => 'Stacijas laukums',
                'atrasanas_vieta' => 7,
            ),
            array(
                'nosaukums' => 'Esplanāde',
                'atrasanas_vieta' => 8,
            ),
            array(
                'nosaukums' => 'Rainis',
                'atrasanas_vieta' => 9,
            ),
            array(
                'nosaukums' => 'Oškalni',
                'atrasanas_vieta' => 10,
            ),
            array(
                'nosaukums' => 'VEF',
                'atrasanas_vieta' => 11,
            ),
            array(
                'nosaukums' => 'Teika',
                'atrasanas_vieta' => 12,
            ),
            array(
                'nosaukums' => 'Alfa',
                'atrasanas_vieta' => 13,
            ),
            array(
                'nosaukums' => 'Jugla',
                'atrasanas_vieta' => 14,
            ),
            array(
                'nosaukums' => 'Buļļu kāpa',
                'atrasanas_vieta' => 15,
            ),
            array(
                'nosaukums' => 'Kleisti',
                'atrasanas_vieta' => 16,
            ),
            array(
                'nosaukums' => 'Lāčupe',
                'atrasanas_vieta' => 17,
            ),
            array(
                'nosaukums' => 'Iļģuciems',
                'atrasanas_vieta' => 18,
            ),
            array(
                'nosaukums' => 'Ķīpsala (RTU)',
                'atrasanas_vieta' => 19,
            ),
            array(
                'nosaukums' => 'Kronvalda parks',
                'atrasanas_vieta' => 20,
            ),
            array(
                'nosaukums' => 'Elizabetes iela',
                'atrasanas_vieta' => 21,
            ),
            array(
                'nosaukums' => 'Stadions "Daugava"',
                'atrasanas_vieta' => 22,
            ),
            array(
                'nosaukums' => 'Purvciems',
                'atrasanas_vieta' => 23,
            ),
            array(
                'nosaukums' => 'Pļavnieki',
                'atrasanas_vieta' => 24,
            ),
            array(
                'nosaukums' => 'Dreiliņi',
                'atrasanas_vieta' => 25,
            ),
            array(
                'nosaukums' => 'Sarkandaugava',
                'atrasanas_vieta' => 26,
            ),
            array(
                'nosaukums' => 'Duntes iela',
                'atrasanas_vieta' => 27,
            ),
            array(
                'nosaukums' => 'Ganību dambis',
                'atrasanas_vieta' => 28,
            ),
            array(
                'nosaukums' => 'Andrejsala',
                'atrasanas_vieta' => 29,
            ),
            array(
                'nosaukums' => 'Zaķusala',
                'atrasanas_vieta' => 30,
            ),
            array(
                'nosaukums' => 'Straume',
                'atrasanas_vieta' => 31,
            ),
            array(
                'nosaukums' => 'Dzintars',
                'atrasanas_vieta' => 32,
            ),
            array(
                'nosaukums' => 'Ziepniekkalns',
                'atrasanas_vieta' => 33,
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}


