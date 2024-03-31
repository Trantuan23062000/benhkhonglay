@extends('layout.admin')
@section('content')
    <div>
        <h4>{{ $ttyte->TEN_TRUNG_TAM_Y_TE }}</h4>
    </div>
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Xem danh sách 
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <div class="row">
                @foreach ($tramyte as $item)
                <div class="col-md-3">
                   
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->TEN_TRAM_Y_TE }}</h5>
                            <a href="" class="btn btn-primary">Truy cập vào</a>
                        </div>
                  
                </div>
                @endforeach
            </div>

        </div>

    </div>


@stop
