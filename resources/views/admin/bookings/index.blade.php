<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('bookings.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Reservation</a>
            </div>
            
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
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Approve
                </th>
                <th scope="col" class="py-3 px-6">
                    Reject
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
                    {{ $booking -> first_name }} {{ $booking -> last_name }}
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
                    {{ $booking -> status }}
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">   
                   {{--
                    
                    <a href="{{ route('admin.bookings.approve',$booking->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Approve</a>
                      --}}
                    @if($booking->status === 'Approved')
                    <a class="px-4 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg text-white" disabled>Approved</a>
                    @else
                    <form class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white" 
                    method="GET" 
                    action="{{ route('admin.bookings.approve',$booking->id) }}"
                    onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('GET')
                    <button type="submit">Approve</button>
                    </form>
                    @endif
                </td>
                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">   
                    {{--  
                    <a href="{{ route('admin.bookings.reject',$booking->id) }}" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Reject</a>
                    --}}
                    @if($booking->status === 'Rejected')
                    <a class="px-4 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg text-white" disabled>Rejected</a>
                    @else
                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" 
                    method="POST" 
                    action="{{ route('admin.bookings.reject',$booking->id) }}"
                    onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('POST')
                    <button type="submit">Reject</button>
                    </form>
                    @endif
                </td>

                <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                    <div class="flex space-x-2">
                        {{--
                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" 
                    method="POST" 
                    action="{{ route('bookings.destroy',$booking->id) }}"
                    onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>  --}}
                    <form 
                    method="POST" 
                    action="{{ route('bookings.destroy',$booking->id) }}"
                    onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg>
                    </button>
                    </form> 
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</x-admin-layout>