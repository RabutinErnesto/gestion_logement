@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-xs">
       <a name="" id="" class="btn btn-primary m-2" href="{{ route('acheter.create') }}" role="button">Ajouter un achat</a>
    </div>
  </div>
</div>


<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Liste Achat</h6>
    </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col"><span class="badge badge-dark">#Id</span></th>
                        <th scope="col">Clients</th>
                        <th scope="col">Ref Logement</th>
                        <th scope="col">Prix Logement</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acheter as $data)
                    <tr>
                        <th scope="row"> <span class="badge badge-dark"># {{$data->id}}</span> </th>
                        <td>{{implode($data->client()->get()->pluck('nom')->toArray())}}  {{implode($data->client()->get()->pluck('prenoms')->toArray())}}</td>
                        <td>{{implode($data->logement()->get()->pluck('ref')->toArray())}}</td>
                        <td>{{implode($data->logement()->get()->pluck('prix_logement')->toArray())}} Ar</td>
                        <td>
                            <a name="" id="" class="btn btn-info mx-1 form-inline" href="{{ route('acheter.edit',$data->id) }}" role="button">Editer</a>

                            <form action="{{ route('acheter.destroy',$data->id) }}" method ="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mx-1">Effacer </button>
                            </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>

@endsection


