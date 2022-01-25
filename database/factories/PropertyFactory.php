<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'name'           => $this->faker->sentence,
            'name_tr'        => $this->faker->sentence,
            'featured_image' => 'https://picsum.photos/1200/800?random=' . rand( 10, 1000 ),
            'location_id'    => Location::all()->random()->id,
            'price'          => rand( 10000, 1000000 ),
            'sale'           => rand( 1, 2 ),
            'type'           => rand( 1, 3 ),
            'bedrooms'       => rand( 1, 6 ),
            'bathrooms'      => rand( 1, 5 ),
            'net_sqm'        => rand( 55, 300 ),
            'gross_sqm'      => rand( 65, 450 ),
            'pool'           => rand( 1, 4 ),
            'Overview'       => $this->faker->text( 100 ),
            'Overview_tr'    => $this->faker->text( 100 ),
            'why_buy'        => $this->faker->text( 1000 ),
            'description'    => $this->faker->text( 500 ),
            'description_tr' => $this->faker->text( 500 ),
        ];
    }
}
