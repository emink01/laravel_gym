<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Plaćanja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">     
        <a href="\add_payment" class="m-2 p-2 text-x1">Dodaj plaćanje</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">Ovdje će biti izlistana plaćanja</h1>
                    @foreach ($payments as $payment)
                        <p class="p-2"> {{ $payment->membership_type }} - {{ $payment->price }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>