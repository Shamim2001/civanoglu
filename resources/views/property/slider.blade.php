

<div class="largeSlider">
    @forelse ($property->gallery as $item)
    @if (file_exists(public_path('storage/uploads/' . $item->name)))
    <div class="single-item" style="background-image: url('/uploads/{{ $item->name }}')"></div>
    @else
    <div class="single-item" style="background-image: url('{{ $item->name }}')"></div>

    @endif

    @empty

    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    @endforelse
</div>
<div class="thumbSlider">
    @forelse ($property->gallery as $item)
    @if (file_exists(public_path('storage/uploads/' . $item->name)))
    <div class="single-item" style="background-image: url('/uploads/{{ $item->name }}')"></div>
    @else
    <div class="single-item" style="background-image: url('{{ $item->name }}')"></div>

    @endif
    @empty

    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-1.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-2.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-3.jpg')"></div>
    <div class="single-item" style="background-image: url('https://swiperjs.com/demos/images/nature-4.jpg')"></div>
    @endforelse
</div>
