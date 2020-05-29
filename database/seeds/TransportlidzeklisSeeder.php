<?php

use Illuminate\Database\Seeder;

class TransportlidzeklisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('transportlidzeklis')->truncate();

        DB::table('transportlidzeklis')->insert(array(
            array(
                'tehniskas_parbaudes_termins' => date('2021-08-21'),
                'pedeja_remonta_datums' => date('2021-02-21'),
                'razosanas_datums' => date('2020-09-09'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-09-05'),
                'pedeja_remonta_datums' => date('2021-03-05'),
                'razosanas_datums' => date('2020-09-14'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-09-10'),
                'pedeja_remonta_datums' => date('2021-03-10'),
                'razosanas_datums' => date('2020-09-16'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-09-19'),
                'pedeja_remonta_datums' => date('2021-03-19'),
                'razosanas_datums' => date('2020-10-06'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-09-30'),
                'pedeja_remonta_datums' => date('2021-03-31'),
                'razosanas_datums' => date('2020-10-07'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-10-18'),
                'pedeja_remonta_datums' => date('2021-04-18'),
                'razosanas_datums' => date('2020-10-22'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-10-12'),
                'pedeja_remonta_datums' => date('2021-04-12'),
                'razosanas_datums' => date('2020-10-23'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-10-16'),
                'pedeja_remonta_datums' => date('2021-04-16'),
                'razosanas_datums' => date('2020-10-23'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-10-22'),
                'pedeja_remonta_datums' => date('2021-04-22'),
                'razosanas_datums' => date('2020-11-01'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-12-09'),
                'pedeja_remonta_datums' => date('2021-06-09'),
                'razosanas_datums' => date('2020-12-14'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-12-02'),
                'pedeja_remonta_datums' => date('2021-06-02'),
                'razosanas_datums' => date('2020-12-17'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-12-09'),
                'pedeja_remonta_datums' => date('2021-06-09'),
                'razosanas_datums' => date('2020-12-26'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2021-12-28'),
                'pedeja_remonta_datums' => date('2021-06-28'),
                'razosanas_datums' => date('2021-01-13'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-09'),
                'pedeja_remonta_datums' => date('2021-07-09'),
                'razosanas_datums' => date('2021-01-15'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-08'),
                'pedeja_remonta_datums' => date('2021-07-08'),
                'razosanas_datums' => date('2021-01-19'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-17'),
                'pedeja_remonta_datums' => date('2021-08-17'),
                'razosanas_datums' => date('2021-02-23'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '7',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-20'),
                'pedeja_remonta_datums' => date('2021-08-20'),
                'razosanas_datums' => date('2021-02-24'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '7',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-24'),
                'pedeja_remonta_datums' => date('2021-08-24'),
                'razosanas_datums' => date('2021-03-01'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '7',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-05'),
                'pedeja_remonta_datums' => date('2021-09-05'),
                'razosanas_datums' => date('2021-03-06'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '7',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-07'),
                'pedeja_remonta_datums' => date('2021-09-07'),
                'razosanas_datums' => date('2021-03-09'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '7',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-08'),
                'pedeja_remonta_datums' => date('2021-10-08'),
                'razosanas_datums' => date('2021-04-09'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '7',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-15'),
                'pedeja_remonta_datums' => date('2021-10-15'),
                'razosanas_datums' => date('2021-04-21'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-06'),
                'pedeja_remonta_datums' => date('2021-11-06'),
                'razosanas_datums' => date('2021-05-14'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-27'),
                'pedeja_remonta_datums' => date('2021-11-27'),
                'razosanas_datums' => date('2021-06-03'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-27'),
                'pedeja_remonta_datums' => date('2021-11-27'),
                'razosanas_datums' => date('2021-06-05'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-06-13'),
                'pedeja_remonta_datums' => date('2021-12-13'),
                'razosanas_datums' => date('2021-06-21'),
                'razotajs' => 'Alstom',
                'depo_nr' => 1,
                'marsruta_id' => '1',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-06-19'),
                'pedeja_remonta_datums' => date('2021-12-19'),
                'razosanas_datums' => date('2021-06-25'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-17'),
                'pedeja_remonta_datums' => NULL,
                'razosanas_datums' => date('2021-07-17'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-12'),
                'pedeja_remonta_datums' => NULL,
                'razosanas_datums' => date('2021-08-12'),
                'razotajs' => 'Alstom',
                'depo_nr' => 2,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-22'),
                'pedeja_remonta_datums' => NULL,
                'razosanas_datums' => date('2021-08-22'),
                'razotajs' => 'Alstom',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-07'),
                'pedeja_remonta_datums' => NULL,
                'razosanas_datums' => date('2021-09-07'),
                'razotajs' => 'Alstom',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-21'),
                'pedeja_remonta_datums' => NULL,
                'razosanas_datums' => date('2021-09-21'),
                'razotajs' => 'Alstom',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-13'),
                'pedeja_remonta_datums' => NULL,
                'razosanas_datums' => date('2021-11-13'),
                'razotajs' => 'Alstom',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-06-12'),
                'pedeja_remonta_datums' => NULL,
                'razosanas_datums' => date('2021-12-12'),
                'razotajs' => 'Alstom',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-01'),
                'pedeja_remonta_datums' => date('2021-09-01'),
                'razosanas_datums' => date('1997-03-19'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-27'),
                'pedeja_remonta_datums' => date('2021-07-27'),
                'razosanas_datums' => date('1997-04-08'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-26'),
                'pedeja_remonta_datums' => date('2021-08-26'),
                'razosanas_datums' => date('1997-04-26'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-27'),
                'pedeja_remonta_datums' => date('2021-11-27'),
                'razosanas_datums' => date('1997-05-07'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-11'),
                'pedeja_remonta_datums' => date('2021-10-11'),
                'razosanas_datums' => date('1997-05-28'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-03'),
                'pedeja_remonta_datums' => date('2021-10-03'),
                'razosanas_datums' => date('1997-06-10'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-05'),
                'pedeja_remonta_datums' => date('2021-08-05'),
                'razosanas_datums' => date('1997-06-18'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-26'),
                'pedeja_remonta_datums' => date('2021-08-26'),
                'razosanas_datums' => date('1997-07-12'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-17'),
                'pedeja_remonta_datums' => date('2021-07-17'),
                'razosanas_datums' => date('1997-07-29'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '8',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-26'),
                'pedeja_remonta_datums' => date('2021-10-26'),
                'razosanas_datums' => date('1997-08-03'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 3,
                'marsruta_id' => '8',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-09'),
                'pedeja_remonta_datums' => date('2021-08-09'),
                'razosanas_datums' => date('1997-09-25'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '8',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-01'),
                'pedeja_remonta_datums' => date('2021-07-01'),
                'razosanas_datums' => date('1997-11-16'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '8',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-28'),
                'pedeja_remonta_datums' => date('2021-07-28'),
                'razosanas_datums' => date('1997-11-19'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '8',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-09'),
                'pedeja_remonta_datums' => date('2021-10-09'),
                'razosanas_datums' => date('1997-12-10'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '8',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-08'),
                'pedeja_remonta_datums' => date('2021-07-08'),
                'razosanas_datums' => date('1997-12-19'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-09'),
                'pedeja_remonta_datums' => date('2021-10-09'),
                'razosanas_datums' => date('1998-01-19'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-22'),
                'pedeja_remonta_datums' => date('2021-09-22'),
                'razosanas_datums' => date('1998-03-09'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-28'),
                'pedeja_remonta_datums' => date('2021-11-28'),
                'razosanas_datums' => date('1998-03-14'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-30'),
                'pedeja_remonta_datums' => date('2021-09-30'),
                'razosanas_datums' => date('1998-06-11'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-07'),
                'pedeja_remonta_datums' => date('2021-08-07'),
                'razosanas_datums' => date('1998-06-16'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-14'),
                'pedeja_remonta_datums' => date('2021-09-14'),
                'razosanas_datums' => date('1998-06-26'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => '2',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-23'),
                'pedeja_remonta_datums' => date('2021-09-23'),
                'razosanas_datums' => date('1998-08-19'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-10'),
                'pedeja_remonta_datums' => date('2021-09-10'),
                'razosanas_datums' => date('1998-08-29'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-07'),
                'pedeja_remonta_datums' => date('2021-07-07'),
                'razosanas_datums' => date('1998-09-05'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 4,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-21'),
                'pedeja_remonta_datums' => date('2021-08-21'),
                'razosanas_datums' => date('1998-09-10'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-03'),
                'pedeja_remonta_datums' => date('2021-07-03'),
                'razosanas_datums' => date('1998-10-04'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-24'),
                'pedeja_remonta_datums' => date('2021-10-24'),
                'razosanas_datums' => date('1998-11-02'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-27'),
                'pedeja_remonta_datums' => date('2021-07-27'),
                'razosanas_datums' => date('1999-01-21'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-06'),
                'pedeja_remonta_datums' => date('2021-07-06'),
                'razosanas_datums' => date('1999-01-29'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-16'),
                'pedeja_remonta_datums' => date('2021-11-16'),
                'razosanas_datums' => date('1999-02-19'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-16'),
                'pedeja_remonta_datums' => date('2021-10-16'),
                'razosanas_datums' => date('1999-02-24'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-18'),
                'pedeja_remonta_datums' => date('2021-09-18'),
                'razosanas_datums' => date('1999-03-16'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-02'),
                'pedeja_remonta_datums' => date('2021-11-02'),
                'razosanas_datums' => date('1999-03-29'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-11'),
                'pedeja_remonta_datums' => date('2021-08-11'),
                'razosanas_datums' => date('1999-04-13'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-24'),
                'pedeja_remonta_datums' => date('2021-09-24'),
                'razosanas_datums' => date('1999-08-07'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-17'),
                'pedeja_remonta_datums' => date('2021-11-17'),
                'razosanas_datums' => date('1999-10-08'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-17'),
                'pedeja_remonta_datums' => date('2021-08-17'),
                'razosanas_datums' => date('1999-10-08'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-06'),
                'pedeja_remonta_datums' => date('2021-08-06'),
                'razosanas_datums' => date('1999-11-17'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '9',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-24'),
                'pedeja_remonta_datums' => date('2021-08-24'),
                'razosanas_datums' => date('2000-03-17'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 5,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-07'),
                'pedeja_remonta_datums' => date('2021-08-07'),
                'razosanas_datums' => date('2000-03-26'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-27'),
                'pedeja_remonta_datums' => date('2021-09-27'),
                'razosanas_datums' => date('2000-04-04'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-13'),
                'pedeja_remonta_datums' => date('2021-07-13'),
                'razosanas_datums' => date('2000-04-05'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-23'),
                'pedeja_remonta_datums' => date('2021-07-23'),
                'razosanas_datums' => date('2000-05-10'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-29'),
                'pedeja_remonta_datums' => date('2021-11-29'),
                'razosanas_datums' => date('2000-08-14'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-23'),
                'pedeja_remonta_datums' => date('2021-11-23'),
                'razosanas_datums' => date('2000-08-15'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => '3',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-17'),
                'pedeja_remonta_datums' => date('2021-10-17'),
                'razosanas_datums' => date('2000-09-04'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-01'),
                'pedeja_remonta_datums' => date('2021-10-01'),
                'razosanas_datums' => date('2000-09-16'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-05'),
                'pedeja_remonta_datums' => date('2021-11-05'),
                'razosanas_datums' => date('2000-09-19'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-21'),
                'pedeja_remonta_datums' => date('2021-08-21'),
                'razosanas_datums' => date('2001-01-20'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 6,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-04'),
                'pedeja_remonta_datums' => date('2021-10-04'),
                'razosanas_datums' => date('2001-02-06'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-07'),
                'pedeja_remonta_datums' => date('2021-07-07'),
                'razosanas_datums' => date('2001-02-18'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-25'),
                'pedeja_remonta_datums' => date('2021-07-25'),
                'razosanas_datums' => date('2001-03-07'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-14'),
                'pedeja_remonta_datums' => date('2021-07-14'),
                'razosanas_datums' => date('2001-03-20'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-23'),
                'pedeja_remonta_datums' => date('2021-09-23'),
                'razosanas_datums' => date('2001-05-30'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-12'),
                'pedeja_remonta_datums' => date('2021-10-12'),
                'razosanas_datums' => date('2001-06-08'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-22'),
                'pedeja_remonta_datums' => date('2021-09-22'),
                'razosanas_datums' => date('2001-06-08'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-24'),
                'pedeja_remonta_datums' => date('2021-07-24'),
                'razosanas_datums' => date('2001-07-02'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-30'),
                'pedeja_remonta_datums' => date('2021-11-30'),
                'razosanas_datums' => date('2001-07-25'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-29'),
                'pedeja_remonta_datums' => date('2021-10-29'),
                'razosanas_datums' => date('2001-08-04'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-04'),
                'pedeja_remonta_datums' => date('2021-08-04'),
                'razosanas_datums' => date('2001-08-04'),
                'razotajs' => 'Bombardier',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-25'),
                'pedeja_remonta_datums' => date('2021-10-25'),
                'razosanas_datums' => date('2008-04-08'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 7,
                'marsruta_id' => '10',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-23'),
                'pedeja_remonta_datums' => date('2021-11-23'),
                'razosanas_datums' => date('2008-04-30'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 7,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-10'),
                'pedeja_remonta_datums' => date('2021-07-10'),
                'razosanas_datums' => date('2008-05-28'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 7,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-02'),
                'pedeja_remonta_datums' => date('2021-09-02'),
                'razosanas_datums' => date('2008-06-02'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 7,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-05'),
                'pedeja_remonta_datums' => date('2021-11-05'),
                'razosanas_datums' => date('2008-06-25'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-07'),
                'pedeja_remonta_datums' => date('2021-07-07'),
                'razosanas_datums' => date('2008-07-09'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-08'),
                'pedeja_remonta_datums' => date('2021-07-08'),
                'razosanas_datums' => date('2008-09-02'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-22'),
                'pedeja_remonta_datums' => date('2021-09-22'),
                'razosanas_datums' => date('2008-09-04'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-20'),
                'pedeja_remonta_datums' => date('2021-10-20'),
                'razosanas_datums' => date('2008-09-04'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-25'),
                'pedeja_remonta_datums' => date('2021-09-25'),
                'razosanas_datums' => date('2008-11-01'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-11'),
                'pedeja_remonta_datums' => date('2021-10-11'),
                'razosanas_datums' => date('2009-01-15'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-08'),
                'pedeja_remonta_datums' => date('2021-09-08'),
                'razosanas_datums' => date('2009-04-15'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-29'),
                'pedeja_remonta_datums' => date('2021-10-29'),
                'razosanas_datums' => date('2009-05-04'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-03'),
                'pedeja_remonta_datums' => date('2021-10-03'),
                'razosanas_datums' => date('2009-05-11'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 8,
                'marsruta_id' => '4',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-03'),
                'pedeja_remonta_datums' => date('2021-10-03'),
                'razosanas_datums' => date('2009-05-20'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-20'),
                'pedeja_remonta_datums' => date('2021-11-20'),
                'razosanas_datums' => date('2009-07-17'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-24'),
                'pedeja_remonta_datums' => date('2021-09-24'),
                'razosanas_datums' => date('2009-07-19'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-25'),
                'pedeja_remonta_datums' => date('2021-09-25'),
                'razosanas_datums' => date('2009-08-04'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-03'),
                'pedeja_remonta_datums' => date('2021-10-03'),
                'razosanas_datums' => date('2009-08-17'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-31'),
                'pedeja_remonta_datums' => date('2021-11-30'),
                'razosanas_datums' => date('2009-09-14'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '11',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-18'),
                'pedeja_remonta_datums' => date('2021-09-18'),
                'razosanas_datums' => date('2009-10-04'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '11',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-23'),
                'pedeja_remonta_datums' => date('2021-11-23'),
                'razosanas_datums' => date('2009-10-09'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '11',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-15'),
                'pedeja_remonta_datums' => date('2021-11-15'),
                'razosanas_datums' => date('2010-01-01'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '11',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-15'),
                'pedeja_remonta_datums' => date('2021-07-15'),
                'razosanas_datums' => date('2010-01-24'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-04'),
                'pedeja_remonta_datums' => date('2021-11-04'),
                'razosanas_datums' => date('2010-06-11'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-05'),
                'pedeja_remonta_datums' => date('2021-09-05'),
                'razosanas_datums' => date('2010-08-04'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-01'),
                'pedeja_remonta_datums' => date('2021-07-01'),
                'razosanas_datums' => date('2010-09-27'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-01'),
                'pedeja_remonta_datums' => date('2021-09-01'),
                'razosanas_datums' => date('2010-10-14'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-09'),
                'pedeja_remonta_datums' => date('2021-07-09'),
                'razosanas_datums' => date('2010-11-12'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 9,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-01'),
                'pedeja_remonta_datums' => date('2021-11-01'),
                'razosanas_datums' => date('2011-03-01'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 10,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-14'),
                'pedeja_remonta_datums' => date('2021-09-14'),
                'razosanas_datums' => date('2011-03-02'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 10,
                'marsruta_id' => '5',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-07'),
                'pedeja_remonta_datums' => date('2021-10-07'),
                'razosanas_datums' => date('2011-03-11'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 10,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-04'),
                'pedeja_remonta_datums' => date('2021-09-04'),
                'razosanas_datums' => date('2011-03-20'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 10,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-02'),
                'pedeja_remonta_datums' => date('2021-10-02'),
                'razosanas_datums' => date('2011-04-12'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 10,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-07'),
                'pedeja_remonta_datums' => date('2021-09-07'),
                'razosanas_datums' => date('2011-04-27'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 10,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-03'),
                'pedeja_remonta_datums' => date('2021-08-03'),
                'razosanas_datums' => date('2011-06-11'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-28'),
                'pedeja_remonta_datums' => date('2021-09-28'),
                'razosanas_datums' => date('2011-08-11'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-07'),
                'pedeja_remonta_datums' => date('2021-09-07'),
                'razosanas_datums' => date('2011-10-23'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-16'),
                'pedeja_remonta_datums' => date('2021-10-16'),
                'razosanas_datums' => date('2011-10-29'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '12',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-23'),
                'pedeja_remonta_datums' => date('2021-07-23'),
                'razosanas_datums' => date('2011-11-09'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '12',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-23'),
                'pedeja_remonta_datums' => date('2021-10-23'),
                'razosanas_datums' => date('2011-12-03'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '12',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-25'),
                'pedeja_remonta_datums' => date('2021-10-25'),
                'razosanas_datums' => date('2011-12-13'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '12',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-04'),
                'pedeja_remonta_datums' => date('2021-07-04'),
                'razosanas_datums' => date('2012-02-22'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-13'),
                'pedeja_remonta_datums' => date('2021-11-13'),
                'razosanas_datums' => date('2012-02-29'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-13'),
                'pedeja_remonta_datums' => date('2021-10-13'),
                'razosanas_datums' => date('2012-05-05'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-08'),
                'pedeja_remonta_datums' => date('2021-08-08'),
                'razosanas_datums' => date('2012-10-15'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-26'),
                'pedeja_remonta_datums' => date('2021-11-26'),
                'razosanas_datums' => date('2012-11-22'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-05'),
                'pedeja_remonta_datums' => date('2021-09-05'),
                'razosanas_datums' => date('2012-12-24'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-05-24'),
                'pedeja_remonta_datums' => date('2021-11-24'),
                'razosanas_datums' => date('2013-03-06'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-02-13'),
                'pedeja_remonta_datums' => date('2021-08-13'),
                'razosanas_datums' => date('2013-03-29'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 11,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-29'),
                'pedeja_remonta_datums' => date('2021-09-29'),
                'razosanas_datums' => date('2013-05-11'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 12,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-31'),
                'pedeja_remonta_datums' => date('2021-07-31'),
                'razosanas_datums' => date('2013-05-23'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 12,
                'marsruta_id' => NULL,
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-28'),
                'pedeja_remonta_datums' => date('2021-07-28'),
                'razosanas_datums' => date('2013-05-30'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 12,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-01-10'),
                'pedeja_remonta_datums' => date('2021-07-10'),
                'razosanas_datums' => date('2013-08-07'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 12,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-04-22'),
                'pedeja_remonta_datums' => date('2021-10-22'),
                'razosanas_datums' => date('2013-08-15'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 12,
                'marsruta_id' => '6',
            ),

            array(
                'tehniskas_parbaudes_termins' => date('2022-03-09'),
                'pedeja_remonta_datums' => date('2021-09-09'),
                'razosanas_datums' => date('2013-09-11'),
                'razotajs' => 'Stadler Rail',
                'depo_nr' => 12,
                'marsruta_id' => '6',
            ),

        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    }
}
