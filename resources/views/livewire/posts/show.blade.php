<div class="shadow bg-gray-200 p-3 mb-3">
    <h2 class="underline">
        <a href="/post/{{ $post->id }}" wire:navigate>
            {{ $post->title }}
        </a>
    </h2>

    <p>
        {{ $post->content }}
    </p>

    <span class="italic">
        {{ $post->user->name }}
    </span>
</div>
