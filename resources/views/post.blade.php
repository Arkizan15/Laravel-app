<x-layout>

    <x-slot:title>{{$title}}</x-slot>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl track font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-based text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 2 July 2025
        </div>
            <p class="my-4 font-light">{{( $post['body'])}}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Back to Posts</a>
        
    </article>   
</x-layout>