@extends('layout.admin')

@section('content')
    <section
        class="min-h-screen flex flex-col justify-center text-center bg-gradient-to-b from-black via-gray-900 to-black px-4 pt-20">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

            <div class='col-span-2 grid grid-cols-3'>
                <h2 class="text-2xl col-span-3 md:text-2xl font-bold text-center mb-4">Machines</h2>
                @foreach ($machine as $m)
                    <div class="col-start-2">
                        <x-card>
                            <div class="w-16 h-16 bg-green-500/20 rounded-xl flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-10 h-10 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">{{ $m->Machine_Name }}</h3>
                            <h3 class="text-2xl mb-3">{{ $m->Status }}</h3>
                            <p class="text-gray-400">
                                <button class="btn btn-success"
                                    onclick="document.getElementById('modal_{{ $m->Machine_ID }}').showModal()">View
                                    Details</button>
                            </p>
                        </x-card>
                    </div>
                @endforeach
            </div>


            <div id="transactions" class='col-span-4 px-6'>
                <h2 class="text-2xl md:text-2xl font-bold text-center mb-4">Transactions</h2>

                <div class="overflow-x-auto">
                    <table class="table text-center">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Machine</th>
                                <th>Amount</th>
                                <th>Duration</th>
                                <th>Date/Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $t)
                                <tr>
                                    <th>{{ $t->Transaction_ID }}</th>
                                    <td>{{ $t->machine->Machine_Name }}</td>
                                    <td>{{ $t->Amount }}</td>
                                    <td>{{ $t->Duration }} minutes </td>
                                    <td>{{ $t->Time }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 text-center">
                    {{ $transaction->fragment('transactions')->links() }}
                </div>

            </div>


        </div>


        <dialog id="modal_{{ $m->Machine_ID }}" class="modal">
            <div class="modal-box">
                <h3 class="text-lg font-bold">{{ $m->Machine_Name }}</h3>
                <p class="py-4">Current Status: {{ $m->Status }}</p>
                <form action="{{ route('machine.toggle', $m->Machine_ID) }}" method="POST">
                    @csrf
                    <button class="btn btn-soft {{ $m->Status == 'Active' ? 'btn-warning' : 'btn-success' }}">
                        {{ $m->Status == 'Active' ? 'Deactivate' : 'Activate' }}
                    </button>
                </form>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>


    </section>
@endsection
