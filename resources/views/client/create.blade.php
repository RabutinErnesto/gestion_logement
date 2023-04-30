@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Création nouveau client
    </div>
    <div class="card-body">
      <form  action="{{ route('client.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-12">
            <label for="name">Nom</label>
            <input type="text" name="nom" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le nom du client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Premons</label>
            <input type="text" name="prenoms" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le prenoms du client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Sexe</label>
            <select name="sexe" id="" class="form-control" required>
                <option value=""></option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez le sexe du client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Lieu de travail</label>
            <input type="text" name="lieu_travail" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le lieu de travail du client</small>
        </div>

        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
  </div>
@endsection
