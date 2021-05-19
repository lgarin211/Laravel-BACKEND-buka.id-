                    <ul class="list-group">
                        @forelse ($data->users_profile_link as $case)
                            {{-- expr --}}
                        <li class="list-group-item">
                            <a href="{{ $case->link }}" class="row">
                                <img src="https://www.google.com/s2/favicons?domain={{ $case->link }}" style="width: 50px !important; height: 50px !important;" class="col-md-2"><p class="col-md-10">|{{ $case->title }}</p>
                            </a>
                        </li>
                            @empty
                        <h1>Silahkan Memasukan Link</h1>
                        @endforelse
                    </ul>
