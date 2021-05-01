<div class="mails row">
    <div class="card col-md-9 col-sm-12" id="pancar"></div>
    <div id="casing" class="col-md-12 col-sm-12 doc">
        <ul class="list-group col-sm-12 text-center">
            <li class="list-group-item active" aria-current="true">Your Link</li>
            @foreach ($data->sort_link as $key=>$link )
            <li class="list-group-item" onclick="moving({{$key}})">
                <div id="maks">
                    <a>{{$link->keyword}}<i style="font-size:30px;" class="fa fa-caret-square-o-right"></i></a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@include("Componen.detailsortL")
