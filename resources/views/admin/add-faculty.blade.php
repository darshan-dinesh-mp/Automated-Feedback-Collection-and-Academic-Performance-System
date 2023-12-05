<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="px-0 lg:px-12">
        <nav class=" w-full flex items-center justify-between px-4 lg:px-0 py-4">
            <div class="-space-y-3">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <x-heroicon-o-arrow-small-left class="w-7 h-7" />
                    <span>
                        Add Faculty
                    </span>
                </a>
            </div>
        </nav>
        <div class="flex items-center justify-center flex-col">
            <form class="px-4 lg:px-12 space-y-8 py-8 bg-secondary w-3/4" method="post">
                @csrf
                <div>
                    <div class="flex flex-col text-xl space-y-4 mb-4">
                        <div>
                            <p class="font-medium">Faculty Name:</p>
                            <input type="text" name="field1"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 border-secondary focus:border-black/20"
                                placeholder="type your text here. ">
                        </div>
                        <div>
                            <p class="font-medium">Email:</p>
                            <input type="mail" name="field1"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 border-secondary focus:border-black/20"
                                placeholder="type your text here. ">
                        </div>
                        <div>
                            <p class="font-medium">Password:</p>
                            <input type="text" name="field1"
                                class="bg-secondary w-full px-3 py-3 rounded-md outline-none border-2 border-secondary focus:border-black/20"
                                placeholder="***************">
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center flex-col">
                    <input type="submit" value="Submit"
                        class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium">
                </div>
        </div>
        </form>
    </div>
</body>

</html>
