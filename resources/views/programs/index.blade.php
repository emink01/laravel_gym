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

                <h1 class="text-2xl font-semibold mt-8 mb-4">Najskuplji program</h1>
                <hr/>

                @if($mostExpensiveProgram)
                    <div class="border rounded-lg p-4">
                        <p><strong>Ime klijenta:</strong> {{ $mostExpensiveProgram->name }}</p>
                        <p><strong>Cijena programa:</strong> {{ $mostExpensiveProgram->price }}</p>
                        {{-- Display any other details of the most expensive program as needed --}}
                    </div>
                @else
                    <p>No most expensive program found.</p>
                @endif

                <h1 class="text-2xl font-semibold mt-8 mb-4">Sistem administratori Iron Gym-a</h1>
                <hr/>

                @if($systemAdministrators->isEmpty())
                    <p>No system administrators found.</p>
                @else
                    <div>
                        @foreach($systemAdministrators as $employee)
                            <div class="border rounded-lg p-4 mb-4">
                                <p><strong>Ime zaposlenika:</strong> {{ $employee->name }}</p>
                                <p><strong>Pozicija:</strong> {{ $employee->position }}</p>
                                {{-- Display any other employee details as needed --}}
                            </div>
                        @endforeach
                    </div>
                @endif

                <h1 class="text-2xl font-semibold mt-8 mb-4">Članovi koji su se pridružili u 2023. godini</h1>
                <hr/>

                @if($membersJoinedIn2023->isEmpty())
                    <p>No members joined in 2023.</p>
                @else
                    <div>
                        @foreach($membersJoinedIn2023 as $member)
                            <div class="border rounded-lg p-4 mb-4">
                                <p><strong>Ime klijenta:</strong> {{ $member->name }}</p>
                                <p><strong>Datum pridruživanja:</strong> {{ $member->join_date }}</p>
                                {{-- Display any other member details as needed --}}
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
