{{-- @dd($data) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="/vendor/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="/vendor/css/magnific-popup.css" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">
    <!-- Main Style -->
    <link href="/vendor/css/style.css" rel="stylesheet">
    <!-- nav spesial -->
    <link rel="stylesheet" href="/vendor/css/spesial_div.css">
    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
    <!-- Google Fonts Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
    <title>Hello, world!</title>
</head>


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

    <script src="/vendor/js/my.js"></script>
</body>

</html>
