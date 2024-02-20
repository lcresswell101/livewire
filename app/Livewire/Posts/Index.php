<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected string $query = '';

    #[On('search')]
    public function search(string $query): void
    {
        $this->query = $query;

        $this->gotoPage(1);
    }

    public function render()
    {
        $posts = $this->query
            ? Post::query()
                ->where('title', 'LIKE', "%{$this->query}%")
                ->orWhere('content', 'LIKE', "%{$this->query}%")
            : Post::query();

        return view('livewire.posts.index')
            ->with([
                'posts' => $posts
                    ->with('user')
                    ->simplePaginate(),
            ]);
    }
}
