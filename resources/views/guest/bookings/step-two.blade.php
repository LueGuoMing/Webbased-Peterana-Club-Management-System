<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full"
                            src="https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790__340.jpg" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step 2</div>
                            </div>

                            <form method="POST" action="{{ route('guest.bookings.store.step.two') }}">
                                @csrf
                                <div class="sm:col-span-6 pt-5">
                                    <label for="club" class="block text-sm font-medium text-gray-700">Club</label>
                                    <div class="mt-1">
                                        <select id="club_id" name="club_id"
                                            class="form-multiselect block w-full mt-1">
                                            @foreach ($clubs as $club)
                                                <option value="{{ $club->id }}" @selected($club->id == $booking->club_id)>
                                                    {{ $club->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('club_id')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6 pt-5">
                                    <label for="room" class="block text-sm font-medium text-gray-700">Venue</label>
                                    <div class="mt-1">
                                        <select id="room_id" name="room_id"
                                            class="form-multiselect block w-full mt-1">
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}" @selected($room->id == $booking->room_id)>
                                                    {{ $room->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('room_id')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6 pt-5">
                                    <label for="event" class="block text-sm font-medium text-gray-700">Event</label>
                                    <div class="mt-1">
                                        <select id="advertisement_id" name="advertisement_id"
                                            class="form-multiselect block w-full mt-1">
                                            @foreach ($club->advertisements as $advertisement)
                                                <option value="{{ $advertisement->id }}" @selected($advertisement->id == $booking->advertisement_id)>
                                                    {{ $advertisement->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('advertisement_id')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="sm:col-span-6 pt-5">
                                    <label for="purpose" class="block text-sm font-medium text-gray-700">Purpose</label>
                                    <div class="mt-1">
                                      <textarea id="purpose" rows="3" name="purpose" 
                                      class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                    @error('purpose')
                                      <div class="text-sm text-red-400">{{ $message }}</div>
                                      @enderror
                                  </div>

                                <div class="mt-6 p-4 flex justify-between">
                                    <a href="{{ route('guest.bookings.step.one') }}"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Previous</a>
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Make
                                        Reservation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>