<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function welcome()
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('id', 'ASC')
                ->findAll()
        ];

        return view('tasks/welcome', $data);
    }

    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll()
        ];

        return view('tasks/index', $data);
    }
}