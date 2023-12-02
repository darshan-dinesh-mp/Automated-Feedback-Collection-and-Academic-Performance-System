<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppy">
    <div class="relative px-0 lg:px-12">
        <nav class=" w-full flex items-center justify-between px-4 lg:px-0 py-4">
            <div class="-space-y-3">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center justify-center space-x-2 text-2xl font-medium">
                    <x-heroicon-o-arrow-small-left class="w-7 h-7" />
                    <span>
                        Complete your profile!
                    </span>
                </a>
            </div>
        </nav>
    </div>
    <form class="px-4 lg:px-12 space-y-4 pb-8" action="">
        <div>
            <h1 class="font-semibold tracking-widest mb-3 text-black/70">MENTOR INFO</h1>
            <div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">Name of Mentor:</span>
                    <span class="font-semibold">Harshitha</span>
                </div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">Designation:</span>
                    <span class="font-semibold">Assistant Professor</span>
                </div>
            </div>
        </div>

        <div>
            <h1 class="font-semibold tracking-widest mb-3 text-black/70">STUDENT INFO</h1>
            <div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">Full Name:</span>
                    <span class="font-semibold">Rakshitha M</span>
                </div>
                <div class="flex space-x-5 text-xl">
                    <span class="font-medium">USN:</span>
                    <span class="font-semibold">NNM23MC111</span>
                </div>
            </div>
        </div>

        <div>
            <h1 class="font-semibold tracking-widest mb-3 text-black/70">PERFORMANCE ENQUIRY</h1>
            <div class="flex flex-col text-xl space-y-4 mb-4">
                <div>
                    <p class="font-medium">Are you having any difficulty in understanding
                        the concepts? If so give details.</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">Action taken</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">State of the issue</p>
                    <div class="flex space-x-4">
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Solved" id="issue">
                            <label class="text-lg font-medium" for="Solved">Solved</label>
                        </div>
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Not Solved" id="issue">
                            <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col text-xl space-y-4 mb-4">
                <div>
                    <p class="font-medium">Are you having any difficulty in implementing the
                        concepts in the lab? If so give details.</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">Action taken</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">State of the issue</p>
                    <div class="flex space-x-4">
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Solved" id="issue">
                            <label class="text-lg font-medium" for="Solved">Solved</label>
                        </div>
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Not Solved" id="issue">
                            <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1 class="font-semibold tracking-widest mb-3 text-black/70 uppercase">Give the attendance percentage</h1>
            <div class="w-2/4 flex flex-col space-y-4 items-center justify-between">
                <div class="w-full flex items-center justify-between">
                    <span class="text-xl font-medium">Artificial Intelligence &
                        Machine Learning :</span>
                    <input type="number" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                        placeholder="00" name="" id="">
                </div>
                <div class="w-full flex items-center justify-between">
                    <span class="text-xl font-medium">Artificial Intelligence &
                        Machine Learning :</span>
                    <input type="number" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                        placeholder="00" name="" id="">
                </div>
                <div class="w-full flex items-center justify-between">
                    <span class="text-xl font-medium">Artificial Intelligence &
                        Machine Learning :</span>
                    <input type="number" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                        placeholder="00" name="" id="">
                </div>
                <div class="w-full flex items-center justify-between">
                    <span class="text-xl font-medium">Artificial Intelligence &
                        Machine Learning :</span>
                    <input type="number" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                        placeholder="00" name="" id="">
                </div>
                <div class="w-full flex items-center justify-between">
                    <span class="text-xl font-medium">Artificial Intelligence &
                        Machine Learning :</span>
                    <input type="number" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                        placeholder="00" name="" id="">
                </div>
                <div class="w-full flex items-center justify-between">
                    <span class="text-xl font-medium">Artificial Intelligence &
                        Machine Learning :</span>
                    <input type="number" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                        placeholder="00" name="" id="">
                </div>
                <div class="w-full flex items-center justify-between">
                    <span class="text-xl font-medium">Artificial Intelligence &
                        Machine Learning :</span>
                    <input type="number" class="border-[3px] text-xl font-semibold w-16 h-16 text-center rounded-xl"
                        placeholder="00" name="" id="">
                </div>
            </div>
            <div class="flex flex-col text-xl space-y-4 mb-4">
                <div>
                    <p class="font-medium">Any issues in attendance.</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">Action taken</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">State of the issue</p>
                    <div class="flex space-x-4">
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Solved" id="issue">
                            <label class="text-lg font-medium" for="Solved">Solved</label>
                        </div>
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Not Solved" id="issue">
                            <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col text-xl space-y-4 mb-4">
                <div>
                    <p class="font-medium">Any other issue.</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">Action taken</p>
                    <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                        placeholder="type your text here. ">
                </div>
                <div>
                    <p class="font-medium">State of the issue</p>
                    <div class="flex space-x-4">
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Solved" id="issue">
                            <label class="text-lg font-medium" for="Solved">Solved</label>
                        </div>
                        <div class="flex space-x-2">
                            <input type="radio" name="issue" value="Not Solved" id="issue">
                            <label class="text-lg font-medium" for="Not Solved">Not Solved</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1 class="font-semibold tracking-widest mb-3 uppercase text-black/70">Projects involved</h1>
            <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                placeholder="project one">

            <input type="text" class="input border-b-2 outline-none w-2/4 border-primary py-2"
                placeholder="project two">
        </div>

        <div>
            <p>The Information your entered cannot be modified after!</p>
            <input type="button" value="Submit"
                class="text-md bg-primary w-[85%] lg:w-56 text-light py-3 rounded-lg border-[2px] border-primary hover:bg-primary/90 cursor-pointer duration-300 font-medium">
        </div>
    </form>
</body>

</html>
