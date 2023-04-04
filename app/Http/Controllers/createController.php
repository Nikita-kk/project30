<?php

namespace App\Http\Controllers;

use App\Models\create;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class createController extends Controller
{
 public function create(){
    return view('category.create');
 }
public function store(Request $request){
    $data=new create();
    $data->title=$request->title;
    $data->status=$request->status;
    $data->save();
    return redirect()->route('category.table');
}
 public function table(){
    $data=create::all();
    return view('category.table',compact('data'));

 }
 public function edit($id){
    $data=create::find($id);
    return view('category.edit',compact('data'));
 }
 public function update(Request $request,$id){
    $data=create::find($id);
    $data->title=$request->title;
    $data->status=$request->status;

    $data->save();
    return redirect()->route('category.table');
}
public function delete($id){
    $data=create::find($id);
    $data->delete();
    return redirect()->route('category.table');
}
}

