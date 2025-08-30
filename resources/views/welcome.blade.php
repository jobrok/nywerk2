<x-layout>

    <div class="mx-auto max-w-7xl md:border-l border-neutral-700 px-6 lg:px-16 w-full text-black py-2">
        <section class="pb-32">
            <style>
                /* Zeige immer 2 ganze Karten und die 3. zur Hälfte */
                #slider {
                    scroll-behavior: smooth;
                    -ms-overflow-style: none; /* IE/Edge */
                    scrollbar-width: none; /* Firefox */
                }

                #slider::-webkit-scrollbar {
                    display: none;
                }

                #slider .slider-item {
                    width: calc(100% - 16px); /* eine Karte auf mobile */
                    height: 28rem;
                }

                @media (min-width: 768px) {
                    /* md */
                    #slider .slider-item {
                        width: calc((100% - 32px) / 2); /* zwei Karten nebeneinander */
                    }
                }

                @media (min-width: 1024px) {
                    /* lg */
                    #slider .slider-item {
                        height: 36rem;
                    }
                }
            </style>
            <!-- Hauptcontainer mit relativer Positionierung für die Buttons -->
            <div class="relative mx-auto mt-32">

                <div class="relative text-5xl col-span-2 text-gray-900">
                    <div
                        class="absolute inset-y-0 -left-6 lg:-left-16 border-l-[3px] border-black pointer-events-none hidden md:block"></div>
                    Turning Use Cases into Business Growth
                </div>
                <div class="pt-8">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="text-left text-xl/9 pt-8">
                            We create innovative software solutions that captivate users and drive business growth.
                            Leveraging our deep expertise in software engineering and our passion for product
                            development, we bring bold ideas to life – working hand in hand with our clients to turn
                            their vision into reality.
                        </div>
                        <div class="text-left text-xl/9 pt-8">
                            We’ve had the privilege of working with businesses of all sizes – from innovative startups
                            and growing mid-sized companies to industry-leading enterprises.  With a decade in the
                            industry, we take pride in the path we’ve traveled. Over the years, we have successfully delivered
                            over 30 projects.
                        </div>
                    </div>
                </div>

                <!-- Slider Container -->
                <div class="slider-container flex pt-12 pb-3 gap-8 overflow-x-hidden" id="slider">
                    <div
                        class="slider-item group cursor-pointer h-80 bg-gray-100 flex-shrink-0 rounded overflow-hidden relative"
                        @click="showProjectModal = true; projectTitle = 'E-Commerce Platform'; projectContent = 'Comprehensive e-commerce solution with advanced product management, integrated payment processing, and real-time inventory tracking.'">
                        <div
                            class="absolute inset-0 bg-center bg-cover opacity-80 transition-transform transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:scale-105"
                            style="background-image: url('https://auswall.com/img/home_leistungen.jpg');"></div>
                        <div class="absolute inset-0 bg-black/60 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20 p-4">
                            <video loop="" autoplay muted
                                   poster="https://image.mux.com/ZwFvfekuHYZiP1ApzuAHqQVbac501y7G3qb5WQKpyfqc/thumbnail.jpg?fit_mode=preserve"
                                   playsinline="" preload="auto"
                                   src="blob:https://springsummer.dk/f97048a9-f6e8-472e-83ae-a480d28d2227"
                                   class="max-w-full max-h-full rounded-md shadow-lg">
                                <track kind="metadata" label="cuepoints" data-removeondestroy="">
                                <track kind="chapters" label="chapters" data-removeondestroy="" src="">
                            </video>
                        </div>
                        <div class="absolute inset-x-0 top-0 p-3 lg:p-4 flex items-center justify-between z-30">
                            <div class="text-white text-sm">E-Commerce<br/>Platform</div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    CMS
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    ERP
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    Consulting
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="slider-item group cursor-pointer h-80 bg-gray-100 flex-shrink-0 rounded overflow-hidden relative">
                        <div
                            class="absolute inset-0 bg-center bg-cover opacity-80 transition-transform transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:scale-105"
                            style="background-image: url('https://auswall.com/img/home_projekte.jpg');"></div>
                        <div class="absolute inset-0 bg-black/60 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20 p-4">
                            <video loop=""
                                   poster="https://image.mux.com/uQZnD9f7GCTfS5aQJBW4kDAZ8OYA02aeYVjBZ01YRVu9g/thumbnail.jpg?fit_mode=preserve"
                                   playsinline="" preload="auto"
                                   src="blob:https://springsummer.dk/24c6fbb7-8c36-4e88-89c2-0ce09067f221">
                                <track kind="metadata" label="cuepoints" data-removeondestroy="">
                                <track kind="chapters" label="chapters" data-removeondestroy="" src="">
                            </video>
                        </div>
                        <div class="absolute inset-x-0 top-0 p-3 lg:p-4 flex items-center justify-between z-30">
                            <div class="text-white text-sm">Projekt</div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    CMS
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    ERP
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    Consulting
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="slider-item group cursor-pointer h-80 bg-gray-100 flex-shrink-0 rounded overflow-hidden relative">
                        <div
                            class="absolute inset-0 bg-center bg-cover opacity-80 transition-transform transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:scale-105"
                            style="background-image: url('https://auswall.com/img/home_leistungen.jpg');"></div>
                        <div class="absolute inset-0 bg-black/60 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20 p-4">
                            <video loop="" autoplay muted
                                   poster="https://image.mux.com/ZwFvfekuHYZiP1ApzuAHqQVbac501y7G3qb5WQKpyfqc/thumbnail.jpg?fit_mode=preserve"
                                   playsinline="" preload="auto"
                                   src="blob:https://springsummer.dk/f97048a9-f6e8-472e-83ae-a480d28d2227"
                                   class="max-w-full max-h-full rounded-md shadow-lg">
                                <track kind="metadata" label="cuepoints" data-removeondestroy="">
                                <track kind="chapters" label="chapters" data-removeondestroy="" src="">
                            </video>
                        </div>
                        <div class="absolute inset-x-0 top-0 p-3 lg:p-4 flex items-center justify-between z-30">
                            <div class="text-white text-sm">Projekt <br/>
                                Test
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    CMS
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    ERP
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    Consulting
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="slider-item group cursor-pointer h-80 bg-gray-100 flex-shrink-0 rounded overflow-hidden relative">
                        <div
                            class="absolute inset-0 bg-center bg-cover opacity-80 transition-transform transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:scale-105"
                            style="background-image: url('https://auswall.com/img/home_projekte.jpg');"></div>
                        <div class="absolute inset-0 bg-black/60 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20 p-4">
                            <video loop=""
                                   poster="https://image.mux.com/uQZnD9f7GCTfS5aQJBW4kDAZ8OYA02aeYVjBZ01YRVu9g/thumbnail.jpg?fit_mode=preserve"
                                   playsinline="" preload="auto"
                                   src="blob:https://springsummer.dk/24c6fbb7-8c36-4e88-89c2-0ce09067f221">
                                <track kind="metadata" label="cuepoints" data-removeondestroy="">
                                <track kind="chapters" label="chapters" data-removeondestroy="" src="">
                            </video>
                        </div>
                        <div class="absolute inset-x-0 top-0 p-3 lg:p-4 flex items-center justify-between z-30">
                            <div class="text-white text-sm">Projekt</div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    CMS
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    ERP
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    Consulting
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="slider-item group cursor-pointer h-80 bg-gray-100 flex-shrink-0 rounded overflow-hidden relative">
                        <div
                            class="absolute inset-0 bg-center bg-cover opacity-80 transition-transform transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:scale-105"
                            style="background-image: url('https://auswall.com/img/home_leistungen.jpg');"></div>
                        <div class="absolute inset-0 bg-black/60 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20 p-4">
                            <video loop="" autoplay muted
                                   poster="https://image.mux.com/ZwFvfekuHYZiP1ApzuAHqQVbac501y7G3qb5WQKpyfqc/thumbnail.jpg?fit_mode=preserve"
                                   playsinline="" preload="auto"
                                   src="blob:https://springsummer.dk/f97048a9-f6e8-472e-83ae-a480d28d2227"
                                   class="max-w-full max-h-full rounded-md shadow-lg">
                                <track kind="metadata" label="cuepoints" data-removeondestroy="">
                                <track kind="chapters" label="chapters" data-removeondestroy="" src="">
                            </video>
                        </div>
                        <div class="absolute inset-x-0 top-0 p-3 lg:p-4 flex items-center justify-between z-30">
                            <div class="text-white text-sm">Projekt <br/>
                                Test
                            </div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    CMS
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    ERP
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    Consulting
                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="slider-item group cursor-pointer h-80 bg-gray-100 flex-shrink-0 rounded overflow-hidden relative">
                        <div
                            class="absolute inset-0 bg-center bg-cover opacity-80 transition-transform transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:scale-105"
                            style="background-image: url('https://auswall.com/img/home_projekte.jpg');"></div>
                        <div class="absolute inset-0 bg-black/60 z-10"></div>
                        <div class="absolute inset-0 flex items-center justify-center z-20 p-4">
                            <video loop=""
                                   poster="https://image.mux.com/uQZnD9f7GCTfS5aQJBW4kDAZ8OYA02aeYVjBZ01YRVu9g/thumbnail.jpg?fit_mode=preserve"
                                   playsinline="" preload="auto"
                                   src="blob:https://springsummer.dk/24c6fbb7-8c36-4e88-89c2-0ce09067f221">
                                <track kind="metadata" label="cuepoints" data-removeondestroy="">
                                <track kind="chapters" label="chapters" data-removeondestroy="" src="">
                            </video>
                        </div>
                        <div class="absolute inset-x-0 top-0 p-3 lg:p-4 flex items-center justify-between z-30">
                            <div class="text-white text-sm">Projekt</div>
                            <div class="flex gap-2">
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    CMS
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    ERP
                                </button>
                                <button
                                    class="px-3 py-1 border border-white text-white/90 hover:text-white hover:bg-white/10 rounded-full text-xs">
                                    Consulting
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons unterhalb rechts -->
                <div class="absolute bottom-0 right-0 translate-y-16 flex gap-4">
                    <button onclick="slideLeft()"
                            class="bg-white text-black border-[3px] border-black rounded-none p-3 transition-colors duration-200 hover:bg-neutral-100"
                            id="leftBtn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>

                    <button onclick="slideRight()"
                            class="bg-white text-black border-[3px] border-black rounded-none p-3 transition-colors duration-200 hover:bg-neutral-100"
                            id="rightBtn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <script>
                const slider = document.getElementById('slider');
                const leftBtn = document.getElementById('leftBtn');
                const rightBtn = document.getElementById('rightBtn');

                // Breite eines Elements + Gap berechnen
                const getScrollAmount = () => {
                    const element = slider.querySelector('.slider-item');
                    const elementWidth = element.offsetWidth;
                    const styles = window.getComputedStyle(slider);
                    const gapValue = parseFloat(styles.columnGap || styles.gap || '0') || 0;
                    return elementWidth + gapValue; // immer um eine Karte springen
                };

                // Keine Vorschau/Overlay mehr nötig

                // Nach links scrollen (mit Endlos-Funktion)
                function slideLeft() {
                    const items = slider.querySelectorAll('.slider-item');
                    if (items.length === 0) return;
                    const firstItem = items[0];
                    const styles = window.getComputedStyle(slider);
                    const itemWidth = firstItem.offsetWidth;
                    const gapValue = parseFloat(styles.columnGap || styles.gap || '0') || 0;
                    const step = itemWidth + gapValue;

                    if (slider.scrollLeft <= 0) {
                        const maxScroll = slider.scrollWidth - slider.clientWidth;
                        // springe ans Ende auf den letzten vollen Schritt
                        const lastIndex = Math.floor(maxScroll / step);
                        slider.scrollLeft = lastIndex * step;
                    } else {
                        slider.scrollBy({left: -step, behavior: 'smooth'});
                    }
                }

                // Nach rechts scrollen (mit Endlos-Funktion)
                function slideRight() {
                    const items = slider.querySelectorAll('.slider-item');
                    if (items.length === 0) return;
                    const firstItem = items[0];
                    const styles = window.getComputedStyle(slider);
                    const itemWidth = firstItem.offsetWidth;
                    const gapValue = parseFloat(styles.columnGap || styles.gap || '0') || 0;
                    const step = itemWidth + gapValue;

                    const maxScroll = slider.scrollWidth - slider.clientWidth;
                    if (slider.scrollLeft >= maxScroll - 2) {
                        // springe an den Anfang
                        slider.scrollLeft = 0;
                    } else {
                        const nextLeft = slider.scrollLeft + step;
                        // falls wir über das Ende hinaus schießen würden, zum Anfang
                        if (nextLeft > maxScroll) {
                            slider.scrollLeft = 0;
                        } else {
                            slider.scrollTo({left: nextLeft, behavior: 'smooth'});
                        }
                    }
                }

                // Keyboard Navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowLeft') {
                        slideLeft();
                    } else if (e.key === 'ArrowRight') {
                        slideRight();
                    }
                });

                // Touch/Swipe Support für Mobile
                let startX;
                let scrollLeftStart;

                slider.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].pageX;
                    scrollLeftStart = slider.scrollLeft;
                });

                slider.addEventListener('touchmove', (e) => {
                    if (!startX) return;
                    const x = e.touches[0].pageX;
                    const diff = startX - x;
                    slider.scrollLeft = scrollLeftStart + diff;
                });

                slider.addEventListener('touchend', () => {
                    startX = null;
                });

                // Autoplay: alle 5 Sekunden nach rechts, pausiert bei Hover
                let autoplayIntervalId = null;
                let isHovered = false;

                const startAutoplay = () => {
                    if (autoplayIntervalId) return;
                    autoplayIntervalId = setInterval(() => {
                        if (!isHovered) {
                            slideRight();
                        }
                    }, 5000);
                };

                const stopAutoplay = () => {
                    if (!autoplayIntervalId) return;
                    clearInterval(autoplayIntervalId);
                    autoplayIntervalId = null;
                };

                slider.addEventListener('mouseenter', () => {
                    isHovered = true;
                    stopAutoplay();
                });

                slider.addEventListener('mouseleave', () => {
                    isHovered = false;
                    startAutoplay();
                });

                // Auch Hover auf den Prev/Next-Buttons pausiert Autoplay
                if (leftBtn) {
                    leftBtn.addEventListener('mouseenter', () => {
                        isHovered = true;
                        stopAutoplay();
                    });
                    leftBtn.addEventListener('mouseleave', () => {
                        isHovered = false;
                        startAutoplay();
                    });
                }
                if (rightBtn) {
                    rightBtn.addEventListener('mouseenter', () => {
                        isHovered = true;
                        stopAutoplay();
                    });
                    rightBtn.addEventListener('mouseleave', () => {
                        isHovered = false;
                        startAutoplay();
                    });
                }

                // Videos stumm und inline automatisch starten
                const setupVideos = () => {
                    const videos = slider.querySelectorAll('video');
                    videos.forEach((video) => {
                        try {
                            video.muted = true;
                            video.autoplay = true;
                            video.playsInline = true;
                            const p = video.play();
                            if (p && typeof p.catch === 'function') {
                                p.catch(() => {
                                });
                            }
                        } catch (_) {
                        }
                    });
                };
                setupVideos();
                // updatePreview(); // Removed updatePreview
                startAutoplay();
            </script>
        </section>
    </div>

    <div class="relative mx-auto max-w-7xl md:border-l border-neutral-700 px-6 lg:px-16 w-full text-black py-36">
        <div class="relative text-5xl col-span-2 text-gray-900">
            <div class="absolute inset-y-0 -left-6 lg:-left-16 border-l-[3px] border-black pointer-events-none hidden md:block"></div>
            Engineering & Consulting Services
        </div>
        <div class="pt-8" x-data="{ open:false, title:'', text:'' }" @keydown.escape.window="open=false">
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="text-left text-xl/9 pt-8">
                    We craft high-quality, tailor-made software with precision in code, design and processes. We test rigorously and integrate user feedback to shape digital products that meet end-user needs and deliver on ambitious KPIs.
                </div>
                <div class="text-left text-xl/9 pt-8">
                    Our team brings together skilled software developers and UI/UX designers. Our experience ranges from
                    building small tools and custom adapters to delivering complex, multi-year software
                    projects.
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-12">

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="UX and Software Design"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        UX and Software Design
                    </div>
                </div>

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="Document Generation Software"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        Document Generation Software
                    </div>
                </div>

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="Product Information Management"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        Product Information Management
                    </div>
                </div>

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="Digital Asset Management"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        Digital Asset Management
                    </div>
                </div>

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="AI Solutions"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        AI Solutions
                    </div>
                </div>

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="App Solutions"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        App Solutions
                    </div>
                </div>

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="ERP- and CRM-Adapter"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        ERP- and CRM-Adapter
                    </div>
                </div>

                <div
                    class="group relative border-[3px] border-black p-8 text-center bg-white text-black transition-all duration-300 ease-out hover:bg-black hover:text-white hover:border-white ring-0 hover:ring-[6px] hover:ring-black hover:ring-offset-0 cursor-pointer"
                    data-title="Software Consulting"
                    @click="open=true; title=$event.currentTarget.dataset.title; text='Example content about '+$event.currentTarget.dataset.title+'. This is placeholder copy describing details, outcomes, process, and stack.'">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="size-12 text-white bg-black flex rounded-full p-2 m-4 mx-auto transition-transform duration-300 ease-out group-hover:-translate-y-2 group-hover:scale-[0.85]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
                    </svg>
                    <div class="pt-6 text-xl font-light text-left">
                        Software Consulting
                    </div>
                </div>
            </div>

            <x-modal show="open" title="title">
                <p class="leading-7"
                   x-text="text || 'This is example content. Replace with real project details such as context, goals, approach, stack and results.'"></p>
                <ul class="list-disc pl-6 text-sm">
                    <li>Scope: Example scope line</li>
                    <li>Stack: Tailwind CSS, Alpine.js, Laravel</li>
                    <li>Outcome: Placeholder metrics and impact</li>
                </ul>
            </x-modal>
        </div>
        <a class="underline mt-8  my-auto text-lg decoration-2 underline-offset-4" href="/services">
            > More
        </a>
    </div>

    <!-- Project Modal für Slider -->
    <x-modal show="showProjectModal" title="projectTitle" maxWidth="3xl">
        <div class="space-y-6">
            <p class="text-lg leading-relaxed" x-text="projectContent"></p>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-lg mb-3">Technologie Stack</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-black text-white text-sm rounded-full">MySQL</span>
                        <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Docker</span>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-3">Projektdetails</h4>
                    <ul class="space-y-2 text-sm">
                        <li><strong>Dauer:</strong> 6 Monate</li>
                        <li><strong>Team:</strong> 4 Entwickler</li>
                        <li><strong>Status:</strong> Erfolgreich abgeschlossen</li>
                    </ul>
                </div>
            </div>
            <div class="pt-4 border-t">
                <button class="bg-black text-white px-6 py-2 border-2 border-black hover:bg-white hover:text-black transition-colors">
                    Projekt anfragen
                </button>
            </div>
        </div>
    </x-modal>
    </div>


</x-layout>
