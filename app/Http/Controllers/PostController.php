<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。

use App\Models\Post;
use Illuminate\Http\Request;

/**
 * Post一覧を表示する
 *
 * @param Post Postモデル
 * @return array Postモデルリスト
 */

class PostController extends Controller
{
    public function index()
    {
        // with(['user', 'student'])は、Postモデルと関連するUserモデルとStudentモデルを同時取得。N+1問題を回避。
        $posts = Post::with(['user', 'student'])->get();

        // 変数$postsをビューに渡すための関数。ビュー内で$postsを使用可能。
        return view('posts.index')->with(['posts' => $posts->getPaginateByLimit()]);
    }
}
