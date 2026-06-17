<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'gender',
        'grade',
        'classes',
    ];

    // この生徒宛てに書かれた投稿一覧を取得する
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
