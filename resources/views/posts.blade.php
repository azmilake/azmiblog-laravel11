<x-layout><x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article class="w-3/4 border-b-2 pb-4 mb-6">
            <a href="/posts/{{ $post['slug'] }}" class="hover:text-gray-500">
                <h3 class="text-3xl font-semibold">{{ $post['title'] }}</h3>
            </a>
            <div class="text-gray-500 text-sm py-2">
                <a href="#" class="hover:underline">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="text-base text-gray-800 mb-4">{{ Str::limit($post['body'], 150) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="text-gray-500 text-sm hover:underline">Read &raquo;</a>
        </article>
    @endforeach
</x-layout>
