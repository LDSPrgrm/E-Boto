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
                <div class="justify-items-center">
                    <div>
                        <div class="text-5xl font-bold mb-2">
                            <p >New Way</p>
                            <p>To Empower</p> 
                            <p class="text-blue-800">Your Voice</p>
                        </div>
                        <div class="text-sm mb-4">
                            Discover the power of self-expression and unleash your creativity with our innovative platform.
                        </div>
                        <div>
                            <a href="{{ route('login') }}" class="bg-blue-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="m-auto">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Commission_on_Elections_%28COMELEC%29.svg/220px-Commission_on_Elections_%28COMELEC%29.svg.png" alt="Logo" class="w-56 h-auto rounded">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
