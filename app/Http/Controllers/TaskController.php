<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('main.tasks');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $user_id = Auth::id();

        return view('main.create-task', compact("user_id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        /* dd($request->all());*/
        $validator = Validator::make($request->all(), [
            "task_name" => "required",
            "start_date" => "required",
            "finish_date" => "required",
            "priority" => "required",
            "status" => "required",
            "user_id" => "required",
        ]);
        if ($validator->fails()) {
            return response()->json(["status" => "warning", "message" => "Lütfen tüm zorunlu alanları doldurunuz"]);
        };

        DB::beginTransaction();
        try {
            $task = new Task();
            $task->task_name = $request->task_name;
            $task->uuid = Str::uuid();
            $task->start_date = date('Y-m-d H:i:s' , strtotime($request->start_date));
            $task->finish_date = date('Y-m-d H:i:s' , strtotime($request->finish_date));
            $task->priority = $request->priority;
            $task->status = $request->status;
            $task->user_id = $request->user_id;
            $task->description = $request->task_description;
            $task->save();

            $url = route('dashboard');
            DB::commit();

            return response()->json(["status" => "success", "message" => "Görev başarıyla kaydedildi", "url" => $url]);

        } catch (\Exception $exception) {
            DB::rollBack();
           /* dd($exception->getMessage());*/
            return response()->json(["status" => "error", "message" => "İşlem sırasında hata oluştu"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
