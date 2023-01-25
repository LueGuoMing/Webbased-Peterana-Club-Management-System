<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('advertisements.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Event Index</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('advertisements.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Title </label>
                        <div class="mt-1">
                          <input type="text" id="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('title')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      
                      <div class="sm:col-span-6 pt-5">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <div class="mt-1">
                          <textarea id="content" rows="3" name="content" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        @error('content')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>

                        <div class="sm:col-span-6">
                          <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                          <div class="mt-1">
                            <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                          </div>
                          @error('image')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        </div>
                      
                        <div class="sm:col-span-6 pt-5">
                          <label for="body" class="block text-sm font-medium text-gray-700">Club</label>
                          <div class="mt-1">
                            <select id="club_id" name="club_id" class="form-multiselect block w-full mt-1">
                              @foreach ($clubs as $club)
                              <option value="{{ $club->id }}">{{ $club->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          @error('club_id')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        </div>
                      <div class="mt-6 p-4">
                      <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                      </div>
                    </form>
                  </div>
            </div>
            
        </div>
    </div>
</x-admin-layout>