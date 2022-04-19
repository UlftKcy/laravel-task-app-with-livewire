<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $search = '';

    public function render()
    {
       /* return view('livewire.task',[
            'tasks'=>\App\Models\Task::where('task_name',$this->search)->get(),
        ]);*/

        return view('livewire.task',[
           'tasks'=>\App\Models\Task::all(),
        ]);
    }
}
