<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
		crossorigin="anonymous" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('/') }}{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/') }}/vendor/css/spesial_div.css">


    <!-- Scripts -->
    <script src="{{ url('/') }}{{ mix('js/app.js') }}" defer></script>
</head>

<body class="spscontainer2">
    <div class="font-sans text-gray-900 antialiased spscontainer2">
        {{ $slot }}
    </div>
</body>

</html>
