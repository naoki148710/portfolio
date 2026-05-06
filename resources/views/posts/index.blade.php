<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>報告書一覧</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>報告書一覧</h1>
    <a href='/posts/create'>create</a>
    <div class='posts'>
        @foreach ($posts as $post)
        <div class='post'>
            <h2 class='title'>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p class='subject'>{{ $post->subject }}</p>
            <p class='comment'>{{ $post->comment }}</p>
            <p class='users'>{{ $post->users_name }}</p>
            <p class='created_at'>{{ $post->created_at }}</p>
        </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
</body>

</html>