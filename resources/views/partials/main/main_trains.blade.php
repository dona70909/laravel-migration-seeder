<section class="container-fluid">
    <div class="row p-5">
        <div class="col-6">
            <ul class="list-unstyled">
                @foreach ($trains as $train)
                    <li class="border-top p-3 d-flex ">
                        <div class="departure-box">
                            <h6>Partenza: 
                                <strong>{{$train->stazione_di_partenza}}</strong> 
                                <i class="bi bi-arrow-right-short mx-2"></i> 
                            </h6>
                        </div>
                        <div class="arrival-box">
                            <h6>Arrivo:
                                <strong >{{$train->stazione_di_arrivo}}</strong>
                            </h6>
                        </div>

                        <button> <a href="{{route("train-info", $train->id)}}">More info</a> </button>
                    </li>
                @endforeach 
            </ul>
        </div>
        <div class="col-12">
            {{$trains->links()}}
        </div>
    </div>
</section>


