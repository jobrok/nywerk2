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
      x-data="{showNavi: false, showContactModal: false, showProjectModal: false, projectTitle: '', projectContent: ''}">

<x-navi></x-navi>

<div class="relative h-full w-full transition-all duration-300 ease-in-out -mb-[20px]"
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

        {{--
    <div class="text-2xl pt-3 flex">
        <span class="cd-words-wrapper mr-1.5">
            <b class="is-visible font-normal">Scalable</b>
            <b class="font-normal">Customized</b>
            <b class="font-normal">Extendable</b>
        </span>
        <span class="flex">
            Cloud Software and Product Creation
        </span>
    </div>
    --}}

    </div>
</div>
</div>

{{$slot}}

<footer class="bg-black">

    <div class="mx-auto max-w-7xl md:border-l border-neutral-700 px-6 lg:px-16 w-full text-white py-16">
        <div class="grid md:grid-cols-4 gap-12">
            <div class="col-span-4">
                <span class="text-5xl">nywerk</span>
                <div class="leading-8 pt-2">
                    nywerk Software GmbH
                </div>
            </div>
            <div class="leading-8">
                Luise-Ullrich-Straße 20<br/>
                80636 München
            </div>
            <div class="leading-8">
                Fabrikzeile 21 <br/>
                95028 Hof <br/>
            </div>
            <div class="leading-8">
                +49 (0) 9281 / 777 99 80<br/>
                info@nywerk.de
            </div>
        </div>


    </div>

    <div class="border-t  text-white border-neutral-700 pt-14 ">

        <div class="mx-auto max-w-7xl px-6 lg:px-16 pb-14 flex w-full ">

            <div class="flex">
                <a class="hidden md:block relative mr-4" href="{{route('services')}}">
                    <span>Leistungen</span>
                    <span class="slider"></span>
                </a>

                <a class="hidden md:block relative mx-4" href="{{route('use-cases')}}">
                    <span>Use Cases</span>
                    <span class="slider"></span>
                </a>
                <a class="relative mr-4 md:mx-4 text-sm md:text-base" href="{{route('datenschutz')}}">
                    <span>Datenschutz</span>
                    <span class="slider"></span>
                </a>
                <a class="relative mx-4 text-sm md:text-base" href="{{route('impressum')}}">
                    <span>Impressum</span>
                    <span class="slider"></span>
                </a>
            </div>

            <ul role="list" class="flex ml-auto gap-x-6 text-white">
                <li>
                    <a aria-label="Instagram" class="transition hover:text-neutral-200"
                       href="https://instagram.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>
                                logo-instagram</title>
                            <g fill="#fff">
                                <path
                                    d="M12,2.982c2.937,0,3.285.011,4.445.064a6.072,6.072,0,0,1,2.042.379,3.4,3.4,0,0,1,1.265.823,3.4,3.4,0,0,1,.823,1.265,6.072,6.072,0,0,1,.379,2.042c.053,1.16.064,1.508.064,4.445s-.011,3.285-.064,4.445a6.072,6.072,0,0,1-.379,2.042,3.644,3.644,0,0,1-2.088,2.088,6.072,6.072,0,0,1-2.042.379c-1.16.053-1.508.064-4.445.064s-3.285-.011-4.445-.064a6.072,6.072,0,0,1-2.042-.379,3.4,3.4,0,0,1-1.265-.823,3.4,3.4,0,0,1-.823-1.265,6.072,6.072,0,0,1-.379-2.042c-.053-1.16-.064-1.508-.064-4.445s.011-3.285.064-4.445a6.072,6.072,0,0,1,.379-2.042,3.4,3.4,0,0,1,.823-1.265,3.4,3.4,0,0,1,1.265-.823,6.072,6.072,0,0,1,2.042-.379c1.16-.053,1.508-.064,4.445-.064M12,1c-2.987,0-3.362.013-4.535.066a8.108,8.108,0,0,0-2.67.511A5.625,5.625,0,0,0,1.577,4.8a8.108,8.108,0,0,0-.511,2.67C1.013,8.638,1,9.013,1,12s.013,3.362.066,4.535a8.108,8.108,0,0,0,.511,2.67A5.625,5.625,0,0,0,4.8,22.423a8.108,8.108,0,0,0,2.67.511C8.638,22.987,9.013,23,12,23s3.362-.013,4.535-.066a8.108,8.108,0,0,0,2.67-.511A5.625,5.625,0,0,0,22.423,19.2a8.108,8.108,0,0,0,.511-2.67C22.987,15.362,23,14.987,23,12s-.013-3.362-.066-4.535a8.108,8.108,0,0,0-.511-2.67A5.625,5.625,0,0,0,19.2,1.577a8.108,8.108,0,0,0-2.67-.511C15.362,1.013,14.987,1,12,1Z"
                                    fill="#fff"></path>
                                <path
                                    d="M12,6.351A5.649,5.649,0,1,0,17.649,12,5.649,5.649,0,0,0,12,6.351Zm0,9.316A3.667,3.667,0,1,1,15.667,12,3.667,3.667,0,0,1,12,15.667Z"
                                    fill="#fff"></path>
                                <circle cx="17.872" cy="6.128" r="1.32" fill="#fff"></circle>
                            </g>
                        </svg>
                    </a>
                </li>

                <li>
                    <a aria-label="Instagram" class="transition hover:text-neutral-200"
                       href="https://instagram.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>
                                logo-linkedin</title>
                            <g fill="#fff">
                                <path fill="#fff"
                                      d="M23,0H1C0.4,0,0,0.4,0,1v22c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V1C24,0.4,23.6,0,23,0z M7.1,20.5H3.6V9h3.6 V20.5z M5.3,7.4c-1.1,0-2.1-0.9-2.1-2.1c0-1.1,0.9-2.1,2.1-2.1c1.1,0,2.1,0.9,2.1,2.1C7.4,6.5,6.5,7.4,5.3,7.4z M20.5,20.5h-3.6 v-5.6c0-1.3,0-3-1.8-3c-1.9,0-2.1,1.4-2.1,2.9v5.7H9.4V9h3.4v1.6h0c0.5-0.9,1.6-1.8,3.4-1.8c3.6,0,4.3,2.4,4.3,5.5V20.5z"></path>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</footer>


</body>
</html>


