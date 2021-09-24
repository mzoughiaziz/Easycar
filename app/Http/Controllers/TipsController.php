<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TipsController extends Controller
{
    public function index_add(){
        return view('add');
    }

    public function user_tips(){
        $tips = Tips::where('creator_id' ,auth()->user()->id)->orderBy('created_at' , 'desc')->get();
        return view('my_tips' , ['tips'=>$tips]);
    }

    // public function delete_tip($id){
    //     $tips = Tips::where('id' , tip->id)->orderBy('created_at' , 'desc')->get();
    //     return view('my_tips' , ['tips'=>$tips]);
    // }

    public function tip_store(Request $request){
      
        $request->validate([
            'modele' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'type' => ['required', 'string'],
            'content' => ['required', 'string'],

        ]);
      
         Tips::create([
            'model' => $request['modele'],
            'brand' => $request['brand'],
            'type' => $request['type'],
            'version' => $request['version'],
            'content' => $request['content'],
            'creator_id' => auth()->user()->id ,
        ]); 
       
        return redirect('mytips')->withStatus('New tip added successfully.');;
    }
}