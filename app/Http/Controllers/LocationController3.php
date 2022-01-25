<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller {
    public function locations() {
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

        return redirect( route( 'dashboard-locations' ) );

    }

    public function edit( $id ) {
        $location = Location::findOrFail( $id );

        return view( 'admin.location.edit', ['location' => $location] );
    }

    public function update( Request $request, $id ) {
        $request->validate( [
            'name' => 'required',
        ] );

        $location = new Location();
        $location = Location::findOrFail( $id );
        $location->name = $request->name;
        $location->save();

        return redirect( route( 'location-edit' ) );

    }
}
