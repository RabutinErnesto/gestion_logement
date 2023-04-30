@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info">
        <h4 class="card-title">Modification d'achat <span class="badge badge-dark">#{{ $acheter->id }}</span></h4>
    </div>
    <div class="card-body">
      <form action="{{ route('acheter.update', $acheter->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group col-12">
            <label for="name">Client</label>
            <select class="form-select form-control" name="client_id" aria-label="Client">
                <option value="{{$acheter->client_id}}">{{implode($acheter->client()->get()->pluck('nom')->toArray())}}  {{implode($acheter->client()->get()->pluck('prenoms')->toArray())}}</option>

                @foreach ($client as $item)
                <option value="{{$item->id}}">{{$item->nom}}  {{$item->prenoms}}</option>
                @endforeach

            </select>
            <small id="nameHelp" class="form-text text-muted">Entrez le client</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Ref logement</label>
            <select class="form-select form-control" name="logement_id" aria-label="Client">
                <option value="{{$acheter->logement_id}}">{{implode($acheter->logement()->get()->pluck('ref')->toArray())}}</option>

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
