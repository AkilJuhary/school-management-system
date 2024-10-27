<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('test_connections')->insert([
            'test_field' => 'Test Data Entry',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
