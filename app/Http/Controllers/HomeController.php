<?php

namespace App\Http\Controllers;
use App\Models\Tips;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    

    
    public function index(Request $request)
    {
        
        if(!$request->query('search') ){
            $tips = Tips::orderBy('created_at' , 'desc')->get();
        }else{
          
            $tips = db::table('tips')
            ->where('brand', 'like', '%'.$request->query('search').'%')
            ->orWhere('type', 'like', '%'.$request->query('search').'%')
            ->orWhere('model', 'like', '%'.$request->query('search').'%')
            ->orWhere('version', 'like', '%'.$request->query('search').'%')
            ->orderBy('created_at' , 'desc')
            ->get();
        }   
        foreach($tips as $tip){
            $tip->creator_name = User::where('id' , $tip->creator_id)->value('name');
        }
            return view('home' , ['tips'=>$tips , 'search' =>$request->query('search')]);
        
    }
}

