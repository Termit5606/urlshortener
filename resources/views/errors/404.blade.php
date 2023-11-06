<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ __('errors.404.title') }}</title>
</head>
<body>
    <div class="flex flex-col justify-center items-center w-screen h-screen bg-gray-100">
        <div class="flex flex-col">
            <h1 class="text-4xl font-semibold mb-4">
                {{ __('errors.404.h1') }}
            </h1>
            <span class="text-lg opacity-50 font-medium mb-10">
                {{ __('errors.404.description') }}
            </span>
        </div>

        <div class="flex flex-row space-x-2">
            <a href="{{ route('language.set', 'en') }}" class="text-sm opacity-50 hover:opacity-100 transition-opacity">
                English
            </a>
            <a href="{{ route('language.set', 'ru') }}" class="text-sm opacity-50 hover:opacity-100 transition-opacity">
                Русский
            </a>
        </div>
    </div>
</body>
</html>