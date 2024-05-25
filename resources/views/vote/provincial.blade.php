<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center mx-auto font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            Candidates for the Province of {{ $province }}
        </h2>
    </x-slot>
    
    <div class="container mx-auto px-4">        
        <form method="post" action="{{ route('submit_votes_provincial') }}">
            @csrf
            <input type="hidden" name="governor_id" value="">
            <input type="hidden" name="vice_governor_id" value="">
            <input type="hidden" name="sangguniang_panglalawigans" value="">

            <!-- Governor Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Provincial Governor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($governors as $governor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $governor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="radio" name="governor_id" value="{{ $governor->id }}" id="governor{{ $governor->id }}">
                                <label for="governor{{ $governor->id }}">{{ $governor->ballot_number}}. {{ $governor->first_name }} {{ $governor->middle_name }} {{ $governor->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        
            <!-- Vice Governor Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Provincial Vice Governor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($vice_governors as $vice_governor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $vice_governor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="radio" name="vice_governor_id" value="{{ $vice_governor->id }}" id="vice_governor{{ $vice_governor->id }}">
                                <label for="vice_governor{{ $vice_governor->id }}">{{ $vice_governor->ballot_number}}. {{ $vice_governor->first_name }} {{ $vice_governor->middle_name }} {{ $vice_governor->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sangguniang Panglalawigan Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Sangguniang Panglalawigan</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($sangguniang_panglalawigans as $sangguniang_panglalawigan)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $sangguniang_panglalawigan->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="checkbox" name="sangguniang_panglalawigans[]" value="{{ $sangguniang_panglalawigan->id }}" id="sangguniang_panglalawigan{{ $sangguniang_panglalawigan->id }}">
                                <label for="sangguniang_panglalawigan{{ $sangguniang_panglalawigan->id }}">{{ $sangguniang_panglalawigan->ballot_number}}. {{ $sangguniang_panglalawigan->first_name }} {{ $sangguniang_panglalawigan->middle_name }} {{ $sangguniang_panglalawigan->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="py-6 text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit Votes</button>
            </div>
        </form>
    </div>
</x-app-layout>

{{-- 
    Governor
    Vice Governor
    Sangguniang Panglalawigan - 8 each per district
--}}