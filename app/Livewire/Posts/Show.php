<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Show extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.posts.show');
    }
}
