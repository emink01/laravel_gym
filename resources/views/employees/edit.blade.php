<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Uposlenici-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($employees as $employee)
                    <form method="POST" action="{{ route('update_employee') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$employee->id}}"/>
                        <div>
                            <x-label for="name" value="{{ __('Ime') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$employee->name}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="position" value="{{ __('Pozicija') }}" />
                            <x-input id="position" class="block mt-1 w-full" type="text" name="position" value="{{$employee->position}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="phone" value="{{ __('Broj telefona') }}" />
                            <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" value="{{$employee->phone}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{$employee->email}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="hire_date" value="{{ __('Datum zaposlenja') }}" />
                            <x-input id="hire_date" class="block mt-1 w-full" type="date" name="hire_date" value="{{$employee->hire_date}}" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>