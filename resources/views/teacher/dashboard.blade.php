<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="">
        <nav class="w-full flex items-center justify-between py-4 shadow-md px-12">
            <div class="-space-y-3">
                <h1 class="text-2xl font-semibold">Mentor Dashboard</h1>
            </div>
            <a href="{{ route('teacher-profile') }}">
                <div
                    class="text-primary hover:bg-secondary border-2 hover:bg-primary/20 duration-200 cursor-pointer flex items-center justify-center rounded-full py-3 px-5 space-x-1">
                    {{-- <x-heroicon-o-user class="w-6 h-6" /> --}}
                    <span class="font-medium hidden lg:block">Alfred Pennyworth</span>
                </div>
            </a>
        </nav>
        <div class="px-12 py-8">
            <div class="grid grid-cols-3 grid-rows-1 space-x-6">
                <a href="#" class="cursor-pointer hover:bg-black/10 py-6 text-primary mb-2 bg-black/5 rounded-md flex items-center justify-center space-x-4">
                    {{-- <x-gmdi-group-add-o class="w-7 h-7" /> --}}
                    <h1 class="text-xl text-semibold">Add Mentees</h1>
                </a>
                <a href="#" class="cursor-pointer hover:bg-black/10 py-6 text-primary mb-2 bg-black/5 rounded-md flex items-center justify-center space-x-4">
                    {{-- <x-gmdi-group-add-o class="w-7 h-7" /> --}}
                    <h1 class="text-xl text-semibold">Add Mentees</h1>
                </a>
                <a href="#" class="cursor-pointer hover:bg-black/10 py-6 text-primary mb-2 bg-black/5 rounded-md flex items-center justify-center space-x-4">
                    {{-- <x-gmdi-group-add-o class="w-7 h-7" /> --}}
                    <h1 class="text-xl text-semibold">Add Mentees</h1>
                </a>
            </div>
            <h1 class="text-2xl font-medium mb-6">Latest Updates</h1>

        </div>
    </div>
</body>

</html>
