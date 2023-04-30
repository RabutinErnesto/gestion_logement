@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Acheter un logement
    </div>
    <div class="card-body">
      <form  action="{{ route('acheter.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-12">
            <label for="name">Client</label>
            <select class="form-select form-control" name="client_id" aria-label="Client">
                <option value=""></option>

                @foreach ($client as $item)
                <option value="{{$item->id}}">{{$item->nom}}  {{$item->prenoms}}</option>
                @endforeach

            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez le client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Ref logement</label>
            <select class="form-select form-control" name="logement_id" aria-label="Client">
                <option value=""></option>

                @foreach ($logement as $item)
                <option value="{{$item->id}}">{{$item->ref}} </option>
                @endforeach

            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez le logement acheter par le client</small>
        </div>

        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
  </div>
@endsection
