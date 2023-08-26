<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
public function index(){
$get_task=Task::get();
if($get_task->isEmpty()){
$message="This look empty create a new task";
return view ('index',['message'=>$message]);
}
return view ('index',['get_task_from_db'=>$get_task]);

}

public function create (){
    return view ('create');
}

public function store(Request $request){
$task_to_db=new Task();
$task_to_db->task_name=$request->taskname;
$task_to_db->task_description=$request->taskDescription;
$task_to_db->save();
return back();
}

public function edit ($id){
    $find_in_database=Task::where('id',$id)->first();
    return view('edit',['find_in_database'=>$find_in_database]);
}

public function update($id,Request $request){
$find_in_database=Task::where('id',$id)->first();
$find_in_database->task_name=$request->taskname;
$find_in_database->task_description=$request->taskDescription;
$find_in_database->save();
return back();
}

public function delete($id){
    $find_in_database=Task::where('id',$id)->first();
    $find_in_database->delete();
    return back();
}
}
