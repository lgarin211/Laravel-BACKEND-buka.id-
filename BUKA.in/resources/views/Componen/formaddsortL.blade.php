<div class="row container coa">
    <div class="col-md-6" id="divmodalsort">
        <iframe src="" frameborder="0" id="modalsort21" class="col-md-12" height="100%" width="100%"></iframe>
    </div>
    <div class="" id="inputsection">
        <form action="" method="POST">
            @csrf
            <div>
                <label for="basic-url1" class="form-label">Link Yang Kamu Tuju</label>
                <div class="input-group mb-3">
                    <input oninput="cps()" type="text" class="form-control" name="link" id="basic-url1" aria-describedby="basic-addon3">
                </div>
            </div>
            <div id="judul_div">
                <label for="basic-url1" class="form-label">Judul Link Kamu</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="judul" id="judul" aria-describedby="basic-addon3">
                </div>
            </div>
            <div id="sort_url_div">
                <label for="basic-url1" class="form-label">buka.in</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" oninput="cekmysort()" id="sort_url" aria-describedby="basic-addon3">
                    <small id="know"></small>
                </div>
            </div>
            <div id='sub' style="display: none; margin-bottom: 2px;">
                <button type="submit" class="form-control btn btn-primary">buat</button>
            </div>
        </form>
    </div>
</div>
