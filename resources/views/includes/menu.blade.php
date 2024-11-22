<nav class="flex flex-center flex-justify space-btw p-2 rad-bg round col-white mt-4 main-menu">
    <div class="flex gap-2 flex-center flex-justify">
        <img src="{{ URL::asset('assets/images/LogoNdm.png') }}" alt="Logo de nourriture du monde" class="logo">
        <h2 class="p-0-m-0 cairo-bd size-20">Nourriture du monde</h2>
    </div>
    <div class="menu-bar">
        <ul class="menu-items flex  flex-center gap-50 p-0-m-0">
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('about') }}">A propos de nous</a></li>
            <li><a href="{{ route('services') }}">Nos services</a></li>
            <li><a href="{{ route('contacts') }}">Contact</a></li>
        </ul>
    </div>
    <a href="" class="cairo-bd flex flex-center flex-justify gap-2 p-2 bg-red round-btn button">
        <i class="fas fa-phone col-white"></i>
        Nous contacter
    </a>
</nav>