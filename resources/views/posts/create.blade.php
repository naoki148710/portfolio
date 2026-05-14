<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    <h1>報告書作成</h1>
    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <h2>タイトル</h2>
            <label for="exampleFormControlInput1" class="form-label">タイトル</label>
            <input type="text" name="post[title]" value="{{ old('post.title') }}" />
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        <div class="subject">
            <h2>教科名</h2>
            <label for="exampleFormControlInput2" class="form-label">教科名</label>
            <input type="text" name="post[subject]" value="{{ old('post.subject') }}" />
            <p class="subject__error" style="color:red">{{ $errors->first('post.subject') }}</p>
        </div>
        <div class="comment">
            <h2>指導内容</h2>
            <label for="exampleFormControlTextarea1" class="form-label">指導内容</label>
            <textarea class="form-control" name="post[comment]" value="{{ old('post.comment') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
            <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
        </div>
        <div class="addcomment">
            <h2>備考欄</h2>
            <label for="exampleFormControlTextarea2" class="form-label">備考</label>
            <textarea class="form-control" name="post[addcomment]" value="{{ old('post.addcomment') }}" id="exampleFormControlTextarea2" rows="3"></textarea>
            <p class="addcomment__error" style="color:red">{{ $errors->first('post.addcomment') }}</p>
        </div>
        <div class="score">
            <h2>小テスト点数</h2>
            <label for="exampleFormControlInput3" class="form-label">小テスト点数</label>
            <input type="text" name="post[score]" value="{{ old('post.score') }}" />
            <p class="score__error" style="color:red">{{ $errors->first('post.score') }}</p>
        </div>
        <div class="users_id">
            <h2>講師ID</h2>
            <input type="text" name="post[users_id]" placeholder="講師ID" value="{{ old('post.users_id') }}" />
            <p class="users_id__error" style="color:red">{{ $errors->first('post.users_id') }}</p>
        </div>
        <div class="students_id">
            <h2>生徒ID</h2>
            <input type="text" name="post[students_id]" placeholder="生徒ID" value="{{ old('post.students_id') }}" />
            <p class="students_id__error" style="color:red">{{ $errors->first('post.students_id') }}</p>
        </div>
        <input type="submit" value="保存" />
    </form>
    <div class="back">[<a href="/">back</a>]</div>
</body>

</html>