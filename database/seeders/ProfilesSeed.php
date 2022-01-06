<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfilesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'id' => 1,
            'name' => 'Administrador',
            'description' => 'Pode tudo'
        ]);

        Profile::create([
            'id' => 2,
            'name' => 'Usuário',
            'description' => 'Não pode nada'
        ]);
    }
}
