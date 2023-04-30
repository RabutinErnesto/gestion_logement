@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Création nouveau cite
    </div>
    <div class="card-body">
      <form  action="{{ route('cite.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-12">
            <label for="name">Numero cite</label>
            <input required type="text" name="num_cite" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du cite</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Libelle</label>
            <input required type="text" name="libelle" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le libelle cite</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Pseudo</label>
            <input required type="text" name="pseudo" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le pseudo du cite</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Numero agence</label>
            <select name="num_agence" class="form-control"   aria-label="Numero du l'agence" required>
                <option></option>
                @foreach ($agence as $item)
                <option value="{{$item->num_agence}}">{{$item->num_agence}}</option>
                @endforeach
            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez le numero agence du cite</small>
        </div>


        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
  </div>
@endsection
