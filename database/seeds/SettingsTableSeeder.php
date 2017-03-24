<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'key'           => 'admin_email',
            'name'          => 'Admin email for notifications',
            'description'   => 'Admin email for notifications',
            'value'         => 'alexey.yashenkov@gmail.com',
            'field'         => '{"name":"value","label":"Value","type":"email"}',
            'active'        => 1,
        ]);

        DB::table('settings')->insert([
            'key'           => 'contact_email',
            'name'          => 'Contact form main email',
            'description'   => 'Main contact email for notifications',
            'value'         => 'test@test.com',
            'field'         => '{"name":"value","label":"Value","type":"email"}',
            'active'        => 1,
        ]);

        DB::table('settings')->insert([
            'key'           => 'contact_cc',
            'name'          => 'Contact form CC email',
            'description'   => 'Email adresses separated by comma, to be included as CC in the email sent by the contact form.',
            'value'         => '',
            'field'         => '{"name":"value","label":"Value","type":"email"}',
            'active'        => 1,

        ]);

//        DB::table('settings')->insert([
//            'key'           => 'city',
//            'name'          => 'City',
//            'description'   => 'City of location',
//            'value'         => 'Moscow',
//            'field'         => '{"name":"value","label":"Value", "title":"Motto value" ,"type":"text"}',
//            'active'        => 1,
//        ]);
        DB::table('settings')->insert([
            'key'           => 'address',
            'name'          => 'Full Address',
            'description'   => 'Full Address of location (Citi, Street etc)',
            'value'         => '',
            'field'         => '{"name":"value","label":"Value", "title":"Address value" ,"type":"address", "store_as_json":"true"}',
            'active'        => 1,
        ]);
        DB::table('settings')->insert([
            'key'           => 'phone',
            'name'          => 'Website phone',
            'description'   => 'Website phone',
            'value'         => '+7(495)000-00-00',
            'field'         => '{"name":"value","label":"Value", "title":"Motto value" ,"type":"text"}',
            'active'        => 1,
        ]);

//        DB::table('settings')->insert([
//            'key'           => 'motto',
//            'name'          => 'Motto',
//            'description'   => 'Website motto',
//            'value'         => 'this is the value',
//            'field'         => '{"name":"value","label":"Value", "title":"Motto value" ,"type":"textarea"}',
//            'active'        => 1,
//        ]);
    }
}
