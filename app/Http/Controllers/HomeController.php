<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\History;


class HomeController extends Controller
{

    public function test() {

        $container = \app();

        $cache = $container->get('cache');
    }


    public function index()
    {
//        return 'Hello from index method HomeController';

//        return Task::find(1)->status->tasks;
//        $user = User::query()->where('id', 1)->first();
//        return $userTask = $user->tasks->first();
//        $task = Task::query()->where('creator_id', 1)->first();
//        $taskUser = $task->user->first();

        $task = Task::query()->where('creator_id', 1)->first();

        $json_task_old = json_encode($task);

        $task->title = 'new test 2';
        $task->save();

        $json_task_new = json_encode($task);

        if ($json_task_old != $json_task_new)
        {
            $message = "old: $json_task_old; new: $json_task_new";
            $historyService = app()->get('History');
            $historyService->add($task->id, $message);
        }

        $task_history_show_changes = History::query()->where('task_id', $task->id)->get();
        return $task_history_show_changes;


    }
}
