@extends('layout.main')

@section('content')
    <section
        class="min-h-screen flex flex-col justify-center items-center text-center bg-gradient-to-b from-black via-gray-900 to-black px-4 pt-20">
        <x-card>
            <div class="flex flex-col gap-2">

                <div class="w-full text-2xl font-bold mb-4">
                    Log-In Form
                </div>

                <form method="POST" action={{ route('login') }}>
                    @csrf
                    <div class="w-full">
                    <div class="w-full">
                        <label class="input validator">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                    stroke="currentColor">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </g>
                            </svg>
                            <input type="email" name="email" required placeholder="Email" value="{{ old('email') }}"
                                autocomplete="email" autofocus />
                        </label>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label class="input validator">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                    stroke="currentColor">
                                    <path
                                        d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z">
                                    </path>
                                    <circle cx="16.5" cy="7.5" r=".5" fill="currentColor"></circle>
                                </g>
                            </svg>
                            <input type="password" name="password" required placeholder="Password" minlength="5"
                                title="Must be more than 8 characters, including number, lowercase and uppercase"
                                autocomplete="current-password" />
                        </label>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full">
                        <button class="btn btn-success" type="submit">Log In</button>
                    </div>
                </form>

            </div>
        </x-card>
    </section>
@endsection
