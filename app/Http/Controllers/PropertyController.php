<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller {
    public function single( $id ) {
        $property = Property::with( 'gallery' )->findOrFail( $id );

        // dd( $property );

        return view( 'property.single', ['property' => $property] );
    }

    public function index( Request $request ) {

        $latest_properties = Property::latest();
        $locations = Location::select( ['id', 'name'] )->get();

        // // check sale
        if ( !empty( $request->sale ) ) {
            $latest_properties = $latest_properties->where( 'sale', $request->sale );
        }

        // check type
        if ( !empty( $request->type ) ) {
            $latest_properties = $latest_properties->where( 'type', $request->type );
        }

        if ( !empty( $request->location ) ) {
            $latest_properties = $latest_properties->where( 'location_id', $request->location );
        }

        // check property price
        if ( !empty( $request->price ) ) {
            if ( $request->price == 500001 ) {
                $latest_properties = $latest_properties
                    ->where( 'price', '>', 500000 );
            }
            if ( $request->price == 500000 ) {
                $latest_properties = $latest_properties
                    ->where( 'price', '>', 400000 )
                    ->where( 'price', '<=', 500000 );
            }
            if ( $request->price == 400000 ) {
                $latest_properties = $latest_properties
                    ->where( 'price', '>', 300000 )
                    ->where( 'price', '<=', 400000 );
            }
            if ( $request->price == 300000 ) {
                $latest_properties = $latest_properties
                    ->where( 'price', '>', 200000 )
                    ->where( 'price', '<=', 300000 );
            }
            if ( $request->price == 200000 ) {
                $latest_properties = $latest_properties
                    ->where( 'price', '>', 100000 )
                    ->where( 'price', '<=', 200000 );
            }
            if ( $request->price == 100000 ) {
                $latest_properties = $latest_properties
                    ->where( 'price', '>', 0 )
                    ->where( 'price', '<=', 100000 );
            }
        }

        // check bedrooms
        if ( !empty( $request->bedrooms ) ) {
            $latest_properties = $latest_properties->where( 'bedrooms', $request->bedrooms );
        }
        // check search
        if ( !empty( $request->property_name ) ) {
            $latest_properties = $latest_properties->where( 'name', 'LIKE', '%' . $request->property_name . '%' );
        }

        $latest_properties = $latest_properties->paginate( 12 );

        return view( 'property.index', ['latest_properties' => $latest_properties, 'locations' => $locations] );
    }
}
