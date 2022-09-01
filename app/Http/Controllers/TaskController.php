<?php

namespace App\Http\Controllers;

use App\Repositories\Contract\RepositoryInterface as Contract;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function __construct(Contract $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $tasks = $this->model->all();

        return view('index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $this->model->createRequest($request->all());

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $task = $this->model->findID($id);

        $task->delete();

        return redirect()->route('index');
    }
}
