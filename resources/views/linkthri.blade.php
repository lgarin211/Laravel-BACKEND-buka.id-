{{-- @dd($data) --}}
<!DOCTYPE html>
<html lang="en">
@include("Componen.head")

<body>
    @include("Componen.navmenu")
    <div class="spsldiv2 " style="height: 30vh; margin-bottom: 3px;">
        <!-- <div id="gari" class=""> -->
        <a class="logo-here7" href="#">
            <span>BUKA.in</span>
        </a>
        <h6 id="tilbase">Link Thri <i class="fas fa-igloo"></i></h6>
        <button type="button" class="btn btn-primary btns-s" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
    </div>
    <div class="row posro" style="height: 70vh">
        <div class="col-md-6 card text-center">
            <img class="img-profile" src="{{$data->profile_photo_path}}">
            <h1 class="text-nama">{{$data->name}}</h1>
            <form>
                <div class="form-group">
                    <h4>{{$data->user_profile->title}}</h4>
                    <p name="" id="" cols="30" rows="10" readonly>
                        {{$data->user_profile->bio}}
                    </p>
                </div>
            </form>
        </div>

        <div class="link col-md-6 text-center card">
            <h5 class="head-links">Links</h5>
            <div class="icons" id="listtree">

            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-md-8" id="passection">
                                <div>
                                    <div class="col-md-12" id="input">
                                        <form action="" method="POST">
                                        <label for="basic-url1" class="form-label">Link Yang Kamu Tuju</label>
                                        <div class="input-group mb-3">
                                            <input oninput="cps()" type="text" class="form-control" name="link"
                                                id="basic-url1" aria-describedby="basic-addon3">
                                        </div>
                                        <label for="basic-url2" class="form-label">Judul Link Kamu</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="title" id="basic-url2"
                                                aria-describedby="basic-addon3">
                                        </div>
                                        @csrf
                                        <button type="submit" class="btn btn-primary">add</button>
                                    </form>
                                    </div>
                                    <hr>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6" id="listtree">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="divmodaltree">
                                <iframe src="" frameborder="0" id="modalsort21" class="col-md-12" height="100%"
                                    width="100%"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                {{--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
            </div>
        </div>
    </div>

    <script type="text/javascript">
        Mylink()
    function Mylink() {
    const cekLink =
    fetch("?id={{ Auth::user()->id }}", {
            method: 'GET',
        }).then((response) => response.text())
        .then((data) => {
            document.getElementById('listtree').innerHTML = data
        });
    }
    </script>

    @include("Componen.foot")



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>
