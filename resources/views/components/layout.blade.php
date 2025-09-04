<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>nywerk - Software Engineering Studio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="min-h-full overflow-x-hidden antialiased"
      x-data="{showNavi: false, showNaviFixed: false, showContactModal: false, showProjectModal: false, projectTitle: '', projectContent: '', isNavbarVisible: false}">

<div class="bg-black">

<x-navi></x-navi>

<div class="relative bg-black h-full w-full transition-all duration-300 ease-in-out -mb-[20px]"
     style="-webkit-clip-path: polygon(0 0, 100% 0, 100% calc(100% - 4vw), 0 100%);
    clip-path: polygon(0 0, 100% 0, 100% calc(100% - 4vw), 0 100%);"
     :class="{'mt-[561px]': showNavi}">

    <div class="absolute inset-0 z-0 bg-black bg-cover bg-center filter grayscale brightness-50"></div>

    <div
        class="relative z-10 mx-auto max-w-7xl md:border-l border-neutral-700 mt-[130px] px-6 lg:px-16 w-full text-white pb-72 pt-72">
        <div class="lg:max-w-4xl">
            <div class="relative cd-headline loading-bar text-3xl lg:text-5xl" x-data="{
                currentWordIndex: 0,
                words: ['Engineering', 'Design', 'Architecture', 'Consulting'],
                isLoading: false
            }" x-init="
                setTimeout(() => {
                    isLoading = true;
                    setTimeout(() => {
                        currentWordIndex = (currentWordIndex + 1) % words.length;
                        isLoading = false;
                        setTimeout(() => { isLoading = true }, 800);
                    }, 3000);
                }, 800);

                setInterval(() => {
                    setTimeout(() => {
                        currentWordIndex = (currentWordIndex + 1) % words.length;
                        isLoading = false;
                        setTimeout(() => { isLoading = true }, 800);
                    }, 3000);
                }, 3800)
            ">
                <div
                    class="absolute inset-y-0 -left-6 lg:-left-16 border-l-[3px] border-white pointer-events-none hidden md:block"></div>
                <span class="loading-after antialiased text-white">
                    Software
                    <span class="cd-words-wrapper -mt-[10px]" :class="{ 'is-loading': isLoading }">
                        <b class="font-normal is-visible" x-text="words[currentWordIndex]"></b>
                    </span>
                    Studio
                </span>
            </div>
            <div class="text-xl/9 pt-8">
                We build and launch custom software products for impactful business solutions.
            </div>

        </div>


    </div>
</div>
</div></div>

{{$slot}}

<x-footer />


</body>
</html>


