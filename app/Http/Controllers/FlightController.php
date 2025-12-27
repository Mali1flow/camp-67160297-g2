<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    //
    function index() {
        #echo "Controller";
        #$this->insert_db();
        #$this->update_db();
        #$this->delete_db();
        #print_r(Flight::all());

        $data['flights'] = Flight::all();
        return view('Flight.index', $data);

    }
    private function insert_db()
    {
        $flight = new Flight;
        $flight->name = "Test Flight";
        $flight->airline = "Test Airline";
        $flight->number_of_planes = 10;
        $flight->price_per_ticket = 50.0;
        $flight->save();
    }
    private function update_db()
    {
        $flight = Flight::find(2);
        $flight->name = "Updated Flight";
        $flight->save();
    }
    private function delete_db()
    {
        $flight = Flight::find(1);
        $flight->delete();
    }
    function store(Request $request) {
        //
        $flight = new Flight;
        $flight->name = $request->input('name');
        $flight->airline = $request->input('airline');
        $flight->number_of_planes = $request->input('number_of_planes');
        $flight->price_per_ticket = $request->input('price_per_ticket');
        $flight->save();
        return $this->index();
    }
    function update($id){
        $data['flight_update'] = Flight::find($id);
        $data['flights'] = Flight::all();
        return view('flight.update', $data);
    }
    function update_action(Request $request, $id){
        $flight = Flight::find($id);
        $flight->name = $request->input('name');
        $flight->airline = $request->input('airline');
        $flight->number_of_planes = $request->input('number_of_planes');
        $flight->price_per_ticket = $request->input('price_per_ticket');
        $flight->save();
        return redirect();
    }

    function delete_action(Request $req,$id){
        $flight = Flight::find($id);
        $flight->delete();
        return $this->index();
    }

}
