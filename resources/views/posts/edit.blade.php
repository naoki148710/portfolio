<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('報告書編集') }}
        </h2>
    </x-slot>

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
            <input type="submit" class="btn btn-primary" value="保存">
        </form>
    </div>
    <div class="footer"><a class="btn btn-secondary" href="/posts/{{ $post->id }}" role="button">戻る</a></div>
</x-app-layout>