<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //講師ID保存用
            $table->string('password'); //講師用パスワード
            $table->string('name'); //講師名
            $table->string('email')->unique(); //メールアドレス、重複防止
            $table->timestamp('email_verified_at')->nullable(); //メールアドレスの確認日時、空OK
            $table->date('birthday')->nullable(); //誕生日、空OK
            $table->string('gender')->nullable(); //性別、空OK
            $table->date('joined_date')->nullable();   //入社日、空OK
            $table->date('resigned_date')->nullable(); //退社日、空OK
            $table->rememberToken(); //ログイン状態保持トークン
            $table->timestamps(); //レコードの作成・更新日時
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
