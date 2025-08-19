<header>
    <div class="absolute top-0 right-0 left-0 z-40 pt-14 border-t-0 border-gray-100">
        <div class="mx-auto max-w-7xl px-6 lg:px-16">
            <div class="mx-auto max-w-none">
                <div class="flex items-center justify-between">
                    <a class="font-bold text-2xl -mt-1" aria-label="Home" href="/">
                        <div class=" font-semibold text-white text-4xl">
                            nywerk
                        </div>
                    </a>
                    <div class="flex items-center gap-x-8 pt-1">
                        <a
                            class="inline-flex px-4 py-1.5 text-sm font-semibold transition border-2 border-white text-white"
                            href="/contact"><span class="relative top-px">Kontakt</span></a>
                        <button @click="showNavi = !showNavi" type="button" aria-expanded="false" aria-controls=":R3a:"
                                class="group -m-2.5 rounded-full p-2.5 transition hover:bg-gray-300/10"
                                aria-label="Toggle navigation">
                            <svg viewBox="0 0 24 24" aria-hidden="true"
                                 class="h-6 w-6 fill-white group-hover:fill-gray-300">
                                <path d="M2 6h20v2H2zM2 16h20v2H2z"></path>
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
        <div class="bg-neutral-800">
            <div class="bg-black pt-14 pb-16 ">
                <div class="mx-auto max-w-7xl px-6 lg:px-16">
                    <div class="mx-auto ">
                        <div class="flex items-center justify-between">
                            <a href="/">
                                <div class="font-semibold text-white text-4xl">
                                    nywerk
                                </div>
                            </a>
                            <div class="flex items-center gap-x-8 pt-1"><a
                                    class="inline-flex px-4 py-1.5 text-sm font-semibold transition border-2 border-white text-white"
                                    href="/contact"><span class="relative top-px">Kontakt</span></a>
                                <button @click="showNavi = !showNavi" type="button" aria-expanded="false"
                                        aria-controls=":R3a:"
                                        class="group -m-2.5 rounded-full p-2.5 transition hover:bg-black/10"
                                        aria-label="Toggle navigation">
                                    <svg viewBox="0 0 24 24" aria-hidden="true"
                                         class="h-6 w-6 fill-white group-hover:fill-gray-300">
                                        <path d="m5.636 4.223 14.142 14.142-1.414 1.414L4.222 5.637z"></path>
                                        <path d="M4.222 18.363 18.364 4.22l1.414 1.414L5.636 19.777z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="mt-px font-display text-5xl font-medium tracking-tight text-black">
                <div class="even:mt-px sm:bg-black">
                    <div class="mx-auto max-w-7xl px-6 lg:px-16">
                        <div class="mx-auto ">
                            <div class="grid grid-cols-1 sm:grid-cols-2 "><a
                                    class="group relative isolate -mx-6 bg-black text-white hover:!text-white px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16"
                                    href="/work">Services<span
                                        class="absolute inset-y-0 -z-10 w-screen opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span></a><a
                                    class="group relative isolate -mx-6 bg-black text-white hover:!text-white px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-800 sm:even:pl-16"
                                    href="/about">Use Cases<span
                                        class="absolute inset-y-0 -z-10 w-screen opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div
                class="relative bg-black before:absolute before:inset-x-0 before:top-0 before:h-px before:bg-neutral-800">
                <div class="mx-auto max-w-7xl px-6 lg:px-16">
                    <div class="mx-auto ">
                        <div class="grid grid-cols-1 gap-y-10 pt-10 pb-16 sm:grid-cols-2 sm:pt-16">
                            <div><h2 class="font-display text-base font-semibold text-white">Büro</h2>
                                <ul role="list" class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2">
                                    <li>
                                          <span class="text-sm not-italic text-white">
                                        Fabrikzeile 21 <br/>
                                        95028 Hof
                                          </span>
                                    </li>
                                    <li>
                                        <span class="text-sm not-italic text-white">
                                        info@nywerk.de<br/>
                                        Tel +49-9281 / 777 99 80 <br/>
                                            </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>

</header>
