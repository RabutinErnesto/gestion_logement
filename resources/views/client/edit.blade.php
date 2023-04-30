@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info">
        <h4 class="card-title">Modification de client <span class="badge badge-dark">#{{ $client->id }}</span></h4>
    </div>
    <div class="card-body">
      <form action="{{ route('client.update', $client->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group col-12">
            <label for="name">Nom</label>
            <input required type="text" name="nom" value="{{$client->nom}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le nom du client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Premons</label>
            <input required type="text" name="prenoms" value="{{$client->prenoms}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le prenoms du client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Sexe</label>
            <select name="sexe" id="" class="form-control" required>
                <option value="{{$client->sexe}}">{{$client->sexe}}</option>
                <option value="">-</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez le sexe du client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Lieu de travail</label>
            <input required type="text" name="lieu_travail" value="{{$client->lieu_travail}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le lieu de travail du client</small>
        </div>

        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
</div>




@endsection
