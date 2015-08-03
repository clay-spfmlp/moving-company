<?php

use Illuminate\Database\Seeder;

class CrewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crews')->insert([
            'name' => 'Crew 1',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('crews')->insert([
            'name' => 'Crew 2',
            'created_at' => date('Y-m_d'),
            'updated_at' => date('Y-m_d'),
        ]);
        DB::table('crews')->insert([
            'name' => 'Crew 3',
            'created_at' => date('Y-m_d'),
            'updated_at' => date('Y-m_d'),
        ]);
    }
}
