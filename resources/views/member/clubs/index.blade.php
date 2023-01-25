<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Member Dashboard') }}
        </h2>
    </x-slot>


<div style="color: green">
    <h2 class="text-4xl font-bold ">My club is {{ Auth::user()->club->name }}</h2>
</div>



<section class="mt-8 bg-white">
    <div class="mt-4 text-center">
      <h3 class="text-2xl font-bold">Event</h3>
     <!-- <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
        TODAY'S SPECIALITY</h2>-->
    </div>
    <div class="container w-full px-5 py-6 mx-auto">
      <div class="flex justify-end m-2 p-2">
        <a href="{{ route('member.advertisements.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Event</a>
      </div>
        @foreach ( Auth::user()->club->advertisements as $advertisement)
      <div class="grid lg:grid-cols-4 gap-y-6">
        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
          <img class="w-full h-48" src="{{ Storage::url($advertisement->image) }}"
            alt="Image" />
          <div class="px-6 py-4">
            <div class="flex mb-2">
              <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">{{  Auth::user()->club->name }}</span>
            </div>
            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{ $advertisement->title }}</h4>
            <p class="leading-normal text-gray-700">{{ $advertisement->content }}</p>
          </div>

          <div class="flex items-center justify-between p-4">
            <a href="{{ route('member.advertisements.edit', $advertisement->id) }}" class="px-4 py-2 bg-green-600  rounded-lg text-green-50"> Edit </a>
            <form class="px-4 py-2 bg-red-600  rounded-lg text-red-50" 
              method="POST" 
              action="{{ route('member.advertisements.destroy',$advertisement->id) }}"
              onsubmit="return confirm('Are you sure?');">
              @csrf
              @method('DELETE')
              <button type="submit">Delete</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </section>
</x-app-layout>