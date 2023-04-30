<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cite;
use App\Terrain;
use App\Logement;

class LogementController extends Controller
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
        $this->data['logement']= Logement::orderBy('id', 'desc')->get();
        return view('logement.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['cite']= Cite::all();
        $this->data['terrain']= Terrain::all();
        return view('logement.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logement = new Logement();
        $logement->ref = $request->ref;
        $logement->prix_logement = $request->prix_logement;
        $logement->nbr_piece= $request->nbr_piece;
        $logement->cite_id= $request->cite_id;
        $logement->terrain_id= $request->terrain_id;
        $logement->save();
        notify()->success("Le logement <span class='badge badge-dark'>#$logement->id</span> vient d'être créée");
        return redirect()->route('logement.index');
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
        $this->data['logement']= Logement::find($id);  $this->data['cite']= Cite::all();
        $this->data['terrain']= Terrain::all();
        return view('logement.edit',$this->data);
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
        $logement= Logement::findOrFail($id);
        $logement->ref = $request->ref;
        $logement->prix_logement = $request->prix_logement;
        $logement->nbr_piece= $request->nbr_piece;
        $logement->cite_id= $request->cite_id;
        $logement->terrain_id= $request->terrain_id;
        $logement->save();
        notify()->success("Le logement <span class='badge badge-dark'>#$logement->id</span> a été bien mise à jour");
        return redirect()->route('logement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logement= Logement::find($id);
        $logement->delete();
        notify()->error("Le logement <span class='badge badge-dark'>#$logement->id</span> a été suprimée");
        return back();
    }
}
