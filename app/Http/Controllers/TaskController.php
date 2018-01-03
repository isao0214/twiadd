<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $user = \JWTAuth::parseToken()->authenticate();
        return $user->tasks()->get()->keyBy('id');
    }

    public function store(Request $request)
    {
        $user = \JWTAuth::parseToken()->authenticate();
        return $user->tasks()->create($request->only('name'))->fresh();
    }

    public function destroy($id)
    {
        return Task::destroy($id);
    }

    public function update($id, Request $request)
    {
        return Task::find($id)->fill($request->only('is_done'))
            ->save()->fresh();
    }
}