<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Članovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_member" class="m-2 p-2 text-xl flex items-center justify-end text-blue-600 hover:underline">Dodaj novog člana</a>      
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <hr class="my-4 border-t border-gray-200">
                    @foreach ($members as $member)
                    <div class="flex items-center justify-between py-4 border-b border-gray-200">
                        <div class="flex-1">
                            <p class="text-lg font-semibold">{{ $member->name }}</p>
                            <p class="text-gray-600">{{ $member->membership_type }}</p>
                        </div>
                        <div class="flex space-x-6">
                            <form method="PUT" action="{{ route('delete_member') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$member->id}}">
                                <button type="submit" class="inline-flex items-center px-6 py-3 bg-red-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                                    {{ __('Obriši') }}
                                </button>
                            </form>
                            <form method="PUT" action="{{ route('edit_member') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$member->id}}">
                                <button type="submit" class="inline-flex items-center px-6 py-3 bg-green-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                    {{ __('Uredi') }}
                                </button>
                            </form>
                            <form method="PUT" action="{{ route('file_add') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$member->id}}">
                                <button type="submit" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    {{ __('Dodaj fajl') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
