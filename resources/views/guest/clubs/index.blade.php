<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          @foreach($clubs as $club)

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="{{ Storage::url($club->image) }}"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <a href="{{ route('guest.clubs.show',$club->id)}}">
                  <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-blue-700 uppercase">{{ $club->name }}</h4>
                </a>
              </div>
              <p class="leading-normal text-gray-700">{{ $club->description }}</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">kiv</span>
            </div>
          </div>

          @endforeach

        </div>
      </div>
    
</x-guest-layout>