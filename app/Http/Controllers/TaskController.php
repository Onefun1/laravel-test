<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('pages.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                                    'title' => 'required|string',
                                    'content' => 'required|string',
                                    'status_id' => 'required|numeric',
                                ]
        );

        # new task
        $task = new Task();
        $task->title = $request->post('title');
        $task->content = $request->post('content');
        $task->status_id = $request->post('status_id');
        $task->creator_id = '1';
        $task->save();
        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return 'show method TaskController';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $task = Task::whereId($id)->first();

        return view('pages.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $this->validate($request,[
            'title' => 'required|string',
            'content' => 'required|string',
            'status_id' => 'required|numeric',
        ]);

        $task = Task::whereId($id)->first();
        $task->title = $request->post('title');
        $task->content = $request->post('content');
        $task->status_id = $request->post('status_id');
        $task->save();
        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return 'destroy method TaskController';
    }
}
