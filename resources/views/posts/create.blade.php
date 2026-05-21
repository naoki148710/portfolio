<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規作成') }}
        </h2>
    </x-slot>

    <form action="/posts" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" name="post[title]" id="title" class="form-control" value="{{ old('post.title') }}" />
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">教科名</label>
            <select name="post[subject]" id="subject" class="form-select" value="{{ old('post.subject') }}">
                <option value="">選択してください</option>
                <option value="国語" {{ old('post.subject') == '国語' ? 'selected' : '' }}>国語</option>
                <option value="数学" {{ old('post.subject') == '数学' ? 'selected' : '' }}>数学</option>
                <option value="英語" {{ old('post.subject') == '英語' ? 'selected' : '' }}>英語</option>
                <option value="理科" {{ old('post.subject') == '理科' ? 'selected' : '' }}>理科</option>
                <option value="社会" {{ old('post.subject') == '社会' ? 'selected' : '' }}>社会</option>
            </select>
            <p class="subject__error" style="color:red">{{ $errors->first('post.subject') }}</p>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">指導内容</label>
            <textarea name="post[comment]" id="comment" rows="5" class="form-control">{{ old('post.comment') }}</textarea>
            <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
        </div>
        <div class="mb-3">
            <label for="addcomment" class="form-label">備考</label>
            <textarea name="post[addcomment]" id="addcomment" rows="5" class="form-control">{{ old('post.addcomment') }}</textarea>
            <p class="addcomment__error" style="color:red">{{ $errors->first('post.addcomment') }}</p>
        </div>
        <div class="mb-3">
            <label for="score" class="form-label">小テスト点数</label>
            <input type="number" name="post[score]" id="score" class="form-control" value="{{ old('post.score') }}" />
            <p class="score__error" style="color:red">{{ $errors->first('post.score') }}</p>
        </div>
        <div class="mb-3">
            <h2>講師ID</h2>
            <input type="text" name="post[users_id]" id="users_id" class="form-control" placeholder="講師ID" value="{{ old('post.users_id') }}" />
            <p class="users_id__error" style="color:red">{{ $errors->first('post.users_id') }}</p>
        </div>
        <div class="mb-3">
            <h2>生徒ID</h2>
            <input type="text" name="post[students_id]" id="students_id" class="form-control" placeholder="生徒ID" value="{{ old('post.students_id') }}" />
            <p class="students_id__error" style="color:red">{{ $errors->first('post.students_id') }}</p>
        </div>
        <input type="submit" class="btn btn-primary" value="保存">
    </form>
    <div class="back">[<a href="/">戻る</a>]</div>
</x-app-layout>