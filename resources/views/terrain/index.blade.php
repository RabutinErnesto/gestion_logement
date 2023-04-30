@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs">
       <a name="" id="" class="btn btn-primary m-2" href="{{ route('terrain.create') }}" role="button">Ajouter un terrain</a>
    </div>
  </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Liste terrain</h6>
    </div>
        <div class="card-body">
            <div class="table-responsive">
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th scope="col"><span class="badge badge-dark">#Id</span></th>
            <th scope="col">Numero terrain</th>
            <th scope="col">Superficie</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($terrain as $data)
        <tr>
            <th scope="row"> <span class="badge badge-dark"># {{$data->id}}</span> </th>
            <td>{{$data->num_terrain}}</td>
            <td>{{$data->superficie_terrain}} m2</td>
            <td>
                <a name="" id="" class="btn btn-info mx-1 form-inline" href="{{ route('terrain.edit',$data->id) }}" role="button">Editer</a>

                <form action="{{ route('terrain.destroy',$data->id) }}" method ="post" class="d-inline">
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


