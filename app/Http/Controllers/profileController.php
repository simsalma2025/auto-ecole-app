<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Profile;
class profileController extends Controller
{
    public function index(){
        $profiles=Profile::paginate(10);
        return view('parties.profile',compact('profiles'));
    }
    public function show(Request $request){
        dd($request->id);
        $id=$request->id;
    }
}