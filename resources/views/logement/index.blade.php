@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs">
       <a name="" id="" class="btn btn-primary m-2" href="{{ route('logement.create') }}" role="button">Ajouter un logement</a>
    </div>
  </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Liste Logement</h6>
    </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th scope="col"><span class="badge badge-dark">#Id</span></th>
            <th scope="col">Ref</th>
            <th scope="col">Cité</th>
            <th scope="col">Nombre pieces</th>
            <th scope="col">Terrain</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($logement as $data)
        <tr>
            <th scope="row"> <span class="badge badge-dark"># {{$data->id}}</span> </th>
            <td>{{$data->ref}}</td>
            <td>{{implode( $data->cite()->get()->pluck('libelle')->toArray())}}</td>
            <td>{{$data->nbr_piece}}</td>
            <td>{{implode( $data->terrain()->get()->pluck('num_terrain')->toArray())}}</td>
            <td>
                <a name="" id="" class="btn btn-info mx-1 form-inline" href="{{ route('logement.edit',$data->id) }}" role="button">Editer</a>

                <form action="{{ route('logement.destroy',$data->id) }}" method ="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mx-1">Effacer </button>
                </form></td>
        </tr>
        @endforeach
    </tbody>
</table>
            </div></div></div>
@endsection


