<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        $users = 
        [
            ['id' => '1', 'nom' => 'amirach', 'prenom' => 'salma'],
            ['id' => '2', 'nom' => 'amirach', 'prenom' => 'salma'],
            ['id' => '3', 'nom' => 'amirach', 'prenom' => 'salma']
        ];
                //['id' => '1', 'nom' => 'amirach', 'prenom' => 'salma'];

    
        return view('hello', compact('users'));
    }
}