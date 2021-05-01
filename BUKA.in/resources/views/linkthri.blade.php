{{-- @dd($data) --}}
<!DOCTYPE html>
<html lang="en">
    @include("Componen.head")

<body>
    <div class="spsldiv2" style="">
        <!-- <div id="gari" class=""> -->
        <a class="logo-here7" href="#">
            <span>BUKA.in</span>
        </a>
        <h6 id="tilbase">Link Thri <i class="fas fa-igloo"></i></h6>
        <button type="button" class="btn btn-primary btns-s" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <div class="row prof ">
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
                <div class="icons row">
                    <a href="#" class="col-md-6 coslink"> <i class="fab fa-fw fa-youtube"
                            style="color: red;"></i>|Youtube</a>
                    <br>
                    <a href="#" class="col-md-6 coslink">
                        <i class="fab fa-fw fa-whatsapp-square" style="color : green"></i>|Whatsapps</a>
                    <br>
                    <a href="#" class="col-md-6 coslink"> <i class="fab fa-fw fa-facebook"
                            style="color: blue;"></i>|Facebook</a>


                </div>
            </div>

        </div>
    </div>

@include("Componen.foot")
</body>

</html>
