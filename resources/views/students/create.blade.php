<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規生徒登録') }}
        </h2>
    </x-slot>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">生徒名</label>
            <input type="text" name="student[name]" id="name" class="form-control" value="{{ old('student.name') }}">
            @error('student.name')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">生年月日</label>
            <input type="date" name="student[birthday]" id="birthday" class="form-control" value="{{ old('student.birthday') }}">
            @error('student.birthday')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="grade" class="form-label">学年</label>
            <select type="text" name="student[grade]" id="grade" class="form-control" value="{{ old('student.grade') }}">
                <option value="">選択してください</option>
                <option value="1" {{ old('student.grade') == '1' ? 'selected' : '' }}>小学1年生</option>
                <option value="2" {{ old('student.grade') == '2' ? 'selected' : '' }}>小学2年生</option>
                <option value="3" {{ old('student.grade') == '3' ? 'selected' : '' }}>小学3年生</option>
                <option value="4" {{ old('student.grade') == '4' ? 'selected' : '' }}>小学4年生</option>
                <option value="5" {{ old('student.grade') == '5' ? 'selected' : '' }}>小学5年生</option>
                <option value="6" {{ old('student.grade') == '6' ? 'selected' : '' }}>小学6年生</option>
                <option value="7" {{ old('student.grade') == '7' ? 'selected' : '' }}>中学1年生</option>
                <option value="8" {{ old('student.grade') == '8' ? 'selected' : '' }}>中学2年生</option>
                <option value="9" {{ old('student.grade') == '9' ? 'selected' : '' }}>中学3年生</option>
                <option value="10" {{ old('student.grade') == '10' ? 'selected' : '' }}>高校1年生</option>
                <option value="11" {{ old('student.grade') == '11' ? 'selected' : '' }}>高校2年生</option>
                <option value="12" {{ old('student.grade') == '12' ? 'selected' : '' }}>高校3年生</option>
            </select>
            @error('student.grade')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">入塾日</label>
            <input type="date" name="student[start_date]" id="start_date" class="form-control" value="{{ old('student.start_date') }}">
            @error('student.start_date')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">退塾日</label>
            <input type="date" name="student[end_date]" id="end_date" class="form-control" value="{{ old('student.end_date') }}">
            @error('student.end_date')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="classes" class="form-label">受講コマ数</label>
            <input type="text" name="student[classes]" id="classes" class="form-control" value="{{ old('student.classes') }}">
            @error('student.classes')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            登録
        </button>

        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            戻る
        </a>
    </form>
</x-app-layout>