<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        //
        Task::create([
            'user_id' => auth()->id(),
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->route('home')-> with ('status', "Task Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        if($task->user_id != auth()->id())
        {
            abort(403);
        }
        return view('edit',compact('task'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        if($task->user_id != auth()->id())
        {
            abort(403);
        }
        $task->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->route('home')->with('status', 'Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        if($task->user_id != auth()->id())
        {
            abort(403);
        }
        $task->delete();
        return redirect()->back()->with('status', 'Task Removed Succesfully');

    }
}
