<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - {{$user->name}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<header class="bg-white shadow">
    <div class="px-4 py-6 mx-auto max-w-3xl sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h1>
        <p class="text-sm text-gray-500">{{ $user->subdomain }}.{{ parse_url(config('app.url'), PHP_URL_HOST) }}</p>
    </div>
</header>

<main class="py-6 mx-auto max-w-3xl sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        @forelse ($notes as $note)
            <div class="overflow-hidden mb-4 bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $note->title }}</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $note->user->name }} ·
                                {{ $note->published_at->format('M d, Y') }}</p>
                        </div>
                        <span
                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                {{ $note->published_at->diffForHumans() }}
                            </span>
                    </div>
                </div>
                <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                    <div class="sm:px-6 sm:py-5">
                        <p class="text-sm text-gray-900">{{ $note->content }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No notes yet.</p>
        @endforelse
    </div>
    {{ $notes->links() }}
</main>
</body>
</html>
