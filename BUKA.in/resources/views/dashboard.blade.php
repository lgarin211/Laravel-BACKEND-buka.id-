<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Selamat Datang Di BUKAIN') }}
    </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}

    <div class="jumbotron spsldiv3">
        <div class="head2" id="head2">
            <a class="mu-logo logo-here" href="#">
                <span>BUKA.in</span>
            </a>
            <p class="text-center inea2">
                <strong>{{ (Auth::user()->name) }}</strong>
                Hallo Selamat Datang di <strong>Buka.in</strong>.
                Silahkan Pilih apa yang akan kamu buat
            </p>
        </div>
    </div>

</x-app-layout>
