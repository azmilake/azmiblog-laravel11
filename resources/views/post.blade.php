<x-layout><x-slot:title>{{ $title }}</x-slot:title>
    <article class="w-full mb-6">
        <h3 class="text-2xl font-medium">{{ $post['title'] }}</h3>
        <div class="text-gray-500 text-sm py-2">
            <a href="#" class="hover:underline">{{ $post['author'] }}</a> | 5 Mei 2024
        </div>
        <p class="text-base text-gray-800 mb-4">{{ $post['body'] }}</p>
        <a href="/posts" class="text-gray-500 text-sm hover:underline">&laquo; Back</a>
    </article>
</x-layout>
