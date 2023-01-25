<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Member Dashboard') }}
      </h2>
  </x-slot>


    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{ route('member.documentation.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Documentation Index</a>
                
          </div>

          <div class="m-2 p-2 bg-slate-100 rounded">
              <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                  <form method="POST" action="{{ route('member.documentation.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:col-span-6">
                      <label for="title" class="block text-sm font-medium text-gray-700"> Title </label>
                      <div class="mt-1">
                        <input type="text" id="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('title') border-red-400 @enderror" />
                      </div>
                      @error('title')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <br>
                    <div class="sm:col-span-6">
                      <label for="document" class="block text-sm font-medium text-gray-700">File</label>
                      <input type="file" id="document" name="document" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('document') border-red-400 @enderror" />
                      @error('document')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                      <label for="club_id" class="block text-sm font-medium text-gray-700">Clubs</label>
                      <div class="mt-1">
                        <select id="club_id" name="club_id" class="form-multiselect block w-full mt-1">
                          @foreach($clubs as $club)
                          <option value="{{ $club->id }}" @selected ($club->name == Auth::user()->club)>{{ $club->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      @error('club_id')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>
                    {{--
                    <div class="sm:col-span-6">
                      <label for="image" class="block text-sm font-medium text-gray-700"> Club Logo </label>
                      <div class="mt-1">
                        <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('image') border-red-400 @enderror" />
                      </div>
                      @error('image')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>--}}
                    {{--
                    <div class="sm:col-span-6 pt-5">
                      <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                      <div class="mt-1">
                        <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md  @error('description') border-red-400 @enderror"></textarea>
                      </div>
                      @error('description')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                    </div>
                    --}}
                    <div class="mt-6 p-4">
                    <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Upload</button>
                    </div>
                  </form>
                </div>
          </div>
          
      </div>
  </div>
  </x-app-layout>