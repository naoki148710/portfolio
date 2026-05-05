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
    <div class='posts'>
        @foreach ($posts as $post)
        <div class='post'>
            <h2 class='student'>{{ $post->student_name }}</h2>
            <p class='user'>{{ $post->user_name }}</p>
            <p class='created_at'>{{ $post->created_at }}</p>
        </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
</body>

</html>