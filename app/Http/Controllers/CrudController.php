<?php

namespace App\Http\Controllers;

use App\Models\MiniProject;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        return view('home.manage');
    }
    public function dataInsert(Request $request){
        $imageurl='';


        $post_image              =$request->file('post_image');
        $imagetype               =$post_image->getClientOriginalExtension();
        $imageName               =time().'.'.$imagetype;
        $directory               ='images/';
        $post_image->move($directory,$imageName);
        $imageurl=$directory.$imageName;

        $post= new MiniProject();
        $post->post_tittle            =  $request->post_tittle;
        $post->post_image             =  $imageurl;
        $post->post_description       =  $request->post_description;
        $post->save();
        return redirect()->back()->with('message','Post Create Successfully');
    }
    public function viewData(){
       $alldata=MiniProject::all();
        return view('home.view',['alldata'=> $alldata]);
    }

    public function dataEdit($id){
      $dataEdit=MiniProject::find($id);
        return view('home.edit',['dataedite'=>$dataEdit]);
    }
    public function dataUpdate(Request $request){
        $imageurl='';
        $dataUpdate=MiniProject::find($request->id);
        if($post_image=$request->file('post_image')){
            $imagetype=$post_image->getClientOriginalExtension();
            $imageName=time().'.'.$imagetype;
            $directory='images/';
            $post_image->move($directory,$imageName);
            $imageurl=$directory.$imageName;

        }
        else{
            $imageurl=$dataUpdate->post_image;
        }



        $dataUpdate->post_tittle            =  $request->post_tittle;
        $dataUpdate->post_image             =  $imageurl;
        $dataUpdate->post_description       =  $request->post_description;
        $dataUpdate->save();
        return redirect('/data-view')->with('message','Post Update Successfully');

    }
    public function dataDelete($id){
       $trash= MiniProject::find($id);
        $trash->delete();
        return redirect('/data-view')->with('message','Post delete Successfully');
    }
}
