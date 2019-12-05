<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $todo = new Todo;
        // $created = new Created;

        $todo->todo = $request->todo;
        // $created->created = $request->created;

        $todo -> save();

        // return redirect()->back();
        return redirect('todos')->with('add', 'New Todo Added!');
    }

    public function update($id)
    {
        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);;
        // return redirect()->with(...);
        // return redirect()->back();
        // return redirect('todos')->with('update', 'Todo Number '.($id) .' Updated!');
    }

    public function save(Request $request, $id)
    {
        // dd($request->all());
        $todo = Todo::find($id);

        $todo->todo = $request->todo;
        // $created->created = $request->created;

        $todo->save();

        return redirect('todos')->with('update', 'Todo Number '.($id) .' Updated!');
    }

    public function delete($id)
    {
        $todo = Todo::find($id);

        $todo->delete();

        // return redirect()->with(...);
        // return redirect()->back();
        return redirect('todos')->with('delete', 'Todo Number '.($id) .' Deleted!');
    }

    public function completed($id)
    {
        $todo = Todo::find($id);

        $todo->completed = 1;

        $todo->save();

        return redirect('todos')->with('completed', 'Todo Number '.($id).' Marked as Completed!');
    }


    public function pending($id)
    {
        $todo = Todo::find($id);

        $todo->completed = 0;

        $todo->save();

        return redirect('todos')->with('pending', 'Todo Number '.($id).' Marked as Pending!');
    }

}
