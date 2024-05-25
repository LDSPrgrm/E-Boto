@if(session()->has('success'))
<div class="pt-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
        <div class="relative bg-green-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex items-center justify-center">
            <div class="absolute top-0 right-0 p-2">
                <button onclick="this.parentElement.parentElement.remove()" class="text-white dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 text-white dark:text-gray-100">
                {{ session('success') }}
            </div>
        </div>
    </div>
</div>
@endif
