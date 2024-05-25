<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center mx-auto font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            Candidates for the Municipality of {{ $municipality }}, {{ $province }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">        
        <form method="post" action="{{ route('submit_votes_municipal') }}">
            @csrf
            <input type="hidden" name="mayor_id" value="">
            <input type="hidden" name="vice_mayor_id" value="">
            <input type="hidden" name="sangguniang_bayans" value="">

            <!-- Municipal Mayor Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Municipal Mayor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($mayors as $mayor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $mayor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="radio" name="mayor_id" value="{{ $mayor->id }}" id="mayor{{ $mayor->id }}">
                                <label for="mayor{{ $mayor->id }}">{{ $mayor->ballot_number}}. {{ $mayor->first_name }} {{ $mayor->middle_name }} {{ $mayor->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        
            <!-- Municipal Vice Mayor Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Municipal Vice Mayor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($vice_mayors as $vice_mayor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $vice_mayor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="radio" name="vice_mayor_id" value="{{ $vice_mayor->id }}" id="vice_mayor{{ $vice_mayor->id }}">
                                <label for="vice_mayor{{ $vice_mayor->id }}">{{ $vice_mayor->ballot_number}}. {{ $vice_mayor->first_name }} {{ $vice_mayor->middle_name }} {{ $vice_mayor->last_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Sangguniang Bayan Section -->
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Sangguniang Bayan</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($sangguniang_bayans as $sangguniang_bayan)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $sangguniang_bayan->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <input type="checkbox" name="sangguniang_bayans[]" value="{{ $sangguniang_bayan->id }}" id="sangguniang_bayan{{ $sangguniang_bayan->id }}">
                                <label for="sangguniang_bayan{{ $sangguniang_bayan->id }}">{{ $sangguniang_bayan->ballot_number}}. {{ $sangguniang_bayan->first_name }} {{ $sangguniang_bayan->middle_name }} {{ $sangguniang_bayan->last_name }}</label>
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
    Mayor
    Vice Mayor
    Sangguniang Bayan - 8
--}}