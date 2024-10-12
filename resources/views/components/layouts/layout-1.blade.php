<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body class="min-h-screen grid place-items-center p-4 bg-gray-900">
        <div class="bg-white">
            <section class="overflow-hidden">
                <div class="p-16 h-full flex flex-col justify-end">
                    <p class="uppercase text-3xl font-bold text-red-600">{{ $subtitle }}</p>
                    <h1 class="text-gray-900 mt-8 mb-4 text-7xl font-extrabold">{{ $title }}</h1>
                    <p class="text-5xl">{{ $content }}</p>
                </div>
            </section>
        </div>
    </body>
</html>
