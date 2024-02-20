<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required')]
    public ?string $query = null;

    public function search()
    {
        $this->validate();

        $this->dispatch('search', query: $this->query);
    }

    public function render()
    {
        return view('livewire.search');
    }
}
