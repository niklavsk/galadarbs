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
                'pers_kods' => '131179-48128',
                'amats' => 1,
                'likme' => 20.54,
                'stundu_sk' => 95,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '928574-17853',
                'amats' => 3,
                'likme' => 15.24,
                'stundu_sk' => 60,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '225166-84440',
                'amats' => 5,
                'likme' => 12.54,
                'stundu_sk' => 93,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '270416-77290',
                'amats' => 6,
                'likme' => 13.57,
                'stundu_sk' => 43,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '801088-43601',
                'amats' => 7,
                'likme' => 16.41,
                'stundu_sk' => 137,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '964823-69625',
                'amats' => 8,
                'likme' => 12.1,
                'stundu_sk' => 149,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '639916-78163',
                'amats' => 9,
                'likme' => 14.67,
                'stundu_sk' => 124,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '736022-48554',
                'amats' => 11,
                'likme' => 15.34,
                'stundu_sk' => 77,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '693955-86333',
                'amats' => 12,
                'likme' => 16.32,
                'stundu_sk' => 97,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '746403-21359',
                'amats' => 13,
                'likme' => 16.32,
                'stundu_sk' => 112,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '538677-27315',
                'amats' => 14,
                'likme' => 16.45,
                'stundu_sk' => 47,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '945155-81847',
                'amats' => 16,
                'likme' => 10.84,
                'stundu_sk' => 57,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '904779-74373',
                'amats' => 18,
                'likme' => 10.84,
                'stundu_sk' => 84,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '650471-20990',
                'amats' => 19,
                'likme' => 10.84,
                'stundu_sk' => 98,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '993622-96899',
                'amats' => 22,
                'likme' => 10.84,
                'stundu_sk' => 40,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '906585-21816',
                'amats' => 23,
                'likme' => 10.84,
                'stundu_sk' => 155,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '501902-44509',
                'amats' => 24,
                'likme' => 10.84,
                'stundu_sk' => 88,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '749536-38384',
                'amats' => 26,
                'likme' => 10.84,
                'stundu_sk' => 114,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '370285-46685',
                'amats' => 27,
                'likme' => 10.84,
                'stundu_sk' => 145,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '129147-77688',
                'amats' => 28,
                'likme' => 10.84,
                'stundu_sk' => 118,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '963532-27340',
                'amats' => 30,
                'likme' => 10.84,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '376603-72178',
                'amats' => 31,
                'likme' => 10.84,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '796757-84420',
                'amats' => 32,
                'likme' => 10.84,
                'stundu_sk' => 40,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '228897-51768',
                'amats' => 33,
                'likme' => 12.85,
                'stundu_sk' => 90,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '782620-41149',
                'amats' => 34,
                'likme' => 12.85,
                'stundu_sk' => 140,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '451950-37989',
                'amats' => 35,
                'likme' => 12.85,
                'stundu_sk' => 126,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '870519-39831',
                'amats' => 36,
                'likme' => 12.85,
                'stundu_sk' => 134,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '724648-17351',
                'amats' => 38,
                'likme' => 12.85,
                'stundu_sk' => 83,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '578364-65560',
                'amats' => 39,
                'likme' => 12.85,
                'stundu_sk' => 121,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '538500-90187',
                'amats' => 40,
                'likme' => 12.85,
                'stundu_sk' => 43,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '648714-21565',
                'amats' => 41,
                'likme' => 12.85,
                'stundu_sk' => 54,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '913173-73615',
                'amats' => 42,
                'likme' => 12.85,
                'stundu_sk' => 38,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '835813-61530',
                'amats' => 44,
                'likme' => 12.85,
                'stundu_sk' => 104,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '913186-69226',
                'amats' => 45,
                'likme' => 12.85,
                'stundu_sk' => 31,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '355234-14098',
                'amats' => 46,
                'likme' => 12.85,
                'stundu_sk' => 154,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '918740-46338',
                'amats' => 47,
                'likme' => 9.47,
                'stundu_sk' => 50,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '550394-72646',
                'amats' => 48,
                'likme' => 9.47,
                'stundu_sk' => 87,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '802994-49284',
                'amats' => 49,
                'likme' => 9.47,
                'stundu_sk' => 41,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '683241-92143',
                'amats' => 50,
                'likme' => 9.47,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '156036-47240',
                'amats' => 51,
                'likme' => 9.47,
                'stundu_sk' => 110,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '280970-94955',
                'amats' => 52,
                'likme' => 9.47,
                'stundu_sk' => 34,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '192660-12758',
                'amats' => 53,
                'likme' => 9.47,
                'stundu_sk' => 32,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '301201-52630',
                'amats' => 54,
                'likme' => 9.47,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '524466-27384',
                'amats' => 55,
                'likme' => 9.47,
                'stundu_sk' => 35,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '726309-40757',
                'amats' => 56,
                'likme' => 9.47,
                'stundu_sk' => 38,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '593312-40461',
                'amats' => 57,
                'likme' => 9.47,
                'stundu_sk' => 79,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '759268-64931',
                'amats' => 58,
                'likme' => 9.47,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '189293-34110',
                'amats' => 60,
                'likme' => 6.52,
                'stundu_sk' => 36,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '352995-81037',
                'amats' => 61,
                'likme' => 6.52,
                'stundu_sk' => 34,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '316637-54068',
                'amats' => 62,
                'likme' => 6.52,
                'stundu_sk' => 119,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '535133-87654',
                'amats' => 63,
                'likme' => 17.85,
                'stundu_sk' => 79,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '307019-74684',
                'amats' => 64,
                'likme' => 17.85,
                'stundu_sk' => 81,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '299572-62074',
                'amats' => 65,
                'likme' => 17.85,
                'stundu_sk' => 105,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '608606-29054',
                'amats' => 66,
                'likme' => 17.85,
                'stundu_sk' => 96,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '301639-51263',
                'amats' => 67,
                'likme' => 17.85,
                'stundu_sk' => 56,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '843188-61964',
                'amats' => 68,
                'likme' => 17.85,
                'stundu_sk' => 142,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '710348-85310',
                'amats' => 69,
                'likme' => 17.85,
                'stundu_sk' => 69,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '119207-57895',
                'amats' => 70,
                'likme' => 17.85,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '594355-66401',
                'amats' => 71,
                'likme' => 9.87,
                'stundu_sk' => 97,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '520195-65080',
                'amats' => 73,
                'likme' => 9.87,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '831607-85090',
                'amats' => 74,
                'likme' => 9.87,
                'stundu_sk' => 94,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '214819-22874',
                'amats' => 75,
                'likme' => 9.87,
                'stundu_sk' => 58,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '741344-90806',
                'amats' => 76,
                'likme' => 9.87,
                'stundu_sk' => 83,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '622033-88636',
                'amats' => 77,
                'likme' => 9.87,
                'stundu_sk' => 88,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '549303-10632',
                'amats' => 79,
                'likme' => 9.14,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '252678-72726',
                'amats' => 80,
                'likme' => 11.46,
                'stundu_sk' => 30,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '454997-88377',
                'amats' => 81,
                'likme' => 14.94,
                'stundu_sk' => 123,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '385290-27920',
                'amats' => 82,
                'likme' => 14.94,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '741987-21472',
                'amats' => 83,
                'likme' => 12.81,
                'stundu_sk' => 103,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '785262-45515',
                'amats' => 85,
                'likme' => 12.81,
                'stundu_sk' => 117,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '663231-11893',
                'amats' => 87,
                'likme' => 12.81,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '749377-70216',
                'amats' => 88,
                'likme' => 15.04,
                'stundu_sk' => 33,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '727534-61621',
                'amats' => 89,
                'likme' => 15.04,
                'stundu_sk' => 127,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '854576-65794',
                'amats' => 90,
                'likme' => 12.38,
                'stundu_sk' => 73,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '166502-14960',
                'amats' => 91,
                'likme' => 12.38,
                'stundu_sk' => 110,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '167326-86494',
                'amats' => 92,
                'likme' => 12.38,
                'stundu_sk' => 58,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '684956-59168',
                'amats' => 94,
                'likme' => 12.38,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '715137-45771',
                'amats' => 95,
                'likme' => 14.21,
                'stundu_sk' => 125,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '515109-83744',
                'amats' => 96,
                'likme' => 14.21,
                'stundu_sk' => 99,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '989043-40524',
                'amats' => 98,
                'likme' => 14.21,
                'stundu_sk' => 59,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '297874-26331',
                'amats' => 99,
                'likme' => 14.21,
                'stundu_sk' => 54,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '761317-95867',
                'amats' => 100,
                'likme' => 14.21,
                'stundu_sk' => 53,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '808227-29956',
                'amats' => 101,
                'likme' => 14.21,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '888713-97814',
                'amats' => 102,
                'likme' => 14.21,
                'stundu_sk' => 114,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '569630-27099',
                'amats' => 103,
                'likme' => 14.21,
                'stundu_sk' => 50,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '224726-16492',
                'amats' => 104,
                'likme' => 14.21,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '374102-18081',
                'amats' => 106,
                'likme' => 10.24,
                'stundu_sk' => 82,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '123865-31641',
                'amats' => 108,
                'likme' => 10.24,
                'stundu_sk' => 158,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '610811-33123',
                'amats' => 109,
                'likme' => 10.24,
                'stundu_sk' => 70,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '466712-59657',
                'amats' => 110,
                'likme' => 10.24,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '672874-98586',
                'amats' => 113,
                'likme' => 10.24,
                'stundu_sk' => 112,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '267217-12462',
                'amats' => 115,
                'likme' => 10.24,
                'stundu_sk' => 114,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '695542-77179',
                'amats' => 116,
                'likme' => 10.24,
                'stundu_sk' => 128,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '841902-92969',
                'amats' => 117,
                'likme' => 10.24,
                'stundu_sk' => 40,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '258742-24152',
                'amats' => 120,
                'likme' => 10.24,
                'stundu_sk' => 130,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '327197-60789',
                'amats' => 121,
                'likme' => 10.24,
                'stundu_sk' => 119,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '440547-33316',
                'amats' => 122,
                'likme' => 14.67,
                'stundu_sk' => 36,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '584502-96154',
                'amats' => 123,
                'likme' => 14.67,
                'stundu_sk' => 146,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '646316-49530',
                'amats' => 124,
                'likme' => 13.19,
                'stundu_sk' => 76,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '481729-98262',
                'amats' => 125,
                'likme' => 13.19,
                'stundu_sk' => 143,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '101683-80419',
                'amats' => 126,
                'likme' => 14.75,
                'stundu_sk' => 80,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '622928-28555',
                'amats' => 127,
                'likme' => 14.75,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '327299-35498',
                'amats' => 129,
                'likme' => 14.75,
                'stundu_sk' => 134,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '201685-35287',
                'amats' => 130,
                'likme' => 14.75,
                'stundu_sk' => 151,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '267546-95758',
                'amats' => 131,
                'likme' => 14.75,
                'stundu_sk' => 90,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '590648-82591',
                'amats' => 132,
                'likme' => 14.75,
                'stundu_sk' => 78,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '725149-15474',
                'amats' => 133,
                'likme' => 14.75,
                'stundu_sk' => 102,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '726018-86703',
                'amats' => 134,
                'likme' => 14.75,
                'stundu_sk' => 134,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '584630-54869',
                'amats' => 135,
                'likme' => 14.75,
                'stundu_sk' => 96,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '640434-95614',
                'amats' => 136,
                'likme' => 14.54,
                'stundu_sk' => 104,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '424101-51158',
                'amats' => 138,
                'likme' => 14.54,
                'stundu_sk' => 49,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '810911-27195',
                'amats' => 140,
                'likme' => 11.56,
                'stundu_sk' => 138,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '206259-92252',
                'amats' => 141,
                'likme' => 11.56,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '822208-76800',
                'amats' => 142,
                'likme' => 12.12,
                'stundu_sk' => 72,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '262301-51126',
                'amats' => 143,
                'likme' => 12.12,
                'stundu_sk' => 79,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '228314-51167',
                'amats' => 144,
                'likme' => 12.84,
                'stundu_sk' => 35,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '940838-23741',
                'amats' => 146,
                'likme' => 12.84,
                'stundu_sk' => 108,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '190636-75856',
                'amats' => 147,
                'likme' => 12.84,
                'stundu_sk' => 132,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '442197-93908',
                'amats' => 148,
                'likme' => 12.84,
                'stundu_sk' => 124,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '165304-95344',
                'amats' => 149,
                'likme' => 11.09,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '131243-26521',
                'amats' => 151,
                'likme' => 11.09,
                'stundu_sk' => 150,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '153129-68597',
                'amats' => 152,
                'likme' => 11.09,
                'stundu_sk' => 137,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '618671-59100',
                'amats' => 153,
                'likme' => 9.14,
                'stundu_sk' => 69,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '372457-84452',
                'amats' => 154,
                'likme' => 9.14,
                'stundu_sk' => 42,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '318950-27161',
                'amats' => 155,
                'likme' => 9.14,
                'stundu_sk' => 54,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '344165-58348',
                'amats' => 156,
                'likme' => 13.54,
                'stundu_sk' => 53,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '441520-40434',
                'amats' => 157,
                'likme' => 13.54,
                'stundu_sk' => 136,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '850573-31535',
                'amats' => 158,
                'likme' => 14.21,
                'stundu_sk' => 104,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '306615-90047',
                'amats' => 159,
                'likme' => 14.21,
                'stundu_sk' => 142,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '228468-24111',
                'amats' => 160,
                'likme' => 6.52,
                'stundu_sk' => 130,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '972323-81499',
                'amats' => 161,
                'likme' => 6.52,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '437312-35784',
                'amats' => 162,
                'likme' => 6.52,
                'stundu_sk' => 138,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '737437-20688',
                'amats' => 163,
                'likme' => 12.67,
                'stundu_sk' => 91,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '422450-16719',
                'amats' => 164,
                'likme' => 12.67,
                'stundu_sk' => 48,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '200368-28498',
                'amats' => 166,
                'likme' => 12.67,
                'stundu_sk' => 103,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '576776-78262',
                'amats' => 167,
                'likme' => 11.78,
                'stundu_sk' => 43,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '556720-57996',
                'amats' => 168,
                'likme' => 11.78,
                'stundu_sk' => 142,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '571715-66227',
                'amats' => 169,
                'likme' => 13.47,
                'stundu_sk' => 59,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '894064-99571',
                'amats' => 170,
                'likme' => 13.47,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '355799-51571',
                'amats' => 171,
                'likme' => 11.12,
                'stundu_sk' => 143,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '959235-59148',
                'amats' => 173,
                'likme' => 11.12,
                'stundu_sk' => 52,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '262244-51088',
                'amats' => 174,
                'likme' => 9.57,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '370585-71841',
                'amats' => 175,
                'likme' => 9.57,
                'stundu_sk' => 159,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '686152-29581',
                'amats' => 176,
                'likme' => 13.78,
                'stundu_sk' => 48,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '408650-28638',
                'amats' => 177,
                'likme' => 13.78,
                'stundu_sk' => 107,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '828976-62950',
                'amats' => 178,
                'likme' => 13.78,
                'stundu_sk' => 143,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '451950-37989',
                'amats' => 179,
                'likme' => 13.03,
                'stundu_sk' => 58,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '724648-17351',
                'amats' => 180,
                'likme' => 13.03,
                'stundu_sk' => 136,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '963532-27340',
                'amats' => 181,
                'likme' => 10.03,
                'stundu_sk' => 112,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '802994-49284',
                'amats' => 182,
                'likme' => 10.03,
                'stundu_sk' => 151,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '280970-94955',
                'amats' => 183,
                'likme' => 10.03,
                'stundu_sk' => 146,
                'izsniegsanas_datums' => date('2021-12-01'),
            ),

            array(
                'pers_kods' => '131179-48128',
                'amats' => 1,
                'likme' => 20.54,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '928574-17853',
                'amats' => 3,
                'likme' => 15.24,
                'stundu_sk' => 141,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '225166-84440',
                'amats' => 5,
                'likme' => 12.54,
                'stundu_sk' => 64,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '270416-77290',
                'amats' => 6,
                'likme' => 13.57,
                'stundu_sk' => 78,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '801088-43601',
                'amats' => 7,
                'likme' => 16.41,
                'stundu_sk' => 132,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '964823-69625',
                'amats' => 8,
                'likme' => 12.1,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '639916-78163',
                'amats' => 9,
                'likme' => 14.67,
                'stundu_sk' => 119,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '736022-48554',
                'amats' => 11,
                'likme' => 15.34,
                'stundu_sk' => 139,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '746403-21359',
                'amats' => 13,
                'likme' => 16.32,
                'stundu_sk' => 106,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '538677-27315',
                'amats' => 14,
                'likme' => 16.45,
                'stundu_sk' => 156,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '945155-81847',
                'amats' => 16,
                'likme' => 10.84,
                'stundu_sk' => 153,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '904779-74373',
                'amats' => 18,
                'likme' => 10.84,
                'stundu_sk' => 35,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '650471-20990',
                'amats' => 19,
                'likme' => 10.84,
                'stundu_sk' => 132,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '993622-96899',
                'amats' => 22,
                'likme' => 10.84,
                'stundu_sk' => 75,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '906585-21816',
                'amats' => 23,
                'likme' => 10.84,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '501902-44509',
                'amats' => 24,
                'likme' => 10.84,
                'stundu_sk' => 152,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '749536-38384',
                'amats' => 26,
                'likme' => 10.84,
                'stundu_sk' => 91,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '370285-46685',
                'amats' => 27,
                'likme' => 10.84,
                'stundu_sk' => 92,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '129147-77688',
                'amats' => 28,
                'likme' => 10.84,
                'stundu_sk' => 153,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '963532-27340',
                'amats' => 30,
                'likme' => 10.84,
                'stundu_sk' => 110,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '376603-72178',
                'amats' => 31,
                'likme' => 10.84,
                'stundu_sk' => 151,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '796757-84420',
                'amats' => 32,
                'likme' => 10.84,
                'stundu_sk' => 31,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '228897-51768',
                'amats' => 33,
                'likme' => 12.85,
                'stundu_sk' => 104,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '782620-41149',
                'amats' => 34,
                'likme' => 12.85,
                'stundu_sk' => 58,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '451950-37989',
                'amats' => 35,
                'likme' => 12.85,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '870519-39831',
                'amats' => 36,
                'likme' => 12.85,
                'stundu_sk' => 114,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '724648-17351',
                'amats' => 38,
                'likme' => 12.85,
                'stundu_sk' => 93,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '578364-65560',
                'amats' => 39,
                'likme' => 12.85,
                'stundu_sk' => 100,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '538500-90187',
                'amats' => 40,
                'likme' => 12.85,
                'stundu_sk' => 92,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '648714-21565',
                'amats' => 41,
                'likme' => 12.85,
                'stundu_sk' => 43,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '913173-73615',
                'amats' => 42,
                'likme' => 12.85,
                'stundu_sk' => 109,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '835813-61530',
                'amats' => 44,
                'likme' => 12.85,
                'stundu_sk' => 82,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '913186-69226',
                'amats' => 45,
                'likme' => 12.85,
                'stundu_sk' => 97,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '355234-14098',
                'amats' => 46,
                'likme' => 12.85,
                'stundu_sk' => 147,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '918740-46338',
                'amats' => 47,
                'likme' => 9.47,
                'stundu_sk' => 50,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '550394-72646',
                'amats' => 48,
                'likme' => 9.47,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '802994-49284',
                'amats' => 49,
                'likme' => 9.47,
                'stundu_sk' => 74,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '683241-92143',
                'amats' => 50,
                'likme' => 9.47,
                'stundu_sk' => 98,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '156036-47240',
                'amats' => 51,
                'likme' => 9.47,
                'stundu_sk' => 132,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '280970-94955',
                'amats' => 52,
                'likme' => 9.47,
                'stundu_sk' => 118,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '192660-12758',
                'amats' => 53,
                'likme' => 9.47,
                'stundu_sk' => 108,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '301201-52630',
                'amats' => 54,
                'likme' => 9.47,
                'stundu_sk' => 140,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '524466-27384',
                'amats' => 55,
                'likme' => 9.47,
                'stundu_sk' => 89,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '726309-40757',
                'amats' => 56,
                'likme' => 9.47,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '593312-40461',
                'amats' => 57,
                'likme' => 9.47,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '759268-64931',
                'amats' => 58,
                'likme' => 9.47,
                'stundu_sk' => 105,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '189293-34110',
                'amats' => 60,
                'likme' => 6.52,
                'stundu_sk' => 73,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '352995-81037',
                'amats' => 61,
                'likme' => 6.52,
                'stundu_sk' => 113,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '316637-54068',
                'amats' => 62,
                'likme' => 6.52,
                'stundu_sk' => 47,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '535133-87654',
                'amats' => 63,
                'likme' => 17.85,
                'stundu_sk' => 68,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '307019-74684',
                'amats' => 64,
                'likme' => 17.85,
                'stundu_sk' => 84,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '299572-62074',
                'amats' => 65,
                'likme' => 17.85,
                'stundu_sk' => 85,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '608606-29054',
                'amats' => 66,
                'likme' => 17.85,
                'stundu_sk' => 149,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '301639-51263',
                'amats' => 67,
                'likme' => 17.85,
                'stundu_sk' => 76,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '843188-61964',
                'amats' => 68,
                'likme' => 17.85,
                'stundu_sk' => 86,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '710348-85310',
                'amats' => 69,
                'likme' => 17.85,
                'stundu_sk' => 73,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '119207-57895',
                'amats' => 70,
                'likme' => 17.85,
                'stundu_sk' => 30,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '594355-66401',
                'amats' => 71,
                'likme' => 9.87,
                'stundu_sk' => 100,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '520195-65080',
                'amats' => 73,
                'likme' => 9.87,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '831607-85090',
                'amats' => 74,
                'likme' => 9.87,
                'stundu_sk' => 81,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '214819-22874',
                'amats' => 75,
                'likme' => 9.87,
                'stundu_sk' => 43,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '741344-90806',
                'amats' => 76,
                'likme' => 9.87,
                'stundu_sk' => 78,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '622033-88636',
                'amats' => 77,
                'likme' => 9.87,
                'stundu_sk' => 64,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '549303-10632',
                'amats' => 79,
                'likme' => 9.14,
                'stundu_sk' => 35,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '252678-72726',
                'amats' => 80,
                'likme' => 11.46,
                'stundu_sk' => 123,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '454997-88377',
                'amats' => 81,
                'likme' => 14.94,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '385290-27920',
                'amats' => 82,
                'likme' => 14.94,
                'stundu_sk' => 119,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '741987-21472',
                'amats' => 83,
                'likme' => 12.81,
                'stundu_sk' => 139,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '785262-45515',
                'amats' => 85,
                'likme' => 12.81,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '663231-11893',
                'amats' => 87,
                'likme' => 12.81,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '749377-70216',
                'amats' => 88,
                'likme' => 15.04,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '727534-61621',
                'amats' => 89,
                'likme' => 15.04,
                'stundu_sk' => 106,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '854576-65794',
                'amats' => 90,
                'likme' => 12.38,
                'stundu_sk' => 131,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '166502-14960',
                'amats' => 91,
                'likme' => 12.38,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '167326-86494',
                'amats' => 92,
                'likme' => 12.38,
                'stundu_sk' => 40,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '684956-59168',
                'amats' => 94,
                'likme' => 12.38,
                'stundu_sk' => 153,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '715137-45771',
                'amats' => 95,
                'likme' => 14.21,
                'stundu_sk' => 68,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '515109-83744',
                'amats' => 96,
                'likme' => 14.21,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '989043-40524',
                'amats' => 98,
                'likme' => 14.21,
                'stundu_sk' => 63,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '297874-26331',
                'amats' => 99,
                'likme' => 14.21,
                'stundu_sk' => 118,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '761317-95867',
                'amats' => 100,
                'likme' => 14.21,
                'stundu_sk' => 102,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '808227-29956',
                'amats' => 101,
                'likme' => 14.21,
                'stundu_sk' => 81,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '888713-97814',
                'amats' => 102,
                'likme' => 14.21,
                'stundu_sk' => 90,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '569630-27099',
                'amats' => 103,
                'likme' => 14.21,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '224726-16492',
                'amats' => 104,
                'likme' => 14.21,
                'stundu_sk' => 122,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '374102-18081',
                'amats' => 106,
                'likme' => 10.24,
                'stundu_sk' => 86,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '123865-31641',
                'amats' => 108,
                'likme' => 10.24,
                'stundu_sk' => 49,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '610811-33123',
                'amats' => 109,
                'likme' => 10.24,
                'stundu_sk' => 66,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '466712-59657',
                'amats' => 110,
                'likme' => 10.24,
                'stundu_sk' => 45,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '672874-98586',
                'amats' => 113,
                'likme' => 10.24,
                'stundu_sk' => 154,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '267217-12462',
                'amats' => 115,
                'likme' => 10.24,
                'stundu_sk' => 113,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '695542-77179',
                'amats' => 116,
                'likme' => 10.24,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '841902-92969',
                'amats' => 117,
                'likme' => 10.24,
                'stundu_sk' => 129,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '258742-24152',
                'amats' => 120,
                'likme' => 10.24,
                'stundu_sk' => 87,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '327197-60789',
                'amats' => 121,
                'likme' => 10.24,
                'stundu_sk' => 79,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '440547-33316',
                'amats' => 122,
                'likme' => 14.67,
                'stundu_sk' => 89,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '584502-96154',
                'amats' => 123,
                'likme' => 14.67,
                'stundu_sk' => 51,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '646316-49530',
                'amats' => 124,
                'likme' => 13.19,
                'stundu_sk' => 141,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '481729-98262',
                'amats' => 125,
                'likme' => 13.19,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '101683-80419',
                'amats' => 126,
                'likme' => 14.75,
                'stundu_sk' => 93,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '622928-28555',
                'amats' => 127,
                'likme' => 14.75,
                'stundu_sk' => 75,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '327299-35498',
                'amats' => 129,
                'likme' => 14.75,
                'stundu_sk' => 152,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '201685-35287',
                'amats' => 130,
                'likme' => 14.75,
                'stundu_sk' => 105,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '267546-95758',
                'amats' => 131,
                'likme' => 14.75,
                'stundu_sk' => 44,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '590648-82591',
                'amats' => 132,
                'likme' => 14.75,
                'stundu_sk' => 96,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '725149-15474',
                'amats' => 133,
                'likme' => 14.75,
                'stundu_sk' => 144,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '726018-86703',
                'amats' => 134,
                'likme' => 14.75,
                'stundu_sk' => 38,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '584630-54869',
                'amats' => 135,
                'likme' => 14.75,
                'stundu_sk' => 89,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '640434-95614',
                'amats' => 136,
                'likme' => 14.54,
                'stundu_sk' => 83,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '424101-51158',
                'amats' => 138,
                'likme' => 14.54,
                'stundu_sk' => 37,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '810911-27195',
                'amats' => 140,
                'likme' => 11.56,
                'stundu_sk' => 34,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '206259-92252',
                'amats' => 141,
                'likme' => 11.56,
                'stundu_sk' => 39,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '822208-76800',
                'amats' => 142,
                'likme' => 12.12,
                'stundu_sk' => 158,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '262301-51126',
                'amats' => 143,
                'likme' => 12.12,
                'stundu_sk' => 67,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '228314-51167',
                'amats' => 144,
                'likme' => 12.84,
                'stundu_sk' => 71,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '940838-23741',
                'amats' => 146,
                'likme' => 12.84,
                'stundu_sk' => 127,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '190636-75856',
                'amats' => 147,
                'likme' => 12.84,
                'stundu_sk' => 130,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '442197-93908',
                'amats' => 148,
                'likme' => 12.84,
                'stundu_sk' => 111,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '165304-95344',
                'amats' => 149,
                'likme' => 11.09,
                'stundu_sk' => 95,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '131243-26521',
                'amats' => 151,
                'likme' => 11.09,
                'stundu_sk' => 128,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '153129-68597',
                'amats' => 152,
                'likme' => 11.09,
                'stundu_sk' => 101,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '618671-59100',
                'amats' => 153,
                'likme' => 9.14,
                'stundu_sk' => 129,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '372457-84452',
                'amats' => 154,
                'likme' => 9.14,
                'stundu_sk' => 120,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '318950-27161',
                'amats' => 155,
                'likme' => 9.14,
                'stundu_sk' => 127,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '344165-58348',
                'amats' => 156,
                'likme' => 13.54,
                'stundu_sk' => 110,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '441520-40434',
                'amats' => 157,
                'likme' => 13.54,
                'stundu_sk' => 58,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '850573-31535',
                'amats' => 158,
                'likme' => 14.21,
                'stundu_sk' => 115,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '306615-90047',
                'amats' => 159,
                'likme' => 14.21,
                'stundu_sk' => 152,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '228468-24111',
                'amats' => 160,
                'likme' => 6.52,
                'stundu_sk' => 105,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '972323-81499',
                'amats' => 161,
                'likme' => 6.52,
                'stundu_sk' => 53,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '437312-35784',
                'amats' => 162,
                'likme' => 6.52,
                'stundu_sk' => 80,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '737437-20688',
                'amats' => 163,
                'likme' => 12.67,
                'stundu_sk' => 80,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '422450-16719',
                'amats' => 164,
                'likme' => 12.67,
                'stundu_sk' => 59,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '200368-28498',
                'amats' => 166,
                'likme' => 12.67,
                'stundu_sk' => 113,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '576776-78262',
                'amats' => 167,
                'likme' => 11.78,
                'stundu_sk' => 121,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '556720-57996',
                'amats' => 168,
                'likme' => 11.78,
                'stundu_sk' => 35,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '571715-66227',
                'amats' => 169,
                'likme' => 13.47,
                'stundu_sk' => 159,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '894064-99571',
                'amats' => 170,
                'likme' => 13.47,
                'stundu_sk' => 92,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '355799-51571',
                'amats' => 171,
                'likme' => 11.12,
                'stundu_sk' => 62,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '959235-59148',
                'amats' => 173,
                'likme' => 11.12,
                'stundu_sk' => 152,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '262244-51088',
                'amats' => 174,
                'likme' => 9.57,
                'stundu_sk' => 63,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '370585-71841',
                'amats' => 175,
                'likme' => 9.57,
                'stundu_sk' => 136,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '686152-29581',
                'amats' => 176,
                'likme' => 13.78,
                'stundu_sk' => 41,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '408650-28638',
                'amats' => 177,
                'likme' => 13.78,
                'stundu_sk' => 133,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '828976-62950',
                'amats' => 178,
                'likme' => 13.78,
                'stundu_sk' => 46,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '451950-37989',
                'amats' => 179,
                'likme' => 13.03,
                'stundu_sk' => 82,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '724648-17351',
                'amats' => 180,
                'likme' => 13.03,
                'stundu_sk' => 76,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '963532-27340',
                'amats' => 181,
                'likme' => 10.03,
                'stundu_sk' => 59,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '802994-49284',
                'amats' => 182,
                'likme' => 10.03,
                'stundu_sk' => 137,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

            array(
                'pers_kods' => '280970-94955',
                'amats' => 183,
                'likme' => 10.03,
                'stundu_sk' => 129,
                'izsniegsanas_datums' => date('2022-01-01'),
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    }
}
