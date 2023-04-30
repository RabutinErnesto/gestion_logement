<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acheter;
use App\Client;
use App\Logement;

class AcheterController extends Controller
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
        $this->data['acheter'] = Acheter::orderBy('id', 'DESC')->get();
        return view('acheter.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['client'] = Client::orderBy('id', 'DESC')->get();
        $this->data['logement'] = Logement::orderBy('id', 'DESC')->get();
        return view('acheter.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achat= new Acheter();
        $achat->client_id = $request->client_id;
        $achat->logement_id = $request->logement_id;
        $achat->save();

        notify()->success("L'achat <span class='badge badge-dark'>#$achat->id</span> vient d'être créée");
        return redirect()->route('acheter.index');
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
        $this->data['acheter'] = Acheter::find($id);
        $this->data['client'] = Client::orderBy('id', 'DESC')->get();
        $this->data['logement'] = Logement::orderBy('id', 'DESC')->get();
        return view('acheter.edit', $this->data);
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
        $achat= Acheter::findOrFail($id);
        $achat->client_id = $request->client_id;
        $achat->logement_id = $request->logement_id;
        $achat->save();
        notify()->success("L'achat <span class='badge badge-dark'>#$achat->id</span> a été bien mise à jour");
        return redirect()->route('acheter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acheter= Acheter::find($id);
        $acheter->delete();
        notify()->error("L'acheter <span class='badge badge-dark'>#$acheter->id</span> a été suprimée");
        return back();
    }
}
