<form action="{{ route('properties') }}" class="flex justify-between mt-10">
    <div class="flex w-7/12 justify-between">
        <div class="flex flex-col mx-3">
            <!-- {{request('sale')}} -->


            <select name="sale" class="border-0 focus:ring-0">
                <label for="sale">Buy or Rent</label>
                <option id="sale" value="">Buy or Rent</option>
                <option {{ request('sale') == '2' ? 'selected=selected' : '' }} value="2">Buy</option>
                <option {{ request('sale') == '1' ? 'selected=selected' : '' }} value="1">Rent</option>
            </select>
        </div>

        <!-- location check -->
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <select id="location" name="location" class="border-0 focus:ring-0">
                <option value="">Location</option>

                @foreach($locations as $location)
                <option {{ request('location') == $location->id ? 'selected=selected' : '' }} value="{{$location->id}}">{{$location->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <select name="type" class="border-0 focus:ring-0">
                <label for="type">Type</label>
                <option id="type" value="">Type</option>
                <option {{ request('sale') == '1' ? 'selected=selected' : '' }} value="1">Land</option>
                <option {{ request('sale') == '2' ? 'selected=selected' : '' }} value="2">Aparment</option>
                <option {{ request('sale') == '3' ? 'selected=selected' : '' }} value="3">Villa</option>
            </select>
        </div>
        <!-- 2nd -->
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-3">
            <select name="price" class="border-0 focus:ring-0">
                <label for="price">Price</label>
                <option id="price" value="">Price</option>
                <option value="100000">0 - 100000</option>
                <option value="200000">100000 - 200000</option>
                <option value="300000">300000 - 400000</option>
                <option value="500000">400000 - 500000</option>
                <option value="500001">500001</option>
            </select>
        </div>
        <!-- 3rd -->
        <div class="py-3 self-center border-gray-500 border-2"></div>
        <div class="flex flex-col mx-2">
            <select name="bedrooms" class="border-0 focus:ring-0">
                <label for="bedrooms">Bedrooms</label>
                <option id="bedrooms" value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    <!-- search option start-->
    <div class="flex">
        <input name="property_name" value="{{request('property_name')}}" type="text" placeholder="Try to Search something" class="w-full rounded-lg px-4 py-2 mr-2" />
        <button  type="btn" class="fullwidth-btn">Search</button>
    </div>
    <!-- search option end -->
</form>
