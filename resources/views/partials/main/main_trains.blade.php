<section class="container-fluid">
    <div class="row p-5">
        <div class="col-12">
            <ul class="list-unstyled">
                @foreach ($trains as $train)
                    <li class="border-top p-3">
                        <h5>Partenza :{{$train->data_di_partenza}} - {{$train->stazione_di_partenza}}</h5>
                        <h5>Arrivo: {{$train->data_di_arrivo}} - {{$train->stazione_di_arrivo}}</h5>
                    </li>
                @endforeach 
            </ul>
        </div>
    </div>
</section>