<x-guest-layout>
    // breadcrumb
    <div class="border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="wrapper mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800 mx-3" href="">Property</a></li>
                <li>{{$property->name}}</li>
            </ul>
        </div>
    </div>

    <!-- title sec start -->
    <div class="bg-white py-8">
        <div class="wrapper">
            <div class="flex justify-between">
                <div class="w-8/12">
                    <h2 class="font-bold text-2xl text-gray-600">
                    {{$property->name}}
                    </h2>
                    <h3 class="text-lg mt-2">Price: <span class="text-red-800">{{$property->dynamic_pricing($property->price)}}</span></h3>
                </div>

                <div class="w-3/12 ">
                    <ul class="flex justify-end">
                        <li>
                            <a class="flex flex-col justify-center rounded-md items-center mx-2 border-2 border-gray-200 p-3" href=""><span class="text-md block">Print</span></a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center rounded-md items-center mx-2 border-2 border-gray-200 p-3" href=""><span class="text-md block">Save</span></a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center rounded-md items-center mx-2 border-2 border-gray-200 p-3" href=""><span class="text-md block">Share</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- title sec ends -->

    <!-- left content  -->
    <div class="wrapper mx-auto py-10 relative">
        <div class="flex justify-between">
            <div class="w-9/12">
            <div id="slider" class="">
            @include('property.slider')
            </div>
                <!-- <div id="slider" class="">
                    <div class="gallery-slider">
                        @foreach($property->gallery as $gallery)
                        <div style="background-image: url({{$gallery->name}});" class="single-gallery-item bg-cover bg-center"></div>
                        @endforeach;

                    </div>

                    <div class="thumbnail-slider">
                        @foreach($property->gallery as $gallery)
                        <div style="background-image: url({{$gallery->name}});" class="single-thumbnail-item bg-cover bg-center mx-1 "></div>
                        @endforeach;

                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- left content end -->
    <div class="wrapper ">
        <div class=" absolute top-96 right-36  float-right">
            <p style="border-color: 2px red;" class="border-2 border-red-700 px-4 py-2 mb-5">
                Subcribe ti Property Turkey <br /> media for blogs/news/videos
            </p>
            <div class=" bg-gray-400 " >
                <h3 class="p-4 text-2xl text-gray-800">Enquire about this <br> property</h3>

                @if(Session::get('message'))
                <p class="mb-6 p-3 bg-green-100 text-green-700">{{Session::get('message')}}</p>
                @endif

                <form action="{{route('property-inquiry', $property->id)}}" method="POST" class="p-4">
                    @csrf
                    <label class="inputLabel" for="name">Name <span class="text-red-800 font-serif">*</span></label>
                    <input type="text" id="name" name="name" class="inputField" placeholder="First Name" value="{{old('name')}}" required />

                    @error('name')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                    @enderror

                    <label class="inputLabel" for="phone">Phone <span class="text-red-800 font-serif">*</span></label>
                    <input type="text" id="phone" name="phone" class="inputField" placeholder="Phone" value="{{old('phone')}}" required/>

                    @error('phone')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                    @enderror

                    <label class="inputLabel" for="email">Email <span class="text-red-800 font-serif">*</span></label>
                    <input type="text" id="email" name="email" class="inputField" placeholder="Email" value="{{old('email')}}" required/>

                    @error('email')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                    @enderror

                    <label class="inputLabel" for="message">Message <span class="text-red-800 font-serif">*</span></label>
                    <textarea type="text" id="message" name="message" class="inputField" placeholder="Message" value="{{old('message')}}" required ></textarea>

                    @error('message')
                        <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                    @enderror



                    <button type="submit" class="btn bg-red-600 text-white Hover:bg-transparent hover:text-black-800 duration-200 mt-4">Request Details</button>
                </form>
            </div>
        </div>
    </div>
    <!-- right content -->

    <!-- right content end -->

    <!-- overview sec starts -->
    <div class="wrapper mx-auto py-14">
        <div class="flex justify-between items-center bg-white p-4 mt-10 shadow-sm">
            <h3 class="text-gray-600 text-lg w-2/12">Overview</h3>
            <div class="w-10/12 border-l-2 border-gray-300 pl-5 ml-5 text-base ">
                <p>{{$property->Overview}}</p>
            </div>
        </div>
        <!-- property freatur sec -->
        <div class="flex justify-between items-center bg-white p-4 mt-10 shadow-sm">
            <h3 class="text-gray-600 text-lg w-2/12">Property Freatur</h3>
            <div class="w-10/12 ml-2 text-base flex justify-between ">
                <div class="flex border-l-2 border-gray-300 ml-3 pl-3 self-center">
                    <ul>
                        <li class="flex text-sm mb-2">
                            <div class="flex">
                                <i class="fa fa-home mr-2 text-red-400 w-5 text-center"></i>
                                <span class="text-sm">Type:</span>
                            </div>
                            <span class="ml-2 font-bold">
                                @if($property->type== 1)
                                    Apartment

                                @elseif($property->type == 2)
                                    Villa

                                @else
                                    Land
                                @endif
                            </span>
                        </li>
                        <li class="flex text-sm mb-2">
                            <div class="flex">
                                <i class="fa fa-home mr-2 text-red-400 w-5 text-center"></i>
                                <span class="text-sm">Bedrooms:</span>
                            </div>
                            <span class="ml-2 font-bold">4</span>
                        </li>
                    </ul>
                </div>

                <div class="flex border-l-2 border-gray-300 ml-3 pl-3 self-center">
                    <ul>
                        <li class="flex text-sm mb-2">
                            <div class="flex">
                                <i class="fa fa-home mr-2 text-red-400 w-5 text-center"></i>
                                <span class="text-sm">Bedrooms:</span>
                            </div>
                            <span class="ml-2 font-bold">4</span>
                        </li>
                        <li class="flex text-sm mb-2">
                            <div class="flex">
                                <i class="fa fa-home mr-2 text-red-400 w-5 text-center"></i>
                                <span class="text-sm">Location:</span>
                            </div>
                            <span class="ml-2 font-bold">bodrum</span>
                        </li>

                    </ul>
                </div>

                <div class="flex border-l-2 border-gray-300 ml-3 pl-3 self-center">
                    <ul>
                        <li class="flex text-sm mb-2">
                            <div class="flex">
                                <i class="fa fa-home mr-2 text-red-400 w-5 text-center"></i>
                                <span class="text-sm">Living space sqm: 327</span>
                            </div>
                            <span class="ml-2 font-bold">Private</span>
                        </li>
                        <li class="flex text-sm mb-2">
                            <div class="flex">
                                <i class="fa fa-home mr-2 text-red-400 w-5 text-center"></i>
                                <span class="text-sm">pool:</span>
                            </div>
                            <span class="ml-2 font-bold">Privet</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="flex justify-between items-center bg-white p-4 mt-10 shadow-sm">
            <h3 class="text-gray-600 text-lg w-2/12">Property Freatur</h3>
            <div class="border-l-2 border-gray-300 w-10/12 ml-5 pl-5 text-base ">
                <ul>
                    <li>
                        <p>- Five-star homes with access to private bay and beach</p>
                    </li>
                    <li>
                        <p>- Five-star homes with access to private bay and beach</p>
                    </li>
                    <li>
                        <p>- Five-star homes with access to private bay and beach</p>
                    </li>
                    <li>
                        <p>- Five-star homes with access to private bay and beach</p>
                    </li>
                    <li>
                        <p>- Five-star homes with access to private bay and beach</p>
                    </li>
                    <li>
                        <p>- Five-star homes with access to private bay and beach</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bg-white p-8 mt-10 shadow-sm" id="description">

            <h2 class="font-bold mb-2"> FACILITIES &amp; LOCATION</h2>

            <p>With beautiful views across the sea and bay, these stunning properties are luxury-designed
            and tick all the boxes for those looking for an elite lifestyle in exclusive development
            in a highly sought after area of Bodrum, within driving distance to the cicentre and with
            sailing options, restaurants, private pools, and a plethora of other featuravailable.</p>

            <h3 class="mb-2">About the project and residences</h3>
            <p>There are luxury suites for sale, designed with exclusive and outstandinarchitecture with
            attention to detail in every corner. There are different floor plaavailable, with
            residences ranging in size for all types of buyers. Buyers can choose frdupleproperties
            or penthouse homes. Garden floor duplex residences and all penthouses hatheir own private
            swimming pools attached for added comfort and a luxury lifestyle guaranteedp>
            <p>By owning a property within this development, you are entitled access to outstanding, world
            class on-site social and communal facilities run in partnership with a worldwide
            award-winning hotel brand, including everything from maintenance to housekeeping to sea
            shuttle services taking you to Bodrum Marina – life here is a 5-star resort on a daily basis
            and all just a phone call away; the developer has included and thought of everything.</p>
            <p>Inside, each suite has been fully furnished and decorated from top to bottom, leaving you
            with only the difficult task left of packing your suitcase to head for Bodrum as absolutely
            everything else is ready and waiting for you. All properties are fitted with the latest
            technologies and mod cons to provide a luxury lifestyle at home. Floor space has been
            perfectly planned inside and out to take advantage of full open sea and bay views
            throughout. Garden floor duplexes and penthouse suites have private swimming pools.</p>

            <p><strong>Features and facilities include</strong></p>

                <p>- Access to private bay and beach area</p>
                <p>- Sea and road shuttle services</p>
                <p>- State-of-the-art sea view terrace</p>
                <p>- Large shared swimming pool</p>
                <p>- Landscaped gardens and relaxing areas</p>
                <p>- Helipad for travel by helicopter</p>
                <p>- Two beachfront restaurants for world cuisine</p>
                <p>- Four other restaurants around the development</p>
                <p>- Fully equipped modern gym and yoga suite</p>
                <p>- Spa and wellness centre to rejuvenate yourself</p>
                <p>- Concierge, housekeeping, and chef available</p>
                <p>- Shopping services before arrival</p>
                <p>- Kids club, babysitting, and summer school</p>
                <p>- Pet care for those with loved animals</p>
                <p>- Car parking available for residents</p>
                <p>- Fully secure at all times 24 hours a day</p>
                <p>- And much, much more to discover inside</p>


                <p><strong>Property prices and availability</strong></p>
                <p>The project is split into two sections – luxury residences and valley residences, all
                situated in one of the most stunning bays in Yaliciftlik. Property prices and lity
                range from the following:&nbsp;</p>
                <p>- 42 residences from three – seven bedrooms and sized 327m2 – 675m2 for sale from 1,750,000
                Euro.&nbsp;</p>
                <p><strong>NOTE</strong>: Prices displayed exclude VAT.</p>

                <p><strong>Rental potential</strong></p>
                <p>Should you desire to rent your suite out when not in use or are an investor looking for high
                end opportunities in Bodrum, there is a dedicated rental team on site happy tassist you
                and rent your property out on your behalf.</p>

            <p><strong>Distances by land</strong></p>
            <p>Bodrum Centre only 14km away</p>
            <p>Yalikavak Marina only 30km away</p>
            <p>Bodrum Airport only 38km away</p>

            <p><strong>Distances by sea</strong></p>
            <p>Bodrum centre within 6 sea miles</p>
            <p>Bodrum Marina within 6 sea miles</p>
            <p>Kos Island within 14 sea miles</p>
            <p>Gokova Peninsula within 44 sea miles</p>
            <p>Symi Island within 83 sea miles</p>
        </div>
    </div>
    <!-- overview sec ends -->
</x-guest-layout>