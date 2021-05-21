<!doctype html>
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

    <!-- login -->
    <link rel="stylesheet" href="/vendor/css/login.css">

    <!-- Google Fonts Raleway -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
    <!-- Google Fonts Open sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body class="text-center">
    <form class="form-signin" method="POST" action="/user/myprofile">
    @csrf
        <h1 class="md-4 mu-logo logo-here4">BUKA.in</h1>
        <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
        <h1 class="h3 mb-3 font-weight-normal">Please Lengkapi Data</h1>


        <label for="inputTitle" class="sr-only">Judul Pintasmu</label>
        <input type="text" id="inputTitle" class="form-control" name="title" placeholder="Judul Pintas" required autofocus>

        <label for="inputTitle" class="sr-only">Tema</label>
        <input type="text" id="inputTitle" class="form-control" name="themes_id" placeholder="Pilih Tema" required autofocus>



        <label for="inputTitle" class="sr-only">Bio</label>
        <textarea type="text" id="inputTitle" class="form-control" name="bio" placeholder="Masukan Biodata" required autofocus></textarea>

        <button type="submit" class="btn btn-lg btn-light btn-block">Kirim</button>
    </form>
</body>

</html>
