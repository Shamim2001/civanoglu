<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Pages') }}
            </h2>

            <div class="min-w-max">
                <a href="{{route('dashboard-page.create')}}" class="fullwidth-btn">Add New Page</a>
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
                                <th style="width: 250px;" class="border px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td class="border px-4 py-2">{{$page->name}}</td>
                                <td class="border px-4 py-2 text-center ">
                                    <a href="{{route('dashboard-page.edit', $page->id)}}" class="bg-blue-500 text-white px-4 py-2 text-xs rounded">Edit</a>
                                    <a href="{{route('page', $page->slug)}}" target="_blank" class="bg-green-500 text-white px-4 py-2 text-xs rounded">View</a>

                                    <form onclick="return confirm('Are you sure you want to delete the image?')" action="{{route('dashboard-page.destroy', $page->id)}}" method="post" class="inline-block"> @csrf @method('delete')
                                        <button type="submit"  class="bg-red-500 text-white px-4 py-2 text-xs rounded hover:text-white hover:bg-black duration-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>