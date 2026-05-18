<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('詳細') }}
        </h2>
    </x-slot>

    <h1 class="title">
        {{ $post->title }}
    </h1>
    <div class="content">
        <div class="content__post">
            <p>{{ $post->subject }}</p>
            <p>{{ $post->comment }}</p>
            <p>{{ $post->addcomment }}</p>
            <p>{{ $post->score }}</p>
        </div>
    </div>
    <div class="edit"><a class="btn btn-primary" href="/posts/{{ $post->id }}/edit" role="button">編集</a></div>
    <div class="footer"><a class="btn btn-secondary" href="/" role="button">戻る</a></div>
</x-app-layout>