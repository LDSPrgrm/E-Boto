<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-center font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vote') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out">
                <form method="get" action="{{ route('vote/presidential') }}">
                    @csrf
                    <button type="submit" class="p-6 text-gray-900 dark:text-gray-100 w-full focus:outline-none text-2xl">
                        {{ __("Presidential Election") }}
                    </button>
                </form>  
            </div>
        </div>
              
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out">
                <form method="post" action="{{ route('vote/provincial', [
                    Auth::user()->province
                ]) }}">
                    @csrf
                    <input type="hidden" name="province" value="{{ Auth::user()->province }}">
                    <button type="submit" class="p-6 text-gray-900 dark:text-gray-100 w-full focus:outline-none text-2xl">
                        {{ __("Provincial Election") }} for {{ Auth::user()->province }}
                    </button>
                </form>  
            </div>
        </div>
                 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out">
                <form method="post" action="{{ route('vote/municipal', [
                    Auth::user()->province,
                    Auth::user()->municipality,
                ]) }}">
                    @csrf
                    <input type="hidden" name="municipality" value="{{ Auth::user()->municipality }}">
                    <input type="hidden" name="province" value="{{ Auth::user()->province }}">
                    <button type="submit" class="p-6 text-gray-900 dark:text-gray-100 w-full focus:outline-none text-2xl">
                        {{ __("Municipal Election") }} for {{ Auth::user()->municipality }}, {{ Auth::user()->province }}
                    </button>
                </form>  
            </div>
        </div>    
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 font-semibold py-2 px-4 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out">
                <form method="post" action="{{ route('vote/baranggay', [
                    Auth::user()->province,
                    Auth::user()->municipality,
                    Auth::user()->baranggay
                ]) }}">
                    @csrf
                    <input type="hidden" name="baranggay" value="{{ Auth::user()->baranggay }}">
                    <input type="hidden" name="municipality" value="{{ Auth::user()->municipality }}">
                    <input type="hidden" name="province" value="{{ Auth::user()->province }}">
                    <button type="submit" class="p-6 text-gray-900 dark:text-gray-100 w-full focus:outline-none text-2xl">
                        {{ __("Baranggay Election") }} for {{ Auth::user()->baranggay }}, {{ Auth::user()->municipality }}, {{ Auth::user()->province }}
                    </button>
                </form>                   
            </div>
        </div>
    </div>
</x-app-layout>