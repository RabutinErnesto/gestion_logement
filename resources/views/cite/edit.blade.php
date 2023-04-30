@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info">
        <h4 class="card-title">Modification de cite <span class="badge badge-dark">#{{ $cite->id }}</span></h4>
    </div>
    <div class="card-body">
      <form action="{{ route('cite.update', $cite->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group col-12">
            <label for="name">Numero cite</label>
            <input required type="text" name="num_cite" value="{{$cite->num_cite}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du cite</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Libelle</label>
            <input required type="text" name="libelle" value="{{$cite->libelle}}"  class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du libelle</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Pseudo</label>
            <input required type="text" name="pseudo" value="{{$cite->pseudo}}"  class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du pseudo</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Numero agence</label>
            <input required type="text" name="num_agence" value="{{$cite->num_agence}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero agence du cite</small>
        </div>

        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
</div>




@endsection
