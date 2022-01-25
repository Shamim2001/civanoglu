<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        $page = new Page();
        $page->name = 'Contact-US';
        $page->slug = 'contact-us';
        $page->content = 'lorem';
        $page->save();

        $page = new Page();
        $page->name = 'About-US';
        $page->slug = 'about-us';
        $page->content = 'lorem';
        $page->save();

        // $user = new User();
        // $user->name = 'Shamim Ahmed';
        // $user->email = 'shamim@website.com';
        // $user->email_verified_at = now();
        // $user->password = Hash::make( 'shamim@website.com' );
        // $user->remember_token = Str::random( 10 );
        // $user->save();

        $user = new User();
        $user->name = 'Shamim Ahmed';
        $user->email = 'shamimahmed4113@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make( 'shamim' );
        $user->remember_token = Str::random( 10 );
        $user->save();

        \App\Models\Location::factory( 10 )->create();
        \App\Models\Property::factory( 30 )->create();
        \App\Models\Media::factory( 500 )->create();
    }
}
