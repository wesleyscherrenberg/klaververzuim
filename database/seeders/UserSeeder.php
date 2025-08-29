<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Maak drie bedrijven aan
        $company1 = Company::create([
            'name' => 'Bedrijf zonder gebruikers B.V.',
            'street' => 'Hoofdstraat',
            'street_number' => '1a',
            'postal_code' => '1234AB',
            'city' => 'Amsterdam',
            'phone' => '0612345678',
            'email' => 'info@mail.nl',
            'debtor_number' => 'DV0001',
        ]);

        $company2 = Company::create([
            'name' => 'Groei BV',
            'street' => 'Marktplein',
            'street_number' => '23',
            'postal_code' => '2345BC',
            'city' => 'Utrecht',
            'phone' => '0623456789',
            'email' => 'info@groeibv.nl',
            'debtor_number' => 'DV0002',
        ]);

        $company3 = Company::create([
            'name' => 'ZorgNV',
            'street' => 'Nieuwstraat',
            'street_number' => '5',
            'postal_code' => '3456CD',
            'city' => 'Rotterdam',
            'phone' => '0634567890',
            'email' => 'info@zorgnv.nl',
            'debtor_number' => 'DV0003',
        ]);

        $company4 = Company::create([
            'name' => 'TechnoVision BV',
            'street' => 'Elektronstraat',
            'street_number' => '45',
            'postal_code' => '1016AB',
            'city' => 'Eindhoven',
            'phone' => '0611111111',
            'email' => 'info@technovision.nl',
            'debtor_number' => 'DV0004',
        ]);

        $company5 = Company::create([
            'name' => 'Bouwbedrijf Dijkstra',
            'street' => 'Bouwlaan',
            'street_number' => '12',
            'postal_code' => '9876QQ',
            'city' => 'Leeuwarden',
            'phone' => '0622222222',
            'email' => 'info@dijksb.nl',
            'debtor_number' => 'DV0005',
        ]);

        $company6 = Company::create([
            'name' => 'Logistiek Partners',
            'street' => 'Havenweg',
            'street_number' => '78',
            'postal_code' => '4567TT',
            'city' => 'Breda',
            'phone' => '0633333333',
            'email' => 'info@logistiekpartners.nl',
            'debtor_number' => 'DV0006',
        ]);

        $company7 = Company::create([
            'name' => 'GreenFuture',
            'street' => 'Parklaan',
            'street_number' => '9',
            'postal_code' => '2022ZZ',
            'city' => 'Almere',
            'phone' => '0644444444',
            'email' => 'info@greenfuture.nl',
            'debtor_number' => 'DV0007',
        ]);

        $company8 = Company::create([
            'name' => 'MediCom',
            'street' => 'Kliniekstraat',
            'street_number' => '3',
            'postal_code' => '3333MM',
            'city' => 'Maastricht',
            'phone' => '0655555555',
            'email' => 'info@medicom.nl',
            'debtor_number' => 'DV0008',
        ]);

        $company9 = Company::create([
            'name' => 'TempoTech Solutions',
            'street' => 'Windmolenstraat',
            'street_number' => '11',
            'postal_code' => '2233KL',
            'city' => 'Delft',
            'phone' => '0662324587',
            'email' => 'info@tempotech.nl',
            'debtor_number' => 'DV0009',
        ]);

        $company10 = Company::create([
            'name' => 'Aquarius Waterwerken',
            'street' => 'Oeverlaan',
            'street_number' => '88',
            'postal_code' => '1453OP',
            'city' => 'Haarlem',
            'phone' => '0678456987',
            'email' => 'info@aquariusww.nl',
            'debtor_number' => 'DV0010',
        ]);

        $company11 = Company::create([
            'name' => 'FietsExpress',
            'street' => 'Prinsenstraat',
            'street_number' => '14',
            'postal_code' => '3078XS',
            'city' => 'Den Haag',
            'phone' => '0685123794',
            'email' => 'service@fiets-express.nl',
            'debtor_number' => 'DV0011',
        ]);

        $company12 = Company::create([
            'name' => 'MolenMakelaars',
            'street' => 'Jupiterlaan',
            'street_number' => '7',
            'postal_code' => '5200GH',
            'city' => 'Den Bosch',
            'phone' => '0698567431',
            'email' => 'info@molenmakelaars.nl',
            'debtor_number' => 'DV0012',
        ]);

        $company13 = Company::create([
            'name' => 'Van Leeuwen Advocaten',
            'street' => 'Raadhuishof',
            'street_number' => '23',
            'postal_code' => '4001AB',
            'city' => 'Tiel',
            'phone' => '0647859632',
            'email' => 'info@leeuwenadvocaten.nl',
            'debtor_number' => 'DV0013',
        ]);

        $company14 = Company::create([
            'name' => 'ProBike Utrecht',
            'street' => 'Betaplein',
            'street_number' => '2',
            'postal_code' => '3564KE',
            'city' => 'Utrecht',
            'phone' => '0612341234',
            'email' => 'info@probike-utrecht.nl',
            'debtor_number' => 'DV0014',
        ]);

        $company15 = Company::create([
            'name' => 'SolarWatt Energie',
            'street' => 'Zonneweg',
            'street_number' => '100',
            'postal_code' => '6548QW',
            'city' => 'Nijmegen',
            'phone' => '0688889999',
            'email' => 'info@solarwatt.nl',
            'debtor_number' => 'DV0015',
        ]);

        $company16 = Company::create([
            'name' => 'Druk & Print BV',
            'street' => 'Letterlaan',
            'street_number' => '56',
            'postal_code' => '8907VR',
            'city' => 'Groningen',
            'phone' => '0622225577',
            'email' => 'druk@drukprint.nl',
            'debtor_number' => 'DV0016',
        ]);

        $company17 = Company::create([
            'name' => 'FoodMasters',
            'street' => 'Kookplein',
            'street_number' => '8A',
            'postal_code' => '1171NB',
            'city' => 'Amstelveen',
            'phone' => '0677889988',
            'email' => 'info@foodmasters.nl',
            'debtor_number' => 'DV0017',
        ]);

        $company18 = Company::create([
            'name' => 'WebWonders',
            'street' => 'Internetstraat',
            'street_number' => '404',
            'postal_code' => '5611ZZ',
            'city' => 'Eindhoven',
            'phone' => '0699988776',
            'email' => 'info@webwonders.nl',
            'debtor_number' => 'DV0018',
        ]);



        // Gebruikers aanmaken met company_id
        User::create([
            'name' => 'Wesley Scherrenberg',
            'email' => 'wesleyscherrenberg@gmail.com',
            'password' => Hash::make('test'),
            'is_admin' => true,
            'is_super_admin' => true
        ]);

        User::create([
            'name' => 'Yasar Gozudok',
            'email' => 'info@klaververzuim.nl',
            'password' => Hash::make('Klaververzuim@2025'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Ingrid Groei',
            'email' => 'ingrid@groeibv.nl',
            'password' => Hash::make('geheim123'),
            'company_id' => $company2->id,
        ]);

        User::create([
            'name' => 'Sven van Zorg',
            'email' => 'sven@zorgnv.nl',
            'password' => Hash::make('zorg2025'),
            'company_id' => $company3->id,
        ]);

        User::create([
            'name' => 'Dirk Bakker',
            'email' => 'dirk@zorgnv.nl',
            'password' => Hash::make('zorg2025'),
            'company_id' => $company3->id,
        ]);

        User::create([
            'name' => 'Johan van Zorg',
            'email' => 'johan@zorgnv.nl',
            'password' => Hash::make('zorg2025'),
            'company_id' => $company3->id,
        ]);


    }
}
