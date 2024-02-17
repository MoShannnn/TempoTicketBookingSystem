<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-12">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin: 20px;">Welcome Dear {{ $user->name }}, 
                    Go to<a href="{{route('index')}}" class="text-success"> HomePage</a></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="py-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin: 20px;">Purchasing History</h2>

                <div class="py-2 m-5">
                    @if($tickets->isNotEmpty())
                        <table class="table record-table mx-auto">
                            <thead>
                                <tr>
                                <th scope="col">Ticket Code</th>
                                <th scope="col">Live Name</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Date</th>
                                <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)
                                    <tr>
                                        <th scope="row">{{ $ticket->id }}</th>
                                        <td>{{ $ticket->live->name }}</td>
                                        <td>{{ $ticket->live->venue }}</td>
                                        <td>{{ $ticket->live->date }}</td>
                                        <td>{{ $ticket->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3 class="text-center">Sorry, you haven't purchase any ticket yet!</h3>
                        <div class="d-flex justify-content-center">
                        <a href="{{ route('index') }}" class="btn inline-flex items-center mt-5 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-15">
                            Get Tickets
                        </a>
                        </div>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
