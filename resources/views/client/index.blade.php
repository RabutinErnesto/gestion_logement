@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs">
       <a name="" id="" class="btn btn-primary m-2" href="{{ route('client.create') }}" role="button">Ajouter un client</a>
    </div>
  </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Liste Client</h6>
    </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th scope="col"><span class="badge badge-dark">#Id</span></th>
            <th scope="col">Nom</th>
            <th scope="col">Prenoms</th>
            <th scope="col">Sexe</th>
            <th scope="col">Lieu de Travail</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($client as $data)
        <tr>
            <th scope="row"> <span class="badge badge-dark"># {{$data->id}}</span> </th>
            <td>{{$data->nom}}</td>
            <td>{{$data->prenoms}}</td>
            <td>{{$data->sexe}}</td>
            <td>{{$data->lieu_travail}}</td>
            <td>
                <a name="" id="" class="btn btn-info mx-1 form-inline" href="{{ route('client.edit',$data->id) }}" role="button">Editer</a>

                <form action="{{ route('client.destroy',$data->id) }}" method ="post" class="d-inline">
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


