<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //カラム追加
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('users_id')->constrained();
            //'users_id' は 'usersテーブル' の 'id' を参照する外部キーです
            $table->foreignId('students_id')->constrained();
            //'students_id' は 'studentsテーブル' の 'id' を参照する外部キーです
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //カラム削除
    {
        Schema::table('posts', function (Blueprint $table) {});
    }
};
