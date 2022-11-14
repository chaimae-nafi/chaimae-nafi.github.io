<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request);
        users::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            ]);
            session()->flash('error', "Utilisateur ajouté avec succès");
            return redirect()->back();
    }
    public function login(Request $request)
    {
        
        $mail=users::where('email','=',$request['email'])->exists();
        $usersexists=users::where('email','=',$request['email'])
        //  ->where('password','=',$password)
         ->value('password');   
         $password=Hash::check($request['password'],$usersexists);
         if($mail)
            { 
                if($password)
                {
                    return view('dashboard');
                }
                else
                {
                    session()->flash('error', "votre Mot de passe est incorrecte");
                    return redirect()->back();
                }            
            }
            else
            {
                session()->flash('error', "votre mail est incorrecte");
                return redirect()->back();
            }
     
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }
}
