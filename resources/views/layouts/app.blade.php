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
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script defer>
            document.body.appendChild(document.createElement('div')).setAttribute('id','chatBubbleRoot');
            window.agx = '664d527acd4fc0a928623e231LXLOA8izuBxnNoclHixsg==|RRMm76mmkJGbnDCeAicMd+4X5POJTohH7AD51I0dK5M=';
        </script>
        <script defer src="https://storage.googleapis.com/agentx-cdn-01/agentx-chat.js"></script>
        
        <script>
            const chatInput = 
                document.querySelector('.chat-input textarea');
            const sendChatBtn = 
                document.querySelector('.chat-input button');
            const chatbox = document.querySelector(".chatbox");
            
            let userMessage;
            const API_KEY = 
                "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";
            
            const createChatLi = (message, className) => {
                const chatLi = document.createElement("li");
                chatLi.classList.add("chat", className);
                let chatContent = 
                    className === "chat-outgoing" ? `<p>${message}</p>` : `<p>${message}</p>`;
                chatLi.innerHTML = chatContent;
                return chatLi;
            }
            
            const generateResponse = (incomingChatLi) => {
                const API_URL = "https://api.openai.com/v1/chat/completions";
                const messageElement = incomingChatLi
                .querySelector("p");
                const requestOptions = {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": `Bearer ${API_KEY}`
                    },
                    body: JSON.stringify({
                        "model": "gpt-3.5",
                        "messages": [
                            {
                                role: "user",
                                content: userMessage
                            }
                        ]
                    })
                };
            
                fetch(API_URL, requestOptions)
                    .then(res => {
                        if (!res.ok) {
                            throw new Error("Network response was not ok");
                        }
                        return res.json();
                    })
                    .then(data => {
                        messageElement
                        .textContent = data.choices[0].message.content;
                    })
                    .catch((error) => {
                        messageElement
                        .classList.add("error");
                        messageElement
                        .textContent = "Oops! Something went wrong. Please try again!";
                    })
                    .finally(() => chatbox.scrollTo(0, chatbox.scrollHeight));
            };
            
            
            const handleChat = () => {
                userMessage = chatInput.value.trim();
                if (!userMessage) {
                    return;
                }
                chatbox
                .appendChild(createChatLi(userMessage, "chat-outgoing"));
                chatbox
                .scrollTo(0, chatbox.scrollHeight);
            
                setTimeout(() => {
                    const incomingChatLi = createChatLi("Thinking...", "chat-incoming")
                    chatbox.appendChild(incomingChatLi);
                    chatbox.scrollTo(0, chatbox.scrollHeight);
                    generateResponse(incomingChatLi);
                }, 600);
            }
            
            sendChatBtn.addEventListener("click", handleChat);
            
            function cancel() {
                let chatbotcomplete = document.querySelector(".chatBot");
                if (chatbotcomplete.style.display != 'none') {
                    chatbotcomplete.style.display = "none";
                    let lastMsg = document.createElement("p");
                    lastMsg.textContent = 'Thanks for using our Chatbot!';
                    lastMsg.classList.add('lastMessage');
                    document.body.appendChild(lastMsg)
                }
            }
        </script>
    </body>
</html>
