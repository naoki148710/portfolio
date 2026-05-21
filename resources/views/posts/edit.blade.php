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
            <div class="mb-3">
                <label for="title" class="form-label">タイトル</label>
                <input type="text" name="post[title]" id="title" class="form-control" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">指導教科</label>
                <select name="post[subject]" id="subject" class="form-select" value="{{ $post->subject }}">
                    <option value="">選択してください</option>
                    <option value="国語" {{ $post->subject == '国語' ? 'selected' : '' }}>国語</option>
                    <option value="数学" {{ $post->subject == '数学' ? 'selected' : '' }}>数学</option>
                    <option value="英語" {{ $post->subject == '英語' ? 'selected' : '' }}>英語</option>
                    <option value="理科" {{ $post->subject == '理科' ? 'selected' : '' }}>理科</option>
                    <option value="社会" {{ $post->subject == '社会' ? 'selected' : '' }}>社会</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">指導内容</label>
                <textarea name="post[comment]" id="comment" class="form-control">{{ $post->comment }}</textarea>
            </div>
            <div class="mb-3">
                <label for="addcomment" class="form-label">備考</label>
                <textarea name="post[addcomment]" id="addcomment" class="form-control">{{ $post->addcomment }}</textarea>
            </div>
            <div class="mb-3">
                <label for="score" class="form-label">評価</label>
                <input type="text" name="post[score]" id="score" class="form-control" value="{{ $post->score }}">
            </div>
            <div class="mb-3">
                <label for="users_id" class="form-label">講師ID</label>
                <input type="text" name="post[users_id]" id="users_id" class="form-control" value="{{ $post->users_id }}">
            </div>
            <div class="mb-3">
                <label for="students_id" class="form-label">生徒ID</label>
                <input type="text" name="post[students_id]" id="students_id" class="form-control" value="{{ $post->students_id }}">
            </div>
            <input type="submit" class="btn btn-primary" value="保存">
        </form>
    </div>
    <div class="footer"><a class="btn btn-secondary" href="/posts/{{ $post->id }}" role="button">戻る</a></div>
</x-app-layout>