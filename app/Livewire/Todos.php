<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{

    public $todo = '';
    public $todos = [];



    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }


    // public function updated($property  , $value)
    // {
    //     $this->$property = strtoupper($value);
    // }

    public function mount()
    {
        $this->todos = [
            'Take out trash',
            'Do dishes',
        ];
    }
    public function add()
    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }


}
