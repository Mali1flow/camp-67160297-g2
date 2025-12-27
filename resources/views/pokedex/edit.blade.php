@extends('template.default')

@section('content')
    <h1>Pokedex Create</h1>
    <form action="/pokedex/{{ $pokedex_update->id}}/update" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ $pokedex_update->id}}"><br>
        <label for="type">Type:</label>
        <input class="form-control" type="text" id="type" name="type" value="{{ $pokedex_update->id}}"><br>
        <label for="species">Species:</label>
        <input class="form-control" type="text" id="species" name="species" value="{{ $pokedex_update->id}}"><br>
        <label for="height">Height:</label>
        <input class="form-control" type="number" id="height" name="height" value="{{ $pokedex_update->id}}"><br>
        <label for="weight">Weight:</label>
        <input class="form-control" type="number" id="weight" name="weight" value="{{ $pokedex_update->id}}"><br>
        <label for="hp">HP:</label>
        <input class="form-control" type="number" id="hp" name="hp" value="{{ $pokedex_update->id}}"><br>
        <label for="attack">Attack:</label>
        <input class="form-control" type="number" id="attack" name="attack" value="{{ $pokedex_update->id}}"><br>
        <label for="defense">Defense:</label>
        <input class="form-control" type="number" id="defense" name="defense" value="{{ $pokedex_update->id}}"><br>
        <label for="image_url">Image URL:</label>
        <input class="form-control" type="text" id="image_url" name="image_url" value="{{ $pokedex_update->id}}"><br>
        <button class="btn btn-primary" type="submit" value="Submit">บันทึก</button>
    </form>

    @include ('pokedex.table')
@endsection
