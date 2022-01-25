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
                <form action="{{route('update-property', $property->id)}}" method="POST" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data">
                    @csrf
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="name">Title</label>
                            <input class="civanoglu-input" type="text" id="name" name="name" value="{{$property->name}}" required>

                            @error('name')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="name_tr">Title - Turkish</label>
                            <input class="civanoglu-input" type="text" id="name_tr" name="name_tr" value="{{$property->name_tr}}" required>

                            @error('name_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="civanoglu-label" for="name_tr">featured-image</label>
                        <input class="civanoglu-input" type="file" id="featured_image" name="featured_image" value="{{$property->featured_image}}" required >
                        <p class="mt-3">
                            <img src="/storage/uploads/{{$property->featured_image}}" alt="">
                        </p>

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

                        <div class="flex mt-3">
                            @foreach($property->gallery as $gallery)
                            <div style="min-width: 100px;" class="mr-3 relative">
                                <div class="flex items-center justify-center h-full">
                                    <img style="max-width: 100px;" src="/storage/uploads/{{$gallery->name}}" alt="">
                                </div>

                                <a href="{{route('delete-media', $gallery->id)}}"
                                onclick="return confirm('Are you sure you want to delete the image?')" class="absolute top-0 right-0 bg-red-500 text-black leading-5 text-sm rounded text-center hover:text-white hover:bg-black duration-300">delete</a>
                            </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="location_id">Location</label>
                            <select name="location_id" id="location_id">
                                <option value="{{$property->location_id}}" required>Select Location</option>

                                @foreach($locations as $location)
                                    <option {{ $property->location->id == $location->id ? 'selected="selected"' : ''}} value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach

                            </select>

                            @error('location_id')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="price">price</label>
                            <input class="civanoglu-input" type="number" id="price" name="price" value="{{$property->price}}" required>

                            @error('price')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="sale">For</label>
                            <select name="sale" id="location_id" value="{{$property->sale}}" required>
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
                            <select name="type" id="type" value="{{$property->type}}" required>
                                <option value="">Select Tye</option>
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
                            <select name="bedrooms" id="bedrooms" value="{{$property->bedrooms}}" required>
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
                            <select name="bathrooms" id="bathrooms" value="{{$property->bathrooms}}" required>
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
                            <input type="text" id="net_sqm" name="net_sqm"value="{{$property->net_sqm}}" required>

                            @error('net_sqm')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="gross_sqm">Gross square meeter</label>
                            <input type="text" id="gross_sqm" name="gross_sqm" value="{{$property->gross_sqm}}" required>

                            @error('gross_sqm')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="pool">pool</label>
                            <select name="pool" id="pool" value="{{$property->pool}}" required>
                                <option value="">Select Pool</option>
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
                            <textarea class="civanoglu-input" name="Overview" id="Overview" cols="30" rows="10" value="{{$property->Overview}}" required></textarea>

                            @error('Overview')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="Overview_tr">Overview - Turkish</label>
                            <textarea class="civanoglu-input" name="Overview_tr" id="Overview_tr" cols="30" rows="10" value="{{$property->Overview_tr}}" required></textarea>

                            @error('Overview_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- why buy -->
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="why_buy">why_buy</label>
                            <textarea class="civanoglu-input" name="why_buy" id="why_buy" cols="40" rows="10" value="{{$property->why_buy}}" required></textarea>

                            @error('why_buy')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="why_buy_tr">why_buy - Turkish</label>
                            <textarea class="civanoglu-input" name="why_buy_tr" id="why_buy_tr" cols="40" rows="10" value="{{$property->why_buy_tr}}" required></textarea>

                            @error('why_buy_tr')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- description -->
                    <div class="flex -mx-4 mb-6">
                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="description">description</label>
                            <textarea class="civanoglu-input" name="description" id="description" cols="30" rows="10" value="{{$property->description}}" required></textarea>

                            @error('description')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="flex-1 px-4">
                            <label class="civanoglu-label" for="description_tr">description - Turkish</label>
                            <textarea class="civanoglu-input" name="description_tr" id="description_tr" cols="50" rows="10" value="{{$property->description_tr}}" required></textarea>

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