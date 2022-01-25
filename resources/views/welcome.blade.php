<x-guest-layout>
    <!-- banner section starts here -->
    <div class="relative z-10 pt-52 pb-64 bg-cover bg-center" style="background-image: url(/img/banner-bg.jpg)">
        <div class="absolute h-full w-full bg-black opacity-70 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-white text-center text-2xl">
            <h2 class="font-bold text-5xl pb-5">
                Guide Property -- your guide <br />
                to the primary real estate market in Dubai.
            </h2>
            <p>
                The most convenent real estate search portal in Dubai, start
                searching now!
            </p>
        </div>
    </div>
    <!-- banner section ends here -->
    <div class="container bg-white p-4 rounded-lg relative -m-10 z-30 shadow-lg ">
        @include('components.property-search-form', ['locations' => $locations])
    </div>

    <!-- real start section starts here -->
    <div class="py-32">
        <div class="container text-center">
            <h2 class="font-bold text-4xl text-gray-800 mb-6">
                Choose real estate by point, Quickley <br />
                and efficiently with the help of
                <a href="" class="underline">Smart search</a>
            </h2>
            <p class="text-gray-700 text-2xl font-bold mb-10">
                Answer a few questions and get access to a personal selection of
                objects
            </p>

            <button
                type="btn"
                class=" border-2 border-gray-500 text-xl rounded-2xl px-7 py-3 inline-block hover:bg-gray-600 hover:border-opacity-0 duration-300">Start the review</
            >
        </div>
    </div>
    <!-- real start section ends here -->
    <div class="container text-center py-32">
            <!-- our service section start -->
        <h1 class="font-bold text-4xl text-gray-800 mb-12 leading-10">
                Why should you choose a property <br />
                with the help of our service?
        </h1>

        <div class=" max-w-5xl m-auto flex justify-between mb-10">
            <div class="text-center">
                <h2 class="font-bold text-2xl text-gray-800">
                        Huge selection <br />of real estate
                </h2>
                <p class="text-gray-500">
                    Choose from the best properties <br />
                        from the most current developers
                </p>
                </div>
                <div class="text-center" >
                    <h2 class="font-bold text-2xl text-gray-800">
                        Full information <br/> about objects and buildings
                    </h2>
                    <p class="text-gray-500">
                        Access to the main benefits, <br/> characteristics and feature directly <br /> from the object page
                    </p>
                </div>
                <div class="text-center">
                    <h2 class="font-bold text-2xl text-gray-800 ">
                        The ability to get an online <br /> display of the object
                    </h2>
                    <p class="text-gray-500">
                        Book an online display of any of the objects you are <br /> the interestedin
                    </p>
                </div>
            </div>

            <!-- 2nd sec -->
            <div class=" max-w-5xl m-auto flex justify-between mb-10">
                <div class="text-center">
                    <h2 class="font-bold text-2xl text-gray-800">
                        Huge selection <br />of real estate
                    </h2>
                    <p class="text-gray-500">
                        Choose from the best properties <br />
                        from the most current developers
                    </p>
                </div>
                <div class="text-center" >
                    <h2 class="font-bold text-2xl text-gray-800">
                        Full information <br/> about objects and buildings
                    </h2>
                    <p class="text-gray-500">
                        Access to the main benefits, <br/> characteristics and feature directly <br /> from the object page
                    </p>
                </div>
                <div class="text-center">
                    <h2 class="font-bold text-2xl text-gray-800 ">
                        The ability to get an online <br /> display of the object
                    </h2>
                    <p class="text-gray-500">
                        Book an online display of any of the objects you are <br /> the interestedin
                    </p>
                </div>
            </div>
        </div>
        <!-- real estate section ends here -->


    <!-- video section starts here -->

    <div class="py">
        <h3 class="header__section">More information About Us</h3>
        <div class=" container relative z-10 p-24 rounded-2xl bg-cover bg-center " style="background-image: url(/img/banner-bg.jpg)">
            <div class="absolute h-full rounded-2xl w-full bg-black opacity-10 top-0 left-0 z-10"></div>
            <div class=" m-auto w-6 border-4 border-white  rounded-full p-10 mb-4"></div>
            <h2 style="margin-left: 26rem" class=" text-white text-xl">Watch the video</h2>
        </div>

        <div class="container py-14">
            <p class="text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus suscipit tempore magnam blanditiis, non, a id dignissimos molestias officia totam cum! Ab voluptatem delectus assumenda in perspiciatis voluptatibus consequuntur quis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta deleniti est obcaecati fugit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit cupiditate soluta reprehenderit.</p>
        </div>
    </div>
    <div class="container pt-14">
        <div class="flex justify-between">
            <div class="flex-1 mr-10 ">
                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam architecto accusantium impedit vero a consectetur eaque, similique cum blanditiis repellendus sed, esse laboriosam magni saepe adipisci! Est, unde natus ullam, consectetur sequi, ex a odio vel delectus inventore ab. Totam vel ut aliquam. Dolore commodi possimus adipisci ipsam laudantium eius. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut iste nisi non voluptates doloribus consequuntur, reprehenderit amet tempora fugiat sequi temporibus magni accusantium eaque doloremque quos voluptas qui. Facilis, fugit?</p>

            </div>
           <div class="flex-1 ml-10 rounded-2xl">
               <img src="/img/banner-2.jpg" class="rounded-2xl" alt="">
           </div>
        </div>
    </div>

    <div class="container">
        <div class="flex justify-center items-center py-16">
            <a href="btn" class="text-white border-2 px-24 py-2 bg-gray-600 rounded-xl font-bold inline-block hover:bg-transparent hover:text-black hover: duration-500  hover:border-gray-500">search</a>
            <p class="mx-10 font-bold text-xl">Or</p>
            <a href="" class=" text-black border-2 px-24 py-2 border-gray-500 rounded-xl font-bold inline-block hover:bg-gray-700 hover: duration-500 hover:border-opacity-0">search</a>
        </div>
    </div>

    <!-- object section starts here -->
    <div class="container py-14 ">
        <h2 class="header__section">Last Added Objects</h2>
        <div class="flex flex-wrap -mx-2 justify-between mt-10">


            @foreach($latest_properties as $property)
                @include('components.single-property-card', ['property'=> $property])
            @endforeach
        </div>
    </div>
    <!-- object section ends here -->

</x-guest-layout>
