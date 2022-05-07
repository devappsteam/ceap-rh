<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert(array(
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Alemão',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Argelino',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Awadhi',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Azerbaijão',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Bengali',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Bhojpuri',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Birmanês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Cantonês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Chinês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Coreano',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Egípcio',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Espanhol',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Farsi',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Francês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Gan',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Gujarati',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Hakka',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Hauçá',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Hindi',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Holandês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Inglês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Iorubá',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Italiano',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Japonês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Javanês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Jinyu',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Kannada',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Maitili',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Malaio',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Marati',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Min nan',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Oriya',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Panjabi',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Panjabi',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Polaco',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Português',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Romeno',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Russo',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Servo-croata',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Sindi',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Sunda',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Tailandês',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Tamil',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Telugo',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Turco',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Ucraniano',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Urdu',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Vietnamita',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
            array(
                'uuid'          => Str::uuid(),
                'name'          => 'Xiang',
                'created_at'    => now(),
                'updated_at'    => now()
            ),
        ));
    }
}
