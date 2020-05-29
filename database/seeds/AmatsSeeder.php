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
                'darba_pilditajs' => '131179-48128',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedibas nodalas vaditajs',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 15.24,
                'darba_pilditajs' => '637021-27437',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-17'),
            ),

            array(
                'nosaukums' => 'Gramatvedibas nodalas vaditajs',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 15.24,
                'darba_pilditajs' => '928574-17853',
                'darba_uzsaksanas_datums' => date('2021-08-17'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo parvaldibas nodalas vaditajs',
                'nodala' => 3,
                'depo' => NULL,
                'stundas_likme' => 12.54,
                'darba_pilditajs' => '267853-86324',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-03-19'),
            ),

            array(
                'nosaukums' => 'Depo parvaldibas nodalas vaditajs',
                'nodala' => 3,
                'depo' => NULL,
                'stundas_likme' => 12.54,
                'darba_pilditajs' => '225166-84440',
                'darba_uzsaksanas_datums' => date('2021-05-06'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas nodalas vaditajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 13.57,
                'darba_pilditajs' => '270416-77290',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'IT nodalas vaditajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 16.41,
                'darba_pilditajs' => '801088-43601',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes nodalas vaditajs',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 12.1,
                'darba_pilditajs' => '964823-69625',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga nodalas vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 14.67,
                'darba_pilditajs' => '639916-78163',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu nodalas vaditajs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 15.34,
                'darba_pilditajs' => '786278-62027',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-09-20'),
            ),

            array(
                'nosaukums' => 'Iepirkumu nodalas vaditajs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 15.34,
                'darba_pilditajs' => '736022-48554',
                'darba_uzsaksanas_datums' => date('2021-09-20'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kvalitates kontroles nodalas vaditajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 16.32,
                'darba_pilditajs' => '693955-86333',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-11-13'),
            ),

            array(
                'nosaukums' => 'Kvalitates kontroles nodalas vaditajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 16.32,
                'darba_pilditajs' => '746403-21359',
                'darba_uzsaksanas_datums' => date('2021-11-17'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Projektu nodalas vaditajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 16.45,
                'darba_pilditajs' => '538677-27315',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 1,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '596797-26449',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-02-03'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 1,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '945155-81847',
                'darba_uzsaksanas_datums' => date('2021-02-03'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '889336-45964',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-05-05'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '904779-74373',
                'darba_uzsaksanas_datums' => date('2021-06-06'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 3,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '650471-20990',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '888806-58936',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-03-21'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '225919-60643',
                'darba_uzsaksanas_datums' => date('2021-03-21'),
                'darba_beigsanas_datums' => date('2021-07-15'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '993622-96899',
                'darba_uzsaksanas_datums' => date('2021-07-26'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 5,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '906585-21816',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 6,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '501902-44509',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '305984-67639',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-31'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '749536-38384',
                'darba_uzsaksanas_datums' => date('2021-08-31'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 8,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '370285-46685',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 9,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '129147-77688',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '597297-22680',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-21'),
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '963532-27340',
                'darba_uzsaksanas_datums' => date('2021-07-25'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 11,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '376603-72178',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Depo Vaditajs',
                'nodala' => 3,
                'depo' => 12,
                'stundas_likme' => 10.84,
                'darba_pilditajs' => '796757-84420',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 1,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '228897-51768',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 2,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '782620-41149',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 3,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '451950-37989',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 4,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '870519-39831',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 5,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '906757-21833',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-12'),
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 5,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '724648-17351',
                'darba_uzsaksanas_datums' => date('2021-07-12'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 7,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '538500-90187',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 8,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '648714-21565',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 9,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '913173-73615',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 10,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '397813-78069',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-06-24'),
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 10,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '835813-61530',
                'darba_uzsaksanas_datums' => date('2021-07-06'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 11,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '913186-69226',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 12,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '355234-14098',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 1,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '918740-46338',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 2,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '550394-72646',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 3,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '802994-49284',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 4,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '683241-92143',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 5,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '156036-47240',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 6,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '280970-94955',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 7,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '192660-12758',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 8,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '301201-52630',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 9,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '524466-27384',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 10,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '726309-40757',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 11,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '593312-40461',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Mehanikis',
                'nodala' => 9,
                'depo' => 12,
                'stundas_likme' => 9.47,
                'darba_pilditajs' => '759268-64931',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => '895878-52937',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-10'),
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => '189293-34110',
                'darba_uzsaksanas_datums' => date('2021-07-10'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => '352995-81037',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalpotajs stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => '316637-54068',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '535133-87654',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '307019-74684',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '299572-62074',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '608606-29054',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '301639-51263',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '843188-61964',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '710348-85310',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Uznemuma valdes biedrs',
                'nodala' => 1,
                'depo' => NULL,
                'stundas_likme' => 17.85,
                'darba_pilditajs' => '119207-57895',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => '594355-66401',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => '219914-19046',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-04'),
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => '520195-65080',
                'darba_uzsaksanas_datums' => date('2021-08-27'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => '831607-85090',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => '214819-22874',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => '741344-90806',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala piesaistes agents',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 9.87,
                'darba_pilditajs' => '622033-88636',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Socialo tiklu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => '890382-97748',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-09-25'),
            ),

            array(
                'nosaukums' => 'Socialo tiklu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => '549303-10632',
                'darba_uzsaksanas_datums' => date('2021-09-25'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Pilsetplanotajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 11.46,
                'darba_pilditajs' => '252678-72726',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Attistibas projektu izstradatajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.94,
                'darba_pilditajs' => '454997-88377',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Attistibas projektu izstradatajs',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.94,
                'darba_pilditajs' => '385290-27920',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => '741987-21472',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => '422908-60863',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-18'),
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => '785262-45515',
                'darba_uzsaksanas_datums' => date('2021-11-27'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => NULL,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu gaitas uzraugs',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 12.81,
                'darba_pilditajs' => '663231-11893',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas administrators',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 15.04,
                'darba_pilditajs' => '749377-70216',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas administrators',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 15.04,
                'darba_pilditajs' => '727534-61621',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => '854576-65794',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => '166502-14960',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => '167326-86494',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => NULL,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Sistemas uzraugs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.38,
                'darba_pilditajs' => '684956-59168',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '715137-45771',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '515109-83744',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '351151-72900',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-10-11'),
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '989043-40524',
                'darba_uzsaksanas_datums' => date('2021-10-19'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '297874-26331',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '761317-95867',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '808227-29956',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '888713-97814',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '569630-27099',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '224726-16492',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Vilcienu kustibas uzraugs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => NULL,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 1,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '374102-18081',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '116204-28722',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-06-29'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 2,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '123865-31641',
                'darba_uzsaksanas_datums' => date('2021-07-12'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 3,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '610811-33123',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 4,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '466712-59657',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 5,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '179345-64681',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-07'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 5,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => NULL,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 6,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '672874-98586',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '913850-21282',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-05-22'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 7,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '267217-12462',
                'darba_uzsaksanas_datums' => date('2021-05-22'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 8,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '695542-77179',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 9,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '841902-92969',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '239743-25119',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-06-02'),
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 10,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => NULL,
                'darba_uzsaksanas_datums' => NULL,
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 11,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '258742-24152',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Noliktavas parzinis',
                'nodala' => 3,
                'depo' => 12,
                'stundas_likme' => 10.24,
                'darba_pilditajs' => '327197-60789',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Transporta planotajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.67,
                'darba_pilditajs' => '440547-33316',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Transporta planotajs',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 14.67,
                'darba_pilditajs' => '584502-96154',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datu bazu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.19,
                'darba_pilditajs' => '646316-49530',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datu bazu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.19,
                'darba_pilditajs' => '481729-98262',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '101683-80419',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '622928-28555',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '315308-12716',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-07-29'),
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '327299-35498',
                'darba_uzsaksanas_datums' => date('2021-11-09'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '201685-35287',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '267546-95758',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '590648-82591',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '725149-15474',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '726018-86703',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Datoriekartu uzturetajs',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 14.75,
                'darba_pilditajs' => '584630-54869',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 14.54,
                'darba_pilditajs' => '640434-95614',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Iepirkumu specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 14.54,
                'darba_pilditajs' => '831893-99441',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-30'),
            ),

            array(
                'nosaukums' => 'Iepirkumu specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 14.54,
                'darba_pilditajs' => '424101-51158',
                'darba_uzsaksanas_datums' => date('2021-08-30'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Digitala marketinga specialists',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 11.56,
                'darba_pilditajs' => '340125-41604',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-09-17'),
            ),

            array(
                'nosaukums' => 'Digitala marketinga specialists',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 11.56,
                'darba_pilditajs' => '810911-27195',
                'darba_uzsaksanas_datums' => date('2021-09-17'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Digitala marketinga specialists',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 11.56,
                'darba_pilditajs' => '206259-92252',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Reklamas video veidotajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.12,
                'darba_pilditajs' => '822208-76800',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-12-18'),
            ),

            array(
                'nosaukums' => 'Reklamas video veidotajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.12,
                'darba_pilditajs' => '262301-51126',
                'darba_uzsaksanas_datums' => date('2021-12-18'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => '228314-51167',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => '714488-21456',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-08-19'),
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => '940838-23741',
                'darba_uzsaksanas_datums' => date('2021-08-19'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => '190636-75856',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Marketinga projektu vaditajs',
                'nodala' => 7,
                'depo' => NULL,
                'stundas_likme' => 12.84,
                'darba_pilditajs' => '442197-93908',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => '165304-95344',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => '320565-50148',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-04-18'),
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => '131243-26521',
                'darba_uzsaksanas_datums' => date('2021-04-18'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas specialists',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 11.09,
                'darba_pilditajs' => '153129-68597',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas numura apkalpotajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => '618671-59100',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas numura apkalpotajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => '372457-84452',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Klientu apkalposanas numura apkalpotajs',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 9.14,
                'darba_pilditajs' => '318950-27161',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Finansu specialists',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 13.54,
                'darba_pilditajs' => '344165-58348',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Finansu specialists',
                'nodala' => 2,
                'depo' => NULL,
                'stundas_likme' => 13.54,
                'darba_pilditajs' => '441520-40434',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Inzenieris',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '850573-31535',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Inzenieris',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 14.21,
                'darba_pilditajs' => '306615-90047',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kasieris stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => '228468-24111',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kasieris stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => '972323-81499',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Kasieris stacija',
                'nodala' => 4,
                'depo' => NULL,
                'stundas_likme' => 6.52,
                'darba_pilditajs' => '437312-35784',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => '737437-20688',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => '422450-16719',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => '485394-55074',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-10-07'),
            ),

            array(
                'nosaukums' => 'Tikla specialists',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 12.67,
                'darba_pilditajs' => '200368-28498',
                'darba_uzsaksanas_datums' => date('2021-10-07'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tehniskais konsultants',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 11.78,
                'darba_pilditajs' => '576776-78262',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tehniskais konsultants',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 11.78,
                'darba_pilditajs' => '556720-57996',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tirdzniecibas parstavis',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 13.47,
                'darba_pilditajs' => '571715-66227',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Tirdzniecibas parstavis',
                'nodala' => 10,
                'depo' => NULL,
                'stundas_likme' => 13.47,
                'darba_pilditajs' => '894064-99571',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala specialists',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 11.12,
                'darba_pilditajs' => '355799-51571',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Personala specialists',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 11.12,
                'darba_pilditajs' => '831083-66655',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-05-26'),
            ),

            array(
                'nosaukums' => 'Personala specialists',
                'nodala' => 6,
                'depo' => NULL,
                'stundas_likme' => 11.12,
                'darba_pilditajs' => '959235-59148',
                'darba_uzsaksanas_datums' => date('2021-05-26'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektrotehnikis',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 9.57,
                'darba_pilditajs' => '262244-51088',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektrotehnikis',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 9.57,
                'darba_pilditajs' => '370585-71841',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Logistikas specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 13.78,
                'darba_pilditajs' => '686152-29581',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Logistikas specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 13.78,
                'darba_pilditajs' => '408650-28638',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Logistikas specialists',
                'nodala' => 8,
                'depo' => NULL,
                'stundas_likme' => 13.78,
                'darba_pilditajs' => '828976-62950',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Informacijas sistemas analitikis',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.03,
                'darba_pilditajs' => '451950-37989',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Informacijas sistemas analitikis',
                'nodala' => 5,
                'depo' => NULL,
                'stundas_likme' => 13.03,
                'darba_pilditajs' => '724648-17351',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektronikas specialists',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 10.03,
                'darba_pilditajs' => '963532-27340',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektronikas specialists',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 10.03,
                'darba_pilditajs' => '802994-49284',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Elektronikas specialists',
                'nodala' => 9,
                'depo' => NULL,
                'stundas_likme' => 10.03,
                'darba_pilditajs' => '280970-94955',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => NULL,
            ),

            array(
                'nosaukums' => 'Gramatvedis',
                'nodala' => 2,
                'depo' => 6,
                'stundas_likme' => 12.85,
                'darba_pilditajs' => '828976-62950',
                'darba_uzsaksanas_datums' => date('2021-01-01'),
                'darba_beigsanas_datums' => date('2021-03-02'),
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


    }
}
