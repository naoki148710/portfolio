<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('詳細') }}
        </h2>
    </x-slot>

    <h1 class="title">
        {{ $student->name }}
    </h1>
    <div class="content">
        <div class="content__post">
            <p>{{ $student->birthday }}</p>
            <p>{{ $student->grade }}</p>
            <p>{{ $student->start_date }}</p>
            <p>{{ $student->end_date }}</p>
            <p>{{ $student->classes }}</p>
        </div>
    </div>
    <div class="edit"><a class="btn btn-primary" href="/students/{{ $student->id }}/edit" role="button">編集</a></div>
    <div class="footer"><a class="btn btn-secondary" href="/students" role="button">戻る</a></div>
</x-app-layout>