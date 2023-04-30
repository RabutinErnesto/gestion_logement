<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;

class AgenceController extends Controller
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
        $this->data['agence']= Agence::orderBy('id', 'desc')->get();
        return view('agence.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agence.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agence = new Agence();

        $agence->num_agence = $request->num_agence;
        $agence->libelle= $request->libelle;
        $agence->adresse= $request->adresse;
        $agence->save();
        notify()->success("Le agence <span class='badge badge-dark'>#$agence->id</span> vient d'être créée");
        return redirect()->route('agence.index');
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
        $this->data['agence']= Agence::find($id);
        return view('agence.edit',$this->data);
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
        $agence= Agence::findOrFail($id);
        $agence->num_agence = $request->num_agence;
        $agence->libelle= $request->libelle;
        $agence->adresse= $request->adresse;
        $agence->save();
        notify()->success("Le agence <span class='badge badge-dark'>#$agence->id</span> a été bien mise à jour");
        return redirect()->route('agence.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agence= Agence::find($id);
        $agence->delete();
        notify()->error("Le agence <span class='badge badge-dark'>#$agence->id</span> a été suprimée");
        return back();
    }
}
