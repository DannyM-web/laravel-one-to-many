<?php
// WARNING: TASK and Employes Sono opposte rispeto alla consegna dell'esercizio


namespace App\Http\Controllers;

use App\Employe;
use App\Task;
use App\Location;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(){

      $employees = Employe::all();

      return view('home', compact('employees'));
    }

    public function showEmp($id){
      $employe = Employe::findOrFail($id);

      return view('showEmp', compact('employe'));
    }

    public function edit($id){

      $employe = Employe::findOrFail($id);
      $tasks = Task::all();
      $locations = Location::all();

      return view('edit-employe', compact('employe', 'tasks', 'locations'));
    }

    public function update(Request $request, $id){

      $validatedData = $request -> validate([

        'firstname' => 'required',
        'lastname' => 'required',
        'date_of_birth' => 'required|date',
        'role' => 'required',
        'task_id' => 'required',
        'locations' =>'nullable|array'
      ]);

      $employe = Employe::findOrFail($id);

      // Employe::whereId($id) -> update($validatedData);

      $employe['firstname'] = $validatedData['firstname'];
      $employe['lastname'] = $validatedData['lastname'];
      $employe['date_of_birth'] = $validatedData['date_of_birth'];
      $employe['role'] = $validatedData['role'];
      $employe['task_id'] = $validatedData['task_id'];

      $employe -> save();

      $employe -> locations() -> sync($validatedData['locations']);

      return redirect() -> route('home');

    }

    public function delete($id){
      $employe = Employe::findOrFail($id);
      $employe -> delete();

      return redirect() -> route('home');
    }

    public function showTask($id){
      $task = Task::findOrFail($id);

      return view('show-tasks' , compact('task'));
    }
}
