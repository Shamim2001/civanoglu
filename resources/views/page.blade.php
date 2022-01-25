<x-guest-layout>
    <div class="border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="wrapper mx-auto">
            <ul class="flex items-center">
                <li><a href=""></a></li>
                <li><a class="text-base text-red-800 mx-3" href="{{route('home')}}">Property</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>


    {{$page}}
</x-guest-layout>