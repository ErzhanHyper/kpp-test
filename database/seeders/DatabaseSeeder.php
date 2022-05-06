<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'id' => 1,
                'name' => 'user1',
                'password' => '$2a$12$hJ0p6d3Zjvoabw1G0Xl60Ofcmu.l2.FNMDVQUBBJ9MtHvTqleA7qC',
                'email' => 'user1@lara.com',
            ),
            array(
                'id' => 2,
                'name' => 'user2',
                'password' => '$2a$12$hJ0p6d3Zjvoabw1G0Xl60Ofcmu.l2.FNMDVQUBBJ9MtHvTqleA7qC',
                'email' => 'user2@lara.com',
            ),
        ));


        DB::table('contacts')->insert(array(
            array(
                'name' => 'contact 1',
                'phone' => '+7756453465',
                'address' => 'address 1',
            ),

            array(
                'name' => 'contact 2',
                'phone' => '821453465',
                'address' => 'address 2',
            ),

            array(
                'name' => 'contact 3',
                'phone' => '+4456453465',
                'address' => 'address 3',
            ),

            array(
                'name' => 'contact 4',
                'phone' => '+44756453465',
                'address' => 'address 4',
            ),

            array(
                'name' => 'contact 5',
                'phone' => '+775113465',
                'address' => 'address 5',
            ),

            array(
                'name' => 'contact 6',
                'phone' => '+7756553465',
                'address' => 'address 6',
            ),

            array(
                'name' => 'contact 7',
                'phone' => '+77553465',
                'address' => 'address 7',
            ),

            array(
                'name' => 'contact 8',
                'phone' => '75645346',
                'address' => 'address 8',
            ),

            array(
                'name' => 'contact 9',
                'phone' => '756745346',
                'address' => 'address 9',
            ),

            array(
                'name' => 'contact 10',
                'phone' => '87756453465',
                'address' => 'address 10',
            ),

            array(
                'name' => 'contact 11',
                'phone' => '+775653465',
                'address' => 'address 11',
            ),

        ));
    }
}
