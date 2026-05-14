<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-64UC4BEhTGwk3eGpak4nO2jqtl7liTS+juXkSJ2gPAQPmlClQO7s5UgCeR6US48g" crossorigin="anonymous">
</head>

<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__subject'>
                <h2>指導教科</h2>
                <input type='text' name='post[subject]' value="{{ $post->subject }}">
            </div>
            <div class='content__comment'>
                <h2>指導報告用コメント</h2>
                <input type='text' name='post[comment]' value="{{ $post->comment }}">
            </div>
            <div class='content__addcomment'>
                <h2>備考コメント</h2>
                <input type='text' name='post[addcomment]' value="{{ $post->addcomment }}">
            </div>
            <div class='content__score'>
                <h2>評価</h2>
                <input type='text' name='post[score]' value="{{ $post->score }}">
            </div>
            <div class='content__users_id'>
                <h2>講師ID</h2>
                <input type='text' name='post[users_id]' value="{{ $post->users_id }}">
            </div>
            <div class='content__students_id'>
                <h2>生徒ID</h2>
                <input type='text' name='post[students_id]' value="{{ $post->students_id }}">
            </div>
            <button type="button" class="btn btn-primary">保存</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-jdSIJTK9l6XwXj3RixpVDXtMcA2bFd9O81RlLAwhpr2oXRqvQP88rr16IeFXTgFE" crossorigin="anonymous"></script>
</body>

</html>