@extends('admin.layout')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white shadow p-4 rounded">
            <h2 class="text-sm text-gray-500">Total Users</h2>
            <p class="text-xl font-bold">7</p>
        </div>
        <div class="bg-white shadow p-4 rounded">
            <h2 class="text-sm text-gray-500">Total Rooms</h2>
            <p class="text-xl font-bold">7</p>
        </div>
        <div class="bg-white shadow p-4 rounded">
            <h2 class="text-sm text-gray-500">Total Bookings</h2>
            <p class="text-xl font-bold">65</p>
        </div>
        <div class="bg-white shadow p-4 rounded">
            <h2 class="text-sm text-gray-500">Revenue</h2>
            <p class="text-xl font-bold">56</p>
        </div>
    </div>

    <div class="bg-white shadow p-4 rounded">
        <h2 class="text-lg font-semibold mb-4">Recent Bookings</h2>
        <table class="min-w-full text-left text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Customer</th>
                    <th class="px-4 py-2">Room</th>
                    <th class="px-4 py-2">Check-In</th>
                    <th class="px-4 py-2">Check-Out</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">4545</td>
                        <td class="px-4 py-2">tr</td>
                        <td class="px-4 py-2 capitalize">5</td>
                    </tr>
                     <tr>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">4545</td>
                        <td class="px-4 py-2">tr</td>
                        <td class="px-4 py-2 capitalize">5</td>
                    </tr>
           
            </tbody>
        </table>
    </div>
</div>
@endsection
