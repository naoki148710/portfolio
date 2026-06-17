<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => '山田太郎',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('students')->insert([
            'name' => '佐藤花子',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
