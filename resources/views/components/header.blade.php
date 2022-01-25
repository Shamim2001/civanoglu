<div class="fixed top-0 w-full py-4 px-12 flex
justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '': 'general-header'}}">
    <div class="min-w-max">
        <a href="{{route('home')}}"><img  src="/img/logo.png" alt="site logo"></a>
    </div>
    <div class="w-full">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=1">Land</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=2">{{__('villa')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=3">Apartment</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page', 'about-us')}}">About Us</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page', 'contact-us')}}">Contact Us</a></li>
        </ul>
    </div>

    <!-- language switch -->
    <div class="min-w-max text-3xl flex">
        <div class="min-w-max text-white mr-14 ">
            <a href="{{route('currency-change', 'usd')}}" class="p-6">$</a>
            <a href="{{route('currency-change', 'tl')}}">₺</a>
        </div>


        <div class="min-w-max text-white">
            <a href="{{ LaravelLocalization::getLocalizedURL('tr')}}">🇹🇷</a>
            <a href="{{ LaravelLocalization::getLocalizedURL('en')}}">🇺🇸</a>
        </div>
    </div>


</div>