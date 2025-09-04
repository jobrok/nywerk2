@props(['context' => 'navigation'])

<ul role="list" class="mt-6 grid grid-cols-1 sm:grid-cols-4 gap-16">
    <li>
        <h2 class="font-display text-base font-semibold text-white pb-2">Kontakt</h2>
        <span class="text-sm not-italic text-white">
            Tel.: +49 (0) 9281 / 777 99 80<br/>
            E-Mail: info@nywerk.de<br/>
            @if($context === 'navigation')
                <button class="text-white hover:text-gray-300 transition-colors font-medium inline-flex items-center group cursor-pointer">
                    Termin buchen
                    <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1"
                         fill="currentColor" viewBox="0 0 256 256">
                        <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                    </svg>
                </button>
            @endif
        </span>
    </li>
    <li>
        <h2 class="font-display text-base font-semibold text-white pb-2">Büro München</h2>
        <span class="text-sm not-italic text-white">
            Luise-Ulrich-Straße 20<br/>
            80636 München<br/>
            Germany<br/>
        </span>
    </li>
    <li>
        <h2 class="font-display text-base font-semibold text-white pb-2">Büro Hof</h2>
        <span class="text-sm not-italic text-white">
            Fabrikzeile 21<br/>
            95028 Hof<br/>
            Germany<br/>
        </span>
    </li>
    <li class="ml-auto">
        <ul role="list" class="flex gap-x-6 text-white mt-6">
            <li class="list-none">
                <a target="_blank" aria-label="Instagram"
                   class="transition hover:text-neutral-200"
                   href="https://www.instagram.com/auswall_productsolutions/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24">
                        <title>logo-instagram</title>
                        <g fill="#fff">
                            <path d="M12,2.982c2.937,0,3.285.011,4.445.064a6.072,6.072,0,0,1,2.042.379,3.4,3.4,0,0,1,1.265.823,3.4,3.4,0,0,1,.823,1.265,6.072,6.072,0,0,1,.379,2.042c.053,1.16.064,1.508.064,4.445s-.011,3.285-.064,4.445a6.072,6.072,0,0,1-.379,2.042,3.644,3.644,0,0,1-2.088,2.088,6.072,6.072,0,0,1-2.042.379c-1.16.053-1.508.064-4.445.064s-3.285-.011-4.445-.064a6.072,6.072,0,0,1-2.042-.379,3.4,3.4,0,0,1-1.265-.823,3.4,3.4,0,0,1-.823-1.265,6.072,6.072,0,0,1-.379-2.042c-.053-1.16-.064-1.508-.064-4.445s.011-3.285.064-4.445a6.072,6.072,0,0,1,.379-2.042,3.4,3.4,0,0,1,.823-1.265,3.4,3.4,0,0,1,1.265-.823,6.072,6.072,0,0,1,2.042-.379c1.16-.053,1.508-.064,4.445-.064M12,1c-2.987,0-3.362.013-4.535.066a8.108,8.108,0,0,0-2.67.511A5.625,5.625,0,0,0,1.577,4.8a8.108,8.108,0,0,0-.511,2.67C1.013,8.638,1,9.013,1,12s.013,3.362.066,4.535a8.108,8.108,0,0,0,.511,2.67A5.625,5.625,0,0,0,4.8,22.423a8.108,8.108,0,0,0,2.67.511C8.638,22.987,9.013,23,12,23s3.362-.013,4.535-.066a8.108,8.108,0,0,0,2.67-.511A5.625,5.625,0,0,0,22.423,19.2a8.108,8.108,0,0,0,.511-2.67C22.987,15.362,23,14.987,23,12s-.013-3.362-.066-4.535a8.108,8.108,0,0,0-.511-2.67A5.625,5.625,0,0,0,19.2,1.577a8.108,8.108,0,0,0-2.67-.511C15.362,1.013,14.987,1,12,1Z"
                                  fill="#fff"></path>
                            <path d="M12,6.351A5.649,5.649,0,1,0,17.649,12,5.649,5.649,0,0,0,12,6.351Zm0,9.316A3.667,3.667,0,1,1,15.667,12,3.667,3.667,0,0,1,12,15.667Z"
                                  fill="#fff"></path>
                            <circle cx="17.872" cy="6.128" r="1.32" fill="#fff"></circle>
                        </g>
                    </svg>
                </a>
            </li>
            <li class="list-none">
                <a target="_blank" aria-label="LinkedIn"
                   class="transition hover:text-neutral-200"
                   href="https://www.linkedin.com/company/auswall---product-solutions-gmbh-&amp;-cokg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24">
                        <title>logo-linkedin</title>
                        <g fill="#fff">
                            <path fill="#fff"
                                  d="M23,0H1C0.4,0,0,0.4,0,1v22c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V1C24,0.4,23.6,0,23,0z M7.1,20.5H3.6V9h3.6 V20.5z M5.3,7.4c-1.1,0-2.1-0.9-2.1-2.1c0-1.1,0.9-2.1,2.1-2.1c1.1,0,2.1,0.9,2.1,2.1C7.4,6.5,6.5,7.4,5.3,7.4z M20.5,20.5h-3.6 v-5.6c0-1.3,0-3-1.8-3c-1.9,0-2.1,1.4-2.1,2.9v5.7H9.4V9h3.4v1.6h0c0.5-0.9,1.6-1.8,3.4-1.8c3.6,0,4.3,2.4,4.3,5.5V20.5z"></path>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
    </li>
</ul>