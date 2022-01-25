<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller {
    public function index() {
        $locations = Location::latest()->paginate( 20 );
        return view( 'admin.location.index', ['locations' => $locations] );
    }

    public function create() {
        return view( 'admin.location.create' );
    }

    public function store( Request $request ) {
        $request->validate( [
            'name' => 'required',
        ] );

        $location = new Location();
        $location->name = $request->name;
        $location->save();

        return redirect( route( 'dashboard-location' ) );
    }

    public function edit( $id ) {
        $location = Location::findOrFail( $id );

        return view( 'admin.location.edit', ['location' => $location] );
    }

    public function update( Request $request, $id ) {
        $request->validate( [
            'name' => 'required',
        ] );

        $location = Location::findOrFail( $id );
        $location->name = $request->name;
        $location->save();

        return back();

    }

    public function destroy( $id ) {
        $location = Location::findOrfail( $id );
        $location->delete();

        return redirect( route( 'dashboard-location' ) );
    }
}
