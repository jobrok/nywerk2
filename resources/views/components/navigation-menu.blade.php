@props(['isFixed' => false])

<div class="bg-neutral-700 border-b !border-b-neutral-700">
    <div class="bg-black pt-14 pb-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-16">
            <div class="mx-auto">
                <div class="flex items-center justify-between">
                    <a href="/">
                        <div class="font-semibold text-white text-4xl">
                            nywerk
                        </div>
                    </a>
                    <div class="flex items-center gap-x-8 pt-1">
                        @if(!$isFixed)
                            <button type="button" class="text-white cursor-pointer">
                                de
                            </button>
                        @endif
                        <button
                            class="inline-flex px-4 py-1.5 text-sm font-semibold cursor-pointer transition border-2 border-white text-white hover:bg-white hover:text-black"
                            @click="showContactModal = true">
                            <span class="relative top-px">Kontakt</span>
                        </button>
                        <button @click="{{ $isFixed ? 'showNaviFixed' : 'showNavi' }} = !{{ $isFixed ? 'showNaviFixed' : 'showNavi' }}"
                                type="button" aria-expanded="false" aria-controls=":R3a:"
                                class="group cursor-pointer -m-2.5 rounded-full p-2.5 transition hover:bg-black/10"
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
                <div class="mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2">
                        <a class="group relative isolate -mx-6 bg-black text-white hover:!text-white px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-700 sm:even:pl-16"
                           href="/services">
                            Services
                            <span class="absolute inset-y-0 -z-10 w-screen opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span>
                        </a>
                        <a class="group relative isolate -mx-6 bg-black text-white hover:!text-white px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-neutral-700 sm:even:pl-16"
                           href="/use-cases">
                            Use Cases
                            <span class="absolute inset-y-0 -z-10 w-screen opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="relative bg-black before:absolute before:inset-x-0 before:top-0 before:h-px before:bg-neutral-700">
        <div class="mx-auto max-w-7xl px-6 lg:px-16">
            <div class="mx-auto">

                <div class="pt-10 pb-16 sm:pt-16">
                    <div class="">
                        <x-contact-info context="navigation" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
