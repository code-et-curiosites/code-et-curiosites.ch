<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>

        @vite('resources/css/app.css')
    </head>
    <body class="min-h-screen w-full">
        <div class="bg-green-yellow">
            <section class="overflow-hidden">
                <div class="p-16 max-w-[700px] h-full flex flex-col justify-end">
                    <p class="uppercase text-3xl font-bold text-white">{{ $subtitle }}</p>
                    <h1 class="stroke-shadow halftone halftone halftone-color">{{ $title }}</h1>
                    <p class="text-5xl">{{ $content }}</p>
                </div>
            </section>
        </div>
    </body>
</html>
