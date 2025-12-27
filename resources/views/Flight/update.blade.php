@extends('template.default')
@section('header','Flight Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="/Flight/{{$flight_update}}" method="POST">

            @csrf
            <div class="col-12">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="col-12">
                <label for="airline">Airline:</label>
                <input type="text" name="airline" id="airline">
            </div>
            <div class="col-12">
                <label for="number_of_planes">Number of Planes:</label>
                <input type="number" name="number_of_planes" id="number_of_planes">
            </div>
            <div class="col-12">
                <label for="price_per_ticket">Price per Ticket:</label>
                <input type="number" name="price_per_ticket" id="price_per_ticket">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
    <div class="mt-3 col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Airline</th>
                    <th>Number of Planes</th>
                    <th>Price per Ticket</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Flights as $flight)
                <tr>
                    <td>{{ $flight->id }}</td>
                    <td>{{ $flight->name }}</td>
                    <td>{{ $flight->airline }}</td>
                    <td>{{ $flight->number_of_planes }}</td>
                    <td>{{ $flight->price_per_ticket }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
