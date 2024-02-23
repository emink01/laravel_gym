<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold mb-4">Programi od 30 minuta</h1>
                <hr/>

                @if($programsWithDuration30->isEmpty())
                    <p>No programs found with a duration of 30 minutes.</p>
                @else
                    <div>
                        @foreach($programsWithDuration30 as $program)
                            <div class="border rounded-lg p-4 mb-4">
                                <p><strong>Ime:</strong> {{ $program->name }}</p>
                                <p><strong>Trajanje programa:</strong> {{ $program->duration }} minuta</p>
                                {{-- Display any other program details as needed --}}
                            </div>
                        @endforeach
                    </div>
                @endif

                <h1 class="text-2xl font-semibold mt-8 mb-4">Članovi sa mjesečnom članarinom</h1>
                <hr/>

                @if($membersWithMonthlySubscription->isEmpty())
                    <p>No members found with a monthly subscription.</p>
                @else
                    <div>
                        @foreach($membersWithMonthlySubscription as $member)
                            <div class="border rounded-lg p-4 mb-4">
                                <p><strong>Ime klijenta:</strong> {{ $member->name }}</p>
                                <p><strong>Tip članarine:</strong> {{ $member->membership_type }}</p>
                                {{-- Display any other member details as needed --}}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
