<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        @foreach ( $posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title']}}</h2>
            <div>
                <a href="#">{{ $post['author']}}</a>
            </div>
            <p class="my-4 font-light">{{ $post['body']}}</p>
                <a href="#" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
        @endforeach
</x-layout>