<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... -->
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full bg-cover bg-center bg-fixed" style="background-image: url('https://2.bp.blogspot.com/-4zTGeP6ktmw/UaAIttq6PiI/AAAAAAAByik/iC8r8TjY0PE/s1600/towards-the-sunset-1920x1200-wallpaper-amanecer-visto-desde-un-avi%C3%B3n-vistas-a%C3%A9reas.jpg')">
            <div class="flex justify-center items-center h-screen">
                <div class="w-1/2 bg-white bg-opacity-60 shadow-md overflow-hidden sm:rounded-lg" style="height: 40%;">
                    <!-- Aquí puedes hacer los cambios que desees para esta vista específica -->
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>