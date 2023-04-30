<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terrain;

class TerrainController extends Controller
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
        $this->data['terrain']= Terrain::orderBy('id', 'desc')->get();
        return view('terrain.index',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terrain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $terrain = new Terrain();

        $terrain->num_terrain = $request->num_terrain;
        $terrain->superficie_terrain= $request->superficie;
        $terrain->save();
        notify()->success("Le terrain <span class='badge badge-dark'>#$terrain->id</span> vient d'être créée");
        return redirect()->route('terrain.index');
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
        $this->data['terrain']= Terrain::find($id);
        return view('terrain.edit',$this->data);
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
        $terrain= Terrain::findOrFail($id);
        $terrain->num_terrain = $request->num_terrain;
        $terrain->superficie_terrain= $request->superficie;
        $terrain->save();
        notify()->success("Le terrain <span class='badge badge-dark'>#$terrain->id</span> a été bien mise à jour");
        return redirect()->route('terrain.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terrain= Terrain::find($id);
        $terrain->delete();
        notify()->error("Le terrain <span class='badge badge-dark'>#$terrain->id</span> a été suprimée");
        return back();
    }
}
