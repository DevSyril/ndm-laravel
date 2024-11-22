@extends('layout.base')

@php
    $title = 'Qui sommes-nous ?';
@endphp

@section('content')
    @include('includes.banner')

    <main class="container-p flex flex-column gap-100 mt-3 flex-justify mb-5">
        <section class="grid grid-2 about-description">
            <img src="{{ URL::asset('assets/images/Feb-Business_9.jpg') }}" alt="Illustration de questionnnement"
                class="w-100">
            <div class="flex flex-column gap-2 flex-justify h-100">
                <h2 class="cairo-md size-28">Nourriture du monde,</h2>
                <div class="separator"></div>
                <p class="cairo-rg size-18 mt-2">Nous sommes un société de transit spécialisée dans le
                    transport de marchandises et les négoces, etc. Nous
                    sommes un société de transit spécialisée dans le
                    transport de marchandises et les négoces, etc. Nous
                    sommes un société de transit spécialisée dans le
                    transport de marchandises et les négoces, etc.. <br /> <br />
                    Nous sommes un société de transit spécialisée dans le
                    transport de marchandises et les négoces, etc. Nous
                    sommes un société de transit spécialisée dans le
                    transport de marchandises et les négoces, etc
                </p>
            </div>
        </section>
        <section class="flex about-cards gap-5 flex-wrap">
            <div class="bx-bb flex flex-center gap-3 rounded-3 str-black ab-card">
                <img src="{{ URL::asset('assets/images/icons8-mission-48.png') }}"
                    alt="Quel est l'objectif de nourriture du monde?" class="">
                <div class="">
                    <h4 class="cairo-bd size-18">Notre objectif</h4>
                    <div class="separator"></div>
                    <p class="cairo-rg mt-2">Nous sommes un société de transit spécialisée
                        dans le transport de marchandises et les négoces,
                        etc. Nous sommes un société de transit
                        spécialisée dans le transport de marchandises et
                        les négoces, etc</p>
                </div>
            </div>
            <div class="bx-bb flex flex-center gap-3 rounded-3 str-black ab-card">
                <img src="{{ URL::asset('assets/images/icons8-innovation-96.png') }}"
                    alt="Comment innove Nourriture du monde?" class="">
                <div class="">
                    <h4 class="cairo-bd size-18">Notre approche</h4>
                    <div class="separator"></div>
                    <p class="cairo-rg mt-2">Nous sommes un société de transit spécialisée
                        dans le transport de marchandises et les négoces,
                        etc. Nous sommes un société de transit
                        spécialisée dans le transport de marchandises et
                        les négoces, etc</p>
                </div>
            </div>
            <div class="bx-bb flex flex-center gap-3 rounded-3 str-black ab-card">
                <img src="{{ URL::asset('assets/images/icons8-mission-94.png') }}"
                    alt="Quelle mission se donne Nourriture du monde?" class="">
                <div class="">
                    <h4 class="cairo-bd size-18">Notre mission</h4>
                    <div class="separator"></div>
                    <p class="cairo-rg mt-2">Nous sommes un société de transit spécialisée
                        dans le transport de marchandises et les négoces,
                        etc. Nous sommes un société de transit
                        spécialisée dans le transport de marchandises et
                        les négoces, etc</p>
                </div>
            </div>
            <div class="bx-bb flex flex-center gap-3 rounded-3 str-black ab-card">
                <img src="{{ URL::asset('assets/images/icons8-error-64.png') }}"
                    alt="Quels sont les défis que relève Nourriture du monde?" class="">
                <div class="">
                    <h4 class="cairo-bd size-18">Notre objectif</h4>
                    <div class="separator"></div>
                    <p class="cairo-rg mt-2">Nous sommes un société de transit spécialisée
                        dans le transport de marchandises et les négoces,
                        etc. Nous sommes un société de transit
                        spécialisée dans le transport de marchandises et
                        les négoces, etc</p>
                </div>
            </div>
        </section>
        <section class="grid grid-2 gap-5 mt-5 ab-director">
            <div class="flex flex-column gap-2">
                <h4 class="cairo-bd size-28">A propos du fondateur</h4>
                <div class="separator"></div>
                <p class="mt-2 cairo-rg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. <br /><br />
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. <br /><br />
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. <br /><br />
                </p>
            </div>
            <img src="{{ URL::asset('assets/images/stylish-businessman-office.jpg') }}" alt="" class="w-100"
                style="border: 5px solid red">
        </section>
        <section class="flex flex-column flex-justify flex-center mt-5 gap-3">
            <h4 class="cairo-bd size-32">Prenez connaissance de notre brillante équipe</h4>
            <div class="separator"></div>
            <div class="mt-5 grid grid-3 collab-cards gap-3 mb-5">
                <div class="">
                    <img src="{{ URL::asset('assets/images/african-american-business-woman-holding-laptop-standing-by-window.jpg') }}"
                        alt="Membre de l'Entreprise Nourriture du monde" class="">
                    <h5 class="cairo-rg ">Elohim Komlan</h5>
                    <h6 class="cairo-bd size-16">Co-fondateur et directeur exécutif</h6>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/images/african-american-business-woman-holding-laptop-standing-by-window.jpg') }}"
                        alt="Membre de l'Entreprise Nourriture du monde" class="">
                    <h5 class="cairo-rg ">Elohim Komlan</h5>
                    <h6 class="cairo-bd size-16">Co-fondateur et directeur exécutif</h6>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/images/african-american-business-woman-holding-laptop-standing-by-window.jpg') }}"
                        alt="Membre de l'Entreprise Nourriture du monde" class="">
                    <h5 class="cairo-rg ">Elohim Komlan</h5>
                    <h6 class="cairo-bd size-16">Co-fondateur et directeur exécutif</h6>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/images/african-american-business-woman-holding-laptop-standing-by-window.jpg') }}"
                        alt="Membre de l'Entreprise Nourriture du monde" class="">
                    <h5 class="cairo-rg ">Elohim Komlan</h5>
                    <h6 class="cairo-bd size-16">Co-fondateur et directeur exécutif</h6>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/images/african-american-business-woman-holding-laptop-standing-by-window.jpg') }}"
                        alt="Membre de l'Entreprise Nourriture du monde" class="">
                    <h5 class="cairo-rg ">Elohim Komlan</h5>
                    <h6 class="cairo-bd size-16">Co-fondateur et directeur exécutif</h6>
                </div>
                <div class="">
                    <img src="{{ URL::asset('assets/images/african-american-business-woman-holding-laptop-standing-by-window.jpg') }}"
                        alt="Membre de l'Entreprise Nourriture du monde" class="">
                    <h5 class="cairo-rg ">Elohim Komlan</h5>
                    <h6 class="cairo-bd size-16">Co-fondateur et directeur exécutif</h6>
                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')
@endsection
