<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Page;
use App\Models\Property;
use Illuminate\Support\Facades\Cookie;

class HomeControrall extends Controller {
    public function home() {
        $latest_properties = Property::latest()->get()->take( 4 );

        $locations = Location::select( ['id', 'name'] )->get();

        return view( 'welcome', [
            'latest_properties' => $latest_properties,
            'locations'         => $locations,
        ] );
    }

    public function singleLocation( $id ) {
        $location = Location::findOrFail( $id );
    }

    public function single( $slug ) {
        $page = Page::where( 'slug', $slug )->first();

        if ( !empty( $page ) ) {
            return view( 'page', [
                'page' => $page,
            ] );
        } else {
            return view( '404' );
        }
    }

    public function currencyChange( $code ) {
        Cookie::queue( 'currency', $code, 3600 );

        return back();
    }

}
