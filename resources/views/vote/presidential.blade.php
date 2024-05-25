<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center mx-auto font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            Candidates for Presidential Elections of the Philippines
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">        
        <!-- President Section -->
        <form method="post" action="{{ route('submit_votes_presidential') }}">
            @csrf
            <input type="hidden" name="president_id" value="">
            <input type="hidden" name="vice_president_id" value="">
            <input type="hidden" name="senators" value="">

            <!-- President Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">President</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($presidents as $president)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $president->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="radio" name="president_id" value="{{ $president->id }}" id="president{{ $president->id }}">
                                <label for="president{{ $president->id }}">{{ $president->ballot_number}}. {{ $president->first_name }} {{ $president->middle_name }} {{ $president->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        
            <!-- Vice President Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Vice President</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($vice_presidents as $vice_president)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $vice_president->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="radio" name="vice_president_id" value="{{ $vice_president->id }}" id="vice_president{{ $vice_president->id }}">
                                <label for="vice_president{{ $vice_president->id }}">{{ $vice_president->ballot_number}}. {{ $vice_president->first_name }} {{ $vice_president->middle_name }} {{ $vice_president->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Senators Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Senators</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($senators as $senator)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $senator->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="checkbox" name="senators[]" value="{{ $senator->id }}" id="senator{{ $senator->id }}">
                                <label for="senator{{ $senator->id }}">{{ $senator->ballot_number}}. {{ $senator->first_name }} {{ $senator->middle_name }} {{ $senator->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-8 text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit Votes</button>
            </div>
        </form>
    </div>
</x-app-layout>

{{-- 
    President
    Vice President
    Senators - 8
--}}