@extends('layouts.app')
@section('title','gestione vestiti')
@section('content')
<h1></h1>
<div class="container">
<form method="POST" action="{{ route ('dresses.store')}}">
@method('POST')
@csfr
  <div class="form-group">
    <label for="inputVestito">Marca</label>
    <input type="text" class="form-control" name="Marca" id="inputVestito">
  </div>
  <div class="form-group">
    <label for="inputModello">Modello</label>
    <input type="text" class="form-control" name="Modello" id="inputModello" >
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection