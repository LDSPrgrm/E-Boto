<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    @include('flash.votes')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 p-8 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out flex items-center">
                <div class="m-auto">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Commission_on_Elections_%28COMELEC%29.svg/220px-Commission_on_Elections_%28COMELEC%29.svg.png" alt="Logo" class="w-56 h-auto rounded">
                </div>
                <div class="justify-items-center">
                    <div>
                        <div class="text-7xl font-bold mb-2">
                            <p>2028 National</p> 
                            <p>Presidential Elections</p>
                            <p class="text-blue-800">Make Your Move</p>
                        </div>
                        <div class="text-lg mb-4">
                            The 2028 National Presidential Elections will be held on Month Day, Year. <br> Take this chance to make our country a better place.
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('login') }}" class="bg-blue-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Read More</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 p-8 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out flex items-center">
                <div class="m-auto">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Commission_on_Elections_%28COMELEC%29.svg/220px-Commission_on_Elections_%28COMELEC%29.svg.png" alt="Logo" class="w-56 h-auto rounded">
                </div>
                <div class="justify-items-center">
                    <div>
                        <div class="text-7xl font-bold mb-2">
                            <p>2025 Philippine</p> 
                            <p>Senatorial Elections</p>
                            <p class="text-blue-800">Vote Wisely</p>
                        </div>
                        <div class="text-lg mb-4">
                            The 2025 Philippine Senatorial Elections will be held on Month Day, Year. <br> Take this chance to make our country a better place.
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('login') }}" class="bg-blue-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Read More</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
