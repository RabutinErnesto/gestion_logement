@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Création nouveau logement
    </div>
    <div class="card-body">
      <form  action="{{ route('logement.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-12">
            <label for="name">Ref logement</label>
            <input required type="text" name="ref" class="form-control">
            <small id="nameHelp" class="form-text text-muted">Entrez le reference du logement</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Prix logement</label>
            <input required type="number" name="prix_logement" class="form-control">
            <small id="nameHelp" class="form-text text-muted">Entrez le prix du logement</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Nombre piece</label>
            <input required type="numebr" name="nbr_piece" class="form-control"  >
            <small id="nameHelp" class="form-text text-muted">Entrez le nombre de piece</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Terrain #id</label>
            <select name="terrain_id" class="form-control" required>
                <option></option>
                @foreach ($terrain as $item)
                <option value="{{$item->id}}">{{$item->num_terrain}}</option>
                @endforeach
            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez l'#id du terrain</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Cite #id</label>
            <select name="cite_id" class="form-control" required>
                <option></option>
                @foreach ($cite as $item)
                <option value="{{$item->id}}">{{$item->libelle}}</option>
                @endforeach
            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez Entrez l'#id cite</small>
        </div>


        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
  </div>
@endsection
