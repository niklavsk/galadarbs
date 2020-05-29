<?php

use Illuminate\Database\Seeder;

class DepoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('depo')->truncate();

        DB::table('depo')->insert(array(
            array(
                'apraksts' => 'Apkalpo Zalo liniju. Marsruts Imanta-Jugla. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 16,
                'atrasanas_vieta' => 1,
                'epasts' => 'depo1@metro.lv',
                'kontakttalrunis' => '+37121964122',
            ),

            array(
                'apraksts' => 'Apkalpo Zalo liniju. Marsruts Imanta-Jugla. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 18,
                'atrasanas_vieta' => 2,
                'epasts' => 'depo2@metro.lv',
                'kontakttalrunis' => '+37122541526',
            ),

            array(
                'apraksts' => 'Apkalpo Zalo liniju. Marsruts Jugla-Imanta. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 19,
                'atrasanas_vieta' => 3,
                'epasts' => 'depo3@metro.lv',
                'kontakttalrunis' => '+37129016199',
            ),

            array(
                'apraksts' => 'Apkalpo Zalo liniju. Marsruts Jugla-Imanta. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 22,
                'atrasanas_vieta' => 4,
                'epasts' => 'depo4@metro.lv',
                'kontakttalrunis' => '+37127667958',
            ),

            array(
                'apraksts' => 'Apkalpo Oranzo liniju. Marsruts Bullu kapa-Dreilini. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 23,
                'atrasanas_vieta' => 5,
                'epasts' => 'depo5@metro.lv',
                'kontakttalrunis' => '+37129085437',
            ),

            array(
                'apraksts' => 'Apkalpo Oranzo liniju. Marsruts Bullu kapa-Dreilini. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 24,
                'atrasanas_vieta' => 6,
                'epasts' => 'depo6@metro.lv',
                'kontakttalrunis' => '+37122383118',
            ),

            array(
                'apraksts' => 'Apkalpo Oranzo liniju. Marsruts Dreilini-Bullu kapa. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 26,
                'atrasanas_vieta' => 7,
                'epasts' => 'depo7@metro.lv',
                'kontakttalrunis' => '+37126161086',
            ),

            array(
                'apraksts' => 'Apkalpo Oranzo liniju. Marsruts Dreilini-Bullu kapa. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 27,
                'atrasanas_vieta' => 8,
                'epasts' => 'depo8@metro.lv',
                'kontakttalrunis' => '+37125044525',
            ),

            array(
                'apraksts' => 'Apkalpo Zilo liniju. Marsruts Sarkandaugava-Ziepniekkalns. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 28,
                'atrasanas_vieta' => 9,
                'epasts' => 'depo9@metro.lv',
                'kontakttalrunis' => '+37121309136',
            ),

            array(
                'apraksts' => 'Apkalpo Zilo liniju. Marsruts Sarkandaugava-Ziepniekkalns. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 30,
                'atrasanas_vieta' => 10,
                'epasts' => 'depo10@metro.lv',
                'kontakttalrunis' => '+37127759716',
            ),

            array(
                'apraksts' => 'Apkalpo Zilo liniju. Marsruts Ziepniekkalns-Sarkandaugava. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 31,
                'atrasanas_vieta' => 11,
                'epasts' => 'depo11@metro.lv',
                'kontakttalrunis' => '+37124383937',
            ),

            array(
                'apraksts' => 'Apkalpo Zilo liniju. Marsruts Ziepniekkalns-Sarkandaugava. Spej apkalpot 15 vilcienu pilnos sastavus.',
                'depo_vaditajs' => 32,
                'atrasanas_vieta' => 12,
                'epasts' => 'depo12@metro.lv',
                'kontakttalrunis' => '+37127202153',
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    }
}
