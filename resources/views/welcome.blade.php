@extends('plantilla')

@section('seccion')
<nav>
    <div class="row">
        <div class="col-12 ">
            <div class="row d-flex">
                <div class="col-10">
                    icono
                </div>
                <div class="col-2">
                    seccion
                </div>
            </div>
           
        </div>
    </div>
</nav>
@foreach ( $texts as $txt)
<h1>{{$txt->txt_header}}</h1>

@endforeach

@endsection