<x-modal show="showContactModal" title="'Kontakt'">
    <div class="space-y-6">
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-semibold text-lg mb-3">Kontakt Info</h4>
                <div class="space-y-2 text-sm">
                    <p><strong>Email:</strong> info@nywerk.de</p>
                    <p><strong>Telefon:</strong> +49 (0) 9281 / 777 99 80</p>
                </div>
            </div>
            <div>
                <h4 class="font-semibold text-lg mb-3">Büro</h4>
                <div class="space-y-2 text-sm">
                    <p>Fabrikzeile 21<br>95028 Hof</p>
                    <p>Luise-Ullrich-Straße 20<br>80636 München</p>
                </div>
            </div>
        </div>
        <div>
            <h4 class="font-semibold text-lg mb-3">Nachricht senden</h4>
            <form class="space-y-4">
                <div class="grid md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Name"
                           class="border-2 border-black px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-black">
                    <input type="email" placeholder="E-Mail"
                           class="border-2 border-black px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <textarea placeholder="Nachricht" rows="4"
                          class="w-full border-2 border-black px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-black"></textarea>
                <button type="submit"
                        class="bg-black text-white px-6 py-2 border-2 border-black hover:bg-white hover:text-black transition-colors">
                    Nachricht senden
                </button>
            </form>
        </div>
    </div>
</x-modal>