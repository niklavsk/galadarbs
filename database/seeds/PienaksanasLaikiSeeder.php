<?php

use Illuminate\Database\Seeder;

class PienaksanasLaikiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pienaksanas_laiki')->truncate();

        DB::table('pienaksanas_laiki')->insert(array(
            array(
                'marsruta_pietura' => 1,
                'laiks' => '08:00:00',
            ),

            array(
                'marsruta_pietura' => 2,
                'laiks' => '08:04:00',
            ),

            array(
                'marsruta_pietura' => 3,
                'laiks' => '08:07:00',
            ),

            array(
                'marsruta_pietura' => 4,
                'laiks' => '08:12:00',
            ),

            array(
                'marsruta_pietura' => 5,
                'laiks' => '08:15:00',
            ),

            array(
                'marsruta_pietura' => 6,
                'laiks' => '08:19:00',
            ),

            array(
                'marsruta_pietura' => 7,
                'laiks' => '08:23:00',
            ),

            array(
                'marsruta_pietura' => 8,
                'laiks' => '08:28:00',
            ),

            array(
                'marsruta_pietura' => 9,
                'laiks' => '08:31:00',
            ),

            array(
                'marsruta_pietura' => 10,
                'laiks' => '08:34:00',
            ),

            array(
                'marsruta_pietura' => 11,
                'laiks' => '08:38:00',
            ),

            array(
                'marsruta_pietura' => 12,
                'laiks' => '08:43:00',
            ),

            array(
                'marsruta_pietura' => 13,
                'laiks' => '08:45:00',
            ),

            array(
                'marsruta_pietura' => 14,
                'laiks' => '08:50:00',
            ),

            array(
                'marsruta_pietura' => 15,
                'laiks' => '09:00:00',
            ),

            array(
                'marsruta_pietura' => 16,
                'laiks' => '09:04:00',
            ),

            array(
                'marsruta_pietura' => 17,
                'laiks' => '09:08:00',
            ),

            array(
                'marsruta_pietura' => 18,
                'laiks' => '09:10:00',
            ),

            array(
                'marsruta_pietura' => 19,
                'laiks' => '09:12:00',
            ),

            array(
                'marsruta_pietura' => 20,
                'laiks' => '09:15:00',
            ),

            array(
                'marsruta_pietura' => 21,
                'laiks' => '09:17:00',
            ),

            array(
                'marsruta_pietura' => 22,
                'laiks' => '09:20:00',
            ),

            array(
                'marsruta_pietura' => 23,
                'laiks' => '09:25:00',
            ),

            array(
                'marsruta_pietura' => 24,
                'laiks' => '09:27:00',
            ),

            array(
                'marsruta_pietura' => 25,
                'laiks' => '09:30:00',
            ),

            array(
                'marsruta_pietura' => 26,
                'laiks' => '09:32:00',
            ),

            array(
                'marsruta_pietura' => 27,
                'laiks' => '09:37:00',
            ),

            array(
                'marsruta_pietura' => 28,
                'laiks' => '09:40:00',
            ),

            array(
                'marsruta_pietura' => 29,
                'laiks' => '08:45:00',
            ),

            array(
                'marsruta_pietura' => 30,
                'laiks' => '08:48:00',
            ),

            array(
                'marsruta_pietura' => 31,
                'laiks' => '08:51:00',
            ),

            array(
                'marsruta_pietura' => 32,
                'laiks' => '08:53:00',
            ),

            array(
                'marsruta_pietura' => 33,
                'laiks' => '08:58:00',
            ),

            array(
                'marsruta_pietura' => 34,
                'laiks' => '09:00:00',
            ),

            array(
                'marsruta_pietura' => 35,
                'laiks' => '09:02:00',
            ),

            array(
                'marsruta_pietura' => 36,
                'laiks' => '09:04:00',
            ),

            array(
                'marsruta_pietura' => 37,
                'laiks' => '09:09:00',
            ),

            array(
                'marsruta_pietura' => 38,
                'laiks' => '09:13:00',
            ),

            array(
                'marsruta_pietura' => 39,
                'laiks' => '09:18:00',
            ),

            array(
                'marsruta_pietura' => 40,
                'laiks' => '09:23:00',
            ),

            array(
                'marsruta_pietura' => 41,
                'laiks' => '09:25:00',
            ),

            array(
                'marsruta_pietura' => 42,
                'laiks' => '09:28:00',
            ),

            array(
                'marsruta_pietura' => 43,
                'laiks' => '09:33:00',
            ),

            array(
                'marsruta_pietura' => 44,
                'laiks' => '09:35:00',
            ),

            array(
                'marsruta_pietura' => 45,
                'laiks' => '09:37:00',
            ),

            array(
                'marsruta_pietura' => 46,
                'laiks' => '09:39:00',
            ),

            array(
                'marsruta_pietura' => 47,
                'laiks' => '09:44:00',
            ),

            array(
                'marsruta_pietura' => 48,
                'laiks' => '09:49:00',
            ),

            array(
                'marsruta_pietura' => 49,
                'laiks' => '09:51:00',
            ),

            array(
                'marsruta_pietura' => 50,
                'laiks' => '09:55:00',
            ),

            array(
                'marsruta_pietura' => 51,
                'laiks' => '09:59:00',
            ),

            array(
                'marsruta_pietura' => 52,
                'laiks' => '10:02:00',
            ),

            array(
                'marsruta_pietura' => 53,
                'laiks' => '11:00:00',
            ),

            array(
                'marsruta_pietura' => 54,
                'laiks' => '11:02:00',
            ),

            array(
                'marsruta_pietura' => 55,
                'laiks' => '11:07:00',
            ),

            array(
                'marsruta_pietura' => 56,
                'laiks' => '11:11:00',
            ),

            array(
                'marsruta_pietura' => 57,
                'laiks' => '11:13:00',
            ),

            array(
                'marsruta_pietura' => 58,
                'laiks' => '11:18:00',
            ),

            array(
                'marsruta_pietura' => 59,
                'laiks' => '11:22:00',
            ),

            array(
                'marsruta_pietura' => 60,
                'laiks' => '11:25:00',
            ),

            array(
                'marsruta_pietura' => 61,
                'laiks' => '11:27:00',
            ),

            array(
                'marsruta_pietura' => 62,
                'laiks' => '11:29:00',
            ),

            array(
                'marsruta_pietura' => 63,
                'laiks' => '11:30:00',
            ),

            array(
                'marsruta_pietura' => 64,
                'laiks' => '11:34:00',
            ),

            array(
                'marsruta_pietura' => 65,
                'laiks' => '11:36:00',
            ),

            array(
                'marsruta_pietura' => 66,
                'laiks' => '11:38:00',
            ),

            array(
                'marsruta_pietura' => 67,
                'laiks' => '11:42:00',
            ),

            array(
                'marsruta_pietura' => 68,
                'laiks' => '11:47:00',
            ),

            array(
                'marsruta_pietura' => 69,
                'laiks' => '11:52:00',
            ),

            array(
                'marsruta_pietura' => 70,
                'laiks' => '11:54:00',
            ),

            array(
                'marsruta_pietura' => 71,
                'laiks' => '11:56:00',
            ),

            array(
                'marsruta_pietura' => 72,
                'laiks' => '12:00:00',
            ),

            array(
                'marsruta_pietura' => 73,
                'laiks' => '07:30:00',
            ),

            array(
                'marsruta_pietura' => 74,
                'laiks' => '07:37:00',
            ),

            array(
                'marsruta_pietura' => 75,
                'laiks' => '07:45:00',
            ),

            array(
                'marsruta_pietura' => 76,
                'laiks' => '07:52:00',
            ),

            array(
                'marsruta_pietura' => 77,
                'laiks' => '08:02:00',
            ),

            array(
                'marsruta_pietura' => 78,
                'laiks' => '08:06:00',
            ),

            array(
                'marsruta_pietura' => 79,
                'laiks' => '08:10:00',
            ),

            array(
                'marsruta_pietura' => 80,
                'laiks' => '08:19:00',
            ),

            array(
                'marsruta_pietura' => 81,
                'laiks' => '08:26:00',
            ),

            array(
                'marsruta_pietura' => 82,
                'laiks' => '08:32:00',
            ),

            array(
                'marsruta_pietura' => 83,
                'laiks' => '08:39:00',
            ),

            array(
                'marsruta_pietura' => 84,
                'laiks' => '08:45:00',
            ),

            array(
                'marsruta_pietura' => 85,
                'laiks' => '18:00:00',
            ),

            array(
                'marsruta_pietura' => 86,
                'laiks' => '18:06:00',
            ),

            array(
                'marsruta_pietura' => 87,
                'laiks' => '18:09:00',
            ),

            array(
                'marsruta_pietura' => 88,
                'laiks' => '18:16:00',
            ),

            array(
                'marsruta_pietura' => 89,
                'laiks' => '18:26:00',
            ),

            array(
                'marsruta_pietura' => 90,
                'laiks' => '18:36:00',
            ),

            array(
                'marsruta_pietura' => 91,
                'laiks' => '18:41:00',
            ),

            array(
                'marsruta_pietura' => 92,
                'laiks' => '18:45:00',
            ),

            array(
                'marsruta_pietura' => 93,
                'laiks' => '18:49:00',
            ),

            array(
                'marsruta_pietura' => 94,
                'laiks' => '18:52:00',
            ),

            array(
                'marsruta_pietura' => 95,
                'laiks' => '18:59:00',
            ),

            array(
                'marsruta_pietura' => 96,
                'laiks' => '19:05:00',
            ),

            array(
                'marsruta_pietura' => 97,
                'laiks' => '19:15:00',
            ),

            array(
                'marsruta_pietura' => 98,
                'laiks' => '19:21:00',
            ),

            array(
                'marsruta_pietura' => 99,
                'laiks' => '17:45:00',
            ),

            array(
                'marsruta_pietura' => 100,
                'laiks' => '17:55:00',
            ),

            array(
                'marsruta_pietura' => 101,
                'laiks' => '18:01:00',
            ),

            array(
                'marsruta_pietura' => 102,
                'laiks' => '18:10:00',
            ),

            array(
                'marsruta_pietura' => 103,
                'laiks' => '18:19:00',
            ),

            array(
                'marsruta_pietura' => 104,
                'laiks' => '18:25:00',
            ),

            array(
                'marsruta_pietura' => 105,
                'laiks' => '18:33:00',
            ),

            array(
                'marsruta_pietura' => 106,
                'laiks' => '18:41:00',
            ),

            array(
                'marsruta_pietura' => 107,
                'laiks' => '18:47:00',
            ),

            array(
                'marsruta_pietura' => 108,
                'laiks' => '18:57:00',
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    }
}
