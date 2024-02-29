<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 py-8 px-6">
            <h2 class="font-semibold text-3xl text-white leading-tight">
                {{ __('Početna') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">

                <!-- Weather Information Section -->
                <div class="p-6 bg-gradient-to-r from-gray-800 to-gray-600 text-white rounded-lg mb-6">
                    <h3 class="text-2xl font-semibold mb-4">Vremenske informacije (Open Weather API)</h3>
                    @if(isset($weatherData['main']['temp']))
                        <p class="text-lg mb-2">Temperatura: {{$weatherData['main']['temp']}} °C</p>
                    @endif

                    @if(isset($weatherData['weather'][0]['description']))
                        <p class="text-lg mb-2">Opis: {{$weatherData['weather'][0]['description']}}</p>
                    @endif

                    @if(isset($weatherData['name']))
                        <p class="text-lg mb-2">Lokacija: {{$weatherData['name']}}</p>
                    @endif
                </div>

                <!-- Iron Gym Welcome Section -->
                <div class="p-6 bg-gradient-to-r from-gray-800 to-gray-600 text-white rounded-lg">
                    <h3 class="text-2xl font-semibold mb-4">Dobrodošli u Iron Gym!</h3>
                    <p>Kao jedno od vodećih fitness odredišta, Iron Gym nije samo teretana; to je zajednica strastvenih pojedinaca koji su odlučni da ostvare svoje ciljeve i nadmaše svoje granice.</p>
                </div>

                <!-- Iron Gym Mission Section -->
                <div class="p-6 bg-white rounded-lg shadow-md mt-6">
                    <h3 class="text-2xl font-semibold mb-4">Naša Misija</h3>
                    <p class="text-gray-700 mb-4">U Iron Gymu, vjerujemo da pravi put ka ostvarenju svojih fitness ciljeva počinje snažnom voljom, posvećenošću i kvalitetnim treningom. Naša vizija je stvoriti okruženje u kojem pojedinci svih razina fitnessa mogu pronaći inspiraciju, podršku i resurse potrebne za postizanje svojih najvećih ambicija.</p>
                    <a href="#" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Pridružite Nam Se Danas</a>
                </div>

                <!-- Programs Section -->
                <div class="mt-8">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Naši Programi</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-gray-800 rounded-lg shadow-md p-6 text-white">
                            <h4 class="text-lg font-semibold mb-2">Program Snage</h4>
                            <p>Povećajte svoju mišićnu masu i snagu uz naš program snage, prilagođen svim razinama iskustva.</p>
                        </div>
                        <div class="bg-gray-700 rounded-lg shadow-md p-6 text-white">
                            <h4 class="text-lg font-semibold mb-2">Kardio Trening</h4>
                            <p>Ojačajte srce i pluća uz naše raznovrsne kardio treninge koji će vam pomoći poboljšati izdržljivost.</p>
                        </div>
                        <div class="bg-gray-600 rounded-lg shadow-md p-6 text-white">
                            <h4 class="text-lg font-semibold mb-2">Crossfit</h4>
                            <p>Isprobajte naš Crossfit program koji će vas izazvati i pomoći vam postići izvanredne rezultate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
