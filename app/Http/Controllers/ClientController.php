<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['client']= Client::orderBy('id', 'desc')->get();
        return view('client.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();

        $client->nom = $request->nom;
        $client->prenoms = $request->prenoms;
        $client->sexe = $request->sexe;
        $client->lieu_travail = $request->lieu_travail;
        $client->save();
        notify()->success("Le client <span class='badge badge-dark'>#$client->id</span> vient d'être créée");
        return redirect()->route('client.index');
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
        $this->data['client']=Client::find($id);
        return view('client.edit',$this->data);
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
        $client= Client::findOrFail($id);
        $client->nom = $request->nom;
        $client->prenoms = $request->prenoms;
        $client->sexe = $request->sexe;
        $client->lieu_travail = $request->lieu_travail;
        $client->save();
        notify()->success("Le client <span class='badge badge-dark'>#$client->id</span> a été bien mise à jour");
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client= Client::find($id);
        $client->delete();
        notify()->error("Le client <span class='badge badge-dark'>#$client->id</span> a été suprimée");
        return back();
    }
}
