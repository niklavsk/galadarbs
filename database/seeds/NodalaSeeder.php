<?php

use Illuminate\Database\Seeder;

class NodalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('nodala')->truncate();

        DB::table('nodala')->insert(array(
            array(
                'apraksts' => 'Valde',
                'nodalas_vaditajs' => 1,
                'atrasanas_vieta' => 219,
                'epasts' => 'valde@metro.lv',
                'kontakttalrunis' => '+37124936757',
            ),

            array(
                'apraksts' => 'Gramatvediba',
                'nodalas_vaditajs' => 3,
                'atrasanas_vieta' => 219,
                'epasts' => 'gramatvediba@metro.lv',
                'kontakttalrunis' => '+37125896573',
            ),

            array(
                'apraksts' => 'Depo parvaldiba',
                'nodalas_vaditajs' => 5,
                'atrasanas_vieta' => 220,
                'epasts' => 'depo@metro.lv',
                'kontakttalrunis' => '+37127036811',
            ),

            array(
                'apraksts' => 'Klientu apkalposana',
                'nodalas_vaditajs' => 6,
                'atrasanas_vieta' => 219,
                'epasts' => 'klienti@metro.lv',
                'kontakttalrunis' => '+37129823549',
            ),

            array(
                'apraksts' => 'IT',
                'nodalas_vaditajs' => 7,
                'atrasanas_vieta' => 219,
                'epasts' => 'it@metro.lv',
                'kontakttalrunis' => '+37128403506',
            ),

            array(
                'apraksts' => 'Personala piesaiste',
                'nodalas_vaditajs' => 8,
                'atrasanas_vieta' => 219,
                'epasts' => 'personals@metro.lv',
                'kontakttalrunis' => '+37121874009',
            ),

            array(
                'apraksts' => 'Marketings',
                'nodalas_vaditajs' => 9,
                'atrasanas_vieta' => 219,
                'epasts' => 'marketings@metro.lv',
                'kontakttalrunis' => '+37128055327',
            ),

            array(
                'apraksts' => 'Iepirkumi',
                'nodalas_vaditajs' => 11,
                'atrasanas_vieta' => 219,
                'epasts' => 'iepirkumi@metro.lv',
                'kontakttalrunis' => '+37125803610',
            ),

            array(
                'apraksts' => 'Kvalitates kontrole',
                'nodalas_vaditajs' => 13,
                'atrasanas_vieta' => 220,
                'epasts' => 'kvalitate@metro.lv',
                'kontakttalrunis' => '+37125325514',
            ),

            array(
                'apraksts' => 'Projekti',
                'nodalas_vaditajs' => 14,
                'atrasanas_vieta' => 220,
                'epasts' => 'projekti@metro.lv',
                'kontakttalrunis' => '+37125245619',
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    }
}
