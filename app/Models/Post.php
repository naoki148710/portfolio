<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // タイトル、内容を保存するためのfillableプロパティ
    protected $fillable = [
        'title',
        'subject',
        'comment',
        'addcomment',
        'score',
        'users_id',
        'students_id',
    ];

    // 投稿を作成した講師(User)を取得する
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    // 投稿の対象である生徒(Student)を取得する
    public function student()
    {
        return $this->belongsTo(Student::class, 'students_id');
    }

    // updated_atで降順に並べたあと、limitで件数制限をかける
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
