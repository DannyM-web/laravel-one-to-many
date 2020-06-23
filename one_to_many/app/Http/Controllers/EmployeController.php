<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Task;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(){

      $employees = Employe::all();

      return view('home', compact('employees'));
    }

    public function edit($id){

      $employe = Employe::findOrFail($id);
      $tasks = Task::all();

      return view('edit-employe', compact('employe', 'tasks'));
    }

    public function update(Request $request, $id){

      $validatedData = $request -> validate([

        'firstname' => 'required',
        'lastname' => 'required',
        'date_of_birth' => 'required',
        'role' => 'required',
        'task_id' => 'required'
      ]);


      Employe::whereId($id) -> update($validatedData);

      return redirect() -> route('home');

    }
}
