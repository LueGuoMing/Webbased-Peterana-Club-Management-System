<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Member Dashboard') }}
      </h2>
  </x-slot>
  <div class="text-4xl font-bold">
    <h1>Room</h1>
  </div>
  <br>
  <section>
  <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Venue Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Location
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $room -> name }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $room -> location }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $room -> status ->name }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                    @if($room->status->name === 'Avaliable')
                    <div class="flex space-x-2">
                      <a href="{{ route('member.bookings.create', $room->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Book</a>
                     </div>
                     @elseif($room->status->name === 'Unavaliable')
                     <div class="flex space-x-2">
                        <a  class="px-4 py-2 bg-red-500 rounded-lg text-white">Unavailable</a>
                       </div>
                     @elseif($room->status->name === 'Pending')
                    <div class="flex space-x-2">
                        <a class="px-4 py-2 bg-red-500 rounded-lg text-white" >Pending</a>
                    </div>
                     @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  </section>
</x-app-layout>