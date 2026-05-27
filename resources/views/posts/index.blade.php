<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('報告書一覧') }}
        </h2>
    </x-slot>

    <a class="btn btn-primary" href="/posts/create" role="button">新規作成</a>
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
            <a href="{{ route('students.scores', $post->students_id) }}" class="btn btn-outline-success btn-sm">
                点数推移
            </a>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">削除</button>
            </form>
        </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
    <div>
        @foreach($questions as $question)
        <div>
            <a href="https://teratail.com/questions/{{ $question['id'] }}">
                {{ $question['title'] }}
            </a>
        </div>
        @endforeach
    </div>
    <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    <div class="footer"><a class="btn btn-secondary" href="/dashboard" role="button">TOPに戻る</a></div>
</x-app-layout>