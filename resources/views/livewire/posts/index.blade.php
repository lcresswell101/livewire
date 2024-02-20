<div class="p-3 bg-gray-100">
    <livewire:search>

    @foreach($posts as $post)
        <livewire:posts.show :$post :key="$post->id">
    @endforeach

    {{ $posts->links() }}
</div>
