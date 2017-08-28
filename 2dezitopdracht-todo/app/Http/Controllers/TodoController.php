<?php

namespace App\Http\Controllers;

use App\todo;

class TodoController extends Controller
{
    public function home()
    {
        return view('layouts.home');
    }
    
    public function dashboard()
    {
        return view('layouts.dashboard');
    }
    
    public function todo()
    {
        $incompleteTodo = todo::incomplete();
        $completeTodo   = todo::complete();
        
        return view('layouts.todo', compact('incompleteTodo', 'completeTodo'));
    }
    
    public function create()
    {
        return view('todo.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'todo' => 'required'
        ]);
        
        todo::create([
            'todo' => request('todo')
        ]);
        
        return redirect('/todo')->with('status', 'taak toegevoegd');
    }
    
    public function update($id)
    {
        $edittodo = todo::find($id);
        
        if($edittodo->completed == 0)
        {
            $edittodo->completed = 1;
            $edittodo->save();
            return redirect('/todo')->with('status', 'taak voltooid');
        }
        elseif($edittodo->completed == 1)
        {
            $edittodo->completed = 0;
            $edittodo->save();
            return redirect('/todo')->with('status', 'taak teruggezet');
        }
    }
    
    public function delete($id)
    {
        todo::destroy($id);
        return redirect('/todo')->with('status', 'taak verwijderd');
    }
    
    
    
}
