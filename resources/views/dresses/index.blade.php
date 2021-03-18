@extends('layouts.app')

@section('title','home vestiti')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Marca</th>
      <th scope="col">Modello</th>
      <th scope="col">Taglia</th>
    </tr>
  </thead>
  <tbody>
  @foreach($vestiti as $vestito)
    <tr>
      <th scope="row">{{$vestito->id}}</th>
      <td>{{$vestito->Marca}}</td>
      <td>{{$vestito->Modello}}</td>
      <td>{{$vestito->Taglia}}</td>
      <td><a href="{{route(dresses.show , ['dress' => $vestito->id])}}">Dettagli</a></td>
    </tr>
  </tbody>
</table>
@endsection