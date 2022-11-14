<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\conseiller;
use App\Models\notification;
use App\Models\formation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations=formation::all();
        $conseillers=conseiller::all();
        return view('reception.home')->with('formations', $formations)->with('conseillers',$conseillers);
        
    }
    public function fetchclients()
    {
        $clients=client::join('formation','formation.id_formation','=','client.formation')
        ->join('conseiller','conseiller.id_conseiller','=','client.num_conseiller')
        ->get();
         return view('reception.client')->with('clients',$clients);

    }
    public function fetchrdv()
    {
        $rdvs=client::latest('created_at')->first('num_adhesion');
        $conseillers=conseiller::all();
        // dd($rdvs);
        return view('reception.rdv')->with('rdvs',$rdvs)->with('conseillers',$conseillers);
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
        if($request->input('source_client1')!= "on")
        {
            $sourcechecked=$request->input('source_client1');
        }
        else
        {
            if(!empty($request->input('parrainage')))
            {
                $sourcechecked=$request->input('parrainage');
            }
            elseif(!empty($request->input('autre')))
            {
                $sourcechecked=$request->input('autre');
            }
            else{
                $sourcechecked=$request->input('autretopreciser');
            }
        }
        $adhnum=client::where('num_adhesion','like','ADH%')->latest('created_at')->value('num_adhesion');
        $converted = Str::substr($adhnum, 5, 6);
        $secondpart=Str::substr($adhnum, 0, 5);
        $convert=(int)$converted+1;
        $conatenation=$secondpart.$convert;
        client::create([
            'nom_client' =>$request->input('nom_client'),
            'prenom_client' =>$request->input('prenom_client'),
            'tel_client' =>$request->input('tel_client'),
            'email_client' =>$request->input('email_client'),
            'fonction_client' =>$request->input('fonction_client'),
            'formation' =>$request->input('formation'),
            'responsable_client' =>$request->input('responsable_client'),
            'source_client'=> $sourcechecked,
            'num_adhesion'=>$conatenation,
            'num_conseiller'=>$request->input('conseiller'),
            ]);  
            session()->flash('succes', "un nouveau client est crée avec succès");
            return redirect()->back();
 
        // dd($sourcechecked,$request);
    }
    public function bookrdv(Request $request)
    {
        // dd($request);
        notification::create([
            'id_conseiller' =>$request->input('conseiller'),
            'id_adhesion' =>$request->input('numadhesion'),
            'date_rdv' =>$request->input('daterdv'),
            'centre_formation' =>$request->input('location'),
            ]);  
            session()->flash('succes', "le conseiller est informer par ce Rendez-vous");
            return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
