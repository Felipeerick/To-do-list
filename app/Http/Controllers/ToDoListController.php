<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function __construct(ToDoList $todolist)
    {
        $this->todolist = $todolist;
    }

    public function index()
    {
        $lists = $this->todolist->all();

        return view('index', compact('lists'));
    }

    public function store(Request $request)
    {
        $this->todolist->create($request->all());

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $list = $this->todolist->find($id);

        $list->delete();

        return redirect()->route('index');
    }
}
