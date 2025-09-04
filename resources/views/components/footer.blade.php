<footer class="bg-black">
    <div class="mx-auto max-w-7xl md:border-l border-neutral-700 px-6 lg:px-16 w-full text-white py-16">
        <div class="mb-12">
            <span class="text-5xl">nywerk</span>
            <div class="leading-8 pt-2">
                nywerk Software GmbH
            </div>
        </div>
        <div class="">
            <x-contact-info context="footer" />
        </div>
    </div>

    <div class="border-t text-white border-neutral-700 pt-14">
        <div class="mx-auto max-w-7xl px-6 lg:px-16 pb-14 flex w-full">
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

        </div>
    </div>
</footer>