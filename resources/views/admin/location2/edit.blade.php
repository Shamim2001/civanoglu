<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create New Location') }}
            </h2>

            <div class="min-w-max">
                <a href="{{route('dashboard-location.index')}}" class="fullwidth-btn">Back</a>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm ">
                <form action="{{route('dashboard-location.update', $location->id)}}" class="p-6 bg-white border-b border-gray-200 " enctype="multipart/form-data"> @csrf
                    <div class="mb-6">
                        <label class="civanoglu-label" for="name">Title<span class="required-text">*</span></label>
                        <input class="civanoglu-input rounded-sm" type="text" id="name" name="name" value="{{$location->name}}" required>

                        @error('name')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <button class="civan-btn" type="submit">Save Location</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>