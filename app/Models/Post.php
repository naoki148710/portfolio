<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 投稿を作成した講師(User)を取得する
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 投稿の対象である生徒(Student)を取得する
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
