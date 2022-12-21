  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Member Dashboard') }}
        </h2>
    </x-slot>
    <div class="text-4xl font-bold">
      <h1>Reservations</h1>
    </div>
  
    <section>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="py-3 px-6">
                  Name
              </th>
              <th scope="col" class="py-3 px-6">
                  Email
              </th>
              <th scope="col" class="py-3 px-6">
                  Date
              </th>
              <th scope="col" class="py-3 px-6">
                  Room
              </th>
              <th scope="col" class="py-3 px-6">
                  Club
              </th>
              <th scope="col" class="py-3 px-6">
                  Guest
              </th>
              <th scope="col" class="py-3 px-6">
                  Action
              </th>
              </tr>
          </thead>
          <tbody>
              @foreach ($bookings as $booking)
              <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $booking -> first_name}} {{ $booking -> last_name }}
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $booking -> email }}
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $booking -> booking_date }}
                  </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">   
                    {{ $booking ->room->name }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">   
                    {{ $booking ->club->name }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $booking -> guest_number }}
                </td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      
                      <div class="flex space-x-2">
                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" 
                    method="POST" 
                    action="{{ route('member.bookings.destroy',$booking->id) }}"
                    onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                       </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
    </div>
    </section>
  </x-app-layout>
