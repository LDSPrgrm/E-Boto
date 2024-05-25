<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Election Results') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- Presidential Results Section --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <h2 class="text-3xl font-semibold mb-2 text-center mx-auto">Presidential Election Results</h2>
            
            {{-- President Section --}}
            <div class="">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">President</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($presidents as $president)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $president->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $president->ballot_number}}. {{ $president->first_name }} {{ $president->middle_name }} {{ $president->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $president->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Vice President Section --}}
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Vice President</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($vice_presidents as $vice_president)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $vice_president->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $vice_president->ballot_number}}. {{ $vice_president->first_name }} {{ $vice_president->middle_name }} {{ $vice_president->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $vice_president->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Senator Section --}}
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Senator</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($senators as $senator)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $senator->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $senator->ballot_number}}. {{ $senator->first_name }} {{ $senator->middle_name }} {{ $senator->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $senator->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Provincial Results Section --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <h2 class="text-3xl font-semibold mb-2 text-center mx-auto">Provincial Election Results</h2>
            
            {{-- Governor Section --}}
            <div class="">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Governor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($governors as $governor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $governor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $governor->ballot_number}}. {{ $governor->first_name }} {{ $governor->middle_name }} {{ $governor->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $governor->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Vice Governor Section --}}
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Vice Governor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($vice_governors as $vice_governor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $vice_governor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $vice_governor->ballot_number}}. {{ $vice_governor->first_name }} {{ $vice_governor->middle_name }} {{ $vice_governor->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $vice_governor->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Sangguniang Panglalawigan Section --}}
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Sangguniang Panglalawigan</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($sangguniang_panglalawigans as $sangguniang_panglalawigan)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $sangguniang_panglalawigan->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $sangguniang_panglalawigan->ballot_number}}. {{ $sangguniang_panglalawigan->first_name }} {{ $sangguniang_panglalawigan->middle_name }} {{ $sangguniang_panglalawigan->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $sangguniang_panglalawigan->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Municipal Results Section --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <h2 class="text-3xl font-semibold mb-2 text-center mx-auto">Municipal Election Results</h2>
            
            {{-- Mayor --}}
            <div class="">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Mayor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($mayors as $mayor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $mayor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $mayor->ballot_number}}. {{ $mayor->first_name }} {{ $mayor->middle_name }} {{ $mayor->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $mayor->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Vice Mayor --}}
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Vice Mayor</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($vice_mayors as $vice_mayor)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $vice_mayor->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $vice_mayor->ballot_number}}. {{ $vice_mayor->first_name }} {{ $vice_mayor->middle_name }} {{ $vice_mayor->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $vice_mayor->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Sangguniang Bayan --}}
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Sangguniang Bayan</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($sangguniang_bayans as $sangguniang_bayan)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $sangguniang_bayan->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $sangguniang_bayan->ballot_number}}. {{ $sangguniang_bayan->first_name }} {{ $sangguniang_bayan->middle_name }} {{ $sangguniang_bayan->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $sangguniang_bayan->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Baranggay Results Section --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <h2 class="text-3xl font-semibold mb-2 text-center mx-auto">Baranggay Election Results</h2>
            
            {{-- Baranggay Captain --}}
            <div class="">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Baranggay Captain</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($captains as $captain)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $captain->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $captain->ballot_number}}. {{ $captain->first_name }} {{ $captain->middle_name }} {{ $captain->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $captain->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Sangguniang Baranggay --}}
            <div class="mt-8">
                <div class="max-w-7xl pb-8 mx-auto sm:px-6 lg:px-8 mb-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold my-6 text-center">Sangguniang Baranggay</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($sangguniang_baranggays as $sangguniang_baranggay)
                            <div class="items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-md transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <img src="{{ $sangguniang_baranggay->image_link }}" class="mx-auto rounded-full">
                                </div>
                                <div class="mb-4 items-center bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm transition duration-300 ease-in-out">
                                    <p class="text-center">{{ $sangguniang_baranggay->ballot_number}}. {{ $sangguniang_baranggay->first_name }} {{ $sangguniang_baranggay->middle_name }} {{ $sangguniang_baranggay->last_name }}</p>
                                    <div class="flex justify-between">
                                        <p>Votes: </p>
                                        <p>{{ $sangguniang_baranggay->votes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>