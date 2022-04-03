<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);

        \App\Models\Administrador::create([
            'ci' => "123456",
            'celular' => '12345678',
        ]);

        \App\Models\User::create([
            'name' => "juanpi",
            'email' => 'juanpi@gmail.com',
            'password' => Hash::make('123456789'),
            'cliente_id' => null,
            'empleado_id' => null,
            'administrador_id' => 1,
        ])->assignRole('administrador');

    }
}
