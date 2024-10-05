<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{

    #[Rule('required' , message: 'The Title Is Required')]
    #[Rule('min:4' , message: 'The Title too short')]
    public $title = '';

    #[Rule('required' , message: 'The Content Is Required')]
    public $content = '';

    public function store()
    {

        $this->validate();
//        $this->validate([
//            'title' => 'required',
//            'content' => 'required',
//        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/post' , navigate:true);
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
