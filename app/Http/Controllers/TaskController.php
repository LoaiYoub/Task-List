<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $tasks = DB::table('tasks')->orderBy('name')->get();

        return view('tasks',compact('tasks'));
    }
    public function store(Request $request){
        DB::table('tasks')->insert([
          //  'name' => $_REQUEST['name']
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back();
    }
    public function delete($id){
        DB::table('tasks')->where('id','=',$id)->delete();
        return redirect()->back();
    }
    public function update($id){
        DB::table('tasks')->where('id','=',$id)->update(['name' => $_REQUEST['newName']]);
        return redirect()->back();
    }
}
