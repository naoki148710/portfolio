<?php

namespace App\Http\Controllers;

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。

use App\Models\Post;
use App\Http\Requests\PostRequest; // useする

class PostController extends Controller
{
    public function index(Post $post)
    {
        // with(['user', 'student'])は、Postモデルと関連するUserモデルとStudentモデルを同時取得。N+1問題を回避。
        $posts = Post::with(['user', 'student'])->get();

        // クライアントインスタンス生成
        $client = new \GuzzleHttp\Client(
            ['verify' => config('app.env') !== 'local'],
        );

        // GET通信するURL
        $url = 'https://teratail.com/api/v1/questions';

        // リクエスト送信と返却データの取得
        // Bearerトークンにアクセストークンを指定して認証を行う
        $response = $client->request(
            'GET',
            $url,
            ['Bearer' => config('services.teratail.token')]
        );

        // API通信で取得したデータはjson形式なので
        // PHPファイルに対応した連想配列にデコードする
        $questions = json_decode($response->getBody(), true);

        // index bladeに取得したデータを渡す
        return view('posts.index')->with([
            'posts' => $post->getPaginateByLimit(),
            'questions' => $questions['questions'],
        ]);
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

    public function scoreChart(Post $post)
    {
        $reports = Post::where('students_id', $post->students_id)->orderBy('created_at', 'asc')->get();
        $labels = $reports->map(function ($report) {
            return $report->created_at->format('Y/m/d');
        });
        $scores = $reports->map(function ($report) {
            return $report->score;
        });
        return view('posts.chart')->with(['post' => $post, 'labels' => $labels, 'scores' => $scores]);
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
