<?php

use Illuminate\Database\Seeder;

class DarbiniekiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('darbinieki')->truncate();

        DB::table('darbinieki')->insert(array(
            array(
                'pk' => '131179-48128',
                'vards' => 'Parsla',
                'otrais_vards' => 'Ausma',
                'uzvards' => 'Abele',
                'adrese' => 46,
                'talrunis' => '+37124936757',
                'epasts' => 'parsla.abele@gmail.com',
            ),

            array(
                'pk' => '889336-45964',
                'vards' => 'Valdis',
                'otrais_vards' => 'Ainis',
                'uzvards' => 'Abelis',
                'adrese' => 47,
                'talrunis' => '+37127393705',
                'epasts' => 'valdis.abelis@gmail.com',
            ),

            array(
                'pk' => '650471-20990',
                'vards' => 'Raida',
                'otrais_vards' => 'Maira',
                'uzvards' => 'Alksne',
                'adrese' => 48,
                'talrunis' => '+37125513532',
                'epasts' => 'raida.alksne@gmail.com',
            ),

            array(
                'pk' => '888806-58936',
                'vards' => 'Markuss',
                'otrais_vards' => NULL,
                'uzvards' => 'Alksnis',
                'adrese' => 49,
                'talrunis' => '+37121438044',
                'epasts' => 'markuss.alksnis@gmail.com',
            ),

            array(
                'pk' => '906585-21816',
                'vards' => 'Rasma',
                'otrais_vards' => NULL,
                'uzvards' => 'Avotina',
                'adrese' => 50,
                'talrunis' => '+37121094183',
                'epasts' => 'rasma.avotina@gmail.com',
            ),

            array(
                'pk' => '501902-44509',
                'vards' => 'Varis',
                'otrais_vards' => 'Klavs',
                'uzvards' => 'Avotins',
                'adrese' => 51,
                'talrunis' => '+37125126569',
                'epasts' => 'varis.avotins@gmail.com',
            ),

            array(
                'pk' => '305984-67639',
                'vards' => 'Joginta',
                'otrais_vards' => NULL,
                'uzvards' => 'Balode',
                'adrese' => 52,
                'talrunis' => '+37129108063',
                'epasts' => 'joginta.balode@gmail.com',
            ),

            array(
                'pk' => '370285-46685',
                'vards' => 'Perse',
                'otrais_vards' => 'Ilze',
                'uzvards' => 'Balode',
                'adrese' => 53,
                'talrunis' => '+37122835772',
                'epasts' => 'perse.balode@gmail.com',
            ),

            array(
                'pk' => '129147-77688',
                'vards' => 'Centis',
                'otrais_vards' => NULL,
                'uzvards' => 'Bergs',
                'adrese' => 54,
                'talrunis' => '+37123213583',
                'epasts' => 'centis.bergs@gmail.com',
            ),

            array(
                'pk' => '597297-22680',
                'vards' => 'Davis',
                'otrais_vards' => NULL,
                'uzvards' => 'Bergs',
                'adrese' => 55,
                'talrunis' => '+37123758273',
                'epasts' => 'davis.bergs@gmail.com',
            ),

            array(
                'pk' => '376603-72178',
                'vards' => 'Veldze',
                'otrais_vards' => 'Eisvalda',
                'uzvards' => 'Berzina',
                'adrese' => 56,
                'talrunis' => '+37124241920',
                'epasts' => 'veldze.berzina@gmail.com',
            ),

            array(
                'pk' => '796757-84420',
                'vards' => 'Dzelda',
                'otrais_vards' => NULL,
                'uzvards' => 'Bluma',
                'adrese' => 57,
                'talrunis' => '+37128590742',
                'epasts' => 'dzelda.bluma@gmail.com',
            ),

            array(
                'pk' => '596797-26449',
                'vards' => 'Armins',
                'otrais_vards' => NULL,
                'uzvards' => 'Blums',
                'adrese' => 58,
                'talrunis' => '+37121104202',
                'epasts' => 'armins.blums@gmail.com',
            ),

            array(
                'pk' => '928574-17853',
                'vards' => 'Budris',
                'otrais_vards' => NULL,
                'uzvards' => 'Blums',
                'adrese' => 59,
                'talrunis' => '+37129545022',
                'epasts' => 'budris.blums@gmail.com',
            ),

            array(
                'pk' => '225166-84440',
                'vards' => 'Rosmis',
                'otrais_vards' => NULL,
                'uzvards' => 'Briedis',
                'adrese' => 60,
                'talrunis' => '+37129100510',
                'epasts' => 'rosmis.briedis@gmail.com',
            ),

            array(
                'pk' => '270416-77290',
                'vards' => 'Arturs',
                'otrais_vards' => NULL,
                'uzvards' => 'Cirulis',
                'adrese' => 61,
                'talrunis' => '+37121059038',
                'epasts' => 'arturs.cirulis@gmail.com',
            ),

            array(
                'pk' => '801088-43601',
                'vards' => 'Agra',
                'otrais_vards' => NULL,
                'uzvards' => 'Dzene',
                'adrese' => 62,
                'talrunis' => '+37124278179',
                'epasts' => 'agra.dzene@gmail.com',
            ),

            array(
                'pk' => '964823-69625',
                'vards' => 'Andris',
                'otrais_vards' => 'Vairis',
                'uzvards' => 'Dzenis',
                'adrese' => 63,
                'talrunis' => '+37127625335',
                'epasts' => 'andris.dzenis@gmail.com',
            ),

            array(
                'pk' => '639916-78163',
                'vards' => 'Valts',
                'otrais_vards' => NULL,
                'uzvards' => 'Dzenis',
                'adrese' => 64,
                'talrunis' => '+37123168356',
                'epasts' => 'valts.dzenis@gmail.com',
            ),

            array(
                'pk' => '736022-48554',
                'vards' => 'Astra',
                'otrais_vards' => 'Agne',
                'uzvards' => 'Dzintare',
                'adrese' => 65,
                'talrunis' => '+37122068842',
                'epasts' => 'astra.dzintare@gmail.com',
            ),

            array(
                'pk' => '746403-21359',
                'vards' => 'Gaida',
                'otrais_vards' => NULL,
                'uzvards' => 'Dzintare',
                'adrese' => 66,
                'talrunis' => '+37123666175',
                'epasts' => 'gaida.dzintare@gmail.com',
            ),

            array(
                'pk' => '538677-27315',
                'vards' => 'Asnis',
                'otrais_vards' => NULL,
                'uzvards' => 'Dzintars',
                'adrese' => 67,
                'talrunis' => '+37127533249',
                'epasts' => 'asnis.dzintars@gmail.com',
            ),

            array(
                'pk' => '637021-27437',
                'vards' => 'Zintis',
                'otrais_vards' => NULL,
                'uzvards' => 'Dzintars',
                'adrese' => 68,
                'talrunis' => '+37126459922',
                'epasts' => 'zintis.dzintars@gmail.com',
            ),

            array(
                'pk' => '267853-86324',
                'vards' => 'Armins',
                'otrais_vards' => NULL,
                'uzvards' => 'Dzintars',
                'adrese' => 69,
                'talrunis' => '+37122975173',
                'epasts' => 'armins.dzintars@gmail.com',
            ),

            array(
                'pk' => '786278-62027',
                'vards' => 'Talavs',
                'otrais_vards' => NULL,
                'uzvards' => 'Dzintars',
                'adrese' => 70,
                'talrunis' => '+37123529048',
                'epasts' => 'talavs.dzintars@gmail.com',
            ),

            array(
                'pk' => '693955-86333',
                'vards' => 'Valdemars',
                'otrais_vards' => NULL,
                'uzvards' => 'Egle',
                'adrese' => 71,
                'talrunis' => '+37126291740',
                'epasts' => 'valdemars.egle@gmail.com',
            ),

            array(
                'pk' => '945155-81847',
                'vards' => 'Ardis',
                'otrais_vards' => NULL,
                'uzvards' => 'Egle',
                'adrese' => 72,
                'talrunis' => '+37124127882',
                'epasts' => 'ardis.egle@gmail.com',
            ),

            array(
                'pk' => '904779-74373',
                'vards' => 'Davis',
                'otrais_vards' => NULL,
                'uzvards' => 'Egle',
                'adrese' => 73,
                'talrunis' => '+37127408745',
                'epasts' => 'davis.egle@gmail.com',
            ),

            array(
                'pk' => '225919-60643',
                'vards' => 'Gundega',
                'otrais_vards' => NULL,
                'uzvards' => 'Gaile',
                'adrese' => 74,
                'talrunis' => '+37124005714',
                'epasts' => 'gundega.gaile@gmail.com',
            ),

            array(
                'pk' => '993622-96899',
                'vards' => 'Dzilna',
                'otrais_vards' => 'Ilma',
                'uzvards' => 'Gaile',
                'adrese' => 75,
                'talrunis' => '+37126973764',
                'epasts' => 'dzilna.gaile@gmail.com',
            ),

            array(
                'pk' => '749536-38384',
                'vards' => 'Maiga',
                'otrais_vards' => NULL,
                'uzvards' => 'Gailite',
                'adrese' => 76,
                'talrunis' => '+37129837070',
                'epasts' => 'maiga.gailite@gmail.com',
            ),

            array(
                'pk' => '963532-27340',
                'vards' => 'Roze',
                'otrais_vards' => NULL,
                'uzvards' => 'Gailite',
                'adrese' => 77,
                'talrunis' => '+37125395223',
                'epasts' => 'roze.gailite@gmail.com',
            ),

            array(
                'pk' => '228897-51768',
                'vards' => 'Eisvalda',
                'otrais_vards' => 'Audra',
                'uzvards' => 'Gailite',
                'adrese' => 78,
                'talrunis' => '+37128180120',
                'epasts' => 'eisvalda.gailite@gmail.com',
            ),

            array(
                'pk' => '782620-41149',
                'vards' => 'Ritma',
                'otrais_vards' => 'Vesma',
                'uzvards' => 'Gailite',
                'adrese' => 79,
                'talrunis' => '+37127656794',
                'epasts' => 'ritma.gailite@gmail.com',
            ),

            array(
                'pk' => '451950-37989',
                'vards' => 'Aina',
                'otrais_vards' => 'Gundega',
                'uzvards' => 'Grinberga',
                'adrese' => 80,
                'talrunis' => '+37126590584',
                'epasts' => 'aina.grinberga@gmail.com',
            ),

            array(
                'pk' => '870519-39831',
                'vards' => 'Muidra',
                'otrais_vards' => 'Dzelda',
                'uzvards' => 'Grinberga',
                'adrese' => 81,
                'talrunis' => '+37126023723',
                'epasts' => 'muidra.grinberga@gmail.com',
            ),

            array(
                'pk' => '906757-21833',
                'vards' => 'Dairis',
                'otrais_vards' => NULL,
                'uzvards' => 'Grinbergs',
                'adrese' => 82,
                'talrunis' => '+37124266010',
                'epasts' => 'dairis.grinbergs@gmail.com',
            ),

            array(
                'pk' => '578364-65560',
                'vards' => 'Laimdota',
                'otrais_vards' => NULL,
                'uzvards' => 'Gulbe',
                'adrese' => 83,
                'talrunis' => '+37129097946',
                'epasts' => 'laimdota.gulbe@gmail.com',
            ),

            array(
                'pk' => '538500-90187',
                'vards' => 'Zeltite',
                'otrais_vards' => NULL,
                'uzvards' => 'Gulbe',
                'adrese' => 84,
                'talrunis' => '+37124843901',
                'epasts' => 'zeltite.gulbe@gmail.com',
            ),

            array(
                'pk' => '648714-21565',
                'vards' => 'Arvids',
                'otrais_vards' => NULL,
                'uzvards' => 'Gulbis',
                'adrese' => 85,
                'talrunis' => '+37125287863',
                'epasts' => 'arvids.gulbis@gmail.com',
            ),

            array(
                'pk' => '913173-73615',
                'vards' => 'Dainis',
                'otrais_vards' => NULL,
                'uzvards' => 'Gulbis',
                'adrese' => 86,
                'talrunis' => '+37125055731',
                'epasts' => 'dainis.gulbis@gmail.com',
            ),

            array(
                'pk' => '397813-78069',
                'vards' => 'Dairis',
                'otrais_vards' => NULL,
                'uzvards' => 'Gulbis',
                'adrese' => 87,
                'talrunis' => '+37123601779',
                'epasts' => 'dairis.gulbis@gmail.com',
            ),

            array(
                'pk' => '913186-69226',
                'vards' => 'Arija',
                'otrais_vards' => NULL,
                'uzvards' => 'Ivanova',
                'adrese' => 88,
                'talrunis' => '+37129518051',
                'epasts' => 'arija.ivanova@gmail.com',
            ),

            array(
                'pk' => '355234-14098',
                'vards' => 'Gundega',
                'otrais_vards' => 'Usma',
                'uzvards' => 'Jansone',
                'adrese' => 89,
                'talrunis' => '+37124653140',
                'epasts' => 'gundega.jansone@gmail.com',
            ),

            array(
                'pk' => '724648-17351',
                'vards' => 'Zinta',
                'otrais_vards' => NULL,
                'uzvards' => 'Jansone',
                'adrese' => 90,
                'talrunis' => '+37124681889',
                'epasts' => 'zinta.jansone@gmail.com',
            ),

            array(
                'pk' => '835813-61530',
                'vards' => 'Rudite',
                'otrais_vards' => 'Teiksma',
                'uzvards' => 'Karklina',
                'adrese' => 91,
                'talrunis' => '+37125801479',
                'epasts' => 'rudite.karklina@gmail.com',
            ),

            array(
                'pk' => '918740-46338',
                'vards' => 'Vairis',
                'otrais_vards' => 'Vairis',
                'uzvards' => 'Karklins',
                'adrese' => 92,
                'talrunis' => '+37121491798',
                'epasts' => 'vairis.karklins@gmail.com',
            ),

            array(
                'pk' => '550394-72646',
                'vards' => 'Ausma',
                'otrais_vards' => 'Velga',
                'uzvards' => 'Kirse',
                'adrese' => 93,
                'talrunis' => '+37128014780',
                'epasts' => 'ausma.kirse@gmail.com',
            ),

            array(
                'pk' => '802994-49284',
                'vards' => 'Klavs',
                'otrais_vards' => 'Talavs',
                'uzvards' => 'Kirsis',
                'adrese' => 94,
                'talrunis' => '+37122099746',
                'epasts' => 'klavs.kirsis@gmail.com',
            ),

            array(
                'pk' => '683241-92143',
                'vards' => 'Andris',
                'otrais_vards' => NULL,
                'uzvards' => 'Kirsis',
                'adrese' => 95,
                'talrunis' => '+37124181021',
                'epasts' => 'andris.kirsis@gmail.com',
            ),

            array(
                'pk' => '156036-47240',
                'vards' => 'Vilnis',
                'otrais_vards' => NULL,
                'uzvards' => 'Kirsis',
                'adrese' => 96,
                'talrunis' => '+37126730958',
                'epasts' => 'vilnis.kirsis@gmail.com',
            ),

            array(
                'pk' => '280970-94955',
                'vards' => 'Barbala',
                'otrais_vards' => 'Liga',
                'uzvards' => 'Klavina',
                'adrese' => 97,
                'talrunis' => '+37125201447',
                'epasts' => 'barbala.klavina@gmail.com',
            ),

            array(
                'pk' => '192660-12758',
                'vards' => 'Vizma',
                'otrais_vards' => 'Selga',
                'uzvards' => 'Klavina',
                'adrese' => 98,
                'talrunis' => '+37125907073',
                'epasts' => 'vizma.klavina@gmail.com',
            ),

            array(
                'pk' => '301201-52630',
                'vards' => 'Joginta',
                'otrais_vards' => 'Zinta',
                'uzvards' => 'Klavina',
                'adrese' => 99,
                'talrunis' => '+37127791653',
                'epasts' => 'joginta.klavina@gmail.com',
            ),

            array(
                'pk' => '524466-27384',
                'vards' => 'Arvaldis',
                'otrais_vards' => NULL,
                'uzvards' => 'Klavins',
                'adrese' => 100,
                'talrunis' => '+37128095928',
                'epasts' => 'arvaldis.klavins@gmail.com',
            ),

            array(
                'pk' => '726309-40757',
                'vards' => 'Alvids',
                'otrais_vards' => NULL,
                'uzvards' => 'Krauja',
                'adrese' => 101,
                'talrunis' => '+37128946267',
                'epasts' => 'alvids.krauja@gmail.com',
            ),

            array(
                'pk' => '593312-40461',
                'vards' => 'Maija',
                'otrais_vards' => 'Ritma',
                'uzvards' => 'Krauja',
                'adrese' => 102,
                'talrunis' => '+37125532447',
                'epasts' => 'maija.krauja@gmail.com',
            ),

            array(
                'pk' => '759268-64931',
                'vards' => 'Selga',
                'otrais_vards' => 'Meldra',
                'uzvards' => 'Kronberga',
                'adrese' => 103,
                'talrunis' => '+37126372324',
                'epasts' => 'selga.kronberga@gmail.com',
            ),

            array(
                'pk' => '895878-52937',
                'vards' => 'Ainis',
                'otrais_vards' => NULL,
                'uzvards' => 'Kronbergs',
                'adrese' => 104,
                'talrunis' => '+37127285400',
                'epasts' => 'ainis.kronbergs@gmail.com',
            ),

            array(
                'pk' => '189293-34110',
                'vards' => 'Centis',
                'otrais_vards' => NULL,
                'uzvards' => 'Kronbergs',
                'adrese' => 105,
                'talrunis' => '+37121138924',
                'epasts' => 'centis.kronbergs@gmail.com',
            ),

            array(
                'pk' => '352995-81037',
                'vards' => 'Kalvis',
                'otrais_vards' => NULL,
                'uzvards' => 'Kronbergs',
                'adrese' => 106,
                'talrunis' => '+37124508238',
                'epasts' => 'kalvis.kronbergs@gmail.com',
            ),

            array(
                'pk' => '316637-54068',
                'vards' => 'Veldze',
                'otrais_vards' => NULL,
                'uzvards' => 'Krumina',
                'adrese' => 107,
                'talrunis' => '+37127472537',
                'epasts' => 'veldze.krumina@gmail.com',
            ),

            array(
                'pk' => '535133-87654',
                'vards' => 'Ausma',
                'otrais_vards' => NULL,
                'uzvards' => 'Krumina',
                'adrese' => 108,
                'talrunis' => '+37124820697',
                'epasts' => 'ausma.krumina@gmail.com',
            ),

            array(
                'pk' => '307019-74684',
                'vards' => 'Arija',
                'otrais_vards' => NULL,
                'uzvards' => 'Krumina',
                'adrese' => 109,
                'talrunis' => '+37128048293',
                'epasts' => 'arija.krumina@gmail.com',
            ),

            array(
                'pk' => '299572-62074',
                'vards' => 'Andris',
                'otrais_vards' => NULL,
                'uzvards' => 'Krumins',
                'adrese' => 110,
                'talrunis' => '+37127935996',
                'epasts' => 'andris.krumins@gmail.com',
            ),

            array(
                'pk' => '608606-29054',
                'vards' => 'Visvaris',
                'otrais_vards' => NULL,
                'uzvards' => 'Krumins',
                'adrese' => 111,
                'talrunis' => '+37129602419',
                'epasts' => 'visvaris.krumins@gmail.com',
            ),

            array(
                'pk' => '301639-51263',
                'vards' => 'Dzintis',
                'otrais_vards' => 'Virsis',
                'uzvards' => 'Krumins',
                'adrese' => 112,
                'talrunis' => '+37122923247',
                'epasts' => 'dzintis.krumins@gmail.com',
            ),

            array(
                'pk' => '843188-61964',
                'vards' => 'Gundega',
                'otrais_vards' => NULL,
                'uzvards' => 'Lace',
                'adrese' => 113,
                'talrunis' => '+37126787671',
                'epasts' => 'gundega.lace@gmail.com',
            ),

            array(
                'pk' => '710348-85310',
                'vards' => 'Teiksma',
                'otrais_vards' => NULL,
                'uzvards' => 'Lace',
                'adrese' => 114,
                'talrunis' => '+37125290114',
                'epasts' => 'teiksma.lace@gmail.com',
            ),

            array(
                'pk' => '119207-57895',
                'vards' => 'Zaiga',
                'otrais_vards' => 'Maiga',
                'uzvards' => 'Lace',
                'adrese' => 115,
                'talrunis' => '+37123365663',
                'epasts' => 'zaiga.lace@gmail.com',
            ),

            array(
                'pk' => '594355-66401',
                'vards' => 'Ilze',
                'otrais_vards' => 'Muidra',
                'uzvards' => 'Lace',
                'adrese' => 116,
                'talrunis' => '+37127898610',
                'epasts' => 'ilze.lace@gmail.com',
            ),

            array(
                'pk' => '219914-19046',
                'vards' => 'Gints',
                'otrais_vards' => NULL,
                'uzvards' => 'Lacis',
                'adrese' => 117,
                'talrunis' => '+37125004060',
                'epasts' => 'gints.lacis@gmail.com',
            ),

            array(
                'pk' => '520195-65080',
                'vards' => 'Guntis',
                'otrais_vards' => NULL,
                'uzvards' => 'Lacis',
                'adrese' => 118,
                'talrunis' => '+37122391425',
                'epasts' => 'guntis.lacis@gmail.com',
            ),

            array(
                'pk' => '831607-85090',
                'vards' => 'Astra',
                'otrais_vards' => 'Roze',
                'uzvards' => 'Lagzdina',
                'adrese' => 119,
                'talrunis' => '+37124209375',
                'epasts' => 'astra.lagzdina@gmail.com',
            ),

            array(
                'pk' => '214819-22874',
                'vards' => 'Ilga',
                'otrais_vards' => NULL,
                'uzvards' => 'Lagzdina',
                'adrese' => 120,
                'talrunis' => '+37126106197',
                'epasts' => 'ilga.lagzdina@gmail.com',
            ),

            array(
                'pk' => '741344-90806',
                'vards' => 'Lauma',
                'otrais_vards' => NULL,
                'uzvards' => 'Lagzdina',
                'adrese' => 121,
                'talrunis' => '+37122659177',
                'epasts' => 'lauma.lagzdina@gmail.com',
            ),

            array(
                'pk' => '622033-88636',
                'vards' => 'Rusma',
                'otrais_vards' => NULL,
                'uzvards' => 'Lagzdina',
                'adrese' => 122,
                'talrunis' => '+37122129684',
                'epasts' => 'rusma.lagzdina@gmail.com',
            ),

            array(
                'pk' => '890382-97748',
                'vards' => 'Ilgonis',
                'otrais_vards' => 'Guntis',
                'uzvards' => 'Lagzdins',
                'adrese' => 123,
                'talrunis' => '+37123032550',
                'epasts' => 'ilgonis.lagzdins@gmail.com',
            ),

            array(
                'pk' => '549303-10632',
                'vards' => 'Ilma',
                'otrais_vards' => NULL,
                'uzvards' => 'Lazdina',
                'adrese' => 124,
                'talrunis' => '+37122187063',
                'epasts' => 'ilma.lazdina@gmail.com',
            ),

            array(
                'pk' => '252678-72726',
                'vards' => 'Ardis',
                'otrais_vards' => NULL,
                'uzvards' => 'Liepa',
                'adrese' => 125,
                'talrunis' => '+37124148716',
                'epasts' => 'ardis.liepa@gmail.com',
            ),

            array(
                'pk' => '454997-88377',
                'vards' => 'Arvids',
                'otrais_vards' => 'Talavs',
                'uzvards' => 'Liepa',
                'adrese' => 126,
                'talrunis' => '+37122624020',
                'epasts' => 'arvids.liepa@gmail.com',
            ),

            array(
                'pk' => '385290-27920',
                'vards' => 'Ardis',
                'otrais_vards' => NULL,
                'uzvards' => 'Liepa',
                'adrese' => 127,
                'talrunis' => '+37122363322',
                'epasts' => 'ardis.liepa@gmail.com',
            ),

            array(
                'pk' => '741987-21472',
                'vards' => 'Antra',
                'otrais_vards' => 'Parsla',
                'uzvards' => 'Liepa',
                'adrese' => 128,
                'talrunis' => '+37124625805',
                'epasts' => 'antra.liepa@gmail.com',
            ),

            array(
                'pk' => '422908-60863',
                'vards' => 'Audra',
                'otrais_vards' => NULL,
                'uzvards' => 'Liepa',
                'adrese' => 129,
                'talrunis' => '+37124767679',
                'epasts' => 'audra.liepa@gmail.com',
            ),

            array(
                'pk' => '785262-45515',
                'vards' => 'Laisma',
                'otrais_vards' => NULL,
                'uzvards' => 'Liepina',
                'adrese' => 130,
                'talrunis' => '+37124948337',
                'epasts' => 'laisma.liepina@gmail.com',
            ),

            array(
                'pk' => '663231-11893',
                'vards' => 'Dainis',
                'otrais_vards' => 'Raitis',
                'uzvards' => 'Liepins',
                'adrese' => 131,
                'talrunis' => '+37129982859',
                'epasts' => 'dainis.liepins@gmail.com',
            ),

            array(
                'pk' => '749377-70216',
                'vards' => 'Gaidis',
                'otrais_vards' => 'Arturs',
                'uzvards' => 'Liepins',
                'adrese' => 132,
                'talrunis' => '+37126674075',
                'epasts' => 'gaidis.liepins@gmail.com',
            ),

            array(
                'pk' => '727534-61621',
                'vards' => 'Aldona',
                'otrais_vards' => 'Rimante',
                'uzvards' => 'Luse',
                'adrese' => 133,
                'talrunis' => '+37124306863',
                'epasts' => 'aldona.luse@gmail.com',
            ),

            array(
                'pk' => '854576-65794',
                'vards' => 'Laimute',
                'otrais_vards' => NULL,
                'uzvards' => 'Luse',
                'adrese' => 134,
                'talrunis' => '+37127021519',
                'epasts' => 'laimute.luse@gmail.com',
            ),

            array(
                'pk' => '166502-14960',
                'vards' => 'Ranta',
                'otrais_vards' => NULL,
                'uzvards' => 'Luse',
                'adrese' => 135,
                'talrunis' => '+37123585329',
                'epasts' => 'ranta.luse@gmail.com',
            ),

            array(
                'pk' => '167326-86494',
                'vards' => 'Asnis',
                'otrais_vards' => NULL,
                'uzvards' => 'Lusis',
                'adrese' => 136,
                'talrunis' => '+37123311722',
                'epasts' => 'asnis.lusis@gmail.com',
            ),

            array(
                'pk' => '684956-59168',
                'vards' => 'Jusma',
                'otrais_vards' => 'Dagne',
                'uzvards' => 'Medne',
                'adrese' => 137,
                'talrunis' => '+37128167240',
                'epasts' => 'jusma.medne@gmail.com',
            ),

            array(
                'pk' => '715137-45771',
                'vards' => 'Guntra',
                'otrais_vards' => 'Liga',
                'uzvards' => 'Medne',
                'adrese' => 138,
                'talrunis' => '+37129518030',
                'epasts' => 'guntra.medne@gmail.com',
            ),

            array(
                'pk' => '515109-83744',
                'vards' => 'Gaidis',
                'otrais_vards' => NULL,
                'uzvards' => 'Mednis',
                'adrese' => 139,
                'talrunis' => '+37124301370',
                'epasts' => 'gaidis.mednis@gmail.com',
            ),

            array(
                'pk' => '351151-72900',
                'vards' => 'Alvids',
                'otrais_vards' => NULL,
                'uzvards' => 'Mednis',
                'adrese' => 140,
                'talrunis' => '+37127196021',
                'epasts' => 'alvids.mednis@gmail.com',
            ),

            array(
                'pk' => '989043-40524',
                'vards' => 'Talis',
                'otrais_vards' => NULL,
                'uzvards' => 'Mednis',
                'adrese' => 141,
                'talrunis' => '+37123348696',
                'epasts' => 'talis.mednis@gmail.com',
            ),

            array(
                'pk' => '297874-26331',
                'vards' => 'Raita',
                'otrais_vards' => NULL,
                'uzvards' => 'Millere',
                'adrese' => 142,
                'talrunis' => '+37124133483',
                'epasts' => 'raita.millere@gmail.com',
            ),

            array(
                'pk' => '761317-95867',
                'vards' => 'Ardis',
                'otrais_vards' => NULL,
                'uzvards' => 'Millers',
                'adrese' => 143,
                'talrunis' => '+37127738646',
                'epasts' => 'ardis.millers@gmail.com',
            ),

            array(
                'pk' => '808227-29956',
                'vards' => 'Valts',
                'otrais_vards' => 'Armins',
                'uzvards' => 'Millers',
                'adrese' => 144,
                'talrunis' => '+37121429792',
                'epasts' => 'valts.millers@gmail.com',
            ),

            array(
                'pk' => '888713-97814',
                'vards' => 'Ilgonis',
                'otrais_vards' => 'Atals',
                'uzvards' => 'Millers',
                'adrese' => 145,
                'talrunis' => '+37125743692',
                'epasts' => 'ilgonis.millers@gmail.com',
            ),

            array(
                'pk' => '569630-27099',
                'vards' => 'Kalvis',
                'otrais_vards' => NULL,
                'uzvards' => 'Millers',
                'adrese' => 146,
                'talrunis' => '+37121050866',
                'epasts' => 'kalvis.millers@gmail.com',
            ),

            array(
                'pk' => '224726-16492',
                'vards' => 'Liega',
                'otrais_vards' => NULL,
                'uzvards' => 'Ose',
                'adrese' => 147,
                'talrunis' => '+37121064460',
                'epasts' => 'liega.ose@gmail.com',
            ),

            array(
                'pk' => '374102-18081',
                'vards' => 'Anda',
                'otrais_vards' => NULL,
                'uzvards' => 'Ose',
                'adrese' => 148,
                'talrunis' => '+37123600711',
                'epasts' => 'anda.ose@gmail.com',
            ),

            array(
                'pk' => '116204-28722',
                'vards' => 'Muidra',
                'otrais_vards' => NULL,
                'uzvards' => 'Ose',
                'adrese' => 149,
                'talrunis' => '+37126317727',
                'epasts' => 'muidra.ose@gmail.com',
            ),

            array(
                'pk' => '123865-31641',
                'vards' => 'Audra',
                'otrais_vards' => 'Rota',
                'uzvards' => 'Ose',
                'adrese' => 150,
                'talrunis' => '+37125681078',
                'epasts' => 'audra.ose@gmail.com',
            ),

            array(
                'pk' => '610811-33123',
                'vards' => 'Astra',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozola',
                'adrese' => 151,
                'talrunis' => '+37123776202',
                'epasts' => 'astra.ozola@gmail.com',
            ),

            array(
                'pk' => '466712-59657',
                'vards' => 'Muidra',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozola',
                'adrese' => 152,
                'talrunis' => '+37128684161',
                'epasts' => 'muidra.ozola@gmail.com',
            ),

            array(
                'pk' => '179345-64681',
                'vards' => 'Laisma',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozolina',
                'adrese' => 153,
                'talrunis' => '+37123843792',
                'epasts' => 'laisma.ozolina@gmail.com',
            ),

            array(
                'pk' => '584502-96154',
                'vards' => 'Gunta',
                'otrais_vards' => 'Vizbule',
                'uzvards' => 'Ozolina',
                'adrese' => 154,
                'talrunis' => '+37125471666',
                'epasts' => 'gunta.ozolina@gmail.com',
            ),

            array(
                'pk' => '672874-98586',
                'vards' => 'Raita',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozolina',
                'adrese' => 155,
                'talrunis' => '+37125967045',
                'epasts' => 'raita.ozolina@gmail.com',
            ),

            array(
                'pk' => '913850-21282',
                'vards' => 'Sarta',
                'otrais_vards' => 'Dzelda',
                'uzvards' => 'Ozolina',
                'adrese' => 156,
                'talrunis' => '+37127559852',
                'epasts' => 'sarta.ozolina@gmail.com',
            ),

            array(
                'pk' => '267217-12462',
                'vards' => 'Klavs',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozolins',
                'adrese' => 157,
                'talrunis' => '+37124995806',
                'epasts' => 'klavs.ozolins@gmail.com',
            ),

            array(
                'pk' => '695542-77179',
                'vards' => 'Rimants',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozolins',
                'adrese' => 158,
                'talrunis' => '+37121171519',
                'epasts' => 'rimants.ozolins@gmail.com',
            ),

            array(
                'pk' => '841902-92969',
                'vards' => 'Daumants',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozols',
                'adrese' => 159,
                'talrunis' => '+37127589338',
                'epasts' => 'daumants.ozols@gmail.com',
            ),

            array(
                'pk' => '239743-25119',
                'vards' => 'Talis',
                'otrais_vards' => 'Visvaris',
                'uzvards' => 'Ozols',
                'adrese' => 160,
                'talrunis' => '+37129816131',
                'epasts' => 'talis.ozols@gmail.com',
            ),

            array(
                'pk' => '440547-33316',
                'vards' => 'Didzis',
                'otrais_vards' => NULL,
                'uzvards' => 'Ozols',
                'adrese' => 161,
                'talrunis' => '+37124692963',
                'epasts' => 'didzis.ozols@gmail.com',
            ),

            array(
                'pk' => '258742-24152',
                'vards' => 'Centis',
                'otrais_vards' => NULL,
                'uzvards' => 'Paeglis',
                'adrese' => 162,
                'talrunis' => '+37129029587',
                'epasts' => 'centis.paeglis@gmail.com',
            ),

            array(
                'pk' => '327197-60789',
                'vards' => 'Arvaldis',
                'otrais_vards' => NULL,
                'uzvards' => 'Priede',
                'adrese' => 163,
                'talrunis' => '+37125507518',
                'epasts' => 'arvaldis.priede@gmail.com',
            ),

            array(
                'pk' => '646316-49530',
                'vards' => 'Dairis',
                'otrais_vards' => NULL,
                'uzvards' => 'Priede',
                'adrese' => 164,
                'talrunis' => '+37124702250',
                'epasts' => 'dairis.priede@gmail.com',
            ),

            array(
                'pk' => '481729-98262',
                'vards' => 'Dagne',
                'otrais_vards' => NULL,
                'uzvards' => 'Priede',
                'adrese' => 165,
                'talrunis' => '+37122791593',
                'epasts' => 'dagne.priede@gmail.com',
            ),

            array(
                'pk' => '101683-80419',
                'vards' => 'Parsla',
                'otrais_vards' => 'Modra',
                'uzvards' => 'Priede',
                'adrese' => 166,
                'talrunis' => '+37123412813',
                'epasts' => 'parsla.priede@gmail.com',
            ),

            array(
                'pk' => '622928-28555',
                'vards' => 'Meldra',
                'otrais_vards' => 'Gundega',
                'uzvards' => 'Priede',
                'adrese' => 167,
                'talrunis' => '+37126424289',
                'epasts' => 'meldra.priede@gmail.com',
            ),

            array(
                'pk' => '315308-12716',
                'vards' => 'Raida',
                'otrais_vards' => NULL,
                'uzvards' => 'Priedite',
                'adrese' => 168,
                'talrunis' => '+37124994185',
                'epasts' => 'raida.priedite@gmail.com',
            ),

            array(
                'pk' => '327299-35498',
                'vards' => 'Arvids',
                'otrais_vards' => NULL,
                'uzvards' => 'Prieditis',
                'adrese' => 169,
                'talrunis' => '+37126791862',
                'epasts' => 'arvids.prieditis@gmail.com',
            ),

            array(
                'pk' => '201685-35287',
                'vards' => 'Talavs',
                'otrais_vards' => NULL,
                'uzvards' => 'Putnins',
                'adrese' => 170,
                'talrunis' => '+37123545620',
                'epasts' => 'talavs.putnins@gmail.com',
            ),

            array(
                'pk' => '267546-95758',
                'vards' => 'Gunvaldis',
                'otrais_vards' => NULL,
                'uzvards' => 'Putnins',
                'adrese' => 171,
                'talrunis' => '+37123323562',
                'epasts' => 'gunvaldis.putnins@gmail.com',
            ),

            array(
                'pk' => '590648-82591',
                'vards' => 'Astra',
                'otrais_vards' => 'Dzelda',
                'uzvards' => 'Rozenberga',
                'adrese' => 172,
                'talrunis' => '+37126964424',
                'epasts' => 'astra.rozenberga@gmail.com',
            ),

            array(
                'pk' => '725149-15474',
                'vards' => 'Antra',
                'otrais_vards' => NULL,
                'uzvards' => 'Rubene',
                'adrese' => 173,
                'talrunis' => '+37129498492',
                'epasts' => 'antra.rubene@gmail.com',
            ),

            array(
                'pk' => '726018-86703',
                'vards' => 'Vesma',
                'otrais_vards' => NULL,
                'uzvards' => 'Smita',
                'adrese' => 174,
                'talrunis' => '+37125794935',
                'epasts' => 'vesma.smita@gmail.com',
            ),

            array(
                'pk' => '584630-54869',
                'vards' => 'Gaida',
                'otrais_vards' => 'Aldona',
                'uzvards' => 'Smita',
                'adrese' => 175,
                'talrunis' => '+37123962924',
                'epasts' => 'gaida.smita@gmail.com',
            ),

            array(
                'pk' => '640434-95614',
                'vards' => 'Raimonds',
                'otrais_vards' => NULL,
                'uzvards' => 'Smits',
                'adrese' => 176,
                'talrunis' => '+37121985312',
                'epasts' => 'raimonds.smits@gmail.com',
            ),

            array(
                'pk' => '831893-99441',
                'vards' => 'Armins',
                'otrais_vards' => 'Didzis',
                'uzvards' => 'Smits',
                'adrese' => 177,
                'talrunis' => '+37124436991',
                'epasts' => 'armins.smits@gmail.com',
            ),

            array(
                'pk' => '424101-51158',
                'vards' => 'Nora',
                'otrais_vards' => 'Dagne',
                'uzvards' => 'Sproge',
                'adrese' => 178,
                'talrunis' => '+37126682556',
                'epasts' => 'nora.sproge@gmail.com',
            ),

            array(
                'pk' => '340125-41604',
                'vards' => 'Rasma',
                'otrais_vards' => NULL,
                'uzvards' => 'Sproge',
                'adrese' => 179,
                'talrunis' => '+37122260644',
                'epasts' => 'rasma.sproge@gmail.com',
            ),

            array(
                'pk' => '810911-27195',
                'vards' => 'Valdis',
                'otrais_vards' => NULL,
                'uzvards' => 'Sprogis',
                'adrese' => 180,
                'talrunis' => '+37121313876',
                'epasts' => 'valdis.sprogis@gmail.com',
            ),

            array(
                'pk' => '206259-92252',
                'vards' => 'Dainis',
                'otrais_vards' => NULL,
                'uzvards' => 'Sprogis',
                'adrese' => 181,
                'talrunis' => '+37127432245',
                'epasts' => 'dainis.sprogis@gmail.com',
            ),

            array(
                'pk' => '822208-76800',
                'vards' => 'Valts',
                'otrais_vards' => NULL,
                'uzvards' => 'Sprogis',
                'adrese' => 182,
                'talrunis' => '+37122603924',
                'epasts' => 'valts.sprogis@gmail.com',
            ),

            array(
                'pk' => '262301-51126',
                'vards' => 'Rota',
                'otrais_vards' => 'Nora',
                'uzvards' => 'Steinberga',
                'adrese' => 183,
                'talrunis' => '+37127496295',
                'epasts' => 'rota.steinberga@gmail.com',
            ),

            array(
                'pk' => '228314-51167',
                'vards' => 'Ainis',
                'otrais_vards' => 'Talavs',
                'uzvards' => 'Steinbergs',
                'adrese' => 184,
                'talrunis' => '+37126259745',
                'epasts' => 'ainis.steinbergs@gmail.com',
            ),

            array(
                'pk' => '714488-21456',
                'vards' => 'Nora',
                'otrais_vards' => 'Perse',
                'uzvards' => 'Strautina',
                'adrese' => 185,
                'talrunis' => '+37128107482',
                'epasts' => 'nora.strautina@gmail.com',
            ),

            array(
                'pk' => '940838-23741',
                'vards' => 'Audra',
                'otrais_vards' => 'Astra',
                'uzvards' => 'Strautina',
                'adrese' => 186,
                'talrunis' => '+37127768914',
                'epasts' => 'audra.strautina@gmail.com',
            ),

            array(
                'pk' => '190636-75856',
                'vards' => 'Dzidra',
                'otrais_vards' => NULL,
                'uzvards' => 'Strautina',
                'adrese' => 187,
                'talrunis' => '+37121687996',
                'epasts' => 'dzidra.strautina@gmail.com',
            ),

            array(
                'pk' => '442197-93908',
                'vards' => 'Ardis',
                'otrais_vards' => NULL,
                'uzvards' => 'Strautins',
                'adrese' => 188,
                'talrunis' => '+37129010865',
                'epasts' => 'ardis.strautins@gmail.com',
            ),

            array(
                'pk' => '165304-95344',
                'vards' => 'Armins',
                'otrais_vards' => NULL,
                'uzvards' => 'Strautins',
                'adrese' => 189,
                'talrunis' => '+37122323135',
                'epasts' => 'armins.strautins@gmail.com',
            ),

            array(
                'pk' => '320565-50148',
                'vards' => 'Aldona',
                'otrais_vards' => NULL,
                'uzvards' => 'Strazda',
                'adrese' => 190,
                'talrunis' => '+37123328912',
                'epasts' => 'aldona.strazda@gmail.com',
            ),

            array(
                'pk' => '131243-26521',
                'vards' => 'Dzelda',
                'otrais_vards' => NULL,
                'uzvards' => 'Strazda',
                'adrese' => 191,
                'talrunis' => '+37129505201',
                'epasts' => 'dzelda.strazda@gmail.com',
            ),

            array(
                'pk' => '153129-68597',
                'vards' => 'Ilgonis',
                'otrais_vards' => 'Armins',
                'uzvards' => 'Strazds',
                'adrese' => 192,
                'talrunis' => '+37129933605',
                'epasts' => 'ilgonis.strazds@gmail.com',
            ),

            array(
                'pk' => '618671-59100',
                'vards' => 'Ulvis',
                'otrais_vards' => NULL,
                'uzvards' => 'Strazds',
                'adrese' => 193,
                'talrunis' => '+37125819571',
                'epasts' => 'ulvis.strazds@gmail.com',
            ),

            array(
                'pk' => '372457-84452',
                'vards' => 'Ausma',
                'otrais_vards' => NULL,
                'uzvards' => 'Stroda',
                'adrese' => 194,
                'talrunis' => '+37125563741',
                'epasts' => 'ausma.stroda@gmail.com',
            ),

            array(
                'pk' => '318950-27161',
                'vards' => 'Aina',
                'otrais_vards' => NULL,
                'uzvards' => 'Stroda',
                'adrese' => 195,
                'talrunis' => '+37129266058',
                'epasts' => 'aina.stroda@gmail.com',
            ),

            array(
                'pk' => '344165-58348',
                'vards' => 'Vesma',
                'otrais_vards' => 'Gaida',
                'uzvards' => 'Stroda',
                'adrese' => 196,
                'talrunis' => '+37125583380',
                'epasts' => 'vesma.stroda@gmail.com',
            ),

            array(
                'pk' => '441520-40434',
                'vards' => 'Gunvaldis',
                'otrais_vards' => NULL,
                'uzvards' => 'Strods',
                'adrese' => 197,
                'talrunis' => '+37129216344',
                'epasts' => 'gunvaldis.strods@gmail.com',
            ),

            array(
                'pk' => '850573-31535',
                'vards' => 'Dainis',
                'otrais_vards' => NULL,
                'uzvards' => 'Strods',
                'adrese' => 198,
                'talrunis' => '+37126390755',
                'epasts' => 'dainis.strods@gmail.com',
            ),

            array(
                'pk' => '306615-90047',
                'vards' => 'Valdis',
                'otrais_vards' => NULL,
                'uzvards' => 'Strods',
                'adrese' => 199,
                'talrunis' => '+37121636513',
                'epasts' => 'valdis.strods@gmail.com',
            ),

            array(
                'pk' => '228468-24111',
                'vards' => 'Dzidra',
                'otrais_vards' => NULL,
                'uzvards' => 'Vanaga',
                'adrese' => 200,
                'talrunis' => '+37129971986',
                'epasts' => 'dzidra.vanaga@gmail.com',
            ),

            array(
                'pk' => '972323-81499',
                'vards' => 'Centis',
                'otrais_vards' => 'Visvaris',
                'uzvards' => 'Vanags',
                'adrese' => 201,
                'talrunis' => '+37126313443',
                'epasts' => 'centis.vanags@gmail.com',
            ),

            array(
                'pk' => '437312-35784',
                'vards' => 'Dzelda',
                'otrais_vards' => 'Auce',
                'uzvards' => 'Viksna',
                'adrese' => 202,
                'talrunis' => '+37123433202',
                'epasts' => 'dzelda.viksna@gmail.com',
            ),

            array(
                'pk' => '737437-20688',
                'vards' => 'Dagne',
                'otrais_vards' => 'Sarta',
                'uzvards' => 'Vilcane',
                'adrese' => 203,
                'talrunis' => '+37129998460',
                'epasts' => 'dagne.vilcane@gmail.com',
            ),

            array(
                'pk' => '422450-16719',
                'vards' => 'Liega',
                'otrais_vards' => 'Smuidra',
                'uzvards' => 'Vilcane',
                'adrese' => 204,
                'talrunis' => '+37121355883',
                'epasts' => 'liega.vilcane@gmail.com',
            ),

            array(
                'pk' => '485394-55074',
                'vards' => 'Arturs',
                'otrais_vards' => NULL,
                'uzvards' => 'Vilcans',
                'adrese' => 205,
                'talrunis' => '+37125352347',
                'epasts' => 'arturs.vilcans@gmail.com',
            ),

            array(
                'pk' => '200368-28498',
                'vards' => 'Asnis',
                'otrais_vards' => NULL,
                'uzvards' => 'Vilcins',
                'adrese' => 206,
                'talrunis' => '+37122666589',
                'epasts' => 'asnis.vilcins@gmail.com',
            ),

            array(
                'pk' => '576776-78262',
                'vards' => 'Dzelda',
                'otrais_vards' => NULL,
                'uzvards' => 'Vilka',
                'adrese' => 207,
                'talrunis' => '+37125133196',
                'epasts' => 'dzelda.vilka@gmail.com',
            ),

            array(
                'pk' => '556720-57996',
                'vards' => 'Gundega',
                'otrais_vards' => NULL,
                'uzvards' => 'Vilka',
                'adrese' => 208,
                'talrunis' => '+37126775860',
                'epasts' => 'gundega.vilka@gmail.com',
            ),

            array(
                'pk' => '571715-66227',
                'vards' => 'Modris',
                'otrais_vards' => NULL,
                'uzvards' => 'Vilks',
                'adrese' => 209,
                'talrunis' => '+37125506957',
                'epasts' => 'modris.vilks@gmail.com',
            ),

            array(
                'pk' => '894064-99571',
                'vards' => 'Arvaldis',
                'otrais_vards' => NULL,
                'uzvards' => 'Vilks',
                'adrese' => 210,
                'talrunis' => '+37123690755',
                'epasts' => 'arvaldis.vilks@gmail.com',
            ),

            array(
                'pk' => '355799-51571',
                'vards' => 'Eisvalda',
                'otrais_vards' => NULL,
                'uzvards' => 'Vitola',
                'adrese' => 211,
                'talrunis' => '+37127406661',
                'epasts' => 'eisvalda.vitola@gmail.com',
            ),

            array(
                'pk' => '831083-66655',
                'vards' => 'Andris',
                'otrais_vards' => NULL,
                'uzvards' => 'Vitolins',
                'adrese' => 212,
                'talrunis' => '+37128518574',
                'epasts' => 'andris.vitolins@gmail.com',
            ),

            array(
                'pk' => '959235-59148',
                'vards' => 'Virsis',
                'otrais_vards' => 'Ulvis',
                'uzvards' => 'Vitols',
                'adrese' => 213,
                'talrunis' => '+37121720466',
                'epasts' => 'virsis.vitols@gmail.com',
            ),

            array(
                'pk' => '262244-51088',
                'vards' => 'Aris',
                'otrais_vards' => NULL,
                'uzvards' => 'Vitols',
                'adrese' => 214,
                'talrunis' => '+37126459095',
                'epasts' => 'aris.vitols@gmail.com',
            ),

            array(
                'pk' => '370585-71841',
                'vards' => 'Davis',
                'otrais_vards' => NULL,
                'uzvards' => 'Vitols',
                'adrese' => 215,
                'talrunis' => '+37125932568',
                'epasts' => 'davis.vitols@gmail.com',
            ),

            array(
                'pk' => '686152-29581',
                'vards' => 'Laisma',
                'otrais_vards' => NULL,
                'uzvards' => 'Zake',
                'adrese' => 216,
                'talrunis' => '+37124050010',
                'epasts' => 'laisma.zake@gmail.com',
            ),

            array(
                'pk' => '408650-28638',
                'vards' => 'Guntis',
                'otrais_vards' => NULL,
                'uzvards' => 'Zakis',
                'adrese' => 217,
                'talrunis' => '+37121281899',
                'epasts' => 'guntis.zakis@gmail.com',
            ),

            array(
                'pk' => '828976-62950',
                'vards' => 'Gints',
                'otrais_vards' => NULL,
                'uzvards' => 'Zakis',
                'adrese' => 218,
                'talrunis' => '+37124590134',
                'epasts' => 'gints.zakis@gmail.com',
            ),

            array(
                'pk' => '222222-28638',
                'vards' => 'Gatis',
                'otrais_vards' => NULL,
                'uzvards' => 'Vitols',
                'adrese' => 214,
                'talrunis' => '+37121233399',
                'epasts' => 'gatis.vitols@gmail.com',
            ),

        ));

        DB::table('darbinieki')
            ->where('id', 1)
            ->update(array('user_id' => 1));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


    }
}
