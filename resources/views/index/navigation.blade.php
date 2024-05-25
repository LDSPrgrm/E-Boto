<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Commission_on_Elections_%28COMELEC%29.svg/220px-Commission_on_Elections_%28COMELEC%29.svg.png" width="50"/>                    
                    </a>
                    <div class="text-blue-800 font-semibold ml-4">
                        COMMISION ON ELECTIONS
                    </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex mr-6">
                    <x-nav-link :href="route('how-to-vote')" :active="request()->routeIs('how-to-vote')" class="text-blue-700">
                        {{ __('How to Vote') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')" class="text-blue-700">
                        {{ __('About Us') }}
                    </x-nav-link>
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')" class="text-blue-700">
                        {{ __('Login') }}
                    </x-nav-link>
                </div>                
            </div>
        </div>
    </div>
</nav>
