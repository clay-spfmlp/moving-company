<?php

use Illuminate\Database\Seeder;

class MoverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movers')->insert([
            'first_name' => 'Mover',
            'last_name' => 'One',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('movers')->insert([
            'first_name' => 'Mover',
            'last_name' => 'Two',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('movers')->insert([
            'first_name' => 'Mover',
            'last_name' => 'Three',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('movers')->insert([
            'first_name' => 'Mover',
            'last_name' => 'Four',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('movers')->insert([
            'first_name' => 'Mover',
            'last_name' => 'Five',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('movers')->insert([
            'first_name' => 'Mover',
            'last_name' => 'six',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
        DB::table('movers')->insert([
            'first_name' => 'Mover',
            'last_name' => 'Seven',
            'created_at' => date('Y-m_d H:i:s'),
            'updated_at' => date('Y-m_d H:i:s'),
        ]);
    }
}
