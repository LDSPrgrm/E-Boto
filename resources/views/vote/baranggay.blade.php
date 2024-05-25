<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center mx-auto font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            Candidates for the Baranggay of {{ $baranggay }}, {{ $municipality }}, {{ $province }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
        <form method="post" action="{{ route('submit_votes_baranggay') }}">
            @csrf
            <input type="hidden" name="captain_id" value="">
            <input type="hidden" name="sangguniang_baranggays" value="">

            <!-- Baranggay Captain Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Baranggay Captain</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($captains as $captain)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $captain->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="radio" name="captain_id" value="{{ $captain->id }}" id="captain{{ $captain->id }}">
                                <label for="captain{{ $captain->id }}">{{ $captain->ballot_number}}. {{ $captain->first_name }} {{ $captain->middle_name }} {{ $captain->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sangguniang Baranggay Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Sangguniang Baranggay</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($sangguniang_baranggays as $sangguniang_baranggay)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $sangguniang_baranggay->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="checkbox" name="sangguniang_baranggays[]" value="{{ $sangguniang_baranggay->id }}" id="sangguniang_baranggay{{ $sangguniang_baranggay->id }}">
                                <label for="sangguniang_baranggay{{ $sangguniang_baranggay->id }}">{{ $sangguniang_baranggay->ballot_number}}. {{ $sangguniang_baranggay->first_name }} {{ $sangguniang_baranggay->middle_name }} {{ $sangguniang_baranggay->last_name }}</label>
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
    Captain
    Sangguniang Baranggay - 8
--}}