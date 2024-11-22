<footer class="rad-bg" style="padding: 60px 0 0 0 ">
    <div class="container-p flex col-white space-btw footer mb-5">
        <div class="flex flex-center gap-10 logo-zone">
            <img src="{{ URL::asset('assets/images/LogoNdm.png') }}" alt="Logo de nourriture du monde">
            <div class="quicksand-rg size-14">
                <h6 class="quicksand-bd size-20">Nourriture du monde</h6>
                Le slogan de l'entreprise
            </div>
        </div>
        <div class="flex flex-column gap-2">
            <h6>Navigation</h6>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('services') }}">Nos services</a>
            <a href="{{ route('about') }}">En savoir plus</a>
            <a href="{{ route('contacts') }}">Contacts</a>
        </div>
        <div class="flex flex-column gap-2">
            <h6>Nos services</h6>
            <a href="{{ route('service-1') }}">Import/Export</a>
            <a href="{{ route('service-1') }}">Fret & Logistique</a>
            <a href="{{ route('service-1') }}">Transit & Douanes</a>
            <a href="{{ route('service-1') }}">Négoce & Transport</a>
        </div>
        <div class="flex flex-column gap-3">
            <h6>Rejoignez-nous</h6>
            <div class="flex flex-column gap-1">
                <div class="flex gap-2 flex-center">
                    <i class="fas fa-location-dot"></i>
                    Lomé-Akodéssewa
                </div>
                <div class="flex gap-2 flex-center">
                    <i class="fas fa-phone"></i>
                    Tel : 22 42 15 20
                </div>
                <div class="flex gap-2 flex-center">
                    <i class="fas fa-envelope"></i>
                    ndmtransit@info.com
                </div>
            </div>
            <div class="flex gap-3 flex-center">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-google"></i>
            </div>
        </div>
    </div>
    <div class="bg-black col-white cairo-rg flex flex-center flex-justify px-3 yellow-bd ril-dev" style="padding-top: 5px; height: fit-content;">
        <p class="cairo-rg align-center">Tous droits réservés. Nourriture du monde. &copy; 2024. By &nbsp;<span><a href="" class="cairo-bd rmv-style col-white">DevSyril</a></span></p>
    </div>
</footer>
