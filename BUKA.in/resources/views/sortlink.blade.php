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
    <!-- Start Header -->
    <header id="mu-hero" class="fixed-bottom">
        <div class="container">
            <nav id="da" class="navbar navbar-expand-lg navbar-light mu-navbar">
                <!-- Text based logo -->
                <a class="navbar-brand mu-logo" href="index.html">
                    <span>Buka.in</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mu-navbar-nav">
                        <li class="nav-item active">
                            <a href="#mu-slider">Home</a>
                        </li>
                        <li class="nav-item"><a href="#mu-about">About us</a></li>
                        <li class="nav-item"><a href="#mu-service">Services</a></li>
                    </ul>
                </div>
            </nav>
            <nav id="da2" class="navbar navbar-expand-lg navbar-light mu-navbar text-center">
                <div class="aroiba2 row">
                    <a href="#" class="col-md-6 col-sm-6 btn btn-primary">
                        <h6 id="base">Sort Link <i class="fas fa-house-damage"></i></h6>
                    </a>
                    <a href="#" class="col-md-6 col-sm-6 btn btn-primary">
                        <h6 id="base">Link Thri <i class="fas fa-igloo"></i></h6>
                    </a>
                </div>
                <div class="row">
                    <div class="row text-center m-auto">
                        <a class="col-sm-3 btn btn-primary" href="#mu-slider"><i style="font-size:30px"
                                class="fa fa-home"></i></a>
                        <a class="col-sm-3 btn btn-primary" href="#mu-about"><i style="font-size:30px"
                                class="fas fa-city"></i></a>
                        <a class="col-sm-3 btn btn-primary" href="#mu-service"><i style="font-size:30px"
                                class="fas fa-coffee"></i></a>
                        <a class="col-sm-3 btn btn-primary" href="login"><i style="font-size:30px"
                                class="fas fa-sign-in-alt"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <div class="spsldiv2" style="">
        <!-- <div id="gari" class=""> -->
        <a class="logo-here7" href="#">
            <span>BUKA.in</span>
        </a>
        <h6 id="tilbase">Sort Link <i class="fas fa-house-damage"></i></h6>

        @include("Componen/formaddsortL")

    </div>
    <div class="container ">
        <div class="mails row">
            <div class="card col-md-9 col-sm-12" id="pancar"></div>
            <div id="casing" class="col-md-12 col-sm-12 doc">
                <ul class="list-group col-sm-12 text-center">
                    <li class="list-group-item active" aria-current="true">Your Link</li>
                    <li class="list-group-item" onclick="moving(0)">
                        <div id="maks">
                            <a>Sort_url <i style="font-size:30px" class="fa fa-caret-square-o-right"></i></a>
                        </div>
                    </li>
                    <li class="list-group-item" onclick="moving(1)">
                        <div id="maks">
                            <a>Sort_url2 <i style="font-size:30px" class="fa fa-caret-square-o-right"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div style="display: none;" id="m0">
                <div class="row jus">
                    <div class="col-md-7">
                        <div class="text-center">
                            <div id="judul">
                                <h1>title</h1>
                            </div>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-primary">
                                    <i style="font-size:30px" class="fas fa-plane-departure"></i></button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalsort">
                                    <span class="noselect">
                                        <i style="font-size:30px" class=" fas fa-edit"></i>
                                    </span>
                                    <div class="circle-s"></div>
                                </button>
                                <button type="button" class="btn btn-primary">
                                    <i style="font-size:30px" class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item responsive-iframe"
                                src="file:///home/suga/Documents/CODE/JS,FiBa,GP/Buka.in/index.html"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-12" id="graf">
                        <h1>grafig hins here</h1>
                    </div>
                </div>
                <button class="col-md-12 btn btn-secondary" onclick="lepas()">close</button>
            </div>
            <div style="display: none;" id="m1">
                <div class="row jus">
                    <div class="col-md-7">
                        <div class="text-center">
                            <div id="judul">
                                <h1>title</h1>
                            </div>
                            <div class="btn-group" role="group" aria-label="...">
                                <button type="button" class="btn btn-primary">
                                    <i style="font-size:30px" class="fas fa-plane-departure"></i></button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalsort">
                                    <span class="noselect">
                                        <i style="font-size:30px" class=" fas fa-edit"></i>
                                    </span>
                                    <div class="circle-s"></div>
                                </button>
                                <button type="button" class="btn btn-primary">
                                    <i style="font-size:30px" class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item responsive-iframe"
                                src="file:///home/suga/Documents/CODE/JS,FiBa,GP/Buka.in/index.html"
                                frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="col-md-12" id="graf">
                        <h1>grafig hins here</h1>
                    </div>
                </div>
                <button class="col-md-12 btn btn-secondary" onclick="lepas()">close</button>
            </div>
        </div>
    </div>

    <footer class="tutupan">

    </footer>

    <script src="/vendor/js/my.js"></script>
    <script src="/vendor/js/ajax.js"></script>
</body>

</html>
