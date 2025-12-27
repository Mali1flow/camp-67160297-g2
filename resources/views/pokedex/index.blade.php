@extends('template.default')

@section('header1', 'Flight Data')
@section('content')
    <h1>Pokedex Create</h1>
    <form action="{{url('/pokedex')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name"><br>
        <label for="type">Type:</label>
        <input class="form-control" type="text" id="type" name="type"><br>
        <label for="species">Species:</label>
        <input class="form-control" type="text" id="species" name="species"><br>
        <label for="height">Height:</label>
        <input class="form-control" type="number" id="height" name="height"><br>
        <label for="weight">Weight:</label>
        <input class="form-control" type="number" id="weight" name="weight"><br>
        <label for="hp">HP:</label>
        <input class="form-control" type="number" id="hp" name="hp"><br>
        <label for="attack">Attack:</label>
        <input class="form-control" type="number" id="attack" name="attack"><br>
        <label for="defense">Defense:</label>
        <input class="form-control" type="number" id="defense" name="defense"><br>
        <label for="image_url">Image URL:</label>
        <input class="form-control" type="text" id="image_url" name="image_url"><br>
        <button class="btn btn-primary" type="submit" value="Submit">บันทึก</button>
    </form>

    @include ('pokedex.table')
@endsection
