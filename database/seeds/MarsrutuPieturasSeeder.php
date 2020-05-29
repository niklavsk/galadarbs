<?php

use Illuminate\Database\Seeder;

class MarsrutuPieturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('marsruta_pieturas')->truncate();

        DB::table('marsruta_pieturas')->insert(array(
            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 1,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 2,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 3,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 4,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 5,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 6,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 7,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 8,
                'pietura' => 8,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 9,
                'pietura' => 9,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 10,
                'pietura' => 10,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 11,
                'pietura' => 11,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 12,
                'pietura' => 12,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 13,
                'pietura' => 13,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 14,
                'pietura' => 14,
                'marsruta_id' => 1,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 14,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 13,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 12,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 11,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 10,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 9,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 8,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 8,
                'pietura' => 7,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 9,
                'pietura' => 6,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 10,
                'pietura' => 5,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 11,
                'pietura' => 4,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 12,
                'pietura' => 3,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 13,
                'pietura' => 2,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 14,
                'pietura' => 1,
                'marsruta_id' => 2,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 15,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 16,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 17,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 18,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 19,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 20,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 8,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 8,
                'pietura' => 21,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 9,
                'pietura' => 22,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 10,
                'pietura' => 23,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 11,
                'pietura' => 24,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 12,
                'pietura' => 25,
                'marsruta_id' => 3,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 25,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 24,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 23,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 22,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 21,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 8,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 20,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 8,
                'pietura' => 19,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 9,
                'pietura' => 18,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 10,
                'pietura' => 17,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 11,
                'pietura' => 16,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 12,
                'pietura' => 15,
                'marsruta_id' => 4,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 26,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 27,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 28,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 29,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 20,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 7,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 30,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 8,
                'pietura' => 31,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 9,
                'pietura' => 32,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 10,
                'pietura' => 33,
                'marsruta_id' => 5,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 33,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 32,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 31,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 30,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 7,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 20,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 29,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 8,
                'pietura' => 28,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 9,
                'pietura' => 27,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 10,
                'pietura' => 26,
                'marsruta_id' => 6,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 1,
                'marsruta_id' => 7,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 2,
                'marsruta_id' => 7,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 6,
                'marsruta_id' => 7,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 7,
                'marsruta_id' => 7,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 13,
                'marsruta_id' => 7,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 14,
                'marsruta_id' => 7,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 14,
                'marsruta_id' => 8,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 13,
                'marsruta_id' => 8,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 7,
                'marsruta_id' => 8,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 6,
                'marsruta_id' => 8,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 2,
                'marsruta_id' => 8,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 1,
                'marsruta_id' => 8,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 15,
                'marsruta_id' => 9,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 16,
                'marsruta_id' => 9,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 19,
                'marsruta_id' => 9,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 20,
                'marsruta_id' => 9,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 8,
                'marsruta_id' => 9,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 24,
                'marsruta_id' => 9,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 25,
                'marsruta_id' => 9,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 25,
                'marsruta_id' => 10,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 24,
                'marsruta_id' => 10,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 8,
                'marsruta_id' => 10,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 20,
                'marsruta_id' => 10,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 19,
                'marsruta_id' => 10,
            ),

            array(
                'pieturas_kartas_nr' => 6,
                'pietura' => 16,
                'marsruta_id' => 10,
            ),

            array(
                'pieturas_kartas_nr' => 7,
                'pietura' => 15,
                'marsruta_id' => 10,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 26,
                'marsruta_id' => 11,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 20,
                'marsruta_id' => 11,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 7,
                'marsruta_id' => 11,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 32,
                'marsruta_id' => 11,
            ),

            array(
                'pieturas_kartas_nr' => 5,
                'pietura' => 33,
                'marsruta_id' => 11,
            ),

            array(
                'pieturas_kartas_nr' => 1,
                'pietura' => 33,
                'marsruta_id' => 12,
            ),

            array(
                'pieturas_kartas_nr' => 2,
                'pietura' => 32,
                'marsruta_id' => 12,
            ),

            array(
                'pieturas_kartas_nr' => 3,
                'pietura' => 7,
                'marsruta_id' => 12,
            ),

            array(
                'pieturas_kartas_nr' => 4,
                'pietura' => 20,
                'marsruta_id' => 12,
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    }
}
