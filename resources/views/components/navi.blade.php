<header>

    <script>
        let prevScrollpos = window.pageYOffset
        window.onscroll = function () {
            let currentScrollPos = window.pageYOffset
            if (currentScrollPos < 50) {
                document.getElementById('navbar').classList.remove('transition')
                document.getElementById('navbar').classList.remove('default')
                document.getElementById('navbar').classList.add('start')
                document.getElementById('navbar').style.top = '0'
                // Navbar nicht durch Scrollen sichtbar (am Anfang der Seite)
                if (window.Alpine && window.Alpine.store) {
                    const bodyData = document.body._x_dataStack?.[0];
                    if (bodyData) bodyData.isNavbarVisible = false;
                }

            } else if (prevScrollpos >= currentScrollPos && currentScrollPos > 0) {
                document.getElementById('navbar').classList.add('transition')
                document.getElementById('navbar').classList.remove('default')
                document.getElementById('navbar').classList.remove('start')
                // Navbar durch nach oben scrollen sichtbar
                if (window.Alpine && window.Alpine.store) {
                    const bodyData = document.body._x_dataStack?.[0];
                    if (bodyData) bodyData.isNavbarVisible = true;
                }
            } else {
                document.getElementById('navbar').classList.remove('transition')
                document.getElementById('navbar').classList.add('default')
                document.getElementById('navbar').classList.remove('start')
                document.getElementById('navbar').style.top = '-86px'
                // Navbar versteckt
                if (window.Alpine && window.Alpine.store) {
                    const bodyData = document.body._x_dataStack?.[0];
                    if (bodyData) bodyData.isNavbarVisible = false;
                }
            }
            prevScrollpos = currentScrollPos
        }
    </script>


    <style>
        #navbar {
            -webkit-transition: all 0.25s linear;
            -moz-transition: all 0.25s linear;
            -o-transition: all 0.25s linear;
            transition: all 0.25s linear;
        }

        .default {
            position: absolute;
            top: 0;
        }

        .transition {
            top: 0 !important;
        }

        .start {
            position: absolute;
            top: 0;
        }
    </style>


    <div id="navbar" class="fixed top-0 bg-black border-b border-neutral-700 right-0 left-0 z-40 pt-14 pb-14">
        <div class="mx-auto max-w-7xl px-6 lg:px-16">
            <div class="mx-auto max-w-none">
                <div class="flex items-center justify-between">
                    <a class="font-bold text-2xl -mt-1" aria-label="Home" href="/">
                        <div class=" font-semibold text-white text-4xl">
                            nywerk
                        </div>
                    </a>
                    <div class="flex items-center gap-x-8 pt-1">
                        <button type="button" class="text-white cursor-pointer">
                            de
                        </button>
                        <button
                            class="inline-flex px-4 py-1.5 text-sm font-semibold cursor-pointer transition border-2 border-white text-white hover:bg-white hover:text-black"
                            @click="showContactModal = true"><span class="relative top-px">Kontakt</span></button>
                        <button @click="isNavbarVisible ? (showNaviFixed = !showNaviFixed) : (showNavi = !showNavi)"
                                type="button" aria-expanded="false" aria-controls=":R3a:"
                                class="group -m-2.5 rounded-full cursor-pointer p-2.5 transition hover:bg-gray-300/10"
                                aria-label="Toggle navigation">
                            <svg viewBox="0 0 24 24" aria-hidden="true"
                                 class="h-6 w-6 fill-white group-hover:fill-gray-300"
                                 x-show="!showNavi && !showNaviFixed">
                                <path d="M2 6h20v2H2zM2 16h20v2H2z"></path>
                            </svg>
                            <svg viewBox="0 0 24 24" aria-hidden="true"
                                 class="h-6 w-6 fill-white group-hover:fill-gray-300"
                                 x-show="showNavi || showNaviFixed">
                                <path d="m5.636 4.223 14.142 14.142-1.414 1.414L4.222 5.637z"></path>
                                <path d="M4.222 18.363 18.364 4.22l1.414 1.414L5.636 19.777z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-show="showNavi" x-transition:enter="transition-all duration-300"
         x-transition:enter-start="top-[-561px]"
         x-transition:enter-end="top-[0px]"
         x-transition:leave="transition-all duration-300"
         x-transition:leave-start="top-[0px]"
         x-transition:leave-end="top-[-561px]" style="height: 0px;" class="relative z-50 bg-black"
         aria-hidden="true">
        <x-navigation-menu :isFixed="false" />
    </div>

    <!-- Overlay für Fixed Navigation -->
    <div x-show="showNaviFixed"
         x-transition:enter="transition-opacity duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="showNaviFixed = false"
         class="fixed inset-0 bg-black/60 z-40"
         aria-hidden="true">
    </div>

    <!-- Fixed Navigation (erscheint wenn Navbar durch Scrollen sichtbar wurde) -->
    <div x-show="showNaviFixed"
         x-transition:enter="transition-all duration-300"
         x-transition:enter-start="opacity-0 transform -translate-y-full"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition-all duration-300"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-full"
         class="fixed top-0 left-0 right-0 bottom-0 z-50 bg-black overflow-y-auto"
         style="-webkit-overflow-scrolling: touch;"
         aria-hidden="true">
        <x-navigation-menu :isFixed="true" />
    </div>

    <x-contact-modal />

</header>
