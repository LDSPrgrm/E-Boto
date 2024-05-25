<x-app-layout class="flex justify-center items-center h-screen">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-600 leading-tight">
            {{ __('Already Voted') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out items-center justify-center text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Commission_on_Elections_%28COMELEC%29.svg/220px-Commission_on_Elections_%28COMELEC%29.svg.png" class="mx-auto py-6 w-28"/>
                <div class="flex justify-center items-center">
                    <h2 class="text-5xl text-blue-800 font-bold">THANK YOU FOR VOTING!</h2>
                </div>
                <p class="text-lg text-center mx-60 py-6">Your participation in the {{ $year }} {{ ucfirst($type) }} Election helps shape the future of our nation. Every vote counts, and your voice has been heard. Together, we strengthen our democracy!</p>
                <div class="flex justify-center m-6">
                    <a href="{{ route('dashboard') }}" class="bg-blue-800 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300 ease-in-out">BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
