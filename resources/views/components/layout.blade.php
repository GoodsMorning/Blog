<!DOCTYPE html>


<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />

<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />

<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<link rel="stylesheet" href="/app.css">

<title> Learn-Laravel </title>
<head><script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script></head>
<body>

    {{-- {{ $slot }} --}}
    
    <x-bladewind::button>Save User</x-bladewind::button>
    {{-- @yield('content') --}}
</body>