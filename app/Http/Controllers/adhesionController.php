<?php

namespace App\Http\Controllers;

use App\Models\adhesion;
use Illuminate\Http\Request;

class adhesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservation.planning');
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
        adhesion::create([
            'num_adhesionnaire' =>$request->input('nom_client'),
            'nometprenom_beneficiaire' =>$request->input('nometprenom_beneficiaire'),
            'fonction_beneficiaire' =>$request->input('fonction_beneficiaire'),
            'datenaissance_beneficiaire' =>$request->input('datedenaissance_beneficiaire'),
            'adresse_beneficiaire' =>$request->input('adresse_beneficiaire'),
            'tel_beneficiaire' =>$request->input('tel_beneficiaire'),
            'mail_beneficiaire' =>$request->input('email_beneficiaire'),
            'nometprenom_tuteur' =>$request->input('nometprenom_tuteur'),
            'fonction_tuteur' =>$request->input('fonction_tuteur'),
            'datenaissance_tuteur' =>$request->input('datedenaissance_tuteur'),
            'adresse_tuteur' =>$request->input('adressenometprenom_tuteur'),
            'tel_tuteur' =>$request->input('tel_tuteur'),
            'type_inscri1' =>$request->input('type1'),
            'type_inscri2' =>$request->input('type2'),
            'type_inscri3' =>$request->input('type3'),
            'prix' =>$request->input('prix'),
            'recu1' =>$request->input('type1'),
            'recu2' =>$request->input('type2'),
            'recu3' =>$request->input('type3'),
            'recudetransfer' =>$request->input('responsable_client'),
            'renouvellement' =>$request->input('renouvellement'),
            ]);  
            return view('reservation.planning');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function show($adhesion)
    {   
        // dd($adhesion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function edit(adhesion $adhesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adhesion $adhesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adhesion  $adhesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(adhesion $adhesion)
    {
        //
    }
}
