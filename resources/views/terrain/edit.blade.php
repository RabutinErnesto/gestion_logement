@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-info">
        <h4 class="card-title">Modification de terrain <span class="badge badge-dark">#{{ $terrain->id }}</span></h4>
    </div>
    <div class="card-body">
      <form action="{{ route('terrain.update', $terrain->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group col-12">
            <label for="name">Numero Terrain</label>
            <input required type="text" name="num_terrain" value="{{$terrain->num_terrain}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le numero du terrain</small>
        </div>

        <div class="form-group col-12">
            <label for="name">Superficie</label>
            <input required type="text" name="superficie" value="{{$terrain->superficie_terrain}}" class="form-control"   aria-describedby="nameHelp" >
            <small id="nameHelp" class="form-text text-muted">Entrez le superficie du terrain</small>
        </div>

        <div class="form-group col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>

      </form>
    </div>
</div>




@endsection
