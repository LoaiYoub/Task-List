<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        //$tasks = DB::table('tasks')->orderBy('name')->get();
        $tasks = Task::orderBy('name', 'Asc')->get();
        return view('tasks',compact('tasks'));
    }
    public function store(Request $request){
        // DB::table('tasks')->insert([
        //   //  'name' => $_REQUEST['name']
        //     'name' => $request->name,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect()->back();
    }
    public function delete($id){
        // DB::table('tasks')->where('id','=',$id)->delete();
        $task = Task::where('id',$id)->delete();
         return redirect()->back();

    }
    public function update($id, Request $request){
        // DB::table('tasks')->where('id','=',$id)->update(['name' => $_REQUEST['newName']]);
        $task = Task::where('id',$id);
        $task-> update(['name' => $request->newName]);

        return redirect()->back();

    }
}
