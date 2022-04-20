<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Tasks extends Component
{
    public $search = '';
    public $tasks = '';

    public function render()
    {
        $search = '%'.$this->search.'%';
        $this->tasks = Task::where('task_name','LIKE',$search)->get();
        return view('livewire.tasks');
    }
}
