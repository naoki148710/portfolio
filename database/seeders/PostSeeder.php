<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => '報告書内容2026-05-01',
            'subject' => '数学',
            'comment' => '生徒は数学の基礎を理解しているが、応用問題に苦戦している。今後は応用問題に重点を置いて指導する予定。',
            'users_id' => 1, // 講師のID
            'students_id' => 1, // 生徒のID
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '報告書内容2026-05-02',
            'subject' => '英語',
            'comment' => '生徒は英語の基礎を理解しているが、スピーキングに苦戦している。今後はスピーキング練習に重点を置いて指導する予定。',
            'users_id' => 1, // 講師のID
            'students_id' => 2, // 生徒のID
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
