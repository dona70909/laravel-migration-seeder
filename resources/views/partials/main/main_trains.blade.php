<section class="container-fluid">
    <div class="row  p-5">
        <div class="col-5">
            <ul class="list-unstyled d-flex flex-column align-items-center trains-wrapper-list">
                @foreach ($trains as $train)
                    @if ($loop->last)
                        <li class="p-3 d-flex align-items-baseline border-top-li border-bottom-li">
                            <div class="departure-box">
                                <h6>Partenza: 
                                    <strong>{{$train->orario_di_partenza}}</strong> 
                                    <i class="bi bi-arrow-right-short mx-2"></i> 
                                </h6>
                            </div>
                            <div class="arrival-box">
                                <h6>Arrivo:
                                    <strong >{{$train->orario_di_arrivo}}</strong>
                                </h6>
                            </div>
                        
                            <button class="train-info-btn mx-4 "> <a href="{{route("train-info", $train->id)}}">More info</a> </button>
                        </li>       
                    @else
                        
                    
                        <li class="p-3 d-flex align-items-baseline border-top-li">
                            <div class="departure-box">
                                <h6>Partenza: 
                                    <strong>{{$train->orario_di_partenza}}</strong> 
                                    <i class="bi bi-arrow-right-short mx-2"></i> 
                                </h6>
                            </div>
                            <div class="arrival-box">
                                <h6>Arrivo:
                                    <strong >{{$train->orario_di_arrivo}}</strong>
                                </h6>
                            </div>
                            <button class="train-info-btn mx-4 "> <a href="{{route("train-info", $train->id)}}">More info</a> </button>
                        </li>
                    @endif
                @endforeach 
            </ul>
        </div>

        {{-- pages --}}
        <div class="col-12 justify-content-center">
            {{$trains->links()}}
        </div>
    </div>
</section>


