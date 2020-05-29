<?php

use Illuminate\Database\Seeder;

class AmatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('amats')->truncate();

        DB::table('amats')->insert(array(
            array(
                'nosaukums' => 'Valdes nodalas vaditajs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 20.54,
                'darba_pilditajs' => 1,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedibas nodalas vaditajs',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 15.24,
                'darba_pilditajs' => 2,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-17'),
            ),

            array(
                'nosaukums' => 'Gramatvedibas nodalas vaditajs',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 15.24,
                'darba_pilditajs' => 3,
                'darba_uzsaksanas_datums' => date('2021-08-17'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo parvaldibas nodalas vaditajs',
                'nodala' => 3,
                'depo' => NULL,
                'stundas_likme' => 12.54,
                'darba_pilditajs' => 4,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-03-19'),
            ),

            array(
                'nosaukums' => 'Depo parvaldibas nodalas vaditajs',
                'nodala' => 3,
                'depo' => NULL,
                'stundas_likme' => 12.54,
                'darba_pilditajs' => 5,
                'darba_uzsaksanas_datums' => date('2021-05-06'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas nodalas vaditajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 13.57,
                'darba_pilditajs' => 6,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'IT nodalas vaditajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 16.41,
                'darba_pilditajs' => 7,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes nodalas vaditajs',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 12.1,
                'darba_pilditajs' => 8,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga nodalas vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 14.67,
                'darba_pilditajs' => 9,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu nodalas vaditajs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 15.34,
                'darba_pilditajs' => 10,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-09-20'),
            ),

            array(
                'nosaukums' => 'Iepirkumu nodalas vaditajs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 15.34,
                'darba_pilditajs' => 11,
                'darba_uzsaksanas_datums' => date('2021-09-20'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kvalitates kontroles nodalas vaditajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 16.32,
                'darba_pilditajs' => 12,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-11-13'),
            ),

            array(
                'nosaukums' => 'Kvalitates kontroles nodalas vaditajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 16.32,
                'darba_pilditajs' => 13,
                'darba_uzsaksanas_datums' => date('2021-11-17'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Projektu nodalas vaditajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 16.45,
                'darba_pilditajs' => 14,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 1,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 15,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-02-03'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 1,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 16,
                'darba_uzsaksanas_datums' => date('2021-02-03'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 17,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-05-05'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 18,
                'darba_uzsaksanas_datums' => date('2021-06-06'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 3,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 19,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 20,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-03-21'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 21,
                'darba_uzsaksanas_datums' => date('2021-03-21'),
                'darba_beigsanas_datums' => date('2021-07-15'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 22,
                'darba_uzsaksanas_datums' => date('2021-07-26'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 5,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 23,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 6,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 24,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 25,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-31'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 26,
                'darba_uzsaksanas_datums' => date('2021-08-31'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 8,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 27,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 9,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 28,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 29,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-21'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 30,
                'darba_uzsaksanas_datums' => date('2021-07-25'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 11,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 31,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 12,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => 32,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 1,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 33,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 2,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 34,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 3,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 35,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 4,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 36,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 5,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 37,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-12'),
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 5,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 38,
                'darba_uzsaksanas_datums' => date('2021-07-12'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 7,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 39,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 8,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 40,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 9,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 41,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 10,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 42,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-06-24'),
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 10,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 43,
                'darba_uzsaksanas_datums' => date('2021-07-06'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 11,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 44,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 12,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 45,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 1,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 46,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 2,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 47,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 3,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 48,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 4,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 49,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 5,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 50,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 6,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 51,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 7,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 52,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 8,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 53,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 9,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 54,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 10,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 55,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 11,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 56,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 12,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => 57,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => 58,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-10'),
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => 59,
                'darba_uzsaksanas_datums' => date('2021-07-10'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => 60,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => 61,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 62,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 63,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 64,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 65,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 66,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 67,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 68,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => 69,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => 70,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => 71,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-04'),
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => 72,
                'darba_uzsaksanas_datums' => date('2021-08-27'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => 73,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => 74,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => 75,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => 76,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Socialo tiklu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => 77,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-09-25'),
            ),

            array(
                'nosaukums' => 'Socialo tiklu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => 78,
                'darba_uzsaksanas_datums' => date('2021-09-25'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Pilsetplanotajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 11.46,
                'darba_pilditajs' => 79,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Attistibas projektu izstradatajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.94,
                'darba_pilditajs' => 80,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Attistibas projektu izstradatajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.94,
                'darba_pilditajs' => 81,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => 82,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => 83,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-18'),
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => 84,
                'darba_uzsaksanas_datums' => date('2021-11-27'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => 85,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => 86,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas administrators',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 15.04,
                'darba_pilditajs' => 87,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas administrators',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 15.04,
                'darba_pilditajs' => 88,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => 89,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => 90,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => 91,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => 92,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => 93,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 94,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 95,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 96,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-10-11'),
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 97,
                'darba_uzsaksanas_datums' => date('2021-10-19'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 98,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 99,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 100,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 101,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 102,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 103,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 104,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 1,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 105,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 106,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-06-29'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 107,
                'darba_uzsaksanas_datums' => date('2021-07-12'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 3,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 108,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 109,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 5,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 110,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-07'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 5,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 111,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 6,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 112,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 113,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-05-22'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 114,
                'darba_uzsaksanas_datums' => date('2021-05-22'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 8,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 115,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 9,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 116,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 117,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-06-02'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 118,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 11,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 119,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 12,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => 120,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Transporta planotajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.67,
                'darba_pilditajs' => 121,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Transporta planotajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.67,
                'darba_pilditajs' => 122,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datu bazu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.19,
                'darba_pilditajs' => 123,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datu bazu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.19,
                'darba_pilditajs' => 124,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 125,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 126,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 127,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-29'),
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 128,
                'darba_uzsaksanas_datums' => date('2021-11-09'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 129,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 130,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 131,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 132,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 133,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => 134,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 14.54,
                'darba_pilditajs' => 135,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 14.54,
                'darba_pilditajs' => 136,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-30'),
            ),

            array(
                'nosaukums' => 'Iepirkumu specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 14.54,
                'darba_pilditajs' => 137,
                'darba_uzsaksanas_datums' => date('2021-08-30'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Digitala marketinga specialists',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 11.56,
                'darba_pilditajs' => 138,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-09-17'),
            ),

            array(
                'nosaukums' => 'Digitala marketinga specialists',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 11.56,
                'darba_pilditajs' => 139,
                'darba_uzsaksanas_datums' => date('2021-09-17'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Digitala marketinga specialists',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 11.56,
                'darba_pilditajs' => 140,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Reklamas video veidotajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.12,
                'darba_pilditajs' => 141,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-12-18'),
            ),

            array(
                'nosaukums' => 'Reklamas video veidotajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.12,
                'darba_pilditajs' => 142,
                'darba_uzsaksanas_datums' => date('2021-12-18'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => 143,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => 144,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-19'),
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => 145,
                'darba_uzsaksanas_datums' => date('2021-08-19'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => 146,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => 147,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => 148,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => 149,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-04-18'),
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => 150,
                'darba_uzsaksanas_datums' => date('2021-04-18'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => 151,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas numura apkalpotajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => 152,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas numura apkalpotajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => 153,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas numura apkalpotajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => 154,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Finansu specialists',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 13.54,
                'darba_pilditajs' => 155,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Finansu specialists',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 13.54,
                'darba_pilditajs' => 156,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Inzenieris',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 157,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Inzenieris',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => 158,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kasieris stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => 159,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kasieris stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => 160,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kasieris stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => 161,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => 162,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => 163,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => 164,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-10-07'),
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => 165,
                'darba_uzsaksanas_datums' => date('2021-10-07'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tehniskais konsultants',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 11.78,
                'darba_pilditajs' => 166,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tehniskais konsultants',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 11.78,
                'darba_pilditajs' => 167,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tirdzniecibas parstavis',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 13.47,
                'darba_pilditajs' => 168,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tirdzniecibas parstavis',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 13.47,
                'darba_pilditajs' => 169,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala specialists',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 11.12,
                'darba_pilditajs' => 170,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala specialists',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 11.12,
                'darba_pilditajs' => 171,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-05-26'),
            ),

            array(
                'nosaukums' => 'Personala specialists',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 11.12,
                'darba_pilditajs' => 172,
                'darba_uzsaksanas_datums' => date('2021-05-26'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektrotehnikis',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 9.57,
                'darba_pilditajs' => 173,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektrotehnikis',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 9.57,
                'darba_pilditajs' => 174,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Logistikas specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 13.78,
                'darba_pilditajs' => 41,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Logistikas specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 13.78,
                'darba_pilditajs' => 26,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Logistikas specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 13.78,
                'darba_pilditajs' => 38,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Informacijas sistemas analitikis',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.03,
                'darba_pilditajs' => 53,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Informacijas sistemas analitikis',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.03,
                'darba_pilditajs' => 82,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektronikas specialists',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 10.03,
                'darba_pilditajs' => 109,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektronikas specialists',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 10.03,
                'darba_pilditajs' => 62,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektronikas specialists',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 10.03,
                'darba_pilditajs' => 10,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 6,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => 32,
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-03-02'),
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


    }
}
