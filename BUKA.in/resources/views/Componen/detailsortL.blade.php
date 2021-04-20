@foreach ($user as $key=>$link )
<div style="display: none;" id="m{{$key}}">
    <div class="row jus">
        <div class="col-md-7">
            <div class="text-center">
                <div id="judul">
                    <h1>{{$link->judul}}</h1>
                </div>
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{$link->judul}}" class="btn btn-primary">
                        <i style="font-size:30px" class="fas fa-plane-departure"></i></a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalsort">
                        <span class="noselect">
                            <i style="font-size:30px" class="fas fa-edit"></i>
                        </span>
                        <div class="circle-s"></div>
                    </button>
                    herher
                    <a href="?cekmysort=993&call={{$link->id}}" class="btn btn-primary">
                        <i style="font-size:30px" class="fa fa-trash"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item responsive-iframe"
                    src="{{$link->link}}" frameborder="0"></iframe>
            </div>
        </div>
        <div class="col-md-12" id="graf">
            <h1>grafig hins here</h1>
        </div>
    </div>
    <button class="col-md-12 btn btn-secondary" onclick="lepas()">close</button>
</div>

@endforeach
