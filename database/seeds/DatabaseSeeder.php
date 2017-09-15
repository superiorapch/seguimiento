<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PrivilegioTableSeeder::class);
        $this->call(TipoUsuarioTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
    }
}
