<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;
use App\Models\client;
class notificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $notifs=notification::orderby('created_at','desc')->get();
      return view('reservation.home')->with('notifs',$notifs);
    }
    public function searchadh(Request $request)
    {
        $notifs=notification::orderby('created_at','desc')->get();
        $clients=client::join('notification','notification.id_adhesion','=','client.num_adhesion')
        ->join('formation','formation.id_formation','=','client.formation')
        ->where('num_adhesion',"=",$request->input('adhesion'))->first();
        // dd($request,$clients,$notifs);

        return view('reservation.newadh')->with([
            'notifs'=>$notifs,
            'clients'=>$clients
        ]);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(notification $notification)
    {
        //
    }
}
