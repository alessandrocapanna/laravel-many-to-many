@extends('layout.app')

@section('content')
  <h1>modifica le caratteristiche dell'auto</h1>

  <form action="{{ route('cars.update' , $car->id) }}" method="post">
  @csrf
  @method('PUT')
  <label for="manifacturer">Manifacturer</label>
  <input type="text" name="manifacturer" value="{{ $car->manifacturer}}" placeholder="{{ $car->manifacturer}}">

  <label for="year">Year</label>
  <input type="number" name="year" value="{{ $car->year}}" placeholder="{{ $car->year}}">

  <label for="engine">Engine</label>
  <input type="text" name="engine" value="{{ $car->engine}}" placeholder="{{ $car->engine}}">

  <label for="plate">Plate</label>
  <input type="text" name="plate" value="{{ $car->plate}}" placeholder="{{ $car->plate}}">

  <input type="submit" value="Invia">
  </form>
  <a href="{{ route('cars.index')}}">go back</a>
@endsection
