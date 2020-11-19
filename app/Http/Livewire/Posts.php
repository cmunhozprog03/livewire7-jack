<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Posts extends Component
{
    public $title;
    public $content;

    public function render()
    {
        return view('livewire.posts');
    }
}
