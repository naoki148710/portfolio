<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。

use App\Models\Post;
use App\Http\Requests\PostRequest; // useする

/**
 * Post一覧を表示する
 *
 * @param Post Postモデル
 * @return array Postモデルリスト
 */

class PostController extends Controller
{
    public function index(Post $post)
    {
        // with(['user', 'student'])は、Postモデルと関連するUserモデルとStudentモデルを同時取得。N+1問題を回避。
        $posts = Post::with(['user', 'student'])->get();

        // 変数$postsをビューに渡すための関数。ビュー内で$postsを使用可能。
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
