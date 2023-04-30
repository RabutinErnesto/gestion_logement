@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info">
        <h4 class="card-title">Modification de agence <span class="badge badge-dark">#{{ $agence->id }}</span></h4>
    </div>
    <div class="card-body">
      <form action="{{ route('agence.update', $agence->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group col-12">
            <label for="name">Numero agence</label>
            <input required type="text" name="num_agence" value="{{$agence->num_agence}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du agence</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Libelle</label>
            <input required type="text" name="libelle" value="{{$agence->libelle}}"  class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez libelle du l'agence</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Adresse</label>
            <input required type="text" name="adresse" value="{{$agence->adresse}}"  class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le adresse du l'adresse</small>
        </div>

        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
</div>




@endsection
