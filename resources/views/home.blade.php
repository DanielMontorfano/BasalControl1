@extends('adminlte::page')

@section('css')
<style>
    h1{
    background: -webkit-linear-gradient(yellow,red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: tomato;  
    }
  .card{
       border:none;
       /*width:400px; */
       border-radius:15px;
       color:rgb(237, 30, 30);
       background-image: linear-gradient(to right top, #30141e6f, #0b0a0b, #21080358, #1d181a, #1e191b);
   }
  
   .card-img-top {
      width: 100%;
      height: 12vw;
      /*color:rgb(212, 41, 41);*/
      object-fit:  fill /*cover*/;
  }
  
  </style>
@stop

@section('content_header')
<h1 align='center'>BasalControl</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
            <div class="col col-md-3">
              {{-- Columna 1 --}}
              <div class="card  " >
                <div class="card-body" align='center'>
                    <img src={{asset('img\imagenes\CentrifugaSilver2.png')}}  class="card-img-top" alt="...">
                    <p>Principal</p>
                    <a href="{{route('personas.index')}}" class="btn stretched-link"></a> 
                    {{-- <a href="#" class="btn stretched-link"></a> --}}
                  </div>
                </div>
            </div>
             
            <div class="col col-md-3">
              {{-- Columna 1 --}}
              <div class="card  " >
                <div class="card-body" align='center'>
                    <img src={{asset('img\imagenes\CentrifugaSilver2.png')}}  class="card-img-top" alt="...">
                    <p>Ingreso</p>
                    <a href="{{route('fichas.create')}}" class="btn stretched-link"></a> 
                    {{-- <a href="#" class="btn stretched-link"></a> --}}
                  </div>
                </div>
            </div>

            <div class="col col-md-3">
              {{-- Columna 1 --}}
              <div class="card  " >
                <div class="card-body" align='center'>
                    <img src={{asset('img\imagenes\CentrifugaSilver2.png')}}  class="card-img-top" alt="...">
                    <p>Salida</p>
                   
                   {{--  <a href="{{route('fichas.update')}}" class="btn stretched-link"></a>  --}}
                    {{-- <a href="#" class="btn stretched-link"></a> --}}
                  </div>
                </div>
            </div>


     </div>
</div> {{-- Fin contenedor --}}            
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop