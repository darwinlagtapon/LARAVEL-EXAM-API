<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {      $contacts = [
            [
                'name' => 'Test 1',
                'email' => 'Test@test.com',
                'phone' => '123456789',
                'country' => 'PH',
                'city' => 'Manila',
                'region' => 'MM',
                'postal' => '6100',
                'deleted_at' => null
            ],
            [
                'name' => 'Test 2',
                'email' => 'Test2@test.com',
                'phone' => '234567891',
                'country' => 'PH',
                'city' => 'Manila',
                'region' => 'MM',
                'postal' => '6200',
                'deleted_at' => null
            ]
        
        ];

        DB::table('contacts')->insert($contacts);   
    }
}
