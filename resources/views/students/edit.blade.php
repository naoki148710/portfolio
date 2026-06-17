<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('生徒情報編集') }}
        </h2>
    </x-slot>

    <div class="content">
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">生徒名</label>
                <input type="text" name="student[name]" id="name" class="form-control" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">生年月日</label>
                <input type="date" name="student[birthday]" id="birthday" class="form-control" value="{{ $student->birthday }}">
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">学年</label>
                <select name="student[grade]" id="grade" class="form-control">
                    <option value="">選択してください</option>
                    <option value="1" {{ $student->grade == '1' ? 'selected' : '' }}>小学1年生</option>
                    <option value="2" {{ $student->grade == '2' ? 'selected' : '' }}>小学2年生</option>
                    <option value="3" {{ $student->grade == '3' ? 'selected' : '' }}>小学3年生</option>
                    <option value="4" {{ $student->grade == '4' ? 'selected' : '' }}>小学4年生</option>
                    <option value="5" {{ $student->grade == '5' ? 'selected' : '' }}>小学5年生</option>
                    <option value="6" {{ $student->grade == '6' ? 'selected' : '' }}>小学6年生</option>
                    <option value="7" {{ $student->grade == '7' ? 'selected' : '' }}>中学1年生</option>
                    <option value="8" {{ $student->grade == '8' ? 'selected' : '' }}>中学2年生</option>
                    <option value="9" {{ $student->grade == '9' ? 'selected' : '' }}>中学3年生</option>
                    <option value="10" {{ $student->grade == '10' ? 'selected' : '' }}>高校1年生</option>
                    <option value="11" {{ $student->grade == '11' ? 'selected' : '' }}>高校2年生</option>
                    <option value="12" {{ $student->grade == '12' ? 'selected' : '' }}>高校3年生</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">入塾日</label>
                <input type="date" name="student[start_date]" id="start_date" class="form-control" value="{{ $student->start_date }}">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">卒塾日</label>
                <input type="date" name="student[end_date]" id="end_date" class="form-control" value="{{ $student->end_date }}">
            </div>
            <div class="mb-3">
                <label for="classes" class="form-label">受講コマ数</label>
                <input type="text" name="student[classes]" id="classes" class="form-control" value="{{ $student->classes }}">
            </div>
            <input type="submit" class="btn btn-primary" value="保存">
        </form>
    </div>
    <div class="footer"><a class="btn btn-secondary" href="/students/{{ $student->id }}" role="button">戻る</a></div>
</x-app-layout>