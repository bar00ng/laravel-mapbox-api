<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class MapboxController extends Controller
{
    public function index() {
        $locations = Location::get();
        return view('index', [
            'locations' => $locations
        ]);
    }

    public function store_location(Request $r) {
        $validated = $r->validate([
            'longitude' => 'required',
            'latitude' => 'required',
            'location_name' => 'required'
        ]);

        $product = Location::create($validated);
    }

    public function remove_location($id) {
        Location::where('id', $id)->delete();

        return redirect('/');
    }

    public function get_location($id) {
        $location = Location::where('id',$id)->first();
        $locations = Location::get();

        return view('edit',[
            'location' => $location,
            'locations' => $locations
        ]);
    }

    public function edit_location(Request $r, $id) {
         $validated = $r->validate([
            'longitude' => 'required',
            'latitude' => 'required',
            'location_name' => 'required'
        ]);

        Location::where('id', $id)->update($validated);
    }
}
