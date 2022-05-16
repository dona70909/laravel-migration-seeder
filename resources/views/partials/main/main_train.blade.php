<section class="container-fluid">
    <div class="row m-4 py-3 border justify-content-center train-card-wrapper">
        <div class="col-5 text-center">
            <h5>Partenza</h5>
            <h6>{{$train->data_di_partenza}}</h6>
            
            <h5><strong class="text-uppercase">{{$train->stazione_di_partenza}}</strong></h5>
            <h5><strong>{{$train->orario_di_partenza}}</strong> </h5>
            
        </div>
        <i class="col-1  bi bi-arrow-right-short mx-2"></i> 
        <div class="col-5 text-center mb-2">
            <h5>Arrivo</h5>
            <h6>{{$train->data_di_arrivo}}</h6>
            <h5><strong class="text-uppercase"> {{$train->stazione_di_arrivo}}</strong></h5>
            <h5><strong>{{$train->orario_di_arrivo}}</strong> </h5>
        </div>
        <div class="col-4 text-center logo-azienda">
            <h5 class="text-uppercase">{{$train->azienda}}</h5>
        </div>
    </div>
</section>