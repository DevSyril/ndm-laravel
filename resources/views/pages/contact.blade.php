@extends('layout.base')

@php
    $title = 'Contactez-nous';
@endphp

@section('content')
    @include('includes.banner')

    <main class="container-p flex flex-column flex-justify flex-center gap-100">
        <div class="grid grid-2 gap-3 mt-5 bg-red p-3 rounded-5 enterprise-location">
            <div class="enterprise rounded-4"></div>
            <div class="flex flex-column gap-2 location-desc" style="padding-right: 100px">
                <h5 class="cairo-md size-22 col-white">Visitez-nous</h5>
                <div class="separator" style="background-color: yellow; !important"></div>
                <p class="mt-2 cairo-rg col-white" style="line-height: 32px">
                    Retrouvez nos locaux dans le quartier de
                    Hédzranawoé, au 128 Rue des étoiles, au 3e étage de
                    l’immeuble Avatar. <br /><br />
                    Nous vous offrons nos portes du Lundi au Vendredi
                    de 07h à 19h. <br />
                    Tel : 22 56 24 25 /
                    22 45 36 59
                </p>
                <div class=""></div>
            </div>
        </div>

        <div class="flex flex-column flex-center gap-3 w-100 p-4 rounded-5 mt-5 mb-5 str-black">
            <h4 class="cairo-bd size-22">Laissez-nous un message</h4>
            <form action="" class="w-100 flex flex-column gap-3">
                <div class="flex gap-30 w-100">
                    <input type="text" placeholder="Nom de famille" class="w-100 p-3 cairo-rg">
                    <input type="text" placeholder="Prénom" class="w-100 p-3 cairo-rg">
                </div>
                <input type="tel" placeholder="Numéro de téléphone" class="p-3 cairo-rg">
                <textarea name="" id="" cols="30" rows="10" placeholder="Votre Message" class="p-3 cairo-rg"></textarea>
                <a href="" class="bg-red px-3 py-2 cairo-bd col-white ft-cont size-16 rounded rmv-style">Envoyer</a>
            </form>
        </div>
    </main>

    @include('includes.footer')
@endsection
