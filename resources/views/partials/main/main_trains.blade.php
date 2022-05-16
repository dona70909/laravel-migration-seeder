<section class="container-fluid">
    <div class="row p-5">
        <div class="col-6">
            <ul class="list-unstyled">
                @foreach ($trains as $train)
                    <li class="border-top p-3 d-flex ">
                        <div class="departure-box">
                            <h6>Partenza: <strong>{{$train->stazione_di_partenza}}</strong> <i class="bi bi-arrow-right-short mx-2"></i> </h6>
                        </div>
                        <div class="arrival-box">
                            <h6>Arrivo: <strong >{{$train->stazione_di_arrivo}}</strong></h6>
                        </div>
                    </li>
                @endforeach 
            </ul>
        </div>
        <div class="col-12">
            {{$trains->links()}}
        </div>
    </div>
</section>


{{--      <h5>Partenza: <strong class="text-uppercase">{{$train->data_di_partenza}} - {{$train->stazione_di_partenza}}</strong></h5>
                        <h5>Arrivo: <strong class="text-uppercase">{{$train->data_di_arrivo}} - {{$train->stazione_di_arrivo}}</strong></h5>
                        <h4 class="text-uppercase">{{$train->azienda}}</h4> --}}