<?php

use Illuminate\Database\Seeder;
use App\Team;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * > composer dump-autoload
     * > php artisan db:seed --class=AdminSeeder
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            "name" => "BNCC",
            "type" => "admin",
            "password" => Hash::make("Abc123!!!")
        ]);
    }
}
