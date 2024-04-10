{{-- <!DOCTYPE html> --}}
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
{{-- <head> --}}
{{-- <meta charset="utf-8"> --}}
{{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

{{-- <!-- Fonts --> --}}
{{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
{{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

{{-- <!-- Scripts --> --}}
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
{{-- </head> --}}
{{-- <body class="font-sans antialiased"> --}}
{{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}
{{-- @include('layouts.navigation') --}}

{{-- <!-- Page Heading --> --}}
{{-- @if (isset($header)) --}}
{{-- <header class="bg-white dark:bg-gray-800 shadow"> --}}
{{-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> --}}
{{-- {{ $header }} --}}
{{-- </div> --}}
{{-- </header> --}}
{{-- @endif --}}

{{-- <!-- Page Content --> --}}
{{-- <main> --}}
{{-- {{ $slot }} --}}
{{-- </main> --}}
{{-- </div> --}}
{{-- </body> --}}
{{-- </html> --}}

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <title>Dashboard</title>

    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/ts/app.ts'])
  </head>
  <body>
    <div class="-translate-x-full transform-none overflow-hidden"></div>
    <button
      id="sidebar-button"
      type="button"
      class="ms-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 sm:hidden dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <div class="mdi mdi-menu text-2xl leading-none"></div>
    </button>

    <x-sidebar>
      <img src="/logo.png" width="150" style="margin: auto" />
      <hr class="border-t-gray-500" />
      <x-navlink to="/dashboard" icon="view-dashboard">Dashboard</x-navlink>
      <x-navlink to="/dashboard/strippenkaarten" icon="ticket">Strippenkaart</x-navlink>
      <x-navlink to="/dashboard/verslagen" icon="clipboard-edit">Verslagen</x-navlink>
      <x-navlink to="/dashboard/leerlingen" icon="account-multiple">Leerlingen</x-navlink>
    </x-sidebar>

    <div id="container" class="h-full p-4 sm:ml-64">
      {{ $slot }}
    </div>
  </body>
</html>

{{-- <style lang="scss"> --}}
{{-- :root { --}}
{{-- --accent: 136, 58, 234; --}}
{{-- --accent-light: 224, 204, 250; --}}
{{-- --accent-dark: 49, 10, 101; --}}
{{-- --accent-gradient: linear-gradient( --}}
{{-- 45deg, --}}
{{-- rgb(var(--accent)), --}}
{{-- rgb(var(--accent-light)) 30%, --}}
{{-- white 60% --}}
{{-- ); --}}
{{-- } --}}
{{-- html { --}}
{{-- font-family: Verdana, system-ui, sans-serif; --}}
{{-- } --}}
{{-- html, --}}
{{-- body { --}}
{{-- height: 100%; --}}
{{-- } --}}
{{-- body { --}}
{{-- background: #111827; --}}
{{-- } --}}
{{-- main { --}}
{{-- margin: auto; --}}
{{-- color: white; --}}
{{-- font-size: 20px; --}}
{{-- line-height: 1.6; --}}
{{-- } --}}
{{-- h1 { --}}
{{-- font-weight: 700; --}}
{{-- line-height: 1; --}}
{{-- text-align: center; --}}
{{-- } --}}
{{-- </style> --}}
