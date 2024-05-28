<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Commission_on_Elections_%28COMELEC%29.svg/220px-Commission_on_Elections_%28COMELEC%29.svg.png">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('index.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
                    <div class="bg-white dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-100 p-8 border border-gray-300 dark:border-gray-600 rounded shadow-sm sm:rounded-lg transition duration-300 ease-in-out flex items-center">
                        <div class="justify-items-center">
                            <div>
                                <div class="text-7xl font-bold mb-2">
                                    <p >New Way</p>
                                    <p>To Empower</p> 
                                    <p class="text-blue-800">Your Voice</p>
                                </div>
                                <div class="text-lg mb-4">
                                    Empower your voice, shape your future, sculpt tomorrow's landscape with ease - <br> join the movement reshaping democracy online.
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
        </div>
        <script defer>
            document.body.appendChild(document.createElement('div')).setAttribute('id','chatBubbleRoot');
            window.agx = '664d527acd4fc0a928623e231LXLOA8izuBxnNoclHixsg==|RRMm76mmkJGbnDCeAicMd+4X5POJTohH7AD51I0dK5M=';
        </script>
        <script defer src="https://storage.googleapis.com/agentx-cdn-01/agentx-chat.js"></script>
    </body>
</html>
