<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(TruckTableSeeder::class);
        $this->call(CrewTableSeeder::class);
        $this->call(MoverTableSeeder::class);

        //Model::reguard();
    }
}
