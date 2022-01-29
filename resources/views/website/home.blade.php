<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth hover:scroll-auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{config('app.name')}}</title>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />

  {{--      <script src="https://unpkg.com/feather-icons"></script>--}}
  <style>
    .video-slider .swiper {
      width: 100%;
      /*padding-top: 50px;*/
      /*padding-bottom: 50px;*/
    }

    .video-slider .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
    .video-slider .swiper-slide.swiper-slide-visible.swiper-slide-active{
      /*width: 600px;*/
    }
    .video-slider .swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>
</head>
<body>
<div id="app">

  <header class="z-30 w-full px-2 py-4 bg-transparent sm:px-4 ">
    <div class="flex items-center justify-between mx-auto max-w-7xl ">
      <a href="#">
        <span class="text-2xl font-extrabold text-blue-600"><img src="{{asset('/images/website/logo-header.png')}}"
                                                                 alt=""></span>
      </a>
      <div class="flex items-center space-x-1 z-30">
        <ul class="hidden space-x-2 md:inline-flex">
          <li><a href="{{route('home')}}" class="px-3 py-2 font-semibold active rounded">Home</a></li>
          <li><a href="#" class="px-3 py-2 font-semibold   rounded">About Roxonin</a></li>
          <li><a href="{{route('home')}}#Why-section" class="px-4 py-2 font-semibold  rounded">Why Roxonin</a></li>
          <li><a href="{{route('home')}}#avatar" class="px-4 py-2 font-semibold  rounded">Know your pain</a></li>
          <li><a href="{{route('home')}}#gallery" class="px-4 py-2 font-semibold  rounded">Gallery</a></li>
          <li>
            <a href="#" class="flex items-center hover:text-blue-800 px-4 py-1 font-semibold rounded">
                <i data-feather='globe'></i>
                <span class="inline-block ml-1">EN</span>
            </a>
          </li>
          <li><a href="#" class="px-4 py-2 font-semibold rounded bg-blue-800 text-white hover:text-white">Contact Us</a></li>

        </ul>
        <div class="inline-flex md:hidden" x-data="{ open: false }">
          <button class="flex-none px-2 " @click="open = true">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
            </svg>
            <span class="sr-only">Open Menu</span>
          </button>
          <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow"
            x-show.transition="open" @click.away="open = false" x-cloak>
            <button class="self-end flex-none px-2 ml-2" @click="open = false">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
              <span class="sr-only">Close Menu</span>
            </button>
            <ul class="space-y-2">
              <li><a href="{{route('home')}}" class="px-3 py-2 font-semibold  rounded">Home</a></li>
              <li><a href="#" class="px-3 py-2 font-semibold  rounded">About Roxonin</a></li>
              <li><a href="{{route('home')}}#Why-section" class="px-3 py-2 font-semibold  rounded">Why Roxonin</a></li>
              <li><a href="{{route('home')}}#avatar" class="px-3 py-2 font-semibold  rounded">Know your pain</a></li>
              <li><a href="{{route('home')}}#gallery" class="px-3 py-2 font-semibold  rounded">Gallery</a></li>
              <li>
                <a href="#" class="flex items-center hover:text-blue-800 px-4 py-1 font-semibold rounded">
                  <i data-feather='globe'></i>
                  <span class="inline-block ml-1">EN</span>
                </a>
              </li>
              <li><a href="#" class="px-4 py-2 font-semibold rounded bg-blue-800 text-white">Contact Us</a></li>


            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="slider" class="pt-10">
    <img src="{{asset('images/website/top-right-bg.png')}}" class="absolute right-0 top-0 z-0" alt="">
    <img src="{{asset('images/website/Roxonin.png')}}" class="absolute left-0 top-0 z-0 w-screen" alt="">
    <div class="relative z-20">
      <div class="swiper main-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="flex items-center justify-between mx-auto max-w-7xl slider-item">
              <div class="">
                <h2 class="title xl:text-9xl md:text-6xl "> <b>Roxonin</b> <span class="xl:text-6xl md:text-3xl"><b>tape</b></span></h2>
                <h3 class="slider-slogan text-2xl">Tape on ... Pain Off</h3>
              </div>
              <div>
                <img class="object-cover w-full " src="{{asset('images/website/slider1.png')}}" alt="image"/>
              </div>

            </div>

          </div>
          <div class="swiper-slide">
            <div class="flex items-center justify-between mx-auto max-w-7xl slider-item">
              <div>
                <h2 class="title xl:text-8xl md:text-6xl "> <b>Roxonin</b> <span class="xl:text-6xl md:text-3xl"><b>tape</b></span></h2>
                <h3 class="slider-slogan text-2xl">Memorize your moments</h3>
              </div>
              <div>
                <img class="object-cover w-full -rotate-12 transform-gpu" src="{{asset('images/website/slider2.png')}}" alt="image"/>
              </div>

            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex items-center justify-between slider-item">
              <div class="mx-auto ">
                <h2 class="title xl:text-8xl md:text-6xl "> <b>Roxonin</b> <span class="xl:text-6xl md:text-3xl"><b>tape</b></span></h2>
                <h3 class="slider-slogan text-2xl">Once Daily, 24 Hours</h3>
              </div>
              <div>
                <img class="object-cover w-full" src="{{asset('images/website/slider3.png')}}" alt="image"/>
              </div>

            </div>
          </div>
          <div class="swiper-slide">
            <div class="flex items-center justify-between mx-auto max-w-7xl">
              <div class="">
                <h2 class="title xl:text-9xl lg:text-8xl text-6xl"> <b>Roxonin</b> <span class="xl:text-6xl lg:text-3xl"><b>tape</b></span></h2>
                <h3 class="slider-slogan text-2xl"> Easy to keep, easy to use</h3>
              </div>
              <div>
                <img class="object-cover w-full lg:mr-36" src="{{asset('images/website/slider4.png')}}" alt="image"/>
              </div>

            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="social mx-auto max-w-7xl">
          <div>
            <a href="#" class="inline-block"> <img src="{{asset('images/website/facebook.png')}}" alt=""></a>
          </div>
          <div>
            <a href="#" class="inline-block mb-6"> <img src="{{asset('images/website/twitter.png')}}" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="avatar" class="bg-white py-32 relative overflow-hidden">
    <img src="{{asset('images/website/avatar-section-bg.png')}}" class="absolute -right-56 top-0 z-0" alt="">
    <img src="{{asset('images/website/avatar-section-bg.png')}}" class="absolute -left-48 top-80 z-0" alt="">
    <div class=" pb-40 mx-auto max-w-7xl">
      <h2 class="xl:text-6xl text-center lg:text-5xl text-2xl title"> <b>Know your pain</b> </h2>
    </div>

    <div x-data="{ openAvatar: true }" class="relative">

      <div x-show="openAvatar"   class="grid grid-cols-3 items-center gap-2 mx-auto max-w-7xl">
        <div class="justify-self-end pr-5">
          <div class="text-right muscle-info mb-3">
            <img src="{{asset('images/website/front-left-1.png')}}" class="rounded-full w-20 ml-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-right muscle-info mb-3">
            <img src="{{asset('images/website/front-left-2.png')}}" class="rounded-full w-20 ml-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-right muscle-info mb-3">
            <img src="{{asset('images/website/front-left-3.png')}}" class="rounded-full w-20 ml-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
        </div>
        <div class="">
          <div class="relative">
            <img src="{{ asset('images/website/avatar-front.png') }}" class="" alt="">
          </div>
        </div>
        <div  class="self-start pl-5">
          <div class="text-left muscle-info mb-3">
            <img src="{{asset('images/website/front-right-1.png')}}" class="rounded-full w-20 mr-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-left muscle-info mb-3">
            <img src="{{asset('images/website/front-right-2.png')}}" class="rounded-full w-20 mr-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-left muscle-info mb-3">
            <img src="{{asset('images/website/front-right-3.png')}}" class="rounded-full w-20 mr-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
        </div>
      </div>
      <div x-show="!openAvatar" x-cloak class="grid grid-cols-3 items-center gap-2 mx-auto max-w-7xl">
        <div class="justify-self-end pr-5">
          <div class="text-right muscle-info mb-3">
            <img src="{{asset('images/website/front-left-1.png')}}" class="rounded-full w-20 ml-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-right muscle-info mb-3">
            <img src="{{asset('images/website/front-left-2.png')}}" class="rounded-full w-20 ml-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-right muscle-info mb-3">
            <img src="{{asset('images/website/front-left-3.png')}}" class="rounded-full w-20 ml-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
        </div>
        <div class="">
          <div class="relative">
            <img src="{{ asset('images/website/avatar-back.png') }}" class="" alt="">
          </div>
        </div>
        <div  class="self-start pl-5">
          <div class="text-left muscle-info mb-3">
            <img src="{{asset('images/website/front-right-1.png')}}" class="rounded-full w-20 mr-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-left muscle-info mb-3">
            <img src="{{asset('images/website/front-right-2.png')}}" class="rounded-full w-20 mr-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
          <div class="text-left muscle-info mb-3">
            <img src="{{asset('images/website/front-right-3.png')}}" class="rounded-full w-20 mr-auto" alt="">
            <h3 class="color-2 text-2xl"><b>Best muscle</b></h3>
            <p class="color-5">It is a long established fact that a reader will be distracted by the readable content of a page when…… read more </p>
          </div>
        </div>
      </div>


      <div class="flex justify-center">
        <button type="button" @click="openAvatar = true" :class="{'bg-1': openAvatar}" class="inline-block bg-gray-400  text-white px-5 py-2 rounded rounded-r-none">Front</button>
        <button type="button" @click="openAvatar = false" :class="{'bg-1': !openAvatar}" class="inline-block bg-gray-400 text-white px-5 py-2 rounded rounded-l-none">Back</button>
      </div>
    </div>

  </div>
  <div class="relative" id="Why-section">
    <img src="{{asset('images/website/Roxonin.png')}}" class="absolute left-0 -top-20 z-0 w-screen" alt="">
    <div class="flex items-center justify-between mx-auto max-w-7xl pt-32 pb-20 relative z-30">
      <div class="">
        <h2 class="xl:text-6xl lg:text-5xl text-2xl title"> <b>Why Roxonin Tape</b> </h2>
        <p class="w-3/5"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution It.</p>
      </div>
      <div>
        <img class="object-cover w-full lg:mr-36" src="{{asset('images/website/why-section.png')}}" alt="image"/>
      </div>

    </div>
  </div>


  <div id="video-slider" class="bg-white pt-28 pb-40 relative overflow-hidden">
    <img src="{{asset('images/website/video-section-bg.png')}}" class=" absolute right-0 top-0 object-cover h-auto" alt="">
    <h2 class="xl:text-5xl lg:text-4xl pb-16 text-2xl title mx-auto max-w-7xl"> <b>Doctors opinion about Roxonin</b> </h2>
    <div class="video-slider">
      <div class="swiper video-slider mx-auto max-w-screen-2xl">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="{{asset('images/website/video-3.png')}}" />
          </div>
          <div class="swiper-slide">
            <img src="{{asset('images/website/video-2.png')}}" />
          </div>
          <div class="swiper-slide">
            <img src="{{asset('images/website/video-3.png')}}" />
          </div>
          <div class="swiper-slide">
            <img src="{{asset('images/website/video-2.png')}}" />
          </div>
{{--          <div class="swiper-slide">--}}
{{--            <img src="{{asset('images/website/video-3.png')}}" />--}}
{{--          </div>--}}
        </div>
{{--        <div class="swiper-pagination "></div>--}}
      </div>
    </div>
  </div>
  <div id="gallery" class="pb-32">
    <div class="  py-32 mx-auto max-w-7xl">
      <h2 class="xl:text-6xl text-center text-5xl title"> <b>Gallery</b> </h2>
    </div>
    <div x-data="{ imgModal : false, imgModalSrc : '', imgModalDesc : '' }">
      <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc; imgModalDesc = $event.detail.imgModalDesc;" x-if="imgModal">
        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
          <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
            <div class="z-50">
              <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                  <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                  </path>
                </svg>
              </button>
            </div>
            <div class="p-2">
              <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
{{--              <p x-text="imgModalDesc" class="text-center text-white"></p>--}}
            </div>
          </div>
        </div>
      </template>
    </div>

    <div x-data="{}" class="px-2">
      <div class="grid gap-4 2xl:grid-cols-9 xl:grid-cols-9 lg:grid-cols-6 md:grid-cols-6 grid-cols-3">
        <div class="bg-gray-400">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/1.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/1.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/2.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/2.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/3.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/3.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/4.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/4.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/5.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/5.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/6.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/6.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/7.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/7.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/8.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/8.jpg')}}">
          </a>
        </div>
      <div class="">
        <div class="bg-gray-400">
          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/9.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/9.jpg')}}">
          </a>
        </div>
      </div>
      <div class="">
        <div class="bg-gray-400">
          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/10.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/10.jpg')}}">
          </a>
        </div>
      </div>
      <div class="">
        <div class="bg-gray-400">
          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/11.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/11.jpg')}}">
          </a>
        </div>
      </div>
      <div class="">
        <div class="bg-gray-400">
          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/12.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/12.jpg')}}">
          </a>
        </div>
      </div>
      <div class="">
        <div class="bg-gray-400">
          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/13.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/13.jpg')}}">
          </a>
        </div>
      </div>
{{--      <div class="">--}}
{{--        <div class="bg-gray-400">--}}
{{--          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/14.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">--}}
{{--            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/14.jpg')}}">--}}
{{--          </a>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--        <div class="">--}}
{{--          <div class="bg-gray-400">--}}
{{--            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/15.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">--}}
{{--              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/15.jpg')}}">--}}
{{--            </a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="">--}}
{{--          <div class="bg-gray-400">--}}
{{--            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/16.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">--}}
{{--              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/16.jpg')}}">--}}
{{--            </a>--}}
{{--          </div>--}}
{{--        </div>--}}
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/17.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/17.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/18.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/18.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/19.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/19.jpg')}}">
            </a>
          </div>
        </div>
        <div class="bg-gray-400">
          <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/20.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
            <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/20.jpg')}}">
          </a>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/21.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/21.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/22.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/22.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/23.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/23.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/24.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/24.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/25.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/25.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/26.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/26.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/27.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/27.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/28.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/28.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/29.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/29.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/30.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/30.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/31.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/31.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/32.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/32.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/33.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/33.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/34.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/34.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/35.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/35.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/36.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/36.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/37.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/37.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/38.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/38.jpg')}}">
            </a>
          </div>
        </div>
        <div class="">
          <div class="bg-gray-400">
            <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('images/website/gallery/39.jpg')}}', imgModalDesc: '' })" class="cursor-pointer">
              <img alt="Placeholder" class="object-fit w-full" src="{{asset('images/website/gallery/39.jpg')}}">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="pt-10">
    <div class="grid grid-cols-5 gap-5 place-items-center mx-auto max-w-7xl">
      <div>
        <img src="{{asset('images/website/logo-footer.png')}}" alt="">
      </div>
      <div>
        <a href="#" class="text-white">- Home</a>
      </div>
      <div>
        <a href="#" class="text-white">- About uS</a>
      </div>
      <div>
        <a href="" class=text-white>- Contact</a>
      </div>
      <div class="text-white text-center">
        <h2 class="mb-2">Social media</h2>
        <a href="#" class="bg-white rounded inline-block p-1 mr-1 color-fourth"><i data-feather="facebook"></i></a>
        <a href="#" class="bg-white rounded inline-block p-1 color-fourth"><i data-feather="twitter"></i></a>
        <br>
        <a href="#" class="inline-block mx-auto bg-blue-800 w-20 rounded mt-2">English</a>
      </div>
    </div>
    <div>
      <h2 class="text-center text-white pb-6">© 2022 Roxonin — @Roxonin</h2>
    </div>
  </footer>
</div>
<script src="{{mix('js/app.js')}}"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  let videoSlider = new Swiper(".video-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    initialSlide : 1,
    coverflowEffect: {
      rotate: 0,
      stretch: 50,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });


  let swiper = new Swiper(".main-slider", {
    cssMode: true,
    //spaceBetween: 100,
    centeredSlides: true,
    // autoplay: {
    //   delay: 10000,
    //   disableOnInteraction: true,
    // },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    mousewheel: true,
    keyboard: true,
  });
</script>
</body>
</html>
