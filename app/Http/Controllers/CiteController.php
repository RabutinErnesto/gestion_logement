<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cite;
use App\Agence;

class CiteController extends Controller
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
        $this->data['cite']= Cite::orderBy('id', 'desc')->get();
        return view('cite.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['agence']= Agence::all();
        return view('cite.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cite = new cite();

        $cite->num_cite = $request->num_cite;
        $cite->libelle= $request->libelle;
        $cite->pseudo= $request->pseudo;
        $cite->num_agence= $request->num_agence;
        $cite->save();
        notify()->success("Le cite <span class='badge badge-dark'>#$cite->id</span> vient d'être créée");
        return redirect()->route('cite.index');
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
        $this->data['cite']= Cite::find($id);
        $this->data['agence']= Agence::all();
        return view('cite.edit',$this->data);
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
        $cite= Cite::findOrFail($id);
        $cite->num_cite = $request->num_cite;
        $cite->libelle= $request->libelle;
        $cite->pseudo= $request->pseudo;
        $cite->num_agence= $request->num_agence;
        $cite->save();
        notify()->success("Le cite <span class='badge badge-dark'>#$cite->id</span> a été bien mise à jour");
        return redirect()->route('cite.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cite= Cite::find($id);
        $cite->delete();
        notify()->error("Le cite <span class='badge badge-dark'>#$cite->id</span> a été suprimée");
        return back();
    }
}
