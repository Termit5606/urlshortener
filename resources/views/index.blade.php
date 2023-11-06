<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ __('index.title') }}</title>
</head>
<body>
    <div class="flex justify-center items-center w-screen h-screen bg-gray-100">
        <div class="flex flex-col px-2 py-4 min-w-[33%]">
            <h1 class="text-4xl font-semibold mb-2">{{ __('index.title') }}</h1>
            <span class="opacity-50 mb-10 text-xl">{{ __('index.description') }}</span>

            <form id="ShortenerForm" action="{{ route('short') }}" method="post">
                <div class="flex flex-row mb-10">
                    <input 
                        class="text-lg rounded-xl px-4 py-2 font-medium h-14 w-full mr-2 border-white outline-gray-200 hover:border-gray-200 border-2 transition-colors" 
                        placeholder="http://example.com/"
                        type="url" 
                        name="url" 
                        id="ShortenerInput"
                    >
                    <button 
                        class="rounded-xl text-lg bg-yellow-400 hover:bg-yellow-300 font-medium px-4 py-2 transition-colors disabled:bg-gray-200"
                        id="ShortenerSubmit"
                        disabled
                        type="submit"
                    >
                        {{ __('index.submit') }}
                    </button>
                </div>
            </form>

            <div class="flex flex-row space-x-2 mb-20">
                <a href="{{ route('language.set', 'en') }}" class="text-sm opacity-50 hover:opacity-100 transition-opacity">
                    English
                </a>
                <a href="{{ route('language.set', 'ru') }}" class="text-sm opacity-50 hover:opacity-100 transition-opacity">
                    Русский
                </a>
            </div>

            <div id="ShortenerResult" class="opacity-0 duration-500 transition-opacity flex flex-col bg-white w-full rounded-xl px-8 py-4">
                <a 
                    id="ShortenerLink" 
                    class="text-2xl font-semibold transition-opacity hover:opacity-70"
                    href="#"
                    target="_blank"
                >
                    Здесь пока пусто :)
                </a>
            </div>
        </div>
    </div>
</body>
</html>