<?php

use Illuminate\Database\Seeder;

class TruckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trucks')->insert([
            'name' => 'Truck 1',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('trucks')->insert([
            'name' => 'Truck 2',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('trucks')->insert([
            'name' => 'Truck 3',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
    }
}
