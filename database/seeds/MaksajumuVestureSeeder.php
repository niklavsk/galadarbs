<?php

use Illuminate\Database\Seeder;

class MaksajumuVestureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('maksajumu_vesture')->truncate();

        DB::table('maksajumu_vesture')->insert(array(
            array(
                'pers_kods' => 1,
                'amats' => 1,
                'likme' => 20.54,
                'stundu_sk' => 97,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 3,
                'amats' => 3,
                'likme' => 15.24,
                'stundu_sk' => 69,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 5,
                'amats' => 5,
                'likme' => 12.54,
                'stundu_sk' => 64,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 6,
                'amats' => 6,
                'likme' => 13.57,
                'stundu_sk' => 138,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 7,
                'amats' => 7,
                'likme' => 16.41,
                'stundu_sk' => 154,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 8,
                'amats' => 8,
                'likme' => 12.1,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 9,
                'amats' => 9,
                'likme' => 14.67,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 11,
                'amats' => 11,
                'likme' => 15.34,
                'stundu_sk' => 60,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 12,
                'amats' => 12,
                'likme' => 16.32,
                'stundu_sk' => 93,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 13,
                'amats' => 13,
                'likme' => 16.32,
                'stundu_sk' => 46,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 14,
                'amats' => 14,
                'likme' => 16.45,
                'stundu_sk' => 59,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 16,
                'amats' => 16,
                'likme' => 10.84,
                'stundu_sk' => 121,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 18,
                'amats' => 18,
                'likme' => 10.84,
                'stundu_sk' => 126,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 19,
                'amats' => 19,
                'likme' => 10.84,
                'stundu_sk' => 131,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 22,
                'amats' => 22,
                'likme' => 10.84,
                'stundu_sk' => 90,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 23,
                'amats' => 23,
                'likme' => 10.84,
                'stundu_sk' => 155,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 24,
                'amats' => 24,
                'likme' => 10.84,
                'stundu_sk' => 42,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 26,
                'amats' => 26,
                'likme' => 10.84,
                'stundu_sk' => 137,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 27,
                'amats' => 27,
                'likme' => 10.84,
                'stundu_sk' => 79,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 28,
                'amats' => 28,
                'likme' => 10.84,
                'stundu_sk' => 91,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 30,
                'amats' => 30,
                'likme' => 10.84,
                'stundu_sk' => 57,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 31,
                'amats' => 31,
                'likme' => 10.84,
                'stundu_sk' => 101,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 32,
                'amats' => 32,
                'likme' => 10.84,
                'stundu_sk' => 65,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 33,
                'amats' => 33,
                'likme' => 12.85,
                'stundu_sk' => 156,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 34,
                'amats' => 34,
                'likme' => 12.85,
                'stundu_sk' => 64,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 35,
                'amats' => 35,
                'likme' => 12.85,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 36,
                'amats' => 36,
                'likme' => 12.85,
                'stundu_sk' => 73,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 38,
                'amats' => 38,
                'likme' => 12.85,
                'stundu_sk' => 87,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 39,
                'amats' => 39,
                'likme' => 12.85,
                'stundu_sk' => 63,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 40,
                'amats' => 40,
                'likme' => 12.85,
                'stundu_sk' => 81,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 41,
                'amats' => 41,
                'likme' => 12.85,
                'stundu_sk' => 159,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 43,
                'amats' => 43,
                'likme' => 12.85,
                'stundu_sk' => 92,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 44,
                'amats' => 44,
                'likme' => 12.85,
                'stundu_sk' => 110,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 45,
                'amats' => 45,
                'likme' => 12.85,
                'stundu_sk' => 139,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 46,
                'amats' => 46,
                'likme' => 9.47,
                'stundu_sk' => 36,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 47,
                'amats' => 47,
                'likme' => 9.47,
                'stundu_sk' => 127,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 48,
                'amats' => 48,
                'likme' => 9.47,
                'stundu_sk' => 128,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 49,
                'amats' => 49,
                'likme' => 9.47,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 50,
                'amats' => 50,
                'likme' => 9.47,
                'stundu_sk' => 154,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 51,
                'amats' => 51,
                'likme' => 9.47,
                'stundu_sk' => 54,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 52,
                'amats' => 52,
                'likme' => 9.47,
                'stundu_sk' => 153,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 53,
                'amats' => 53,
                'likme' => 9.47,
                'stundu_sk' => 60,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 54,
                'amats' => 54,
                'likme' => 9.47,
                'stundu_sk' => 110,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 55,
                'amats' => 55,
                'likme' => 9.47,
                'stundu_sk' => 144,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 56,
                'amats' => 56,
                'likme' => 9.47,
                'stundu_sk' => 124,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 57,
                'amats' => 57,
                'likme' => 9.47,
                'stundu_sk' => 138,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 59,
                'amats' => 59,
                'likme' => 6.52,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 60,
                'amats' => 60,
                'likme' => 6.52,
                'stundu_sk' => 136,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 61,
                'amats' => 61,
                'likme' => 6.52,
                'stundu_sk' => 152,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 62,
                'amats' => 62,
                'likme' => 17.85,
                'stundu_sk' => 98,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 63,
                'amats' => 63,
                'likme' => 17.85,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 64,
                'amats' => 64,
                'likme' => 17.85,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 65,
                'amats' => 65,
                'likme' => 17.85,
                'stundu_sk' => 95,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 66,
                'amats' => 66,
                'likme' => 17.85,
                'stundu_sk' => 69,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 67,
                'amats' => 67,
                'likme' => 17.85,
                'stundu_sk' => 64,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 68,
                'amats' => 68,
                'likme' => 17.85,
                'stundu_sk' => 98,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 69,
                'amats' => 69,
                'likme' => 17.85,
                'stundu_sk' => 64,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 70,
                'amats' => 70,
                'likme' => 9.87,
                'stundu_sk' => 75,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 72,
                'amats' => 72,
                'likme' => 9.87,
                'stundu_sk' => 156,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 73,
                'amats' => 73,
                'likme' => 9.87,
                'stundu_sk' => 76,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 74,
                'amats' => 74,
                'likme' => 9.87,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 75,
                'amats' => 75,
                'likme' => 9.87,
                'stundu_sk' => 44,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 76,
                'amats' => 76,
                'likme' => 9.87,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 78,
                'amats' => 78,
                'likme' => 9.14,
                'stundu_sk' => 134,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 79,
                'amats' => 79,
                'likme' => 11.46,
                'stundu_sk' => 66,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 80,
                'amats' => 80,
                'likme' => 14.94,
                'stundu_sk' => 151,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 81,
                'amats' => 81,
                'likme' => 14.94,
                'stundu_sk' => 141,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 82,
                'amats' => 82,
                'likme' => 12.81,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 84,
                'amats' => 84,
                'likme' => 12.81,
                'stundu_sk' => 94,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 85,
                'amats' => 85,
                'likme' => 12.81,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 86,
                'amats' => 86,
                'likme' => 12.81,
                'stundu_sk' => 104,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 87,
                'amats' => 87,
                'likme' => 15.04,
                'stundu_sk' => 158,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 88,
                'amats' => 88,
                'likme' => 15.04,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 89,
                'amats' => 89,
                'likme' => 12.38,
                'stundu_sk' => 80,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 90,
                'amats' => 90,
                'likme' => 12.38,
                'stundu_sk' => 101,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 91,
                'amats' => 91,
                'likme' => 12.38,
                'stundu_sk' => 138,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 92,
                'amats' => 92,
                'likme' => 12.38,
                'stundu_sk' => 101,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 93,
                'amats' => 93,
                'likme' => 12.38,
                'stundu_sk' => 149,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 94,
                'amats' => 94,
                'likme' => 14.21,
                'stundu_sk' => 155,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 95,
                'amats' => 95,
                'likme' => 14.21,
                'stundu_sk' => 124,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 97,
                'amats' => 97,
                'likme' => 14.21,
                'stundu_sk' => 65,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 98,
                'amats' => 98,
                'likme' => 14.21,
                'stundu_sk' => 138,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 99,
                'amats' => 99,
                'likme' => 14.21,
                'stundu_sk' => 154,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 100,
                'amats' => 100,
                'likme' => 14.21,
                'stundu_sk' => 75,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 101,
                'amats' => 101,
                'likme' => 14.21,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 102,
                'amats' => 102,
                'likme' => 14.21,
                'stundu_sk' => 153,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 103,
                'amats' => 103,
                'likme' => 14.21,
                'stundu_sk' => 52,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 104,
                'amats' => 104,
                'likme' => 14.21,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 105,
                'amats' => 105,
                'likme' => 10.24,
                'stundu_sk' => 87,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 107,
                'amats' => 107,
                'likme' => 10.24,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 108,
                'amats' => 108,
                'likme' => 10.24,
                'stundu_sk' => 101,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 109,
                'amats' => 109,
                'likme' => 10.24,
                'stundu_sk' => 107,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 111,
                'amats' => 111,
                'likme' => 10.24,
                'stundu_sk' => 117,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 112,
                'amats' => 112,
                'likme' => 10.24,
                'stundu_sk' => 113,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 114,
                'amats' => 114,
                'likme' => 10.24,
                'stundu_sk' => 136,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 115,
                'amats' => 115,
                'likme' => 10.24,
                'stundu_sk' => 66,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 116,
                'amats' => 116,
                'likme' => 10.24,
                'stundu_sk' => 36,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 118,
                'amats' => 118,
                'likme' => 10.24,
                'stundu_sk' => 145,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 119,
                'amats' => 119,
                'likme' => 10.24,
                'stundu_sk' => 114,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 120,
                'amats' => 120,
                'likme' => 10.24,
                'stundu_sk' => 118,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 121,
                'amats' => 121,
                'likme' => 14.67,
                'stundu_sk' => 52,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 122,
                'amats' => 122,
                'likme' => 14.67,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 123,
                'amats' => 123,
                'likme' => 13.19,
                'stundu_sk' => 63,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 124,
                'amats' => 124,
                'likme' => 13.19,
                'stundu_sk' => 136,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 125,
                'amats' => 125,
                'likme' => 14.75,
                'stundu_sk' => 61,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 126,
                'amats' => 126,
                'likme' => 14.75,
                'stundu_sk' => 114,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 128,
                'amats' => 128,
                'likme' => 14.75,
                'stundu_sk' => 91,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 129,
                'amats' => 129,
                'likme' => 14.75,
                'stundu_sk' => 33,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 130,
                'amats' => 130,
                'likme' => 14.75,
                'stundu_sk' => 154,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 131,
                'amats' => 131,
                'likme' => 14.75,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 132,
                'amats' => 132,
                'likme' => 14.75,
                'stundu_sk' => 38,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 133,
                'amats' => 133,
                'likme' => 14.75,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 134,
                'amats' => 134,
                'likme' => 14.75,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 135,
                'amats' => 135,
                'likme' => 14.54,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 137,
                'amats' => 137,
                'likme' => 14.54,
                'stundu_sk' => 73,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 139,
                'amats' => 139,
                'likme' => 11.56,
                'stundu_sk' => 140,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 140,
                'amats' => 140,
                'likme' => 11.56,
                'stundu_sk' => 101,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 141,
                'amats' => 141,
                'likme' => 12.12,
                'stundu_sk' => 137,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 142,
                'amats' => 142,
                'likme' => 12.12,
                'stundu_sk' => 144,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 143,
                'amats' => 143,
                'likme' => 12.84,
                'stundu_sk' => 84,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 145,
                'amats' => 145,
                'likme' => 12.84,
                'stundu_sk' => 157,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 146,
                'amats' => 146,
                'likme' => 12.84,
                'stundu_sk' => 79,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 147,
                'amats' => 147,
                'likme' => 12.84,
                'stundu_sk' => 116,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 148,
                'amats' => 148,
                'likme' => 11.09,
                'stundu_sk' => 84,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 150,
                'amats' => 150,
                'likme' => 11.09,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 151,
                'amats' => 151,
                'likme' => 11.09,
                'stundu_sk' => 135,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 152,
                'amats' => 152,
                'likme' => 9.14,
                'stundu_sk' => 31,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 153,
                'amats' => 153,
                'likme' => 9.14,
                'stundu_sk' => 91,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 154,
                'amats' => 154,
                'likme' => 9.14,
                'stundu_sk' => 158,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 155,
                'amats' => 155,
                'likme' => 13.54,
                'stundu_sk' => 40,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 156,
                'amats' => 156,
                'likme' => 13.54,
                'stundu_sk' => 51,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 157,
                'amats' => 157,
                'likme' => 14.21,
                'stundu_sk' => 157,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 158,
                'amats' => 158,
                'likme' => 14.21,
                'stundu_sk' => 40,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 159,
                'amats' => 159,
                'likme' => 6.52,
                'stundu_sk' => 149,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 160,
                'amats' => 160,
                'likme' => 6.52,
                'stundu_sk' => 77,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 161,
                'amats' => 161,
                'likme' => 6.52,
                'stundu_sk' => 51,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 162,
                'amats' => 162,
                'likme' => 12.67,
                'stundu_sk' => 121,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 163,
                'amats' => 163,
                'likme' => 12.67,
                'stundu_sk' => 100,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 165,
                'amats' => 165,
                'likme' => 12.67,
                'stundu_sk' => 63,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 166,
                'amats' => 166,
                'likme' => 11.78,
                'stundu_sk' => 84,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 167,
                'amats' => 167,
                'likme' => 11.78,
                'stundu_sk' => 140,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 168,
                'amats' => 168,
                'likme' => 13.47,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 169,
                'amats' => 169,
                'likme' => 13.47,
                'stundu_sk' => 140,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 170,
                'amats' => 170,
                'likme' => 11.12,
                'stundu_sk' => 129,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 172,
                'amats' => 172,
                'likme' => 11.12,
                'stundu_sk' => 61,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 173,
                'amats' => 173,
                'likme' => 9.57,
                'stundu_sk' => 159,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 174,
                'amats' => 174,
                'likme' => 9.57,
                'stundu_sk' => 56,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 41,
                'amats' => 175,
                'likme' => 13.78,
                'stundu_sk' => 131,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 26,
                'amats' => 176,
                'likme' => 13.78,
                'stundu_sk' => 106,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 38,
                'amats' => 177,
                'likme' => 13.78,
                'stundu_sk' => 58,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 53,
                'amats' => 178,
                'likme' => 13.03,
                'stundu_sk' => 32,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 82,
                'amats' => 179,
                'likme' => 13.03,
                'stundu_sk' => 52,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 109,
                'amats' => 180,
                'likme' => 10.03,
                'stundu_sk' => 38,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 62,
                'amats' => 181,
                'likme' => 10.03,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 10,
                'amats' => 182,
                'likme' => 10.03,
                'stundu_sk' => 41,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => 1,
                'amats' => 1,
                'likme' => 20.54,
                'stundu_sk' => 37,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 3,
                'amats' => 3,
                'likme' => 15.24,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 5,
                'amats' => 5,
                'likme' => 12.54,
                'stundu_sk' => 94,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 6,
                'amats' => 6,
                'likme' => 13.57,
                'stundu_sk' => 30,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 7,
                'amats' => 7,
                'likme' => 16.41,
                'stundu_sk' => 70,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 8,
                'amats' => 8,
                'likme' => 12.1,
                'stundu_sk' => 76,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 9,
                'amats' => 9,
                'likme' => 14.67,
                'stundu_sk' => 42,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 11,
                'amats' => 11,
                'likme' => 15.34,
                'stundu_sk' => 148,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 13,
                'amats' => 13,
                'likme' => 16.32,
                'stundu_sk' => 61,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 14,
                'amats' => 14,
                'likme' => 16.45,
                'stundu_sk' => 65,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 16,
                'amats' => 16,
                'likme' => 10.84,
                'stundu_sk' => 32,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 18,
                'amats' => 18,
                'likme' => 10.84,
                'stundu_sk' => 54,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 19,
                'amats' => 19,
                'likme' => 10.84,
                'stundu_sk' => 102,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 22,
                'amats' => 22,
                'likme' => 10.84,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 23,
                'amats' => 23,
                'likme' => 10.84,
                'stundu_sk' => 96,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 24,
                'amats' => 24,
                'likme' => 10.84,
                'stundu_sk' => 87,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 26,
                'amats' => 26,
                'likme' => 10.84,
                'stundu_sk' => 65,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 27,
                'amats' => 27,
                'likme' => 10.84,
                'stundu_sk' => 123,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 28,
                'amats' => 28,
                'likme' => 10.84,
                'stundu_sk' => 145,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 30,
                'amats' => 30,
                'likme' => 10.84,
                'stundu_sk' => 100,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 31,
                'amats' => 31,
                'likme' => 10.84,
                'stundu_sk' => 85,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 32,
                'amats' => 32,
                'likme' => 10.84,
                'stundu_sk' => 98,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 33,
                'amats' => 33,
                'likme' => 12.85,
                'stundu_sk' => 124,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 34,
                'amats' => 34,
                'likme' => 12.85,
                'stundu_sk' => 68,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 35,
                'amats' => 35,
                'likme' => 12.85,
                'stundu_sk' => 82,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 36,
                'amats' => 36,
                'likme' => 12.85,
                'stundu_sk' => 89,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 38,
                'amats' => 38,
                'likme' => 12.85,
                'stundu_sk' => 147,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 39,
                'amats' => 39,
                'likme' => 12.85,
                'stundu_sk' => 79,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 40,
                'amats' => 40,
                'likme' => 12.85,
                'stundu_sk' => 57,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 41,
                'amats' => 41,
                'likme' => 12.85,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 43,
                'amats' => 43,
                'likme' => 12.85,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 44,
                'amats' => 44,
                'likme' => 12.85,
                'stundu_sk' => 158,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 45,
                'amats' => 45,
                'likme' => 12.85,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 46,
                'amats' => 46,
                'likme' => 9.47,
                'stundu_sk' => 121,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 47,
                'amats' => 47,
                'likme' => 9.47,
                'stundu_sk' => 149,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 48,
                'amats' => 48,
                'likme' => 9.47,
                'stundu_sk' => 56,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 49,
                'amats' => 49,
                'likme' => 9.47,
                'stundu_sk' => 110,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 50,
                'amats' => 50,
                'likme' => 9.47,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 51,
                'amats' => 51,
                'likme' => 9.47,
                'stundu_sk' => 99,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 52,
                'amats' => 52,
                'likme' => 9.47,
                'stundu_sk' => 94,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 53,
                'amats' => 53,
                'likme' => 9.47,
                'stundu_sk' => 157,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 54,
                'amats' => 54,
                'likme' => 9.47,
                'stundu_sk' => 113,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 55,
                'amats' => 55,
                'likme' => 9.47,
                'stundu_sk' => 127,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 56,
                'amats' => 56,
                'likme' => 9.47,
                'stundu_sk' => 108,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 57,
                'amats' => 57,
                'likme' => 9.47,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 59,
                'amats' => 59,
                'likme' => 6.52,
                'stundu_sk' => 102,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 60,
                'amats' => 60,
                'likme' => 6.52,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 61,
                'amats' => 61,
                'likme' => 6.52,
                'stundu_sk' => 118,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 62,
                'amats' => 62,
                'likme' => 17.85,
                'stundu_sk' => 157,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 63,
                'amats' => 63,
                'likme' => 17.85,
                'stundu_sk' => 36,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 64,
                'amats' => 64,
                'likme' => 17.85,
                'stundu_sk' => 155,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 65,
                'amats' => 65,
                'likme' => 17.85,
                'stundu_sk' => 94,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 66,
                'amats' => 66,
                'likme' => 17.85,
                'stundu_sk' => 81,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 67,
                'amats' => 67,
                'likme' => 17.85,
                'stundu_sk' => 46,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 68,
                'amats' => 68,
                'likme' => 17.85,
                'stundu_sk' => 156,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 69,
                'amats' => 69,
                'likme' => 17.85,
                'stundu_sk' => 53,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 70,
                'amats' => 70,
                'likme' => 9.87,
                'stundu_sk' => 66,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 72,
                'amats' => 72,
                'likme' => 9.87,
                'stundu_sk' => 51,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 73,
                'amats' => 73,
                'likme' => 9.87,
                'stundu_sk' => 91,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 74,
                'amats' => 74,
                'likme' => 9.87,
                'stundu_sk' => 92,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 75,
                'amats' => 75,
                'likme' => 9.87,
                'stundu_sk' => 63,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 76,
                'amats' => 76,
                'likme' => 9.87,
                'stundu_sk' => 59,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 78,
                'amats' => 78,
                'likme' => 9.14,
                'stundu_sk' => 35,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 79,
                'amats' => 79,
                'likme' => 11.46,
                'stundu_sk' => 101,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 80,
                'amats' => 80,
                'likme' => 14.94,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 81,
                'amats' => 81,
                'likme' => 14.94,
                'stundu_sk' => 41,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 82,
                'amats' => 82,
                'likme' => 12.81,
                'stundu_sk' => 148,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 84,
                'amats' => 84,
                'likme' => 12.81,
                'stundu_sk' => 43,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 85,
                'amats' => 85,
                'likme' => 12.81,
                'stundu_sk' => 100,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 86,
                'amats' => 86,
                'likme' => 12.81,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 87,
                'amats' => 87,
                'likme' => 15.04,
                'stundu_sk' => 150,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 88,
                'amats' => 88,
                'likme' => 15.04,
                'stundu_sk' => 129,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 89,
                'amats' => 89,
                'likme' => 12.38,
                'stundu_sk' => 77,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 90,
                'amats' => 90,
                'likme' => 12.38,
                'stundu_sk' => 124,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 91,
                'amats' => 91,
                'likme' => 12.38,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 92,
                'amats' => 92,
                'likme' => 12.38,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 93,
                'amats' => 93,
                'likme' => 12.38,
                'stundu_sk' => 46,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 94,
                'amats' => 94,
                'likme' => 14.21,
                'stundu_sk' => 142,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 95,
                'amats' => 95,
                'likme' => 14.21,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 97,
                'amats' => 97,
                'likme' => 14.21,
                'stundu_sk' => 149,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 98,
                'amats' => 98,
                'likme' => 14.21,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 99,
                'amats' => 99,
                'likme' => 14.21,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 100,
                'amats' => 100,
                'likme' => 14.21,
                'stundu_sk' => 72,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 101,
                'amats' => 101,
                'likme' => 14.21,
                'stundu_sk' => 119,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 102,
                'amats' => 102,
                'likme' => 14.21,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 103,
                'amats' => 103,
                'likme' => 14.21,
                'stundu_sk' => 128,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 104,
                'amats' => 104,
                'likme' => 14.21,
                'stundu_sk' => 138,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 105,
                'amats' => 105,
                'likme' => 10.24,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 107,
                'amats' => 107,
                'likme' => 10.24,
                'stundu_sk' => 154,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 108,
                'amats' => 108,
                'likme' => 10.24,
                'stundu_sk' => 81,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 109,
                'amats' => 109,
                'likme' => 10.24,
                'stundu_sk' => 136,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 111,
                'amats' => 111,
                'likme' => 10.24,
                'stundu_sk' => 49,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 112,
                'amats' => 112,
                'likme' => 10.24,
                'stundu_sk' => 116,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 114,
                'amats' => 114,
                'likme' => 10.24,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 115,
                'amats' => 115,
                'likme' => 10.24,
                'stundu_sk' => 36,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 116,
                'amats' => 116,
                'likme' => 10.24,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 118,
                'amats' => 118,
                'likme' => 10.24,
                'stundu_sk' => 89,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 119,
                'amats' => 119,
                'likme' => 10.24,
                'stundu_sk' => 50,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 120,
                'amats' => 120,
                'likme' => 10.24,
                'stundu_sk' => 107,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 121,
                'amats' => 121,
                'likme' => 14.67,
                'stundu_sk' => 41,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 122,
                'amats' => 122,
                'likme' => 14.67,
                'stundu_sk' => 105,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 123,
                'amats' => 123,
                'likme' => 13.19,
                'stundu_sk' => 117,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 124,
                'amats' => 124,
                'likme' => 13.19,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 125,
                'amats' => 125,
                'likme' => 14.75,
                'stundu_sk' => 66,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 126,
                'amats' => 126,
                'likme' => 14.75,
                'stundu_sk' => 85,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 128,
                'amats' => 128,
                'likme' => 14.75,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 129,
                'amats' => 129,
                'likme' => 14.75,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 130,
                'amats' => 130,
                'likme' => 14.75,
                'stundu_sk' => 76,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 131,
                'amats' => 131,
                'likme' => 14.75,
                'stundu_sk' => 86,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 132,
                'amats' => 132,
                'likme' => 14.75,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 133,
                'amats' => 133,
                'likme' => 14.75,
                'stundu_sk' => 123,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 134,
                'amats' => 134,
                'likme' => 14.75,
                'stundu_sk' => 51,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 135,
                'amats' => 135,
                'likme' => 14.54,
                'stundu_sk' => 73,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 137,
                'amats' => 137,
                'likme' => 14.54,
                'stundu_sk' => 43,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 139,
                'amats' => 139,
                'likme' => 11.56,
                'stundu_sk' => 123,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 140,
                'amats' => 140,
                'likme' => 11.56,
                'stundu_sk' => 85,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 141,
                'amats' => 141,
                'likme' => 12.12,
                'stundu_sk' => 87,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 142,
                'amats' => 142,
                'likme' => 12.12,
                'stundu_sk' => 118,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 143,
                'amats' => 143,
                'likme' => 12.84,
                'stundu_sk' => 75,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 145,
                'amats' => 145,
                'likme' => 12.84,
                'stundu_sk' => 46,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 146,
                'amats' => 146,
                'likme' => 12.84,
                'stundu_sk' => 90,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 147,
                'amats' => 147,
                'likme' => 12.84,
                'stundu_sk' => 90,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 148,
                'amats' => 148,
                'likme' => 11.09,
                'stundu_sk' => 49,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 150,
                'amats' => 150,
                'likme' => 11.09,
                'stundu_sk' => 31,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 151,
                'amats' => 151,
                'likme' => 11.09,
                'stundu_sk' => 105,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 152,
                'amats' => 152,
                'likme' => 9.14,
                'stundu_sk' => 90,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 153,
                'amats' => 153,
                'likme' => 9.14,
                'stundu_sk' => 83,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 154,
                'amats' => 154,
                'likme' => 9.14,
                'stundu_sk' => 129,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 155,
                'amats' => 155,
                'likme' => 13.54,
                'stundu_sk' => 100,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 156,
                'amats' => 156,
                'likme' => 13.54,
                'stundu_sk' => 150,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 157,
                'amats' => 157,
                'likme' => 14.21,
                'stundu_sk' => 98,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 158,
                'amats' => 158,
                'likme' => 14.21,
                'stundu_sk' => 57,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 159,
                'amats' => 159,
                'likme' => 6.52,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 160,
                'amats' => 160,
                'likme' => 6.52,
                'stundu_sk' => 86,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 161,
                'amats' => 161,
                'likme' => 6.52,
                'stundu_sk' => 56,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 162,
                'amats' => 162,
                'likme' => 12.67,
                'stundu_sk' => 56,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 163,
                'amats' => 163,
                'likme' => 12.67,
                'stundu_sk' => 123,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 165,
                'amats' => 165,
                'likme' => 12.67,
                'stundu_sk' => 37,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 166,
                'amats' => 166,
                'likme' => 11.78,
                'stundu_sk' => 146,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 167,
                'amats' => 167,
                'likme' => 11.78,
                'stundu_sk' => 38,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 168,
                'amats' => 168,
                'likme' => 13.47,
                'stundu_sk' => 70,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 169,
                'amats' => 169,
                'likme' => 13.47,
                'stundu_sk' => 98,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 170,
                'amats' => 170,
                'likme' => 11.12,
                'stundu_sk' => 46,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 172,
                'amats' => 172,
                'likme' => 11.12,
                'stundu_sk' => 119,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 173,
                'amats' => 173,
                'likme' => 9.57,
                'stundu_sk' => 89,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 174,
                'amats' => 174,
                'likme' => 9.57,
                'stundu_sk' => 69,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 41,
                'amats' => 175,
                'likme' => 13.78,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 26,
                'amats' => 176,
                'likme' => 13.78,
                'stundu_sk' => 127,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 38,
                'amats' => 177,
                'likme' => 13.78,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 53,
                'amats' => 178,
                'likme' => 13.03,
                'stundu_sk' => 126,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 82,
                'amats' => 179,
                'likme' => 13.03,
                'stundu_sk' => 130,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 109,
                'amats' => 180,
                'likme' => 10.03,
                'stundu_sk' => 143,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => 62,
                'amats' => 181,
                'likme' => 10.03,
                'stundu_sk' => 49,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


    }
}
