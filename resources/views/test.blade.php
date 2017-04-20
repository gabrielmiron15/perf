@extends('layouts.perf')
@section('title')
   e test aici
@endsection

@section('content')

    <div class="container container-min container-custom content">
        <div class="row">
            <div class="text-header col-sm-12 col-xs-12">
                <p class="bine_ai_venit">Bine ai venit pe</p>
                <p class="header_perf_text">PerF</p>
                <p>{{$info['response']}}</p>
            </div>

        </div>
    </div>
@endsection
