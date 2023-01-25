{{--@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Member Log in</a>

                       @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    
                    @endauth
                    @auth('admin')
                        <a href=" {{ route('admin.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Dashboard</a>
                    @else
                        <a href=" {{ route('admin.login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Admin Login</a>
                    @endauth
                </div>
            @endif
--}}
<x-guest-layout>
  <!-- Main Hero Content -->
<div id="top" class="container max-w-lg px-5 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.8) 0%,rgba(255,255,255,0.71) 100%), url('../storage/images/bg3.jpg')">
<!--<div class="container max-w-lg px-5 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center" style="background-image: url('../storage/images/bg3.jpg')">-->
<h1 class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
<div class="inline md:block">WELCOME TO PETERANA CLUB</div>
</h1>
<div class="mx-auto mt-2 font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center lg:text-lg">
<b>Persatuan Kesenian Citra Daksina, Universiti Teknologi Malaysia</b>
</div>
<div class="flex flex-col items-center mt-12 text-center">
<span class="relative inline-flex w-full md:w-auto">
  {{--
  <a href="{{ route('guest.bookings.step.one') }}" type="button" class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
    Reserve a Venue
  </a>
    --}}
</div>
</div>
<!-- End Main Hero Content -->
<section class="px-2 py-32 bg-white md:px-0">
<div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
<div class="flex flex-wrap items-center sm:-mx-3">
  <div class="w-full md:w-1/2 md:px-3">
    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
      <!-- <h1
          class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
        > -->
      <h3 class="text-xl">PETERANA CLUB
      </h3>
      <h2 class="text-4xl text-green-600">Welcome</h2>
      <!-- </h1> -->
      <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
        Ever wonder what is PETERANA and what does the club offers? Well, here is your chance to know more about us!
        Who knows you might be interested in joining us?
      </p>
      <div class="relative flex">
        <a href="/readmore" type="button" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
          Read More
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div class="w-full md:w-1/2">
    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
      <img src="../storage/images/Peterana.jpg" />
    </div>
  </div>
</div>
</div>
</section>

<section id="middle" class="py-20 bg-gray-50">
  <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
    <div class="flex flex-wrap items-center -mx-3">
      <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
        <div class="w-full lg:max-w-md" >
          <h2 class="mb-4 text-2xl font-bold">About Us</h2>
          <h2
            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
            PETERANA CLUB</h2>

          <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Persatuan Kesenian Citra Daksina(PETERANA) is a student art association registered under HEP and under the auspices of the HEP Cultural Unit. 
      PETERANA was established in 2009 and has its own meaning. PETERANA means SINGGAHSANA or TAKHTA which is symbolic of the highest and most important 
      place or position. The acronym PETERANA also consists of a combination of the words "Persatuan Kesenia Citra Daksina".  
      It was established with the aim of becoming a forum for unity in promoting art and culture to UTM students who have various ethnicities, cultures and heritages.</p>
      </div>
  </div>
  <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="../storage/images/aboutus.jpg" alt="aboutus"></div>
</div>
</div>
</section>


<section class="mt-8 bg-white">
  <div class="mt-4 text-center">
    <h3 class="text-2xl font-bold">Event of</h3>
    <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
      PETERANA CLUB</h2>
  </div>
  <div class="container w-full px-5 py-6 mx-auto">
    <div class="grid lg:grid-cols-4 gap-y-6">
      @foreach($clubs as $club)
    @foreach($club->advertisements as $advertisement)
    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
      <img class="w-full h-48" 
        src="{{ Storage::url($advertisement->image) }}"
        alt="Image" />
      <div class="px-6 py-4">
        <div class="flex mb-2">
            <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">{{ $advertisement->club->name }}</span>
        </div>
        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{ $advertisement->title }}</h4>
        <p class="leading-normal text-gray-700">{{ $advertisement->content }}</p>
      </div>
      <div class="flex items-center justify-between p-4">
        <button class="px-4 py-2 bg-green-600 text-green-50">Contact Us</button>
      </div>
    </div>
    @endforeach
    @endforeach
    </div>
  </div>
</section>

<section class="text-center pt-4 pb-12 bg-gray-800">
<div class="my-16 text-center">
<h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
  -- Quotes -- </h2>
<p class="text-xl text-white">Just keep taking chances and having fun.</p>
</div>
<div class="grid gap-2 lg:grid-cols-3">
<div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
  <div class="flex justify-center -mt-16 md:justify-end">
    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
  </div>
  <div>
    <h2 class="text-3xl font-semibold text-gray-800">Citra Daksina</h2>
    <p class="mt-2 text-gray-600">"Hey there! Welcome to our club! We're delighted you're here. 
      If you have any questions do contact us below.”</p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="https://linktr.ee/peterana" class="text-xl font-medium text-green-500">Mohd Firdaus</a>
  </div>
</div>
<div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
  <div class="flex justify-center -mt-16 md:justify-end">
    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
  </div>
  <div>
    <h2 class="text-3xl font-semibold text-gray-800">Gamelan Alunan Sari</h2>
    <p class="mt-2 text-gray-600">"Music gives a soul to the universe, wings to the mind, flight to the imagination, and life to everything.”</p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="https://linktr.ee/peterana" class="text-xl font-medium text-green-500">Ijah</a>
  </div>
</div>
<div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
  <div class="flex justify-center -mt-16 md:justify-end">
    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full" src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
  </div>
  <div>
    <h2 class="text-3xl font-semibold text-gray-800">Freedom Dance Crew</h2>
    <p class="mt-2 text-gray-600">“Dance is your pulse, your heartbeat, your breathing. It is the rhythm of your life. 
      It is the expression in time and movement, in happiness, joy, sadness and envy.”</p>
  </div>
  <div class="flex justify-end mt-4">
    <a href="https://linktr.ee/peterana" class="text-xl font-medium text-green-500">Kang Yong</a>
  </div>
</div>
</div>
</section>

</x-guest-layout>