@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header px-5 py-3">
            <div class="card-title">
                <h5 class="fw-bold">Create Task</h5>
            </div>
        </div>
        <div class="card-body">
            <form id="form_task">
                <div class="form-group row px-5 mb-5">
                    <div class="col-lg-6">
                        <label for="task_name" class="col-form-label">Task Name</label>
                        <input type="text" class="form-control" name="task_name" id="task_name"
                               placeholder="task name...">
                    </div>
                </div>
                <div class="form-group row px-5 mb-5">
                    <div class="col-lg-6">
                        <label for="start_date" class="col-form-label">Start Date</label>
                        <div class='input-group date datetimepicker'>
                            <input type='text' name="start_date" id="start_date" class="form-control"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="finish_date" class="col-form-label">Finish Date</label>
                        <div class='input-group date datetimepicker'>
                            <input type='text' name="finish_date" id="finish_date" class="form-control"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row px-5 mb-5">
                    <div class="col-lg-6">
                        <label for="priority" class="col-form-label">Priority : </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="priority" value="High">
                            <label class="form-check-label" for="priority">High</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="priority" value="Medium">
                            <label class="form-check-label" for="priority">Medium</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="priority" value="Low">
                            <label class="form-check-label" for="priority">Low</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="status" class="col-form-label">Status : </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="Pending">
                            <label class="form-check-label" for="status">Pending</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="Completed">
                            <label class="form-check-label" for="status">Completed</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="Continue">
                            <label class="form-check-label" for="status">Continue</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row px-5 mb-5">
                    <div class="col-12">
                        <label for="task_description">Task Description</label>
                        <textarea class="form-control" name="task_description" id="task_description" rows="3" placeholder="task description..."></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-success me-5" id="btn_task_save" data-value="{{$user_id}}">Submit</button>
        </div>
    </div>
@endsection
@section('js')

    <script src={{"/js/task.js"}}></script>

@endsection
