<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Properties') }}
            </h2>

            <div class="min-w-max">
                <a href="{{route('add-property')}}" class="fullwidth-btn">Add New Property</a>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full table-auto mb-6">
                        <thead>
                            <tr>
                                <th class="border px-4 py-3">Name</th>
                                <th class="border px-4 py-3">Location</th>
                                <th class="border px-4 py-3">price</th>
                                <th style="width: 250px;" class="border px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($properties as $property)
                            <tr>
                                <td class="border px-4 py-2">{{$property->name}}</td>
                                <td class="border px-4 py-2">{{$property->location->name}}</td>
                                <td class="border px-4 py-2">{{$property->price}}</td>
                                <td class="border px-4 py-2 text-center ">
                                    <a href="{{route('edit-property', $property->id )}}" class="bg-blue-500 text-white px-4 py-2 text-xs rounded">Edit</a>
                                    <a href="{{route('single-property', $property->id)}}" target="_blank" class="bg-green-500 text-white px-4 py-2 text-xs rounded">View</a>

                                    <form onclick="return confirm('Are you sure you want to delete the image?')" action="{{route('delete-property', $property->id)}}" method="post" class="inline-block"> @csrf
                                        <button type="submit"  class="bg-red-500 text-white px-4 py-2 text-xs rounded hover:text-white hover:bg-black duration-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$properties->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
