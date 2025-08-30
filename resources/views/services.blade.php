<x-layout>

    <div class="mx-auto max-w-7xl md:border-l border-neutral-700 px-6 lg:px-16 w-full text-black py-32">
        
        <!-- Header Section -->
        <div class="relative text-5xl col-span-2 text-gray-900 mb-16">
            <div class="absolute inset-y-0 -left-6 lg:-left-16 border-l-[3px] border-black pointer-events-none hidden md:block"></div>
            Engineering & Consulting Services
        </div>

        <div class="grid lg:grid-cols-2 gap-8 mb-24">
            <div class="text-left text-xl/9">
                We craft high-quality, tailor-made software with precision in code, design and processes. Our comprehensive services cover the entire software development lifecycle, from initial concept to deployment and maintenance.
            </div>
            <div class="text-left text-xl/9">
                Our experienced team combines technical expertise with strategic thinking to deliver solutions that not only meet your immediate needs but also scale with your business growth.
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16" x-data="{ openService: null }">

            <!-- UX and Software Design -->
            <div class="border-[3px] border-black p-8 bg-white hover:bg-gray-50 transition-colors">
                <div class="flex items-start gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-12 h-12 text-black flex-shrink-0 mt-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 0 3 3 0 00-5.78-1.128 16.09 16.09 0 018.7-20.954 16.09 16.09 0 018.7 20.954"/>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">UX and Software Design</h3>
                        <p class="text-gray-700 mb-6">
                            We create intuitive user experiences through comprehensive design research, prototyping, and iterative testing. Our design process ensures your software not only looks great but provides exceptional usability.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>User Research & Persona Development</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Information Architecture & Wireframing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>High-Fidelity Prototypes & Design Systems</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Usability Testing & Optimization</span>
                            </li>
                        </ul>
                        <button @click="openService = openService === 'ux' ? null : 'ux'"
                                class="text-black underline decoration-2 underline-offset-4 hover:no-underline transition-all">
                            <span x-text="openService === 'ux' ? '- Weniger Details' : '+ Mehr Details'">+ Mehr Details</span>
                        </button>
                        <div x-show="openService === 'ux'" x-transition class="mt-6 pt-6 border-t border-gray-200">
                            <h4 class="font-semibold mb-3">Technologie Stack:</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Figma</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Adobe Creative Suite</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Sketch</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">InVision</span>
                            </div>
                            <p class="text-gray-600 text-sm">
                                Unser UX-Design-Prozess beginnt mit tiefgehender Nutzerforschung und endet mit pixel-perfekten Designs, die nahtlos in die Entwicklung übergehen.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Document Generation Software -->
            <div class="border-[3px] border-black p-8 bg-white hover:bg-gray-50 transition-colors">
                <div class="flex items-start gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-12 h-12 text-black flex-shrink-0 mt-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Document Generation Software</h3>
                        <p class="text-gray-700 mb-6">
                            Automatisieren Sie Ihre Dokumentenerstellung mit intelligenten Templates, dynamischen Inhalten und nahtloser Integration in bestehende Systeme.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Template-basierte Dokumentgenerierung</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Multi-Format Output (PDF, Word, Excel)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>API-Integration & Batch-Processing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Digitale Signatur & Versionskontrolle</span>
                            </li>
                        </ul>
                        <button @click="openService = openService === 'document' ? null : 'document'"
                                class="text-black underline decoration-2 underline-offset-4 hover:no-underline transition-all">
                            <span x-text="openService === 'document' ? '- Weniger Details' : '+ Mehr Details'">+ Mehr Details</span>
                        </button>
                        <div x-show="openService === 'document'" x-transition class="mt-6 pt-6 border-t border-gray-200">
                            <h4 class="font-semibold mb-3">Technologie Stack:</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Laravel</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">PDFKit</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">PhantomJS</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">LibreOffice</span>
                            </div>
                            <p class="text-gray-600 text-sm">
                                Reduzieren Sie manuelle Arbeit um bis zu 80% durch intelligente Automatisierung Ihrer Dokumentenerstellung.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Information Management -->
            <div class="border-[3px] border-black p-8 bg-white hover:bg-gray-50 transition-colors">
                <div class="flex items-start gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-12 h-12 text-black flex-shrink-0 mt-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Product Information Management</h3>
                        <p class="text-gray-700 mb-6">
                            Zentralisieren und verwalten Sie alle Produktinformationen in einem System. Von Attributen bis zu Medien - alles an einem Ort für konsistente Datenhaltung.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Zentrale Produktdatenverwaltung</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Multi-Channel Publishing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Workflow-Management & Freigabeprozesse</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Import/Export & API-Schnittstellen</span>
                            </li>
                        </ul>
                        <button @click="openService = openService === 'pim' ? null : 'pim'"
                                class="text-black underline decoration-2 underline-offset-4 hover:no-underline transition-all">
                            <span x-text="openService === 'pim' ? '- Weniger Details' : '+ Mehr Details'">+ Mehr Details</span>
                        </button>
                        <div x-show="openService === 'pim'" x-transition class="mt-6 pt-6 border-t border-gray-200">
                            <h4 class="font-semibold mb-3">Technologie Stack:</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Akeneo</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Elasticsearch</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">MySQL</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">REST APIs</span>
                            </div>
                            <p class="text-gray-600 text-sm">
                                Verbessern Sie Ihre Time-to-Market durch effiziente Produktdatenverwaltung und automatisierte Publishing-Prozesse.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Solutions -->
            <div class="border-[3px] border-black p-8 bg-white hover:bg-gray-50 transition-colors">
                <div class="flex items-start gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-12 h-12 text-black flex-shrink-0 mt-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/>
                    </svg>
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">AI Solutions</h3>
                        <p class="text-gray-700 mb-6">
                            Nutzen Sie die Kraft der künstlichen Intelligenz für Ihre Geschäftsprozesse. Von Chatbots bis zur intelligenten Datenanalyse - wir implementieren maßgeschneiderte KI-Lösungen.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Intelligente Chatbots & Virtual Assistants</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Machine Learning Modelle</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Natural Language Processing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 bg-black rounded-full mt-2 flex-shrink-0"></span>
                                <span>Computer Vision & Image Recognition</span>
                            </li>
                        </ul>
                        <button @click="openService = openService === 'ai' ? null : 'ai'"
                                class="text-black underline decoration-2 underline-offset-4 hover:no-underline transition-all">
                            <span x-text="openService === 'ai' ? '- Weniger Details' : '+ Mehr Details'">+ Mehr Details</span>
                        </button>
                        <div x-show="openService === 'ai'" x-transition class="mt-6 pt-6 border-t border-gray-200">
                            <h4 class="font-semibold mb-3">Technologie Stack:</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Python</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">TensorFlow</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">OpenAI API</span>
                                <span class="px-3 py-1 bg-black text-white text-sm rounded-full">Hugging Face</span>
                            </div>
                            <p class="text-gray-600 text-sm">
                                Transformieren Sie Ihre Geschäftsprozesse durch den strategischen Einsatz von KI-Technologien und steigern Sie Ihre Effizienz nachhaltig.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="mt-24 border-[3px] border-black p-12 bg-black text-white">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-semibold mb-6">Bereit für Ihr nächstes Projekt?</h2>
                <p class="text-xl mb-8 text-gray-300">
                    Lassen Sie uns gemeinsam die perfekte Lösung für Ihre Anforderungen entwickeln. Unser Team steht bereit, Ihre Vision in die Realität umzusetzen.
                </p>
                <button @click="showContactModal = true"
                        class="inline-flex px-8 py-3 text-lg font-semibold transition border-2 border-white text-white hover:bg-white hover:text-black">
                    Projekt besprechen
                </button>
            </div>
        </div>

    </div>

</x-layout>