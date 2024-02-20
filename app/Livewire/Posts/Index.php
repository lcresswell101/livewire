<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::query()
            ->with('user')
            ->cursorPaginate();

        return view('livewire.posts.index', [
            'posts' => $posts,
        ]);
    }
}
