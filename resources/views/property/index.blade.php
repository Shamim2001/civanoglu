<x-guest-layout>
    <div class="border-2 border-gray-300 py-2 bg-white mt-24">
        <div class="wrapper ">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800 mx-3" href="{{ route('home') }}">Property</a></li>
                <li>Properties</li>
            </ul>
        </div>
    </div>


    <div class="bg-white py-8">
        <div class="wrapper mx-auto">
            <h2 class="text-3xl text-gray-700">Properties
                @if(request('type') == '0')
                    - Land
                @elseif(request('type') == 1)
                    - Apartment
                @elseif(request('type') == 2)
                    - Villa
                @endif
            </h2>
        </div>
    </div>

    <!-- left content  -->
    <div class="wrapper mx-auto pb-10 relative">
        <div class="flex justify-between">
            <div class="w-9/12">
                <div class="flex flex-wrap -mx-2 justify-between mt-10">
                    @foreach($latest_properties as $property)
                        @include('components.single-property-card', ['property'=> $property])
                    @endforeach
                </div>
                {{$latest_properties->links()}}
            </div>

            <div class="w-3/12 ml-6 vertical-serach-form">
                @include('components.property-search-form')
            </div>
        </div>
    </div>

</x-guest-layout>