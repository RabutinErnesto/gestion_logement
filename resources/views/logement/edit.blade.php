@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info">
        <h4 class="card-title">Modification de logement <span class="badge badge-dark">#{{ $logement->id }}</span></h4>
    </div>
    <div class="card-body">
      <form action="{{ route('logement.update', $logement->id) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group col-12">
            <label for="name">Ref logement</label>
            <input required type="text" name="ref" value="{{$logement->ref}}" class="form-control">
            <small id="nameHelp" class="form-text text-muted">Entrez le reference du logement</small>
        </div>

        <div class="form-group col-12">
            <label for="name">prix logement</label>
            <input required type="number" name="prix_logement" value="{{$logement->prix_logement}}" class="form-control">
            <small id="nameHelp" class="form-text text-muted">Entrez le prix du logement</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Nombre piece</label>
            <input required type="numebr" name="nbr_piece" value="{{$logement->nbr_piece}}" class="form-control"  >
            <small id="nameHelp" class="form-text text-muted">Entrez le nombre de piece</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Terrain #id</label>
            <select name="terrain_id" class="form-control" required>
                <option value="{{$logement->terrain_id}}">{{implode( $logement->terrain()->get()->pluck('num_terrain')->toArray())}}</option>
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
                <option value="{{$logement->cite_id}}">{{implode( $logement->cite()->get()->pluck('libelle')->toArray())}}  </option>
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
