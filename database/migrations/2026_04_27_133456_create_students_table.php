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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('password'); //生徒用パスワード
            $table->string('name'); //生徒名
            $table->string('email')->unique(); //メールアドレス、重複防止
            $table->timestamp('email_verified_at')->nullable(); //メールアドレスの確認日時、空OK
            $table->date('birthday')->nullable(); //誕生日、空OK
            $table->string('gender')->nullable(); //性別、空OK
            $table->string('grade')->nullable(); //学年、空OK
            $table->date('start_date')->nullable();   //入塾日、空OK
            $table->date('end_date')->nullable(); //退塾日、空OK
            $table->string('classes')->nullable(); //受講コマ数、空OK
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
