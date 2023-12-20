<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="flex lg:flex-row flex-col">
        <div class="w-full lg:w-2/4 min-h-screen relative flex items-end justify-start">
            <img src="/images/background.png" class="w-full top-0 left-0 h-full object-cover absolute -z-20" alt="">
            <div
                class="left-0 top-0 h-full w-full bg-gradient-to-t from-black/40 via-black/10 to-transparent absolute -z-10">
            </div>
            <div class="pb-12 text-light px-6 lg:px-12">
                <img src="/images/logo.png" class="w-32 h-full invert brightness-0 pb-2" alt="">
                <div class="-space-y-1 mb-3">
                    <h2 class="font-medium text-xl">Welcome to</h2>
                    <h1 class="font-medium text-4xl">Student Mentorship App</h1>
                </div>
                <p class=" mb-3">To develop NITTE as a Centre of Excellence imparting quality education, generating
                    competent, skilled manpower to face the scientific and social challenges, with a high degree of
                    credibility, integrity, ethical standards and social concern.</p>
                <div class="">
                    <a href="#login-screen" class="font-mono lg:hidden flex items-center space-x-2">
                        <span>Login to your account
                        </span>
                        <x-heroicon-m-chevron-right class="h-5 w-5" />
                        {{-- <x-heroicon-o-arrow-right /> --}}
                    </a>
                </div>
            </div>
        </div>
        <div class="min-h-screen flex-col w-full lg:w-2/4 flex items-center justify-center">
            <form id="login-screen" class="flex items-center flex-col w-[95%] lg:w-full justify-center space-y-6"
                method="post" action="{{ route('admin_login') }}">
                @csrf
                <div class="flex flex-col items-center -space-y-1 lg:-space-y-3 justify-center">
                    <h2 class="text-[1rem] lg:text-[1.3rem]">Admin Login</h2>
                    <h1 class="text-[2rem] lg:text-[3rem] font-medium"> Get Started! </h1>
                </div>
                <div class="flex flex-col w-[85%] lg:w-3/4">
                    <label for="password" class="label">
                        <x-heroicon-o-user class="w-4 h-4" />
                        <span>
                            Email Address
                        </span>
                    </label>
                    <input type="mail" name="email" class="input-fields" required placeholder="email">
                </div>
                <div class="flex flex-col w-[85%] lg:w-3/4">
                    <label for="password" class="label">
                        <x-heroicon-o-lock-closed class="w-4 h-4" />
                        <span>
                            Password
                        </span>
                    </label>
                    <input type="password" name="password" class="input-fields" required
                        placeholder="*****************">
                </div>
                <input type="submit"
                    class="text-[1.35rem] bg-primary w-[85%] lg:w-3/4 text-light py-3 px-24 rounded-lg hover:bg-primary/90 cursor-pointer duration-300 font-medium"
                    value="Login">

            </form>
            <div>
                @if (session('invalid_admin_credential'))
                <div id="error-message" class="absolute z-40 bg-red-100 rounded-xl pr-24 pl-5 py-3 bottom-0 right-0">
                    <div class="flex items-center justify-center space-x-2 text-red-500">
                        <x-heroicon-o-user class="w-5 h-5" />
                        <h1 class="">
                            {{ session('invalid_admin_credential') }}
                        </h1>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("scroll", function () {
            var scrollValue = window.scrollY;
            var image = document.getElementById("zoomImage");

            var scaleValue = 1 + scrollValue / 1000;
            image.style.transform = "scale(" + scaleValue + ")";
        });

        setTimeout(function () {
            document.getElementById('error-message').style.display = 'none';
        }, 5000);
    </script>
</body>

</html>