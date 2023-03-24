@extends('adminlte::page')
@section('title', 'Crear')


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>edit personas</p>

    <div class="container"> {{-- container principal --}}
      <h1>{{$id}}</h1>
        <div class="row"> {{-- row principal --}}
                    <div class="col col-md-2">
                        {{-- columna1 --}}
                    </div>
    
                    <div class="col col-md-8">
                        {{-- columna2 --}}
                        
                        <form id="nuevaPersona"  action="{{route('personas.store')}}" method="POST" class="form-horizontal" STYLE="background: linear-gradient(to right,#495c5c,#030007);">
                            
                           
                            @csrf  {{-- Envía un token de seguridad. Siempre se debe poner!!! sino no funca --}}
                        
                          
                            <div class="p-3 mb-2  text-white">
                            <div class="container">
                                 
                                <div class="row"> {{-- ***** div de la primera fila --}}
                                  <div class="col col-md-8">
                                    <div class="form-group">
                                      <input type="hidden" name="ingreso" value="En planta" readonly >
                                      <input type="hidden" name="nuevoId" value="{{$id}}" readonly >
                                      <label class="control-label" for="nyapellido">Nombre y apellido:</label> 
                                      <input autocomplete="off" class="form-control" STYLE="color: #f2baa2; font-family: Times New Roman;  font-size: 18px; background: linear-gradient(to right,#030007, #495c5c);" type="text" name="nyapellido" value={{old('nyapellido')}}> 
                                      @error('nyapellido')
                                      <small>*{{$message}}</small>
                                      @enderror
                                    </div>
                                  </div> 
                                  <div class="col col-md-4">
                                    <div class="form-group">
                                      <label class="control-label" for="dni">DNI:</label> 
                                      <input autocomplete="off" class="form-control" STYLE="color: #f2baa2; font-family: Times New Roman;  font-size: 18px; background: linear-gradient(to right,#030007, #495c5c);"  type="text" name="dni" value={{old('dni')}}> 
                                      @error('dni')
                                     <small>*{{$message}}</small>
                                      @enderror
                                    </div>
                                  </div> 
                                  
                                
                                  <table class="table">
                                    <h5>Ultimos repuestos creados:</h5>
                                    
                                   
                                    <tbody>
                                      @foreach ($personas as $persona)
                                      <tr>
                                        <td class="col-10">{{ $persona->nyapellido }}</td>
                                        <td class="col-2">{{ $persona->dni}}</td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                               
                               
                                <br>
                                <br>
                               <div class="form-group">
                                <button form="nuevaPersona" class="btn btn-primary" type="submit" STYLE="background: linear-gradient(to right,#495c5c,#030007);">Enviar</button>
                                <p style="text-align: right;"><a  class="text-white " href={{route('personas.index')}}>Siguiente</a></p> 
                              </div>
                                

                              <div class="form-group">
                                {{-- Boton no visible --}}
                                <button form="nuevoRepuesto" class="btn btn-primary" type="submit" STYLE="display: none; background: linear-gradient(to right,#495c5c,#030007);">Enviar</button> 
                              </div>

    
                            </div>{{-- div del container dentro de columna 2 --}}    
                            </div>{{-- div del Letra blanca --}}
                        </form>
                        </div>
                    <div class="col col-md-2">
                        {{-- columna 3 --}}
                    </div>
        </div>  {{-- div del row1 Principal --}}
    </div> {{-- div del container Principal--}}
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop