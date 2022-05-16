<section class="container-fluid">
    <div class="row p-5">
        <div class="col-12">
            <ul class="list-unstyled">
                @foreach ($trains as $train)
                    <li class="border-top p-3">
                        <h5>Partenza: <strong class="text-uppercase">{{$train->data_di_partenza}} - {{$train->stazione_di_partenza}}</strong></h5>
                        <h5>Arrivo: <strong class="text-uppercase">{{$train->data_di_arrivo}} - {{$train->stazione_di_arrivo}}</strong></h5>
                        <h4 class="text-uppercase">{{$train->azienda}}</h4>
                    </li>
                @endforeach 
            </ul>
        </div>
        <div class="col-12">
            {{$trains->links()}}
        </div>
    </div>
</section>