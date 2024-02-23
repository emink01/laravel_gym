<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Plaćanja-Dodavanje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="PUT" action="{{ route('store_payment') }}">
                        @csrf

                        <x-label for="member_type" value="{{ __('Izbor člana') }}" />
                        <select id="member_id" name="member_id" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 
                            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($members as $member)
                                <option value="{{$member->id}}">{{$member->name}}</option>
                                @endforeach
                            </select>

                        <div>
                            <x-label for="membership_type" value="{{ __('Tip članarine') }}" />
                            <x-input id="membership_type" class="block mt-1 w-full" type="text" name="membership_type" :value="old('membership_type')" required autofocus />
                        </div>

                        <div>
                            <x-label for="price" value="{{ __('Cijena') }}" />
                            <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus />
                        </div>

                        <div>
                            <x-label for="payment_date" value="{{ __('Datum plaćanja') }}" />
                            <x-input id="payment_date" class="block mt-1 w-full" type="date" name="payment_date" :value="old('payment_date')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>