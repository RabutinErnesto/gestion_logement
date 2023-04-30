@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Création nouveau agence
    </div>
    <div class="card-body">
      <form  action="{{ route('agence.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-12">
            <label for="name">Numero agence</label>
            <input required type="text" name="num_agence" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du l'agence</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Libelle</label>
            <input required type="text" name="libelle" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le libelle du l'agence</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Adresse</label>
            <input required type="text" name="adresse" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez l'adresse du l'agence</small>
        </div>

        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
  </div>
@endsection
