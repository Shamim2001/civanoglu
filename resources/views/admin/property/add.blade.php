<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add New Properties') }}
            </h2>

            <div class="min-w-max">
                <a href="{{route('dashboard-properties')}}" class="fullwidth-btn">Back</a>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('create-property')}}" method="POST" enctype="multipart/form-data" class="p-6 bg-white border-b border-gray-200"> @csrf
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="name">Title</label>
                            <input class="civanoglu-input" type="text" id="name" name="name">

                            @error('name')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="name_tr">Title - Turkish</label>
                            <input class="civanoglu-input" type="text" id="name_tr" name="name_tr">

                            @error('name_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="civanoglu-label" for="featured_image">featured-image</label>
                        <input class="civanoglu-input" type="file" id="featured_image" name="featured_image">

                        @error('featured_image')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="civanoglu-label" for="gallery_images">Gallery-image</label>
                        <input class="civanoglu-input" type="file" id="gallery_images" multiple name="gallery_images[]">

                        @error('gallery_images')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="location_id">Location</label>
                            <select name="location_id" id="location_id">
                                <option value="">Select Location</option>

                                @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach

                            </select>

                            @error('location_id')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="price">price</label>
                            <input class="civanoglu-input" type="number" id="price" name="price">

                            @error('price')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="sale">For</label>
                            <select name="sale" id="location_id">
                                <option value="">Select Type</option>
                                <option value="1">Rent</option>
                                <option value="2">Buy</option>
                            </select>

                            @error('sale')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="type">Type</label>
                            <select name="type" id="type">
                                <option value="1">Land</option>
                                <option value="2">Apartment</option>
                                <option value="3">Villa</option>
                            </select>

                            @error('type')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- bedrooms to 5 collumn  -->
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="bedrooms">bedrooms</label>
                            <select name="bedrooms" id="bedrooms">
                                <option value="">Select Bedrooms</option>
                                @for($x = 0; $x <= 8; $x++) <option {{old('bedrooms')==$x ? 'selected="selected"' : '' }}
                                        value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('bedrooms')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="bathrooms">bathrooms</label>
                            <select name="bathrooms" id="bathrooms">
                                <option value="">Select Bathrooms</option>
                                @for($x = 0; $x <= 8; $x++) <option {{old('bathrooms')==$x ? 'selected="selected"' : '' }}
                                        value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('bathrooms')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="net_sqm">Net square meeter</label>
                            <input type="text" id="net_sqm" name="net_sqm">

                            @error('net_sqm')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="gross_sqm">Gross square meeter</label>
                            <input type="text" id="gross_sqm" name="gross_sqm">

                            @error('gross_sqm')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="pool">pool</label>
                            <select name="pool" id="pool">
                                <option value="">Select Pool</option>
                                <!-- <option value="">No</option>
                                <option value="">Privet</option>
                                <option value="">Public</option>
                                <option value="">Both</option> -->
                                @for($x = 0; $x <= 8; $x++) <option {{old('pool')==$x ? 'selected="selected"' : '' }}
                                        value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>

                            @error('pool')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- overview -->
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="Overview">Overview</label>
                            <textarea class="civanoglu-input" name="Overview" id="Overview" cols="30" rows="10"></textarea>

                            @error('Overview')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="Overview_tr">Overview - Turkish</label>
                            <textarea class="civanoglu-input" name="Overview_tr" id="Overview_tr" cols="30" rows="10"></textarea>

                            @error('Overview_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- why buy -->
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="why_buy">why_buy</label>
                            <textarea class="civanoglu-input" name="why_buy" id="why_buy" cols="40" rows="10"></textarea>

                            @error('why_buy')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="why_buy_tr">why_buy - Turkish</label>
                            <textarea class="civanoglu-input" name="why_buy_tr" id="why_buy_tr" cols="40" rows="10"></textarea>

                            @error('why_buy_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- description -->
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="description">description</label>
                            <textarea class="civanoglu-input" name="description" id="description" cols="30" rows="10"></textarea>

                            @error('description')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="description_tr">description - Turkish</label>
                            <textarea class="civanoglu-input" name="description_tr" id="description_tr" cols="50" rows="10"></textarea>

                            @error('description_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <button class="civan-btn" type="submit">Save Property</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>