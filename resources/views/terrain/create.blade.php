@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Création nouveau terrain
    </div>
    <div class="card-body">
      <form  action="{{ route('terrain.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-12">
            <label for="name">Numero Terrain</label>
            <input required type="text" name="num_terrain" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du terrain</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Superficie</label>
            <input required type="number" name="superficie" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le superficie du terrain</small>
        </div>


        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
  </div>
@endsection
