<div class="card" style="width: 18rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5>Partenza: <strong class="text-uppercase">{{$train->data_di_partenza}} - {{$train->stazione_di_partenza}}</strong></h5>
        <h5>Arrivo: <strong class="text-uppercase">{{$train->data_di_arrivo}} - {{$train->stazione_di_arrivo}}</strong></h5>
        <h4 class="text-uppercase">{{$train->azienda}}</h4>
    </div>
</div>