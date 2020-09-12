@extends('layout.app')
@section('content')

  <header>
    <h1>Cars list</h1>
    <a href="{{route('cars.create')}}">Add new car</a>
  </header>

  <br>
  <br>
  @foreach ($cars as $car)
    <div class="car">
      <a href="{{ route('cars.show', $car)}}" >{{$car->manifacturer}} {{ $car->engine}}</a>

      <form action="{{ route('cars.destroy', $car->id) }}" method="post">
         @csrf
         @method('DELETE')
         <input class="elimina" type="submit" value="Elimina">
      </form>
    </div>
  @endforeach
@endsection
