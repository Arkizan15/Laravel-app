<x-layout>
    @foreach ($posts as $post )

    <x-slot:title>{{$title}}</x-slot>
    <article class="py-8 max-w-screen-md border-b border-gray-500">
        <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline" class="hover:underline">
        <h2 class="mb-1 text-3xl track font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a >
        <div class="text-based text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 2 July 2025
        </div>
            <p class="my-4 font-light">{{Str::limit( $post['body'], 80)}}</p>
            <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        
    </article>
    @endforeach
   
</x-layout>