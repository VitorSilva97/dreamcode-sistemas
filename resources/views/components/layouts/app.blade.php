<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex flex-col">

        <livewire:panel.navbar />
        <div class="min-h-screen flex flex-col sm:ml-64">
            <div class="flex-grow p-8 rounded-lg mt-14">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
