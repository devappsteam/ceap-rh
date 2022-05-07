<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(array(
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Acre',
                'initials'      => 'AC',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Alagoas',
                'initials'      => 'AL',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Amapá',
                'initials'      => 'AP',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Amazonas',
                'initials'      => 'AM',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Bahia',
                'initials'      => 'BA',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Ceará',
                'initials'      => 'CE',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Distrito Federal',
                'initials'      => 'DF',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Espírito Santo',
                'initials'      => 'ES',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Goiás',
                'initials'      => 'GO',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Maranhão',
                'initials'      => 'MA',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Mato Grosso',
                'initials'      => 'MT',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Mato Grosso do Sul',
                'initials'      => 'MS',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Minas Gerais',
                'initials'      => 'MG',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Pará',
                'initials'      => 'PA',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Paraíba',
                'initials'      => 'PB',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Paraná',
                'initials'      => 'PR',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Pernambuco',
                'initials'      => 'PE',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Piauí',
                'initials'      => 'PI',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Rio de Janeiro',
                'initials'      => 'RJ',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Rio Grande do Norte',
                'initials'      => 'RN',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Rio Grande do Sul',
                'initials'      => 'RS',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Rondônia',
                'initials'      => 'RO',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Roraima',
                'initials'      => 'RR',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Santa Catarina',
                'initials'      => 'SC',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'São Paulo',
                'initials'      => 'SP',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Sergipe',
                'initials'      => 'SE',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'uuid'          => Str::uuid(),
                'name'          => 'Tocantins',
                'initials'      => 'TO',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ));
    }
}
