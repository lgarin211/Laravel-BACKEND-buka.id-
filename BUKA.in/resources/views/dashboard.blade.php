<x-app-layout>

    <div class="jumbotron spsldiv3">
        <div class="head2" id="head2">
            <a class="mu-logo logo-here" href="#">
                <span>BUKA.in</span>
            </a>
            <p class="text-center inea">
                <strong style="font-size: xx-large;">{{ (Auth::user()->name) }}</strong><br>
                Hallo Selamat Datang di <strong style="font-size: xx-large;">Buka.in</strong>.
                Silahkan Pilih apa yang akan kamu buat
            </p>
        </div>
    </div>

</x-app-layout>
