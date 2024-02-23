<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Članovi-Uredi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($members as $member)
                    <form method="PUT" action="{{ route('update_member') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$member->id}}"/>
                        <div>
                            <x-label for="name" value="{{ __('Ime') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$member->name}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="membership_type" value="{{ __('Tip članarine') }}" />
                            <x-input id="membership_type" class="block mt-1 w-full" type="text" name="membership_type" value="{{$member->membership_type}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="phone" value="{{ __('Broj telefona') }}" />
                            <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" value="{{$member->phone}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{$member->email}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="join_date" value="{{ __('Datum pridruživanja') }}" />
                            <x-input id="join_date" class="block mt-1 w-full" type="date" name="join_date" value="{{$member->join_date}}" required autofocus />
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