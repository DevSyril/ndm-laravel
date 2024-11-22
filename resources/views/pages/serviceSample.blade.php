@extends('layout.base')

@php
    $title = "Transport de marchandises"
@endphp

@include('includes.banner')

<main class="flex flex-column gap-100 mt-5 container-p mb-5">
    <section class="flex flex-center gap-30 flex-justify serv-desc">
        <img src="{{ URL::asset('assets/images/SL-050620-30640-14-removebg-preview.png') }}"
            alt="Que propose Nourriture du monde?" class="">
        <div class="flex flex-column gap-3 mt-5">
            <h3 class="cairo-bd size-32">Que faisons-nous exactement ?</h3>
            <div class="separator"></div>
            <p class="mt-2 cairo-rg size-16" style="line-height: 32px">
                Nous sommes une société de transit spécialisée dans le
                transport de marchandises et les négoces, etc. Nous sommes
                une société de transit spécialisée dans le transport de
                marchandises et les négoces, etc. Nous sommes un société de
                transit spécialisée dans le transport de marchandises et les
                négoces, etc.  <br />
                Nous sommes une société de transit spécialisée dans le
                transport de marchandises et les négoces, etc. Nous sommes
                un société de transit spécialisée dans le transport de
                marchandises et les négoces, etc.
            </p>
        </div>
    </section>
    <section class="flex gap-5 w-100 mt-5 process">
        <div class="flex flex-column gap-3">
            <h3 class="cairo-bd size-32">Comment procédons-nous ?</h3>
            <div class="separator"></div>
            <div class="bg-white px-3 py-2 bx-shadow rounded-3 mt-4">
                <h4 class="cairo-bd size-22">Efficacité</h4>
                <p class="cairo-rg">Nous sommes un société de transit spécialisée dans le
                    transport de marchandises et les négoces, etc. Nous
                    sommes un société de transit spécialisée dans le transport
                    de marchandises et les négoces, etc.</p>
            </div>
            <div class="bg-white px-3 py-2 bx-shadow rounded-3 mt-2">
                <h4 class="cairo-bd size-22">Efficacité</h4>
                <p class="cairo-rg">Nous sommes un société de transit spécialisée dans le
                    transport de marchandises et les négoces, etc. Nous
                    sommes un société de transit spécialisée dans le transport
                    de marchandises et les négoces, etc.</p>
            </div>
        </div>
        <div class="">
            <img src="{{ URL::asset('assets/images/6219918-removebg-preview.png') }}"
                alt="Quelle est la façon de procéder de nourriture du monde ?" class="">
        </div>
    </section>
    <section class="flex flex-column flex-center flex-justify gap-3">
        <img src="{{ URL::asset('assets/images/3963095-removebg-preview.png') }}"
            alt="Combien vous coûteront les services de Nourriture du monde ?" class="profits">
        <h3 class="cairo-md size-32">Alors, combien cela peut-il coûter ?</h3>
        <div class="separator"></div>
        <p class="cairo-rg align-center mx-5">Nous sommes un société de transit spécialisée dans le transport de marchandises et les
            négoces, etc. Nous sommes un société de transit spécialisée dans le transport de
            marchandises et les négoces, etc.</p>
        <div class="grid grid-3 gap-30 prices">
            <div class="p-3 str-black flex flex-column gap-2 flex-center">
                <img src="{{ URL::asset('assets/images/icons8-fee-64.png') }}" alt="Prix des services de nourriture du monde" class="small-img">
                <h4 class="cairo-bd">Formule Starter</h4>
                <p class="cairo-rg">Nous sommes un société de transit
                    spécialisée dans le transport de
                    marchandises et les négoces, etc.</p>
                    <div class="px-2 py-1 bg-yellow">
                        <span class="cairo-rg">Fourchette</span>
                        <span class="cairo-bd">10.000f cfa - 200.000f cfa</span>
                    </div>
            </div>
            <div class="p-3 str-black flex flex-column gap-2 flex-center">
                <img src="{{ URL::asset('assets/images/icons8-fee-64.png') }}" alt="Prix des services de nourriture du monde" class="small-img">
                <h4 class="cairo-bd">Formule Starter</h4>
                <p class="cairo-rg">Nous sommes un société de transit
                    spécialisée dans le transport de
                    marchandises et les négoces, etc.</p>
                    <div class="px-2 py-1 bg-yellow">
                        <span class="cairo-rg">Fourchette</span>
                        <span class="cairo-bd">10.000f cfa - 200.000f cfa</span>
                    </div>
            </div>
            <div class="p-3 str-black flex flex-column gap-2 flex-center">
                <img src="{{ URL::asset('assets/images/icons8-fee-64.png') }}" alt="Prix des services de nourriture du monde" class="small-img">
                <h4 class="cairo-bd">Formule Starter</h4>
                <p class="cairo-rg">Nous sommes un société de transit
                    spécialisée dans le transport de
                    marchandises et les négoces, etc.</p>
                    <div class="px-2 py-1 bg-yellow">
                        <span class="cairo-rg">Fourchette</span>
                        <span class="cairo-bd">10.000f cfa - 200.000f cfa</span>
                    </div>
            </div>
        </div>
        <a href="" class="cairo-bd col-white px-3 py-2 rounded bg-red button rmv-style ft-cont mt-5 mb-5">Prendre contact maintenant</a>
    </section>

</main>

@include('includes.footer')
