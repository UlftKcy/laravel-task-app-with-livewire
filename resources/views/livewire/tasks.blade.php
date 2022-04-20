<div class="p-5">
  {{--  <div class="mb-3">
        <input wire:model="search" type="text" class="form-control" placeholder="Search tasks..."/>
    </div>--}}

    @foreach($tasks as $task)
        <div class="card bg-light mb-5 p-2">
            <div class="card-body row d-flex align-items-center">
                <div class="col-2 d-flex flex-column">
                    <span class="text-muted fs-5">Task Name</span>
                    <span class="fw-bolder lh-lg">
                        {{$task->task_name}}
                    </span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <span class="text-muted fs-5">Start Date</span>
                    <span class="fw-bolder lh-lg">{{$task->start_date}}</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <span class="text-muted fs-5">Finish Date</span>
                    <span class="fw-bolder lh-lg">{{$task->finish_date}}</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <span class="text-muted fs-5">Priority</span>
                    <span class="fw-bolder lh-lg">{{$task->priority}}</span>
                </div>
                <div class="col-2 d-flex flex-column">
                    <span class="text-muted fs-5">Status</span>
                    <span class="fw-bolder lh-lg">{{$task->status}}</span>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary btn-sm">İncele</button>
                    @if($task->user_id === auth()->id())
                        <button class="btn btn-warning btn-sm">Düzenle</button>
                        <button class="btn btn-danger btn-sm">Sil</button>
                    @endif
                </div>
            </div>
        </div>
    @endforeach

</div>

