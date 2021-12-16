<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class Companies extends Controller
{
    //
    function save(Request $req){
    
        $form=new user;
        $form->name=$req->name;
        
        $form->email=$req->email;
        
        $form->phone=$req->phone;
        
        $form->gender=$req->gender;
        $form->description=$req->description;
        $form->country=$req->country;
        $form->file=$req->file;
        
        $form->state=$req->state;
        
        $form->city=$req->city;
        $form->language=$req->language;
        $form->save();
return redirect('main');
    }
    
    function show(){
        $data=user::all();
        return view('main',['members'=>$data]);
    }
    function from(){
        return view('userview');

}
function showdata($id){
    $data=user::find($id);
    
    return view('edit',['data'=>$data]);
}
function update(Request $req){

$form=user::find($req->id);
$form->name=$req->name;
        
$form->email=$req->email;

$form->phone=$req->phone;

$form->gender=$req->gender;
$form->description=$req->description;
$form->country=$req->country;
$form->file=$req->file;

$form->state=$req->state;

$form->city=$req->city;
$form->language=$req->language;
$form->save();
return redirect('main');

}
function delete($id){
    $delete=user::find($id);
    $delete->delete();
    
return redirect('main');

}
}
