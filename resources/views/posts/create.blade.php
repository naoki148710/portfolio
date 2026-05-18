<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規作成') }}
        </h2>
    </x-slot>

    <form action="/posts" method="POST">
        @csrf
        <div class="title">
            <label for="exampleFormControlInput1" class="form-label">タイトル</label>
            <input type="text" name="post[title]" value="{{ old('post.title') }}" />
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        <div class="subject">
            <label for="exampleFormControlInput2" class="form-label">教科名</label>
            <input type="text" name="post[subject]" value="{{ old('post.subject') }}" />
            <p class="subject__error" style="color:red">{{ $errors->first('post.subject') }}</p>
        </div>
        <div class="comment">
            <label for="exampleFormControlTextarea1" class="form-label">指導内容</label>
            <textarea class="form-control" name="post[comment]" value="{{ old('post.comment') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
            <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
        </div>
        <div class="addcomment">
            <label for="exampleFormControlTextarea2" class="form-label">備考</label>
            <textarea class="form-control" name="post[addcomment]" value="{{ old('post.addcomment') }}" id="exampleFormControlTextarea2" rows="3"></textarea>
            <p class="addcomment__error" style="color:red">{{ $errors->first('post.addcomment') }}</p>
        </div>
        <div class="score">
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
</x-app-layout>