<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Juan',
                'address' => 'Ormoc',
                'phone' => '54636312112',
                'capitalization' => 80000,
                'loan' => 40000
            ],
            [
                'name' => 'Carlo',
                'address' => 'Bilar',
                'phone' => '092392848434',
                'capitalization' => 60000,
                'loan' => 300000
            ],
            [
                'name' => 'Pedro',
                'address' => 'Pilar',
                'phone' => '0987626324',
                'capitalization' => 90000,
                'loan' => 500000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
