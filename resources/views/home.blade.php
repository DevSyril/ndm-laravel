@extends('layout.base')

@section('content')

    @include("includes.responsive-menu")

    <main class="flex flex-column gap-5 mb-5">
        
        <section class="container-p home-banner flex flex-column gap-20">

            @include('includes.menu')

            <div class="flex flex-center gap-5 mt-100 first-banner">
                <div class="flex flex-column gap-3">
                    <h1 class="cairo-rg size-22">Bienvenue&nbsp; à<span class="cairo-bd size-52">&nbsp; Nourriture du monde,</span></h1>
                    <p class="cairo-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur impedit praesentium
                        repudiandae eligendi voluptates, asperiores minus explicabo quae quas molestiae expedita, odit in, deserunt error
                        aut assumenda commodi sequi dolores.</p>
                        <div class="flex flex-center gap-3">
                            <a href="{{ route('about') }}" class="rmv-style cairo-md col-white bg-red px-3 py-2 round-btn">Nous découvrir</a>
                            <a href="{{ route('services') }}" class="rmv-style cairo-md col-black bd-red px-3 py-2 round-btn">Nos services</a>
                        </div>
                </div>
                <img src="{{ URL::asset('assets/images/planeandcargo.png') }}" alt="" class="">
            </div>
            <div class="card-zone flex flex-center space-btw gap-30">
                <div class="">
                    <img src="{{ URL::asset('assets/icons/icons8-business-64.png') }}" alt="Icône de business man">
                    <p class="">Une expérience vieille de plus de 10 ans déjà</p>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/icons/icons8-bookmark-64.png') }}" alt="Icône de régistre">
                    <p class="">Plus de 500 dossiers traités en 10 ans seulement!</p>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/icons/icons8-clients.png') }}" alt="Icône de clients">
                    <p class="">Plus de 250 clients satisfaits ces dernières années</p>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/icons/icons8-clients-64.png') }}"
                        alt="Icône d'équipe de professionnels">
                    <p class="">Une super équipe de professionnels expérimentés</p>
                </div>
            </div>
        </section>
        <section class="container-p rad-bg col-white flex flex-column flex-justify py-5 gap-5" style="border-radius: 20px">
            <div class="bg-red p-2 rounded cairo-lg size-16 ft-cont">
                Nos services
            </div>
            <div class="grid grid-2b gap-5">
                <div class="grid grid-2 gap-4 home-services">
                    <div class="">
                        <img src="{{ URL::asset('assets/icons/icons8-container-truck-64.png') }}" alt="Icone de camion">
                        <h5>Transport de Marchandises</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni eligendi quaerat nulla
                            a,
                            eius in exercitationem neque nemo obcaecati? Officia suscipit ipsum similique repellendus
                            ducimus
                            perferendis explicabo molestias odit!Eius nostrum quas, beatae eveniet accusamus commodi ab
                            tempora
                            ad magni, iure porro vitae.</p>
                    </div>
                    <div class="">
                        <img src="{{ URL::asset('assets/icons/icons8-container-truck-64.png') }}" alt="Icone de camion">
                        <h5>Transport de Marchandises</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni eligendi quaerat nulla
                            a,
                            eius in exercitationem neque nemo obcaecati? Officia suscipit ipsum similique repellendus
                            ducimus
                            perferendis explicabo molestias odit!Eius nostrum quas, beatae eveniet accusamus commodi ab
                            tempora
                            ad magni, iure porro vitae.</p>
                    </div>
                    <div class="">
                        <img src="{{ URL::asset('assets/icons/icons8-container-truck-64.png') }}" alt="Icone de camion">
                        <h5>Transport de Marchandises</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni eligendi quaerat nulla
                            a,
                            eius in exercitationem neque nemo obcaecati? Officia suscipit ipsum similique repellendus
                            ducimus
                            perferendis explicabo molestias odit!Eius nostrum quas, beatae eveniet accusamus commodi ab
                            tempora
                            ad magni, iure porro vitae.</p>
                    </div>
                    <div class="">
                        <img src="{{ URL::asset('assets/icons/icons8-container-truck-64.png') }}" alt="Icone de camion">
                        <h5>Transport de Marchandises</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo magni eligendi quaerat nulla
                            a,
                            eius in exercitationem neque nemo obcaecati? Officia suscipit ipsum similique repellendus
                            ducimus
                            perferendis explicabo molestias odit!Eius nostrum quas, beatae eveniet accusamus commodi ab
                            tempora
                            ad magni, iure porro vitae.</p>
                    </div>
                </div>
                <div class="flex flex-column gap-2">
                    <h4 class="cairo-md size-32">Les <span class="cairo-md size-32 col-yellow">meilleurs services</span> pour des personnes <span
                            class="cairo-md size-32 col-red">exceptionnelles</span> telles que vous !</h4>
                    <p class="cairo-md size-18" style="line-height: 32px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptas modi ipsum esse! Quos
                        dolores,
                        recusandae obcaecati molestiae incidunt temporibus repellat voluptatum quis nostrum quod eaque
                        tempora
                        consectetur atque quaerat?Doloremque similique et quam nemo reiciendis minima ea dicta dolorum, eos
                        ex
                        nam sit dolor inventore necessitatibus. Recusandae sapiente, eligendi dignissimos, sunt accusamus
                        cum
                        rerum aut, praesentium eius nemo velit?</p>
                    <a href="{{ route('services') }}" class="rmv-style col-white bg-red round-btn px-3 py-2 cairo-md ft-cont">En savoir plus</a>
                </div>
            </div>
        </section>
        <section class="flex container-p flex-center mt-5 mb-5 fondator-talk">
            <div class="div">
                <img src="{{ URL::asset('assets/images/director-home.png') }}" alt="" class="director">
            </div>
            <div class="flex flex-column gap-2">
                <h4 class="cairo-bd size-32">Les mots du directeur</h4>
                <div class="separator"></div>
                <p class="cairo-rg mt-3" style="line-height: 30px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores a vitae quia cupiditate, dignissimos
                    recusandae enim repudiandae facere modi est voluptatibus nostrum unde quidem architecto repellendus,
                    nihil
                    labore temporibus doloribus?Quo quod necessitatibus et ipsa fugiat labore dolore, consequatur totam
                    facilis
                    nobis optio rem accusantium eveniet dolorem tenetur veritatis. Recusandae, fugit facilis explicabo eaque
                    vero excepturi fuga magni dignissimos at.</p>
                <a href="{{ route('about') }}" class="rmv-style col-white bg-red round-btn px-3 py-2 cairo-md ft-cont">Découvrir notre histoire</a>
            </div>
        </section>
        @include('includes.testimonials')
        <section class="flex flex-column gap-10 flex-center container-p partners mb-5">
            <h4 class="cairo-bd size-32">Nos partenaires</h4>
            <div class="separator"></div>
            <div class="grid grid-4 gap-50 w-100 bg-white px-5 mt-5 part-logos">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
                <img src="{{ URL::asset('assets/images/antaser.png') }}" alt="Logo du partenaire">
            </div>
        </section>
        <section class="container-p mt-5">
            <section class="grid grid-2 gap-5 bg-white home-contact">
                <div class="flex flex-column gap-2">
                    <h6 class="cairo-rg">Retrouvez nous dans nos locaus du Lundi au vendredi de 07h à 20h</h6>
                    <div class="separator"></div>
                    <div class="bg-black w-100 h-100 mt-1"></div>
                </div>
                <div class="flex flex-column gap-2">
                    <h6 class="cairo-bd">Envoyez-nous un message</h6>
                    <div class="separator"></div>
                    <form action="" class="mt-1 flex flex-column gap-3">
                        <div class="flex gap-3">
                            <input type="text" placeholder="Nom" class="w-100 bx-bb p-2">
                            <input type="text" placeholder="Prénom" class="w-100 bx-bb p-2">
                        </div>
                        <input type="text" placeholder="Numero de téléphone" class="w-100 bx-bb p-2">
                        <textarea name="" id="" cols="10" rows="3" placeholder="Message" class="w-100 bx-bb p-2"></textarea>
                        <button type="submit" class="ft-cont px-5 py-1 rounded bg-red button cairo-bd col-white size-20">Envoyer</button>
                    </form>
                </div>
            </section>
        </section>
        
    </main>

    @include('includes.footer')

@endsection
