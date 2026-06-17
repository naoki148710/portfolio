<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('生徒一覧') }}
        </h2>
    </x-slot>

    <a class="btn btn-primary" href="{{ route('students.create') }}" role="button">新規生徒登録</a>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <div class='students'>
        @foreach ($students as $student)
        <div class='student'>
            <h2 class='name'>
                <a href="{{ route('students.show', $student->id) }}">{{ $student->name }}</a>
            </h2>
        </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $students->links() }}
    </div>


</x-app-layout>