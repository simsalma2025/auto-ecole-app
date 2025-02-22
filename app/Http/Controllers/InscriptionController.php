<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.inscription');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'fullname' => 'required|string',
            'phoneNo' => 'required|numeric|digits:10',
            'schoolName' => 'required|string',
            'city' => 'required|string',
            'schoolAddress' => 'required|string',
        ]);

        // Enregistrement des données dans la base de données
        Inscription::create([
            'email' => $request->email,
            'fullname' => $request->fullname,
            'phoneNo' => $request->phoneNo,
            'schoolName' => $request->schoolName,
            'city' => $request->city,
            'schoolAddress' => $request->schoolAddress,
        ]);

        // Retourner une réponse ou rediriger après l'enregistrement
        return redirect()->back()->with('status', 'Demande envoyée avec succès !');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}